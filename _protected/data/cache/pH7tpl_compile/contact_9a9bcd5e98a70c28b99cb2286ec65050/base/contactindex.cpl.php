<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 21:47:01
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/contact/views/base/tpl/contact/index.tpl
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
?><div class="left col-md-8"> <?php ContactForm::display() ;?> <p class="italic red"><?php echo t('Your IP is: %0%', Framework\Ip\Ip::get()); ?></p></div><div role="banner" class="right col-md-2 col-md-offset-2 ad_160_600"> <?php $this->designModel->ad(160, 600) ?></div>