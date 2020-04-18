<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-16 15:35:25
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/picture/views/base/tpl/main/index.tpl
*/
?><div class="center"> <?php if(empty($error)) { ?> <?php foreach($albums as $album) { ?> <div class="thumb_photo"> <p> <a href="<?php $design->url('picture', 'main', 'albums', $album->username) ;?>"> <img src="<?php echo PH7_URL_DATA_SYS_MOD?>picture/img/<?php echo $album->username ;?>/<?php echo $album->albumId ;?>/<?php echo $album->thumb ;?>" alt="<?php echo $album->name ;?>" title="<?php echo $album->name ;?>" /> </a> </p> <p> <?php echo t('by'); ?> <?php $design->getProfileLink($album->username) ;?> <?php echo t('in'); ?> <a href="<?php $design->url('picture', 'main', 'album', "$album->username,$album->name,$album->albumId") ;?>" title="<?php echo t('Album created on %0%', $album->createdDate); ?><?php if(!empty($album->updatedDate)) { ?><br /> <?php echo t('Modified on %0%', $album->updatedDate); ?><?php } ?>"><?php echo $album->name ;?></a> </p> </div> <?php } ?> <?php $this->display('page_nav.inc.tpl', PH7_PATH_TPL . PH7_TPL_NAME . PH7_DS); ?> <?php } else { ?> <p><?php echo $error; ?></p> <?php } ?> <p class="bottom"> <a class="btn btn-default btn-md" href="<?php $design->url('picture', 'main', 'addalbum') ;?>"><?php echo t('Add a new album'); ?></a> </p></div>
