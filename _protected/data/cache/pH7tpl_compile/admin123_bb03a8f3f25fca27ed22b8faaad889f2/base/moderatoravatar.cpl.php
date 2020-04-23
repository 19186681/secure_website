<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 08:27:59
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/moderator/avatar.tpl
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
?><?php if(!empty($avatars)) { ?> <ul> <?php foreach($avatars as $avatar) { ?> <?php $action = ($avatar->approvedAvatar == 1) ? 'disapprovedavatar' : 'approvedavatar' ;?> <div class="thumb_photo"> <?php $avatarDesign->lightBox($avatar->username, $avatar->firstName, $avatar->sex, 300) ;?> <p class="italic"><?php echo t('Posted by'); ?> <?php $design->getProfileLink($avatar->username) ;?></p> <div> <?php $text = ($avatar->approvedAvatar == 1) ? t('Disapproved') : t('Approved') ;?> <?php LinkCoreForm::display($text, PH7_ADMIN_MOD, 'moderator', $action, array('id'=>$avatar->profileId, 'username'=>$avatar->username)) ;?> | <?php LinkCoreForm::display(t('Delete'), PH7_ADMIN_MOD, 'moderator', 'deleteavatar', array('id'=>$avatar->profileId, 'username'=>$avatar->username)) ;?> </div> </div> <?php } ?> </ul> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); } else { ?> <p class="center"> <?php echo t('No Profile Photos found for the moderation treatment.'); ?> </p><?php } ?>