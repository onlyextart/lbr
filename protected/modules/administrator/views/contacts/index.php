<?php
//Groups list/
?>
<h3>Список филиалов</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'name',
        'published'=>array(
            'name'=>'published',
            'value'=> '($data->published==1)?"Опубликовано":"Не опубликовано"',
        ),
        'address',
        'email',
        'work_time',
        'telephone',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
                   
        ),
    ),
));

?>
<a href="/administrator/contacts/create/" class="btn btn-green" >Создать филиал</a>