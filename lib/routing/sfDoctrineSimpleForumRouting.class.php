<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class sfDoctrineSimpleForumRouting
{
  /**
   * Adds an sfDoctrineRouteCollection collection to manage forums.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForForumAdmin(sfEvent $event)
  {
    $event->getSubject()->prependRoute('forum_admin', new sfDoctrineRouteCollection(array(
      'name'                => 'forum_admin',
      'model'               => 'sfSimpleForumForum',
      'module'              => 'sfSimpleForumForumAdmin',
      'prefix_path'         => 'forum/forum',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage categories.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForCategoryAdmin(sfEvent $event)
  {
    $event->getSubject()->prependRoute('category_admin', new sfDoctrineRouteCollection(array(
      'name'                => 'category_admin',
      'model'               => 'sfSimpleForumCategory',
      'module'              => 'sfSimpleForumCategoryAdmin',
      'prefix_path'         => 'forum/category',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage posts.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForPostAdmin(sfEvent $event)
  {
    $event->getSubject()->prependRoute('post_admin', new sfDoctrineRouteCollection(array(
      'name'                => 'post_admin',
      'model'               => 'sfSimpleForumPost',
      'module'              => 'sfSimpleForumPostAdmin',
      'prefix_path'         => 'forum/post',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage posts.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForTopicAdmin(sfEvent $event)
  {
    $event->getSubject()->prependRoute('topic_admin', new sfDoctrineRouteCollection(array(
      'name'                => 'topic_admin',
      'model'               => 'sfSimpleForumTopic',
      'module'              => 'sfSimpleForumTopicAdmin',
      'prefix_path'         => 'forum/topic',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }

  /**
   * Adds an sfDoctrineRouteCollection collection to manage categories.
   *
   * @param sfEvent $event
   * @static
   */
  static public function addRouteForRankAdmin(sfEvent $event)
  {
    $event->getSubject()->prependRoute('rank_admin', new sfDoctrineRouteCollection(array(
      'name'                => 'rank_admin',
      'model'               => 'sfSimpleForumRank',
      'module'              => 'sfSimpleForumRankAdmin',
      'prefix_path'         => 'forum/rank',
      'with_wildcard_routes' => true,
      'collection_actions'  => array('filter' => 'post', 'batch' => 'post'),
      'requirements'        => array(),
    )));
  }
}
