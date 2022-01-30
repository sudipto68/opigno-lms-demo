<?php

namespace Drupal\opigno_social\Form;

use Drupal\Core\Access\CsrfTokenGenerator;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\GeneratedUrl;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Create a comment form.
 *
 * @package Drupal\opigno_social\Form
 */
class CreateCommentForm extends FormBase {

  /**
   * The CSRF token generator service.
   *
   * @var \Drupal\Core\Access\CsrfTokenGenerator
   */
  protected $csrfToken;

  /**
   * {@inheritdoc}
   */
  public function __construct(CsrfTokenGenerator $csrf_token) {
    $this->csrfToken = $csrf_token;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('csrf_token'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'opigno_create_comment_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, int $pid = 0) {
    if (!$pid) {
      return $form;
    }

    $form['#attributes']['class'] = [
      "opigno-create-comment-form-$pid",
      'comment-form',
    ];
    $form['#attached'] = [
      'library' => ['opigno_social/post_comment'],
    ];

    $form['text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Text'),
      '#title_display' => 'invisible',
      '#placeholder' => $this->t('Write a comment'),
      '#rows' => 3,
      '#cols' => 0,
      '#required' => TRUE,
      '#attributes' => [
        'id' => ["opigno-comment-text-$pid"],
        'class' => ['form-text'],
      ],
    ];

    // This form is built using the ajax. Default Drupal ajax submit doesn't
    // work well in such case. So there will be the custom ajax call.
    $url = Url::fromRoute('opigno_social.create_comment', ['pid' => $pid]);
    $internal = $url->getInternalPath();
    $url->setOption('query', ['token' => $this->csrfToken->get($internal)]);
    $url = $url->toString();

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Comment'),
      '#attributes' => [
        'class' => ['opigno-create-comment'],
        'data-opigno-post' => $pid,
        'data-ajax-url' => $url instanceof GeneratedUrl ? $url->getGeneratedUrl() : $url,
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // The form will be submitted with the custom ajax.
  }

}
