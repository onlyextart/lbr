<h1 class="middle">Контакты ЛБР-АгроМаркет</h1>
<?php echo $output; ?>

<!-- Map of Russia -->
<div class="contact-additional-info">
    <a class="view_all_contacts" href="<?php echo Yii::app()->getBaseUrl(true).'/company/contacts/#list_filials'?>">Посмотреть все контакты<!--img alt="Посмотреть все контакты" title="Посмотреть все контакты" src="/images/bottom-arrow.png" /--></a>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="500">
        <param name="movie" value="/images/map1000px.swf">
        <param name="bgcolor" value="#ffffff">
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="/images/map1000px.swf" width="1000" height="500">
                <!--<![endif]-->
                <!--[if !IE]>-->
                <param name="wmode" value="opaque">
        </object>
        <!--<![endif]-->
    </object>
</div>

