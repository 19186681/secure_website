<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-18 14:09:45
Compiled file from: /usr/share/nginx/html/templates/themes/base/tpl/headings.inc.tpl
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
?><div class="center" id="headings"> <?php foreach(['h1' => 'h1_title', 'h2' => 'h2_title', 'h3' => 'h3_title', 'h4' => 'h4_title'] as $heading => $headingVar) { ?> <?php if(!empty($$headingVar)) { ?> <<?php echo $heading; ?>><?php echo $$headingVar ;?></<?php echo $heading; ?>> <?php } ?> <?php } ?></div>