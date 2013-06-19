<?php
$this->Widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'name',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        )
    ),
));

?>
<a href="/administrator/products/create/">Создать страницу товара</a>