<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-21 11:09:05
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/hotornot/views/base/tpl/main/rating.tpl
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
?><div class="center"> <h2 class="pink1"><?php echo $desc_for_woman; ?></h2> <h2 class="pink2"><?php echo $desc_for_man; ?></h2> <div class="s_bMarg"></div> <?php if(empty($error)) { ?> <?php $avatarDesign->get($data->username, $data->firstName, $data->sex, 400) ;?> <div class="hon_click"> <?php RatingDesignCore::voting($data->profileId,DbTableName::MEMBER,'center') ;?> </div> <?php $this->display($this->getCurrentController() . PH7_DS . 'yes_no_buttons.inc.tpl', $this->registry->path_module_views . PH7_TPL_MOD_NAME . PH7_DS); ?> <hr /> <p class="center"> <?php $design->like($data->username, $data->firstName, $data->sex, (new UserCore)->getProfileLink($data->username)) ;?> | <?php $design->report($data->profileId, $data->username, $data->firstName, $data->sex) ;?> </p> <?php $design->likeApi() ;?> <?php } else { ?> <p class="bold"><?php echo $error; ?></p> <?php } ?></div>