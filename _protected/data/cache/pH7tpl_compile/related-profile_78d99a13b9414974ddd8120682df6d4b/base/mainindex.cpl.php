<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 22:41:53
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/related-profile/views/base/tpl/main/index.tpl
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
?><div class="center" id="related_profile_block"> <?php if(!empty($related_profiles)) { ?> <?php foreach($related_profiles as $profile) { ?> <?php if($id !== $profile->profileId) { ?> <?php $found = 1 ;?> <div class="s_photo"> <?php $avatarDesign->get($profile->username, $profile->firstName, $profile->sex, 64, $bRollover = true) ;?> </div> <?php } ?> <?php } ?> <?php } ?> <?php if(empty($found)) { ?> <p><?php echo t('No related profiles found.'); ?></p> <?php } ?></div>