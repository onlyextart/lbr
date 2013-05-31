<? ?>
<h1>Роли</h1>
<div class="total">
    <div class="left">
    <div class="create-button">
     <?
     echo CHtml::ajaxLink('Создать', '/administrator/users/createrole/', array('update'=>'.right'), array('class'=>'btn-green btn'));
     ?>   
    </div>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'itemView'=>'role/_item', // представление для одной записи
        'ajaxUpdate'=>true, // включаем ajax поведение
        'emptyText'=>'Нет ролей',
        'template'=>'{sorter} {items}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('name'),
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,
        ),
    ));
    ?>
    </div>
    <div class="right">

    </div>
</div>