<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 21:56:13
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/invite/views/base/tpl/home/invitation.tpl
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
?><div class="left col-md-8"> <div id="block_page"> <h1><?php echo t('Invite your Friends'); ?></h1> <?php InviteForm::display() ;?> </div></div><div class="right col-md-4"> <?php $design->littleLikeApi() ;?> <div role="banner" class="ad_336_280"> <?php $this->designModel->ad(336, 280) ?> </div></div>