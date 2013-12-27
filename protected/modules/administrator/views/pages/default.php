<?php
    Yii::app()->clientScript->registerCssFile('/css/admin/users/users.css');
    Yii::app()->clientScript->registerCssFile('/css/admin/users/static.css');
    Yii::app()->clientScript->registerScriptFile('/js/tinymce/tinymce.min.js');
    Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
    Yii::app()->clientScript->registerScriptFile('/js/admin/static.js');
?>
<h1>Статические страницы</h1>
<div class="total">
    <div class="left">
    <div class="create-button">
     <?
     echo CHtml::link('Создать', '/administrator/pages/createpage/', array('class'=>'btn-green btn ajax', 'id'=>'create'));
     ?>   
    </div>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'itemView'=>'_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет пользователей',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'id'=>'static_pages',
        'sortableAttributes'=>array('id','name', 'data'),
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
    <div class="right">
        <? 
        if ($mess == Yii::app()->user->getFlash('message')){
            echo '<div class="message success">'.$mess.'</div>';
        }
        if ($view){
            echo $view;
            ?>
        <script>
            var tabs = new TabsStaticPages();
            tabs.init('#tabs');
        </script><?
        }
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