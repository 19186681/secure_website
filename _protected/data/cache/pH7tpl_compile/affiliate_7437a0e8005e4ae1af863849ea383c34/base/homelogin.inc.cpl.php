<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 21:46:51
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/affiliate/views/base/tpl/login.inc.tpl
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
?><div class="aff_login"> <h2><?php echo t('Sign In'); ?></h2> <?php LoginForm::display(300) ;?> <p class="small"> <?php LostPwdDesignCore::link('affiliate') ;?> <?php if(Framework\Mvc\Model\DbConfig::getSetting('affActivationType') == Registration::EMAIL_ACTIVATION) { ?> | <a rel="nofollow" href="<?php $design->url('affiliate','home','resendactivation') ;?>"><?php echo t('Resend activation email'); ?></a> <?php } ?> </p></div>