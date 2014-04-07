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
<script>mo_manager="a1d50185e7426cbb0acad1e6ca74b9aa";</script>
<script type="text/javascript">var _oaq = _oaq || [];_oaq.push(['_OPAccount', '716']);(function() {var oa = document.createElement('script'); oa.type = 'text/javascript'; oa.async = true; oa.src = 'http://onlinesaler.ru/js/common/js.php?domen=<?php echo $filialName ?>lbr.ru&id=716'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oa, s); })();</script>
<!--<?php echo $filialName ?>-->