<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 18:32:06
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/main/splash_video_background.inc.tpl
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
?><?php $total_videos = count(glob(PH7_PATH_TPL . PH7_TPL_NAME . '/file/splash/*_vid.jpg')) ; $video_prefix = mt_rand(1, $total_videos) ; if(!$this->browser->isMobile()) { ?> <style scoped="scoped">video#bgvid{background: url(<?php echo PH7_URL_TPL . PH7_TPL_NAME . PH7_SH?>file/splash/<?php echo $video_prefix; ?>_vid.jpg) no-repeat center}</style> <video autoplay loop muted poster="<?php echo PH7_URL_TPL . PH7_TPL_NAME . PH7_SH?>file/splash/<?php echo $video_prefix; ?>_vid.jpg" id="bgvid"> <source src="<?php echo PH7_URL_TPL . PH7_TPL_NAME . PH7_SH?>file/splash/<?php echo $video_prefix; ?>_vid.webm" type="video/webm" /> <source src="<?php echo PH7_URL_TPL . PH7_TPL_NAME . PH7_SH?>file/splash/<?php echo $video_prefix; ?>_vid.mp4" type="video/mp4" /> </video><?php } else { ?> <style scoped="scoped"> body { background: url('<?php echo PH7_URL_TPL . PH7_TPL_NAME . PH7_SH?>file/splash/<?php echo $video_prefix; ?>_vid.jpg') repeat-y center; background-size: cover; top: 50%; left: 50%; } </style><?php } ?>