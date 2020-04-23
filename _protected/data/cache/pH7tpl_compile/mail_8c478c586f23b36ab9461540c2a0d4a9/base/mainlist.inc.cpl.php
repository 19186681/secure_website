<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 22:13:40
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/mail/views/base/tpl/list.inc.tpl
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
?><?php if(empty($error)) { ?> <div class="middle"> <form method="post" action="<?php $design->url('mail','main','inbox') ;?>"> <?php $designSecurity->inputToken('mail_action') ;?> <?php $is_admin = ($is_admin_auth && !$is_user_auth) ;?> <?php $ctrl = ($is_admin) ? 'admin' : 'main' ;?> <?php if($is_admin) { ?><div class="divShow"><?php } ?> <?php foreach($msgs as $msg) { ?> <?php $usernameSender = (empty($msg->username)) ? PH7_ADMIN_USERNAME : $msg->username ;?> <?php $firstNameSender = (empty($msg->firstName)) ? PH7_ADMIN_USERNAME : $msg->firstName ;?> <?php $subject = escape(substr(Framework\Security\Ban\Ban::filterWord($msg->title, false),0,20), true) ;?> <?php $message = escape(Framework\Security\Ban\Ban::filterWord($msg->message), true) ;?> <?php $is_outbox = ($msg->sender == $member_id) ;?> <?php $is_trash = (($msg->sender == $member_id && $msg->trash == 'sender') || ($msg->recipient == $member_id && $msg->trash == 'recipient') && !$is_outbox && !$is_admin) ;?> <?php $slug_url = ($is_trash ? 'trash' : ($is_outbox ? 'outbox' : 'inbox')) ;?> <?php $is_delete = ($is_outbox || $is_trash || $is_admin) ;?> <?php $move_to = ($is_delete) ? 'delete' : 'trash' ;?> <?php $label_txt = ($is_delete) ? t('Delete') : t('Trash') ;?> <div class="msg_content" id="mail_<?php echo $msg->messageId ;?>"> <div class="left"> <input type="checkbox" name="action[]" value="<?php echo $msg->messageId ;?>" /> </div> <?php if($msg->status == MailModel::UNREAD_STATUS) { ?> <span class="label label-primary"><?php echo t('New'); ?></span> <?php } ?> <div class="user"><?php $avatarDesign->get($usernameSender, $firstNameSender, null, 32) ;?></div> <?php if($is_admin) { ?> <div class="content" title="<?php echo t('See more'); ?>"><a href="#divShow_<?php echo $msg->messageId ;?>"> <?php } else { ?> <div class="content" title="<?php echo t('See more'); ?>" onclick="window.location='<?php $design->url('mail','main',$slug_url,$msg->messageId) ;?>'"> <?php } ?> <div class="subject"><?php echo $subject; ?></div> <div class="message"><?php echo substr($message,0,50) ;?></div> <?php if($is_admin) { ?> </a> <?php } ?> </div> <div class="date italic small"><?php echo Framework\Date\Various::textTimeStamp($msg->sendDate) ;?></div> <?php if($is_admin) { ?> <div class="hidden center" id="divShow_<?php echo $msg->messageId ;?>"><?php echo $message; ?></div> <?php } ?> <div class="action"> <a href="<?php $design->url('mail','main','compose',"$usernameSender,$subject") ;?>"><?php echo t('Reply'); ?></a> | <a href="javascript:void(0)" onclick="mail('<?php echo $move_to; ?>',<?php echo $msg->messageId ;?>,'<?php echo $csrf_token; ?>')"><?php echo $label_txt; ?></a> <?php if($is_trash) { ?> | <a href="javascript:void(0)" onclick="mail('restore',<?php echo $msg->messageId ;?>,'<?php echo $csrf_token; ?>')"><?php echo t('Restore'); ?></a> <?php } ?> </div> </div> <?php } ?> <?php if($is_admin) { ?> </div> <?php } ?> <p> <input type="checkbox" name="all_action" /> <button class="btn btn-default btn-md" type="submit" onclick="return checkChecked()" formaction="<?php $design->url('mail',$ctrl,'set'.$move_to.'all') ;?>" ><?php echo $label_txt; ?> </button> <?php if($is_trash) { ?> | <button class="btn btn-default btn-md" type="submit" onclick="return checkChecked(false)" formaction="<?php $design->url('mail',$ctrl,'setrestoreall') ;?>"><?php echo t('Move to Inbox'); ?></button> <?php } ?> </p> </form> </div> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); } else { ?> <p class="center bold"><?php echo $error; ?></p><?php } ?>