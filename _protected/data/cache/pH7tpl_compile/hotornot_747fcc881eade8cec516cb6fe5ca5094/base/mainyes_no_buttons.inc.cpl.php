<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-21 11:09:05
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/hotornot/views/base/tpl/main/yes_no_buttons.inc.tpl
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
?><div> <a class="s_tMarg btn btn-success" rel="nofollow" href="<?php $design->url('mail', 'main', 'compose', $data->username) ;?>"> <?php echo t('Interested 👍'); ?> </a> <a class="s_tMarg btn btn-danger" rel="nofollow" href="<?php $design->url('hotornot', 'main', 'rating') ;?>"> <?php echo t('Not Interested 👎'); ?> </a></div>