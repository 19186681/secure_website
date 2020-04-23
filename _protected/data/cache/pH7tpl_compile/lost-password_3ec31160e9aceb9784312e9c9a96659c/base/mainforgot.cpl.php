<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 07:38:21
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/lost-password/views/base/tpl/main/forgot.tpl
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
?><div class="col-md-8"> <p><?php echo t('If you forgot your password, enter your account email address below and we will send<br /> you an email containing a special link that will help you create a new password.<br /> Make sure you enter the <em>same email address you use to sign in to your profile</em>.'); ?></p> <?php ForgotPasswordForm::display() ;?></div><div class="col-md-4 ad_336_280"> <?php $this->designModel->ad(336, 280) ?></div>