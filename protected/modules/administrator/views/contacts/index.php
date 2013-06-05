<?php
//Groups list/
?>
<h3>Список филиалов</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'name',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        ),
    ),
));

?>
<a href="/administrator/contacts/createContact/">Создать филиал</a>