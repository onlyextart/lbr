<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Лбр-агромаркет - Вход';
?>
<div class="form">
<?php 
if(!Yii::app()->user->isGuest){
    echo '<h1>Выход с сайта</h1>';
    echo '<p>Привет '.Yii::app()->user->name.'!</p>';
    echo CHtml::link('Выйти','/users/logout/', array('class'=>'btn'));
}else{
    $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    )); ?>
        <h1>Вход на сайт</h1>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Войти', array('class'=>'btn')); ?>
	</div>
<?php $this->endWidget();    
}
?>
</div><!-- form -->
