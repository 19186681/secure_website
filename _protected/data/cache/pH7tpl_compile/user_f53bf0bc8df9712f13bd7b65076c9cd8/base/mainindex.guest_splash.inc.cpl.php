<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 18:32:06
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/main/index.guest_splash.inc.tpl
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
?><?php if($is_bg_video) { ?> <?php $this->display($this->getCurrentController() . PH7_DS . 'splash_video_background.inc.tpl', $this->registry->path_module_views . PH7_TPL_MOD_NAME . PH7_DS); } ?><div class="col-md-8 login_block animated fadeInDown"> <?php LoginSplashForm::display() ;?></div><?php if(!$is_mobile) { ?> <div class="left col-md-8 animated fadeInLeft"> <?php $this->display($this->getCurrentController() . PH7_DS . 'user_promo_block.inc.tpl', $this->registry->path_module_views . PH7_TPL_MOD_NAME . PH7_DS); ?> </div><?php } ?><div class="left col-md-4 animated fadeInRight"> <h1 class="red3 italic underline"><?php echo $headline; ?></h1> <div class="login_button hidden center"> <a href="<?php $design->url('user','main','login') ;?>" class="btn btn-primary btn-lg"> <strong><?php echo t('Login'); ?></strong> </a> </div> <?php JoinForm::step1() ;?> <?php if($is_mobile) { ?> <div class="s_tMarg"></div> <?php $this->display($this->getCurrentController() . PH7_DS . 'user_promo_block.inc.tpl', $this->registry->path_module_views . PH7_TPL_MOD_NAME . PH7_DS); ?> <?php } ?></div>