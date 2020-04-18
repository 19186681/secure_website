<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:41:52
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/cool-profile-page/views/base/tpl/main/profile_links.inc.tpl
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
?><div class="row"> <?php if($is_im_enabled AND !$is_own_profile) { ?> <a class="vs_marg" rel="nofollow" href="<?php echo $messenger_link; ?>" title="<?php echo t('Chat'); ?>"> <i class="fa fa-comment-o chat"></i> </a> <?php } ?> <?php if($is_lovecalculator_enabled AND !$is_own_profile) { ?> <a class="vs_marg" href="<?php $design->url('love-calculator','main','index',$username) ;?>" title="<?php echo t('Match'); ?>"> <i class="fa fa-heart-o heart"></i> </a> <?php } ?></div><div class="row"> <?php if($is_mail_enabled AND !$is_own_profile) { ?> <a class="vs_marg" rel="nofollow" href="<?php echo $mail_link; ?>" title="<?php echo t('Send Message'); ?>"> <li class="fa fa-envelope-o message"></li> </a> <?php } ?> <?php if($is_friend_enabled AND !$is_own_profile) { ?> <a class="vs_marg" rel="nofollow" href="<?php echo $friend_link; ?>"> <?php if($is_approved_friend) { ?> <i class="fa fa-user-times friend"></i> <?php } elseif($is_pending_friend) { ?> <i class="fa fa-users friend"></i> <?php } else { ?> <i class="fa fa-user-plus friend"></i> <?php } ?> </a> <?php } ?></div>