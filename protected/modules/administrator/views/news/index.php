<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'Создать новость', 'url'=>array('create')),
);

?>

<h1>Журнал новостей</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'filter'=>$newsModel,
	'columns'=>array(
		'header',
        'created' => array(
        'name' => 'date',
        ),
		'published' => array (
            'name' => 'published',
            'value' => '($newsModel->published==1)'?"Опубликовано":"Не опубликовано",
        ),
		array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        ),
	),
)); ?>
<a href="/administrator/news/create/" class="btn btn-green">Создать новость</a>
<script>
    $(function() {
        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>