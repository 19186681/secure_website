<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-21 11:07:42
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/forum/views/base/tpl/forum/topic.tpl
Template Engine: PH7Tpl version 1.4.0 by WebMaster
*/
/***************************************************************************
 *     MyCMS Web Engineer: WebMaster
 *               --------------------
 * @since      Mon Mar 21 2011
 * @author     WebMaster
 * @email      hello@secdating.atwebpages.com
 * @link       https://secdating.atwebpages.com
 * @copyright  (c) 2011-2020, WebMaster. All Rights Reserved.
 * @license    Creative Commons Attribution 3.0 License - http://creativecommons.org/licenses/by/3.0/
 ***************************************************************************/
?><div class="center"> <?php if(empty($error)) { ?> <?php foreach($topics as $topic) { ?> <?php $total_views = Framework\Mvc\Model\Statistic::getView($topic->topicId,DbTableName::FORUM_TOPIC) ;?> <?php $total_reply = (new ForumModel)->totalMessages($topic->topicId) ;?> <h3> <a href="<?php $design->url('forum', 'forum', 'post', "$topic->name,$topic->forumId,$topic->title,$topic->topicId") ;?>"> <?php echo escape(Framework\Security\Ban\Ban::filterWord($topic->title), true) ;?> </a> </h3> <p><?php echo substr(escape(Framework\Security\Ban\Ban::filterWord($topic->message), true), 0, 100) ;?> | <span class="small italic"><?php echo t('Reply: %0%', $total_reply); ?> | <?php echo t('Views: %0%', $total_views); ?></span></p> <?php } ?> <?php } else { ?> <p><?php echo $error; ?></p> <?php } ?> <p> <?php if(isset($forum_name,$forum_id)) { ?> <a class="btn btn-default btn-sm" rel="nofollow" href="<?php $design->url('forum', 'forum', 'addtopic', "$forum_name,$forum_id") ;?>"><?php echo t('Create a new Topic'); ?></a> <?php } else { ?> <a class="btn btn-default btn-sm" rel="nofollow" href="<?php $design->url('forum', 'forum', 'search') ;?>"><?php echo t('New Search'); ?></a> <?php } ?> </p> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); ?> <p> <a href="<?php $design->url('xml','rss','xmlrouter','forum-topic') ;?>"> <img src="<?php echo PH7_URL_STATIC . PH7_IMG?>icon/feed.svg" alt="RSS Feed" /> </a> </p></div>