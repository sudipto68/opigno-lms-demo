<?php

namespace Drupal\opigno_social\Controller;

use Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException;
use Drupal\Component\Plugin\Exception\PluginNotFoundException;
use Drupal\Core\Ajax\AfterCommand;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AppendCommand;
use Drupal\Core\Ajax\BeforeCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Ajax\PrependCommand;
use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Ajax\RemoveCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\EnforcedResponseException;
use Drupal\Core\Form\FormAjaxException;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormState;
use Drupal\Core\GeneratedUrl;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Routing\AccessAwareRouterInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\opigno_like\Services\OpignoLikeManager;
use Drupal\opigno_social\Entity\OpignoPostInterface;
use Drupal\opigno_social\Form\CreateSharePostForm;
use Drupal\opigno_social\Services\OpignoPostsManager;
use Drupal\views\Ajax\ScrollTopCommand;
use Drupal\views\Views;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Opigno posts/comments controller.
 *
 * @package Drupal\opigno_social\Controller
 */
class PostsController extends ControllerBase {

  use StringTranslationTrait;

  /**
   * The posts/comment manager service.
   *
   * @var \Drupal\opigno_social\Services\OpignoPostsManager
   */
  protected $postsManager;

  /**
   * The posts/comments storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface|null
   */
  protected $storage = NULL;

  /**
   * The posts/comments view builder service.
   *
   * @var \Drupal\Core\Entity\EntityViewBuilderInterface
   */
  protected $viewBuilder;

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * The Opigno like entity manager service.
   *
   * @var \Drupal\opigno_like\Services\OpignoLikeManager
   */
  protected $likeManager;

  /**
   * The current route name.
   *
   * @var string|null
   */
  protected $currentRoute;

  /**
   * The route access service.
   *
   * @var \Drupal\Core\Routing\AccessAwareRouterInterface
   */
  protected $router;

  /**
   * PostsController constructor.
   *
   * @param \Drupal\opigno_social\Services\OpignoPostsManager $posts_manager
   *   The posts/comment manager service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer service.
   * @param \Drupal\opigno_like\Services\OpignoLikeManager $like_manager
   *   The Opigno like entity manager service.
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder service.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match service.
   * @param \Drupal\Core\Routing\AccessAwareRouterInterface $router
   *   The route access service.
   */
  public function __construct(
    OpignoPostsManager $posts_manager,
    EntityTypeManagerInterface $entity_type_manager,
    RendererInterface $renderer,
    OpignoLikeManager $like_manager,
    FormBuilderInterface $form_builder,
    RouteMatchInterface $route_match,
    AccessAwareRouterInterface $router
  ) {
    $this->postsManager = $posts_manager;
    $this->viewBuilder = $entity_type_manager->getViewBuilder('opigno_post');
    $this->renderer = $renderer;
    $this->likeManager = $like_manager;
    $this->formBuilder = $form_builder;
    $this->currentRoute = $route_match->getRouteName();
    $this->router = $router;

    try {
      $this->storage = $entity_type_manager->getStorage('opigno_post');
    }
    catch (PluginNotFoundException | InvalidPluginDefinitionException $e) {
      watchdog_exception('opigno_social_exception', $e);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('opigno_posts.manager'),
      $container->get('entity_type.manager'),
      $container->get('renderer'),
      $container->get('opigno_like.manager'),
      $container->get('form_builder'),
      $container->get('current_route_match'),
      $container->get('router')
    );
  }

