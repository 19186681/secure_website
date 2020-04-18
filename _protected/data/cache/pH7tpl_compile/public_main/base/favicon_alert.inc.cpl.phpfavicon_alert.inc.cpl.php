<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:40:52
Compiled file from: /usr/share/nginx/html/templates/themes/base/tpl/favicon_alert.inc.tpl
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
?><?php $favicon_alert = 0 ; if(!empty($count_unread_mail)) { ?> <?php $favicon_alert += $count_unread_mail ; } if(!empty($count_pen_friend_request)) { ?> <?php $favicon_alert += $count_pen_friend_request ; } if($favicon_alert > 0) { ?> <script src="<?php echo PH7_URL_STATIC . PH7_JS?>tinycon.js"></script> <script>Tinycon.setBubble(<?php echo $favicon_alert; ?>)</script><?php } ?>