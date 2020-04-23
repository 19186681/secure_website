<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 07:19:37
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/signup/step1.tpl
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
?><div class="left col-md-6"> <?php $this->display('progressbar.inc.tpl'); ?> <?php JoinForm::step1() ;?></div><div class="right col-md-4 animated fadeInRight"> <div class="center"> <p> <?php echo t('Already registered?'); ?> <a href="<?php $design->url('user','main','login') ;?>"><strong><?php echo t('Sign In!'); ?></strong></a> </p> <?php if(!empty($user_ref)) { ?> <a href="<?php $design->getUserAvatar($username, $sex, 400) ;?>" title="<?php echo $first_name; ?>" data-popup="image"> <img class="avatar s_marg" alt="<?php echo $first_name; ?> <?php echo $username; ?>" title="<?php echo $first_name; ?>" src="<?php $design->getUserAvatar($username, $sex, 200) ;?>" /> </a> <?php } else { ?> <div class="s_tMarg"> <?php $userDesignModel->profilesBlock() ;?> </div> <?php } ?> </div></div>