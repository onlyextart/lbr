<?
    Yii::app()->clientScript->registerCssFile('/css/admin/users/users.css');
    Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
    Yii::app()->clientScript->registerScriptFile('/js/admin/users.js');
?>
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
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Нет пользователей',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('group_id','surname'),
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
        }else{?>
        <div class="faq">
            <h2>Некоторые существующие правила:</h2>
            <ol>
                <li>Каждый пользователь принадлежит какой-либо группе.</li>
                <li>У каждой группы есть свой уровень доступа. Чем ниже уровень, тем меньше прав.</li>
                <li>Можно редактировать свои данные, а так же данные пользователей меньших по уровню.</li>
                <li>Нельзя редактировать пользователей с равным либо большим уровнем.</li>
                <li>Можно присваивать права другим пользователям равные либо меньшие, чем свои собственные.</li>
                <li>Нельзя удалить самого себя, но можно удалить пользователей с меньшим уровнем.</li>
            </ol>
            <br><br>
            <h3>Как сменить пароль?</h3>
            <p>Для того, чтобы изменить пароль, откройте страницу редактирования пользователя и введите новый пароль в одноименное поле. Если поле оставить пустым, пароль останется прежним.</p>
            <br>
            <h3>Что делать если изменились права, а Вы все так же не можете ими воспользоваться?</h3>
            <p>Выйдите и войдите на сайт заново.</p>
        </div>
        <?}
        ?>
    </div>
</div>
<style>
.left .list-view .pager ul.yiiPager li.page{
    width: <? echo 100/$data->pagination->pageCount; ?>%;
}
</style>