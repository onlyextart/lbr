<?php

preg_match_all('/([^\.]*).lbr.ru/' ,$_SERVER['HTTP_HOST'], $filial);
$filialName=$filial[1][0];
if($filialName=='www'){
	$filialName='';
}
else{
	$filialName .= '.';	
}

?>

<script>om_unickey="<?php echo (md5(session_id()))?>";</script>
<!-- <script>mo_manager="907edb0aa6986220dbffb79a788596ee";</script> -->
<!-- OnlineSeller.ru {literal} -->
<script type="text/javascript">(function() {var oa = document.createElement('script'); oa.type = 'text/javascript';oa.charset='UTF-8'; oa.async = true; oa.src = 'http://onlinesaler.ru/assets/templates/os2013/common/js.php?akkid=716&subid=3<?php echo $filialName ?>lbr.ru&id=716'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oa, s);  })();</script>
<!--OnlineSeller.ru {/literal} -->
     <!--<?php echo $filialName ?>-->                                    