<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 15:33:09
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/main/login.tpl
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
?><div class="col-md-8"> <p> <?php echo t('Not registered yet?'); ?><br /> <a class="underline" href="<?php $design->url('user','signup','step1') ;?>"> <strong><?php echo t('Join Us Today!'); ?></strong> </a> </p> <?php LoginForm::display() ;?> <p> <?php LostPwdDesignCore::link('user') ;?> <?php if(Framework\Mvc\Model\DbConfig::getSetting('userActivationType') == Registration::EMAIL_ACTIVATION) { ?> | <a rel="nofollow" href="<?php $design->url('user','main','resendactivation') ;?>"><?php echo t('Resend activation email'); ?></a> <?php } ?> </p></div><div class="col-md-4 ad_336_280"> <?php $this->designModel->ad(336, 280) ?></div>