<?php
$form = $this->beginWidget('CActiveForm');
?>

<div class="row">
<?php echo $form->error($model, 'header')  ?>
<?php echo $form->labelEx($model, 'header')  ?>
<?php echo $form->textField($model, 'header')  ?>
</div>

<div class="row">
<?php echo $form->error($model, 'alias')  ?>
<?php echo $form->labelEx($model, 'alias')  ?>
<?php echo $form->textField($model, 'alias')  ?>
</div>

<div class="row">
<?php echo $form->error($model, 'date')  ?>
<?php echo $form->labelEx($model, 'date')  ?>
<?php echo $form->textField($model, 'date')  ?>
</div>

<div class="row">
<?php echo $form->error($model, 'published')  ?>
<?php echo $form->labelEx($model, 'published')  ?>
<?php echo $form->checkBox($model, 'published')  ?>
</div>

<div class="row">
    <?php echo CHtml::SubmitButton($model->isNewRecord?'Создать':'Сохранить'); ?>
</div>

<?
$this->endWidget();
?>
