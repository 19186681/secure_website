<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 22:15:02
Compiled file from: /usr/share/nginx/html/templates/themes/base/tpl/error.inc.tpl
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
?><div class="center"> <p><?php echo $error_desc; ?></p> <?php if(isset($pOH_not_found)) { ?> <div class="error-image center"></div> <h2><?php echo t('Relax and go'); ?> <a href="<?php echo $this->registry->site_url?>"><?php echo t('home'); ?></a></h2> <?php } ?></div>