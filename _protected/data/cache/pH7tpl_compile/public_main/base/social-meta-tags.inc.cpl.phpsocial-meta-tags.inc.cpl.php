<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 15:32:48
Compiled file from: /usr/share/nginx/html/templates/themes/base/tpl/social-meta-tags.inc.tpl
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
?><?php $social_meta_title = $page_title ? $this->str->escape($this->str->upperFirst($page_title)) : $site_name ; $social_meta_desc = $this->str->escape($this->str->upperFirst($meta_description)) ;?><meta property="og:type" content="article" /><meta property="og:title" content="<?php echo $social_meta_title; ?>" /><meta property="og:description" content="<?php echo $social_meta_desc; ?>" /><meta property="og:url" content="<?php echo $this->httpRequest->currentUrl()?>" /><meta name="twitter:card" content="summary" /><meta name="twitter:title" content="<?php echo $social_meta_title; ?>" /><meta name="twitter:description" content="<?php echo $social_meta_desc; ?>" /><meta name="twitter:url" content="<?php echo $this->httpRequest->currentUrl()?>" /><meta itemprop="name" content="<?php echo $social_meta_title; ?>" /><meta itemprop="description" content="<?php echo $social_meta_desc; ?>" /><?php if(!empty($image_social_meta_tag)) { ?> <meta name="thumbnail" content="<?php echo $image_social_meta_tag; ?>" /> <meta name="twitter:image" content="<?php echo $image_social_meta_tag; ?>" /> <meta property="og:image" content="<?php echo $image_social_meta_tag; ?>" /> <meta itemprop="image" content="<?php echo $image_social_meta_tag; ?>" /><?php } ?>