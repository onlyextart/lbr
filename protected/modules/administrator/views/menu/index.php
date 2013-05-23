<?php

/*
В действие Index контроллера administrator/menu определена переменная $menuModel
содержащая модель MENU со всеми пунктами меню.
 */
?>
<h2 class="col ">Менеджер меню</h2>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>$menuModel->search(),
        //'filter'=>$menuModel,
        'columns'=>array(
             array(
                'class'=>'CLinkColumn',
                'header'=>'Имя меню',
                'labelExpression'=>'$data->name',
                'urlExpression'=>'"/administrator/menuItems/index/id/".$data->id',
            ),
            'published',
            array(
                'class'=>'CButtonColumn',
                'template'=>'{update}{delete}',
            ),
        ),
))


?>
<a href="/administrator/menu/create">Создать новое меню</a>
<script>
<?php if(Yii::app()->user->hasFlash('saved')): ?>
    alert("<?php echo Yii::app()->user->getFlash('saved'); ?>");
<?php endif; ?>
</script>
