<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 18:32:06
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/user/views/base/tpl/main/user_promo_block.inc.tpl
*/
?><h1 class="red3 italic underline s_bMarg"><?php echo $slogan; ?></h1><?php if($is_users_block) { ?> <div class="center profiles_window thumb pic_block"> <?php $userDesignModel->profiles(0, $number_profiles) ;?> </div><?php } ?><div class="s_tMarg" id="promo_text"> <h2><?php echo t('🚀 Meet and date amazing people near %0%! 🎉', $design->geoIp(false)); ?></h2> <?php echo "You are on the best web site for meeting new people online! Chat, Flirt, Enjoy!"?></div>
