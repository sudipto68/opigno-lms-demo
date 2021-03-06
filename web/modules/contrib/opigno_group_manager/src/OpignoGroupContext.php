<?php

namespace Drupal\opigno_group_manager;

use Drupal\Core\Cache\Cache;

// TODO: Not sure the learning path ID is very useful... Maybe can be removed.
/**
 * This class manage the context when a user enters or exits a Learning Path.
 */
final class OpignoGroupContext {
  /**
   * The $_SESSION key for storing the last group NID that the user visited.
   */
  const GROUP_ID = 'group_id';
  const CURRENT_CONTENT_ID = 'current_content_id';
  const ACTIVITY_LINK_TYPE = 'activity_link_type';

  /**
   * Start session for anonymous.
   */
  protected static function ensureSession() {
    if (\Drupal::currentUser()->isAnonymous()
      && !isset($_SESSION['session_started'])) {
      $_SESSION['session_started'] = TRUE;
      \Drupal::service('session_manager')->start();
    }
  }

  /**
   * Get the group ID. Can be empty.
   *
   * @return int
   *   The group context NID.
   */
  public static function getCurrentGroupId() {
    static::ensureSession();

    $group = \Drupal::routeMatch()->getParameter('group');
    if (!empty($group)) {
      if (is_object($group)) {
        return $group->id();
      }
      else {
        return $group;
      }
    }

    /* @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')
      ->get('opigno_group_manager');
    return $store->get(self::GROUP_ID);
  }

  /**
   * Get the group current Content ID (cid).
   *
   * @return int
   *   The Content ID. Can be empty.
   */
  public static function getCurrentGroupContentId() {
    static::ensureSession();

    /* @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')
      ->get('opigno_group_manager');
    return $store->get(self::CURRENT_CONTENT_ID);
  }

  /**
   * Gets the context activity answer link type.
   *
   * @return string | NULL
   *   Context activity link type. Can be empty.
   */
  public static function getActivityLinkType() {
    static::ensureSession();

    /* @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')->get('opigno_group_manager');
    return $store->get(self::ACTIVITY_LINK_TYPE);
  }

  /**
   * Set the context Group ID.
   *
   * @param int $group_id
   *   Group ID.
   *
   * @throws \Drupal\Core\TempStore\TempStoreException
   */
  public static function setGroupId($group_id) {
    static::ensureSession();

    /** @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')
      ->get('opigno_group_manager');
    $store->set(self::GROUP_ID, $group_id);
  }

  /**
   * Set the context Learning Path Content ID.
   *
   * This method will refresh the local actions as well.
   *
   * @param int $current_content_id
   *   Content ID.
   *
   * @throws \Drupal\Core\TempStore\TempStoreException
   */
  public static function setCurrentContentId($current_content_id) {
    static::ensureSession();

    /** @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')
      ->get('opigno_group_manager');
    if ($store->get(self::CURRENT_CONTENT_ID) != $current_content_id) {
      $store->set(self::CURRENT_CONTENT_ID, $current_content_id);
      self::rebuildActions();
    }
  }

  /**
   * Sets the context activity answer link type.
   *
   * @param string $activity_link_type
   *   Type of activity link.
   *
   * @throws \Drupal\Core\TempStore\TempStoreException
   */
  public static function setActivityLinkType($activity_link_type) {
    static::ensureSession();

    /** @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')->get('opigno_group_manager');
    $store->set(self::ACTIVITY_LINK_TYPE, $activity_link_type);
  }

  /**
   * Remove all the context variables.
   *
   * Refresh the local actions as well.
   */
  public static function removeContext() {
    static::ensureSession();

    /** @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')
      ->get('opigno_group_manager');
    $store->delete(self::GROUP_ID);
    $store->delete(self::CURRENT_CONTENT_ID);
    $store->delete(self::ACTIVITY_LINK_TYPE);
    self::rebuildActions();
  }

  /**
   * Removes the context activity answer link type.
   *
   * Refresh the local actions as well.
   */
  public static function removeActivityLinkType() {
    static::ensureSession();

    /** @var \Drupal\Core\TempStore\PrivateTempStore $store */
    $store = \Drupal::service('tempstore.private')->get('opigno_group_manager');
    $store->delete(self::ACTIVITY_LINK_TYPE);
    self::rebuildActions();
  }

  /**
   * Refresh the local actions.
   */
  public static function rebuildActions() {
    // @todo: this should be a global cache context if neceessary.
    $bins = Cache::getBins();
    $bins['render']->invalidateAll();
  }

}
