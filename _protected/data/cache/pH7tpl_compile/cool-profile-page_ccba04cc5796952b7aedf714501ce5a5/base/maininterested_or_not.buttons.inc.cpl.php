<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:41:52
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/cool-profile-page/views/base/tpl/main/interested_or_not.buttons.inc.tpl
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
?><?php if(!$is_own_profile) { ?> <div class="center"> <?php if($is_mail_enabled) { ?> <a class="s_tMarg btn btn-success btn-lg" rel="nofollow" href="<?php echo $mail_link; ?>"> <?php echo t('👍 Wanna Meet 😍'); ?> </a> <?php } elseif($is_im_enabled) { ?> <a class="s_tMarg btn btn-success btn-lg" rel="nofollow" href="<?php echo $messenger_link; ?>"> <?php echo t('👍 Wanna Speak 💬'); ?> </a> <?php } ?> <?php if($is_mail_enabled OR $is_im_enabled) { ?> <a class="s_tMarg btn btn-danger btn-lg" href="<?php $design->url('user', 'browse', 'index', '?country='.$country_code.'&sex='.$sex) ;?>"> <?php echo t(' 👎 Not Interested'); ?> </a> <?php } ?> </div><?php } ?>