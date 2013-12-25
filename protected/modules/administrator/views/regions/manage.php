<?php
/* @var $this RegionsController */
/* @var $model Regions */
/* @var $form CActiveForm */
?>
<style>
.manage_buttons{
        position: fixed;
        top: 50px;
        right: 30px;
    }
div.manage_buttons input{
        margin:0px;
    }
</style>
<div class="form">
    <?php $form = $this->beginWidget( 'CActiveForm', array(
                'id'=>'contect_form',
            ) 
        );
    ?>
	<div class="row">
		<?php echo $form->labelEx($regionModel,'name'); ?>
		<?php echo $form->textField($regionModel,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($regionModel,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($regionModel,'district_id'); ?>
		<?php echo $form->dropDownList($regionModel,'district_id', Regions::$districts); ?>
		<?php echo $form->error($regionModel,'district_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($regionModel,'published', array('Опубликовать')); ?>
		<?php echo $form->checkBox($regionModel,'published'); ?>
		<?php echo $form->error($regionModel,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($regionModel,'contact_id'); ?>
		<?php echo $form->dropDownList($regionModel,'contact_id', Contacts::getFilialsArray()); ?>
		<?php echo $form->error($regionModel,'contact_id'); ?>
	</div>

	<div class="manage_buttons buttons">
            <?php echo CHtml::link('Закрыть', '/administrator/regions/', array('class'=>'btn del')); ?>
            <?php echo CHtml::submitButton($regionModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->