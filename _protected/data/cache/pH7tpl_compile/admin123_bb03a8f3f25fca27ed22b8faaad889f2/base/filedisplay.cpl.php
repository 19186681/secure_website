<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 08:43:14
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/file/display.tpl
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
?><div id="elfinder"></div><script src="<?php echo PH7_URL_STATIC?>fileManager/js/elfinder.js"></script><script> $(function () { $('#elfinder').elfinder({ url: pH7Url.base + '<?php echo PH7_ADMIN_MOD . PH7_SH?>asset/ajax/fileManager/<?php echo $type; ?>Connector/' }).elfinder('instance'); });</script>