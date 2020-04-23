<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-21 12:28:31
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/main/news.inc.tpl
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
?><div class="center"> <h2 class="underline"><?php echo t('Latest <a href="%software_website%" title="%software_name%">MyCMS Software</a>\'s News'); ?></h2> <?php XmlDesignCore::softwareNews(10) ;?> <p class="s_tMarg italic underline"> <a href="<?php echo $software_blog_url; ?>">» <?php echo t("More %software_name%'s News!"); ?></a> 🗞 </p></div>