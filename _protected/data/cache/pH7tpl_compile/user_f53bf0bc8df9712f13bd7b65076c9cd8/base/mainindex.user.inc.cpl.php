<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 08:27:29
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/main/index.user.inc.tpl
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
?><h2><?php echo t('Hi <em>%0%</em>! How are you today?', $first_name); ?></h2><h3 class="s_bMarg"><?php echo t('Say hi to the new people and meet them!'); ?></h3><h5 class="underline vs_marg"> <?php echo t('Wall'); ?> <span class="italic">&quot;<?php echo t('The latest news'); ?>&quot;</span></h5><div class="left col-md-7" id="wall"></div><div class="right col-md-5"> <?php $userDesignModel->profilesBlock() ;?></div>