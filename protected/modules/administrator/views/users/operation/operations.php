<? ?>
<h1>Операции</h1>
<div class="total">
    <div class="left">
    <div class="create-button">
     <?
     echo CHtml::ajaxLink('Создать', '/administrator/users/createoperation/', array('update'=>'.right'), array('class'=>'btn-green btn'));
     ?>   
    </div>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'itemView'=>'operation/_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет операций',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('name'),
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
        if ($mess = Yii::app()->user->getFlash('message')){
            echo '<div class="message success">'.$mess.'</div>';
        }
        if ($view){
            echo $view;
        }
        ?>
    </div>
</div>
<style>
.left .list-view .pager ul.yiiPager li.page{
    width: <? echo 100/$data->pagination->pageCount; ?>%;
}
</style>