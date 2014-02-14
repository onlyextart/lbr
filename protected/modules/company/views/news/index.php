<?php
/* @var $this DefaultController */
?>
<h1>News</h1>
<?php 
$this->widget('zii.widgets.grig.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'header',
        'date',
        'published',
        array(
            'class'=>'buttons',
            'templates'=>'{update}{delete}'
        ),
    ),
));


?>
<a href="/administrator/news/create">создать новость</a>
