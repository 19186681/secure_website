<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 21:46:51
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/affiliate/views/base/tpl/home/index.tpl
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
?><?php if(!AffiliateCore::auth()) { ?> <div class="right col-md-6"> <h1 class="pink2 italic underline"> <?php echo t('Affiliate Platform with %site_name%'); ?> </h1> <?php JoinForm::step1() ;?> </div> <div class="left col-md-6"> <h1 class="pink2 italic underline"> <?php echo t('Make Money with our Affiliate Program!'); ?> </h1> <h3><?php echo t('Our affiliate program offers one of the highest payment rates on the market'); ?></h3> <div id="make_money"></div> <?php $this->display('login.inc.tpl'); ?> </div><?php } else { ?> <div class="center"> <h2 class="pink2 italic"> <?php echo t('Welcome to our Affiliate Program!'); ?> </h2> </div><?php } ?>