<? ?>
<h1>Пользователи</h1>
<div class="total">
    <div class="left">
    <div class="create-button">
     <?
     echo CHtml::ajaxLink('Создать', '/administrator/users/createuser/', array('update'=>'.right'), array('class'=>'btn-green btn'));
     ?>   
    </div>
    <?php
//    $group_array = UserGroups::getUserGroupsArray();
//    $group_array['group_id'] = 'Все';
//        echo CHtml::radioButtonList('drop_group', '', $group_array,
//         array('onchange'=>"$.fn.yiiListView.update('yw0', {url: '/administrator/users/?group_id='+$('#drop_group input:checked').val()})"));
    ?>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'itemView'=>'user/_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет пользователей',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('id','surname'),
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