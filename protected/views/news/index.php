<style>
    .list-view div a {
color: #008873;
text-decoration: underline;
font-weight: bold;
}
</style>
<h1> Новости ЛБР-АГРОМАРКЕТ </h1>


<?php

$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,

));
$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,

        'itemView'=>'items/_view', // представление для одной записи
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Нет новостей',
        'itemsTagName'=>'div',
        'template'=>'{items}{pager}',
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,

        ),
    ));
    
?>
</div>

