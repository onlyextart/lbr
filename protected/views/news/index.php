<style>
    .list-view div a {
color: #008873;
text-decoration: underline;
font-weight: bold;
}
</style>
<h1> Новости ЛБР-АГРОМАРКЕТ </h1>


<?php
<<<<<<< HEAD
$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
=======

$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
>>>>>>> faad49c... Kp generated
        'itemView'=>'items/_view', // представление для одной записи
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Нет новостей',
        'itemsTagName'=>'div',
        'template'=>'{items}{pager}',
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,
<<<<<<< HEAD
        ),
    ));
    
?>
=======
                    'firstPageLabel' => 'В начало',
                    'prevPageLabel'  => 'Назад',
                    'nextPageLabel'  => 'Вперед',
                    'lastPageLabel'  => 'В конец',
            'cssFile'=>Yii::app()->getBaseUrl(true).'/css/admin/pager/pager.css',
        ),
    ));

?>
</div>
>>>>>>> faad49c... Kp generated
