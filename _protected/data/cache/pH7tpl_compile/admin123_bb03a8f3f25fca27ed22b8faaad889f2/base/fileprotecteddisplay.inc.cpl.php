<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 08:44:18
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/file/protecteddisplay.inc.tpl
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
?><div class="center"> <?php if(!empty($filesList)) { ?> <ul> <?php foreach($filesList as $file) { ?> <?php $short_path = str_replace([PH7_PATH_PROTECTED, '\\', '//'], ['', '/', '/'], $file) ;?> <li><a href="<?php $design->url(PH7_ADMIN_MOD, 'file', 'protectededit', $short_path, false) ;?>" title="<?php echo t('Click to display/edit the file'); ?>"><?php echo $short_path; ?></a></li> <?php } ?> </ul> <?php } else { ?> <p><?php echo t('File Not Found!'); ?></p> <?php } ?></div>