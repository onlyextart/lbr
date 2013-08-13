
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
        ),
    ));
    
?>