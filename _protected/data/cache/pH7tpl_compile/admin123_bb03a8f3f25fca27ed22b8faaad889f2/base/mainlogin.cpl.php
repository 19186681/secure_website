<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 15:33:32
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/main/login.tpl
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
?><div class="col-md-8"> <?php LoginForm::display() ;?> <p><?php LostPwdDesignCore::link(PH7_ADMIN_MOD) ;?></p> <p class="red"><?php echo t('Your logged IP is:'); ?> <em class="bold"><?php echo Framework\Ip\Ip::get()?></em></p></div>