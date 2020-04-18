<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 21:29:57
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/xml/views/base/tpl/sitemap/index.tpl
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
?><div class="center"> <?php if(!empty($error) ) { ?> <p class="red"><?php echo $error; ?></p> <?php } elseif(sizeof($urls) > 0) { ?> <ul> <?php foreach($urls as $key => $value) { ?> <li class="underline"> <a href="<?php echo $key; ?>"><?php echo $value; ?></a> </li> <?php } ?> </ul> <?php } else { ?> <p><?php echo t('Oops! No links to display. Come back later ;)'); ?></p> <?php } ?></div>