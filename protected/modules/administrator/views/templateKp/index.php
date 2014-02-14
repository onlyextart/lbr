<?php
//Groups list/
?>
<h3>Список КП</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'title',
        'type',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
                   
        ),
    ),
));

?>

<a href="/administrator/templateKp/create/" class="btn btn-green">Создать КП</a>