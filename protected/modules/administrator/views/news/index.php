<?php
/* @var $this DefaultController */
?>
<h1>News</h1>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'header',
        'date',
        'published',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}'
        ),
    ),
));


?>
<a href="/administrator/news/create">Создать новость</a>
