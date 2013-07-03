
<h1>Просмотр новостей<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'header',
		'alias',
		'created',
		'published',
		'content',
	),
)); ?>
