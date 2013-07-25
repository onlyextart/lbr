<h3>Список новостей</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'header', 
        'published'=> array(
        'name'=> 'published',
        'value'=> '($data->published==1)?"Опубликовано":"Не опубликовано"',
        ),
        'date',
         
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        ),
    ),
));

?>
<a href="/administrator/news/create/" class="btn btn-green" >Создать новость</a>