  /**
   * Get the post comment form.
   *
   * @param int $pid
   *   The post entity ID.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function getCommentForm(int $pid): AjaxResponse {
    $form = $this->postsManager->getCommentForm($pid);
    if (!$form) {
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    // Close all opened forms; render the comment form for the selected post.
    $response->addCommand(new HtmlCommand('.opigno-comments-placeholder', ''));
    $response->addCommand(new AppendCommand("#opigno-comments-placeholder-$pid", $form));
    // Make all comment form links active, disable only for the current post
    // to prevent comments overriding.
    $response->addCommand(new CssCommand(".comment-item__actions--comment", ['pointer-events' => '']));
    $response->addCommand(new CssCommand("#opigno-show-comment-form-$pid", ['pointer-events' => 'none']));
    $response->addAttachments($form['#attached']);

    return $response;
  }

  /**
   * Hide the post comments.
   *
   * @param int $pid
   *   The post entity ID.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function hidePostComments(int $pid): AjaxResponse {
    // Unset the lost of viewing comments.
    $this->postsManager->setUserViewingComments([]);
    $response = new AjaxResponse();

    // Hide the post comments section.
    $response->addCommand(new HtmlCommand("#opigno-comments-placeholder-$pid", ''));
    $comments_link = $this->postsManager->getCommentsLink($pid);
    $response->addCommand(new ReplaceCommand("#opigno-comments-amount-link-$pid", $comments_link));
    $response->addCommand(new CssCommand("#opigno-post-$pid .comment-item__actions--comment", ['pointer-events' => '']));

    return $response;
  }

  /**
   * Comment the post with the given ID.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   * @param int $pid
   *   The post entity ID.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function createComment(Request $request, int $pid): AjaxResponse {
    if (!$this->storage instanceof EntityStorageInterface) {
      return new AjaxResponse(NULL, 400);
    }

    $text = trim($request->get('text'));
    $post = $this->storage->load($pid);
    if (!$post instanceof OpignoPostInterface || !$text || !$post->access('view')) {
      return new AjaxResponse(NULL, 400);
    }

    $comment = $this->storage->create([
      'text' => $text,
      'parent' => $pid,
    ]);

    try {
      $comment->save();
    }
    catch (EntityStorageException $e) {
      watchdog_exception('opigno_social_exception', $e);
      return new AjaxResponse(NULL, 400);
    }

    // Invalidate an appropriate cache tags.
    $tags = array_merge($post->getCacheTagsToInvalidate(), [OpignoPostsManager::OPIGNO_POST_COMMENTS_CACHE_PREFIX . $pid]);
    Cache::invalidateTags($tags);

    if (!$comment instanceof OpignoPostInterface) {
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    $response->addCommand(new InvokeCommand("#opigno-comment-text-$pid", 'val', ['']));
    $content = $this->viewBuilder->view($comment);
    $response->addCommand(new PrependCommand("#opigno-post-$pid .comment-item__comment--list:first", $content));
    $comments_link = $this->postsManager->getCommentsLink($pid);
    $response->addCommand(new ReplaceCommand("#opigno-comments-amount-link-$pid", $comments_link));

    return $response;
  }

  /**
   * Get the post comments block.
   *
   * @param int $pid
   *   The post ID to get comments for.
   * @param int $amount
   *   The number of comments to be gotten.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function getPostComments(int $pid, int $amount): AjaxResponse {
    $post = $this->postsManager->loadPost($pid);
    if (!$post instanceof OpignoPostInterface || !$post->access('view')) {
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    // Set post comments to user data to avoid troubles with displaying in case
    // when the new comment was added while user is vieweing the post feed.
    $current_feed = $this->postsManager->getPostComments($pid);
    $this->postsManager->setUserViewingComments($current_feed);

    // Close all opened forms, display the post comments section, update the
    // comments link.
    $response->addCommand(new HtmlCommand('.opigno-comments-placeholder', ''));
    $comments = $this->postsManager->renderPostComments($pid, $amount);
    $response->addCommand(new HtmlCommand("#opigno-comments-placeholder-$pid", $comments));
    $comments_link = $this->postsManager->getCommentsLink($pid);
    $response->addCommand(new ReplaceCommand("#opigno-comments-amount-link-$pid", $comments_link));
    // Make all comment form links active, disable only for the current post
    // to prevent comments overriding.
    $response->addCommand(new CssCommand(".comment-item__actions--comment", ['pointer-events' => '']));
    $response->addCommand(new CssCommand("#opigno-comments-amount-link-$pid", ['pointer-events' => 'none']));

    return $response;
  }

  /**
   * Load more post comments.
   *
   * @param int $pid
   *   The post ID to get comments for.
   * @param int $from
   *   The index of the comment to load more.
   * @param int $amount
   *   The number of comments to load.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function loadMoreComments(int $pid, int $from, int $amount): AjaxResponse {
    if (!$pid || !$amount) {
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    $comment_ids = $this->postsManager->getUserViewingComments($from, $amount) ?: $this->postsManager->getPostComments($pid, $amount, $from);
    if (!$comment_ids) {
      return new AjaxResponse(NULL, 400);
    }

    // Add new comments to the wrapper.
    $comments = $this->postsManager->loadPost($comment_ids);
    foreach ($comments as $comment) {
      if ($comment instanceof OpignoPostInterface) {
        $item = $this->viewBuilder->view($comment);
        $response->addCommand(new AppendCommand("#opigno-comments-placeholder-$pid .opigno-comment:last", $item));
      }
    }
    // Update the "Load more" link.
    $more_link = $this->postsManager->loadMoreCommentsLink($pid, $amount, $from + $amount);
    $response->addCommand(new ReplaceCommand("#opigno-comments-load-more-link-$pid", $more_link));

    return $response;
  }

  /**
   * Delete the post/comment with all its likes and comments.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request object.
   * @param int $pid
   *   The post ID to be deleted.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function deletePost(Request $request, int $pid): AjaxResponse {
    $post = $this->postsManager->loadPost($pid);
    if (!$post instanceof OpignoPostInterface || !$post->access('delete')) {
      return new AjaxResponse(NULL, 400);
    }

    $is_post_page = $this->isPostViewPage($request);
    try {
      $post->delete();
    }
    catch (EntityStorageException $e) {
      watchdog_exception('opigno_social_exception', $e);
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    // Remove the post/comment wrapper.
    $response->addCommand(new RemoveCommand("#opigno-post-$pid"));

    // Update comments amount link on the comment removal.
    if ($post->isComment()) {
      $parent = $post->getParentId();
      $comments_link = $this->postsManager->getCommentsLink($parent);
      $response->addCommand(new ReplaceCommand("#opigno-comments-amount-link-$parent", $comments_link));
      return $response;
    }

    // Redirect to the homepage if the post was removed from the view page.
    if ($is_post_page) {
      $url = Url::fromRoute('<front>')->toString();
      $url = $url instanceof GeneratedUrl ? $url->getGeneratedUrl() : $url;
      $response->addCommand(new RedirectCommand($url));
    }

    return $response;
  }

  /**
   * Hide the given post for the user.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request object.
   * @param int $pid
   *   The post ID to be hidden.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function hidePost(Request $request, int $pid): AjaxResponse {
    $post = $this->postsManager->loadPost($pid);
    if (!$post instanceof OpignoPostInterface || $post->isComment()) {
      return new AjaxResponse(NULL, 400);
    }

    $hidden = $this->postsManager->getPinnedHiddenPosts(FALSE);
    // Do nothing if the post is already hidden.
    if (in_array($pid, $hidden)) {
      return new AjaxResponse(NULL, 400);
    }

    $hidden[$pid] = $pid;
    $this->postsManager->setPinnedHiddenPosts($hidden, FALSE);
    $response = new AjaxResponse();
    // Redirect to the homepage if the post was hidden from the view page,
    // otherwise remove from the list.
    if ($this->isPostViewPage($request)) {
      $url = Url::fromRoute('<front>')->toString();
      $url = $url instanceof GeneratedUrl ? $url->getGeneratedUrl() : $url;
      $response->addCommand(new RedirectCommand($url));
    }
    else {
      $response->addCommand(new RemoveCommand("#opigno-post-$pid"));
    }

    // Invalidate an appropriate cache tags and update the last viewed post ID
    // if needed.
    Cache::invalidateTags($post->getCacheTagsToInvalidate());
    if ($pid === $this->postsManager->getLastViewedPostId()) {
      $this->postsManager->setLastViewedPostId();
    }

    return $response;
  }

  /**
   * Pin/unpin the given post for the user.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request object.
   * @param int $pid
   *   The post ID to be pinned/unpinned.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function pinPost(Request $request, int $pid): AjaxResponse {
    $post = $this->postsManager->loadPost($pid);
    if (!$post instanceof OpignoPostInterface || $post->isComment()) {
      return new AjaxResponse(NULL, 400);
    }

    // Invalidate an appropriate cache tags.
    Cache::invalidateTags($post->getCacheTagsToInvalidate());
    $response = new AjaxResponse();
    $pinned = $this->postsManager->getPinnedHiddenPosts();

    // Unpin if the post is already pinned.
    if (in_array($pid, $pinned)) {
      unset($pinned[$pid]);
      $this->postsManager->setPinnedHiddenPosts($pinned);
      // Update the last viewed post ID if needed.
      if ($pid === $this->postsManager->getLastViewedPostId()) {
        $this->postsManager->setLastViewedPostId(0, TRUE);
      }
      // Remove the pin icon.
      $response->addCommand(new RemoveCommand("#opigno-post-$pid .pinned-post"));
      $response->addCommand(new InvokeCommand("#opigno-post-$pid .post-action-pin", 'text', [$this->t('Pin')->render()]));

      return $response;
    }

    $pinned[$pid] = $pid;
    $this->postsManager->setPinnedHiddenPosts($pinned);
    // Update the last viewed post ID if needed.
    if ($pid === $this->postsManager->getLastViewedPostId()) {
      $this->postsManager->setLastViewedPostId(0, TRUE);
    }
    // Move the post to the top of the feed if it was pinned not form the post
    // view page, otherwise only add the pin icon and text.
    if (!$this->isPostViewPage($request)) {
      $response->addCommand(new RemoveCommand("#opigno-post-$pid"));
      $response->addCommand(new BeforeCommand('.opigno-pinned-post:first', $this->viewBuilder->view($post)));
    }
    else {
      $pin = [
        '#type' => 'html_tag',
        '#tag' => 'div',
        '#value' => Markup::create($this->t('pinned post', [], ['context' => 'Opigno social']) . '<i class="fi"></i>'),
        '#attributes' => [
          'class' => ['pinned-post'],
        ],
      ];
      $response->addCommand(new AppendCommand("#opigno-post-$pid .comment-item__user", $pin));
      $response->addCommand(new InvokeCommand("#opigno-post-$pid .post-action-pin", 'text', [$this->t('Unpin')->render()]));
    }

    return $response;
  }

  /**
   * Check if the current page is a single post page.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   *
   * @return bool
   *   If the current page is a single post page.
   */
  private function isPostViewPage(Request $request): bool {
    return $this->getMainRouteFromRequest($request) === 'entity.opigno_post.canonical';
  }

