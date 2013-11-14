<style>
    .list-view div a {
color: #008873;
text-decoration: underline;
font-weight: bold;
}
</style>
<h1> Новости ЛБР-АГРОМАРКЕТ </h1>

<div>
<?php
$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'items/_view', // представление для одной записи
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Нет новостей',
        'itemsTagName'=>'div',
        'template'=>'{items}{pager}',
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,
            'firstPageLabel' => 'В начало',
            'prevPageLabel'  => 'Назад',
            'nextPageLabel'  => 'Вперед',
            'lastPageLabel'  => 'В конец',
            'cssFile'=>Yii::app()->getBaseUrl(true).'/css/admin/pager/pager.css',
        ),
    ));
?>
</div>
