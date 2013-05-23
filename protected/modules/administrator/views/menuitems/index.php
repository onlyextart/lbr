<?php

/*
В действие Index контроллера administrator/menu определена переменная $menuModel
содержащая модель MENU со всеми пунктами меню.
 */
echo $_GET['id'];
?>
<h2 class="col ">Структура меню</h2>
<?php 
/*$this->widgets('zii.widget.grid.CGridView', array(
    'dataProvider'=>$model->search(),
    'columns'=>array(
        'name',
        'type',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        )
    ),
))*/
var_dump($model);

?>