  /**
   * Get the route name from the request.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return string
   *   The current route name. For ajax requests will be returned the referer
   *   route name.
   */
  private function getMainRouteFromRequest(Request $request): string {
    // Get the referer page url for ajax route.
    if ($request->isXmlHttpRequest()) {
      $referer = $request->server->get('HTTP_REFERER');
      try {
        $route_info = $this->router->match($referer);

        return $route_info['_route'] ?? '';
      }
      catch (AccessDeniedHttpException $e) {
        watchdog_exception('opigno_social_exception', $e);
      }
    }

    return $this->currentRoute;
  }

  /**
   * Display the popup with the sharable post content (training/badge/cert).
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   * @param string $type
   *   The content type to be shared (training/badge/certificate).
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function getShareableContent(Request $request, string $type): AjaxResponse {
    $response = new AjaxResponse();
    // Add the general response attachments.
    $url = Url::fromRoute('opigno_social.share_post_content')->toString();
    $attachments = [
      'library' => ['opigno_social/post_sharing'],
      'drupalSettings' => [
        'opignoSocial' => [
          'shareContentUrl' => $url instanceof GeneratedUrl ? $url->getGeneratedUrl() : $url,
        ],
      ],
    ];

    switch ($type) {
      case 'training':
        $title = $this->t('Add training');
        $view = Views::getView('post_sharing_trainings')->executeDisplay('trainings');
        break;

      case 'certificate':
        $title = $this->t('Add certificate');
        $view = Views::getView('post_sharing_trainings')->executeDisplay('certificates');
        break;

      case 'badge':
        $title = $this->t('Add badge');
        $view = Views::getView('post_sharing_badges')->executeDisplay('badges');
        break;

      default:
        $response->setStatusCode(400);
        return $response;
    }

    $attachments = array_merge_recursive($view['#attached'], $attachments);
    $response->addAttachments($attachments);
    $replace = $request->get('replace', FALSE);
    // Replace the popup content with the view if an appropriate parameter is in
    // the query. This is used for the back link in the popup.
    if ($replace) {
      $close = $this->prepareBackClosePopupLink($type, TRUE);
      $response->addCommand(new ReplaceCommand('.modal-ajax .modal-header .close', $close));
      $response->addCommand(new RemoveCommand('.modal-ajax .modal-header .close-x'));
      $response->addCommand(new HtmlCommand('.modal-ajax .modal-title', $title));
      $response->addCommand(new HtmlCommand('.modal-ajax .modal-body', $view));

      return $response;
    }
    // Prepare the popup data.
    $build = [
      '#theme' => 'opigno_popup',
      '#title' => $title,
      '#body' => $view,
      '#is_ajax' => TRUE,
    ];

    $response->addCommand(new RemoveCommand('.modal-ajax'));
    $response->addCommand(new AppendCommand('body', $build));
    $response->addCommand(new InvokeCommand('.modal-ajax', 'modal', ['show']));

    return $response;
  }

  /**
   * Open the popup for the post content sharing (training/badge/certificate).
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function sharePostContent(Request $request): AjaxResponse {
    $type = $request->get('type', '');
    $id = (int) $request->get('id');
    $entity_type = $request->get('entity_type');
    $text = trim($request->get('text', ''));
    if (!$type || !$id || !$entity_type) {
      return new AjaxResponse(NULL, 400);
    }

    $response = new AjaxResponse();
    $form_state = new FormState();
    $form_state->addBuildInfo('args', [$type, $id, $entity_type, $text]);
    try {
      $form = $this->formBuilder->buildForm(CreateSharePostForm::class, $form_state);
    }
    catch (EnforcedResponseException | FormAjaxException $e) {
      watchdog_exception('opigno_social_exception', $e);
      return new AjaxResponse(NULL, 400);
    }

    // Prepare the back and the close popup links.
    // The case when the post is created from the home page.
    if ($this->getMainRouteFromRequest($request) === 'view.frontpage.page_1') {
      $back = $this->prepareBackClosePopupLink($type);
      $close = $this->prepareBackClosePopupLink($type, TRUE, 'cross-small');

      $response->addCommand(new ReplaceCommand('.modal-ajax .modal-header .close', $back));
      $response->addCommand(new AfterCommand('.modal-ajax .modal-header .close', $close));
      $response->addCommand(new HtmlCommand('.modal-ajax .modal-title', $this->t('Create a post')));
      $response->addCommand(new HtmlCommand('.modal-ajax .modal-body', $form));

      return $response;
    }

    // The case when the post is created not from the home page.
    $build = [
      '#theme' => 'opigno_popup',
      '#title' => $this->t('Create a post'),
      '#body' => $form,
      '#is_ajax' => TRUE,
    ];

    $response->addCommand(new RemoveCommand('.modal-ajax'));
    $response->addCommand(new AppendCommand('body', $build));
    $response->addCommand(new InvokeCommand('.modal-ajax', 'modal', ['show']));

    return $response;
  }

  /**
   * Prepare the render array for back and close popup links.
   *
   * @param string $type
   *   The attachment type (training/badge/certificate).
   * @param bool $close
   *   TRUE if the link should trigger the popup closing, FALSE to go back to
   *   the previous state of the modal.
   * @param string $icon
   *   The link icon.
   *
   * @return array
   *   The render array for back and close popup links.
   */
  private function prepareBackClosePopupLink(string $type, bool $close = FALSE, string $icon = 'arrow-left'): array {
    $title = Markup::create('<i class="fi fi-rr-' . $icon . '"></i>');
    $classes = ['use-ajax', 'close'];

    if ($icon === 'cross-small') {
      $classes[] = 'close-x';
    }

    $options = [
      'attributes' => [
        'class' => $classes,
        'type' => 'button',
        'data-dismiss' => 'modal',
        'aria-label' => $close ? $this->t('Close') : $this->t('Back'),
      ],
    ];

    if ($close) {
      $params = [];
      $route = 'opigno_learning_path.close_modal';
    }
    else {
      $route = 'opigno_social.get_shareable_content';
      $params = ['type' => $type];
      $options['query'] = ['replace' => TRUE];
    }

    return Link::createFromRoute($title, $route, $params, $options)->toRenderable();
  }

