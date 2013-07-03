<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер новостей</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'header',
		'created' => array (
            'name' => 'created',
            'value' => 'date("H.i j.m.Y", $data->created)',
            'filter' => false,
            'headerHtmlOptions' => array('width'=>120),
        ),
		'published' => array(
            'name' => 'published',
            'value' => '($data->published==1)?"Опубликована":"Не опубликована"',
             'filter' => array(1=>"Опубликована", 0=>"Не опубликована"),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<a href="create/">Создать новость</a>