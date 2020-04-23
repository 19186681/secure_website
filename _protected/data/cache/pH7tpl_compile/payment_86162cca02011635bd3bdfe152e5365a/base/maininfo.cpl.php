<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-22 08:27:05
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/payment/views/base/tpl/main/info.tpl
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
?><div class="center"> <div class="col-md-8 col-md-offset-2"> <ul class="list-group"> <li class="list-group-item bold"> <?php echo t('Membership Name: %0%', '<span class="italic text-info">' . $membershipName . '</span>'); ?> </li> <li class="list-group-item bold"> <?php echo t('Expiration: %0%', '<span class="italic text-danger">' . $expirationDate . '</span>'); ?> </li> </ul> <p> <a class="btn btn-primary btn-md" href="<?php $design->url('payment', 'main', 'membership') ;?>"> <?php echo t('Renew/Upgrade your Membership'); ?> </a> </p> </div></div>