  /**
   * Create the post with the additional content (training/certificate/badge).
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function createPost(Request $request): AjaxResponse {
    $text = trim($request->get('text', ''));
    if (!$text || !$this->storage instanceof EntityStorageInterface) {
      return new AjaxResponse(NULL, 400);
    }

    // Create the base post entity.
    $post = $this->storage->create([
      'text' => $text,
    ]);

    if (!$post instanceof OpignoPostInterface) {
      return new AjaxResponse(NULL, 400);
    }

    // Add attachments if they exist in request.
    $type = $request->get('type', '');
    $id = (int) $request->get('id');
    $entity_type = $request->get('entity_type', '');
    $with_attachment = $type && $id && $entity_type;
    if ($with_attachment) {
      $post->setAttachmentEntityId($id);
      $post->setAttachmentType($type);
      $post->setAttachmentEntityType($entity_type);
    }

    try {
      $post->save();
    }
    catch (EntityStorageException $e) {
      watchdog_exception('opigno_social_exception', $e);
      return new AjaxResponse(NULL, 400);
    }

    // Add the post to the feed, clean the main form, close the popup if needed.
    $response = new AjaxResponse();
    if ($this->getMainRouteFromRequest($request) === 'view.frontpage.page_1') {
      $content = $this->viewBuilder->view($post);
      $response->addCommand(new AfterCommand('.opigno-pinned-post:last', $content));
      $response->addCommand(new InvokeCommand('#create-post-textfield', 'val', ['']));
    }

    if ($with_attachment) {
      $response->addCommand(new InvokeCommand('.modal', 'modal', ['hide']));
    }

    // Set the post as the last viewed if no other posts were added between the
    // last time when the user accessed the social wall and the post creation.
    if (!$this->postsManager->getNewPosts()) {
      $this->postsManager->setLastViewedPostId((int) $post->id());
    }

    return $response;
  }

  /**
   * Check if new posts were created after the last social wall access.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function checkNewPosts(): AjaxResponse {
    $posts = $this->postsManager->getNewPosts();
    return new AjaxResponse(['newPosts' => !empty($posts)]);
  }

  /**
   * Display posts that were created after the last social wall access.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   The response object.
   */
  public function displayNewPosts(): AjaxResponse {
    $posts = $this->postsManager->getNewPosts();
    if (!$posts || !$this->storage instanceof EntityStorageInterface) {
      return new AjaxResponse(NULL, 400);
    }

    // Display new posts after all pinned ones, hide the link and scroll top.
    $response = new AjaxResponse();
    $last_key = array_key_last($posts);
    foreach ($posts as $key => $id) {
      $post = $this->storage->load($id);
      if (!$post instanceof OpignoPostInterface) {
        continue;
      }
      $content = $this->viewBuilder->view($post);
      $response->addCommand(new AfterCommand('.opigno-pinned-post:last', $content));
      // Update the last viewed post ID.
      if ($key === $last_key) {
        $this->postsManager->setLastViewedPostId((int) $id);
      }
    }

    $response->addCommand(new InvokeCommand('.btn-new-post__wrapper', 'addClass', ['hidden']));
    $response->addCommand(new ScrollTopCommand('.opigno-pinned-post:last'));

    return $response;
  }

}
