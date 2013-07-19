

<h1>Журнал новостей</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'id'=>'news-grid',
	'columns'=>array(
		'id',
		'header',
		'alias',
		'created',
		'published' => array (
            'name' => 'published',
            'value' => ($data->published==1)?"Опубликовано":"Не опубликовано",
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<a href="create/">Создать новость</a>