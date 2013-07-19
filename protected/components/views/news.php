<?php
	$res = News::AllNews()
?>
<? foreach ($res as $key){  ?>
<li>
    <img src="/images/<?=$key->image;?>" width="100" height="100" alt=""/>
    <a class="iframe" href="news/news/id/<?=$key->id;?>"><div class="info_slider"></div></a> 
    <br />
    <div class="title_slider_top">
    <?=$key->surname;?>
    <br /><?=$key->name;?><?=$key->alias;?>
    </div>
    <div class="text_slider_top"><?=$key->header;?></div>

</li>
<?}?>