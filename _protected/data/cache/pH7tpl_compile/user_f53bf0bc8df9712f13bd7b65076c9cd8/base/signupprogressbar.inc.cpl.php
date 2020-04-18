<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:38:45
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/progressbar.inc.tpl
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
?><div class="progress"> <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progressbar_percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progressbar_percentage; ?>%" ><?php echo $progressbar_percentage; ?>% - <?php echo t('STEP'); ?> <?php echo $progressbar_step; ?>/<?php echo $progressbar_total_steps; ?> </div></div>