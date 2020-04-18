<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:45:52
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/map/views/base/tpl/country/index.tpl
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
?><div class="center"> <?php if(empty($error)) { ?> <div><?php echo $map; ?></div> <?php $userDesignModel->geoProfiles($country_code, $city, $first_user, $nb_user_by_page) ;?> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); ?> <?php } else { ?> <p class="red"> <?php echo $error; ?> </p> <?php } ?></div>