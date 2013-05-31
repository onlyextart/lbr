<?php
//Banners list/
?>
<h3>Список баннеров</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array(
            'header'=>'Имя', 
            'value'=>'$data->bannerRegions[0]->name',
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
            //'deleteButtonUrl'=>'"administrator/banners/deleteBanner/id/".$data->id',
            //'updateButtonUrl'=>'"administrator/banners/updateBanner/id/".$data->id',
            
        ),
    ),
));

?>
<a href="/administrator/banners/create/">Создать баннер</a>