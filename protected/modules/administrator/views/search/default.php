<h1>Поиск</h1>
<div class="total">
    <div class="center">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'id'=>'search',
        'itemsCssClass'=>'results',
        'itemView'=>'_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет запросов',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('query','transition', 'domain','data'),
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,
            'prevPageLabel'=>'<',
            'nextPageLabel'=>'>',
            'lastPageLabel'=>'>>',
            'firstPageLabel'=>'<<'
        ),
    ));
    ?>
    </div>
</div>
<? if($data->pagination->pageCount!=0) { ?>
    <style>
    .left .list-view .pager ul.yiiPager li.page{
        width: <? echo 100/$data->pagination->pageCount; ?>%;
    }
    </style>
<? } 
