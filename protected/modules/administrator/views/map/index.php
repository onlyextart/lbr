<?php
/*
*   В действие Index контроллера administrator/map определена переменная $siteMapHtml
*   содержащая все пункты списка карты сайта.
*/
?>
<style>
    #siteMap{
        box-shadow: 0px 0px 7px;
        border-radius: 5px;
        float: left; 
        width: 60%; 
        padding: 2%; 
        margin-left:2%; 
    }
    
    .menuTreeViewWrapper{
        box-shadow: 0px 0px 7px;
        border-radius: 5px;
        float: left; 
        width: 27%; 
        padding: 2%; 
    }
    ul.level_0 li{
        margin-left: 0px;
    }
    
    ul.level_1 li{
        margin-left: 30px;
    }
    
</style>

<h2 class="col ">Карта сайта Html</h2>
<div class="menuTreeViewWrapper">
    <div>Дата последнего обновления: <?php echo date("d.m.Y H:i:s", $sitemapDate); ?></div>
    <div><a href="/administrator/map/updateSitemapHtml/" class="btn btn-green">Обновить HTML</a></div>
    <div><a href="/administrator/map/getExcel/" class="btn btn-green">Скачать Excel</a></div>
</div>

<div id="siteMap">
     <?php echo $siteMapHtml; ?>
</div>
