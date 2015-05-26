<?php
/*
 * $model модель групп меню
 */
if($groupModel->isNewRecord){
    $pageHeader = 'Создание группы';
}
//else{
//    $pageHeader = 'Редактирование группы "'.$groupModel->name.'"';
//}
?>
<h2>
    <?php echo $pageHeader ?>
</h2>
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="row">
        <?php //echo $form->error($groupModel, 'description'); ?>
        <?php //echo $form->labelEx($groupModel, 'description'); ?>
        <?php //echo $form->textField($groupModel, 'description'); ?>
    </div>
    <div class="row">
        <?php echo CHtml::SubmitButton($groupModel->isNewRecord?'Создать':'Сохранить'); ?>
    </div> 
    <?php $this->endWidget(); ?>
</div>
