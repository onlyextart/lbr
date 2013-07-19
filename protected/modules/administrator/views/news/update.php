<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'Журнал новостей', 'url'=>array('index')),
	array('label'=>'Создать новость', 'url'=>array('create')),
	array('label'=>'Просмотр новостей', 'url'=>array('view', 'id'=>$model->id)),

);
?>

<h1>Обновить новость<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>