<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:40:53
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/forum/views/base/tpl/forum/showpostbyprofile.tpl
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
?><div class="center" id="forum_block"> <?php if(empty($error)) { ?> <p class="italic underline s_bMarg"> <strong><a href="<?php $design->url('forum','forum','showpostbyprofile',$username) ;?>"><?php echo $topic_number; ?></a></strong> </p> <?php foreach($topics as $topic) { ?> <h3> <a href="<?php $design->url('forum', 'forum', 'post', "$topic->name,$topic->forumId,$topic->title,$topic->topicId") ;?>"> <?php echo escape(Framework\Security\Ban\Ban::filterWord($topic->title), true) ;?> </a> </h3> <p><?php echo substr(escape(Framework\Security\Ban\Ban::filterWord($topic->message), true), 0, 100) ;?></p> <?php } ?> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); ?> <?php } else { ?> <p><?php echo $error; ?></p> <?php } ?></div>