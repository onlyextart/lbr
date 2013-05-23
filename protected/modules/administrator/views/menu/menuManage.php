<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if($menuModel->isNewRecord){
    $pageHeader = 'Создать новый пункт меню';
}
else{
    $pageHeader = 'Редактирование пункта меню "'.$menuModel->name.'"';
}
?>
<h2>
    <?php echo $pageHeader ?>
</h2>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<div class="row">
    <?php echo $form->error($menuModel, 'name'); ?>
    <?php echo $form->labelEx($menuModel, 'name'); ?>
    <?php echo $form->textField($menuModel, 'name'); ?>
</div>
<div class="row">
    <?php echo $form->error($menuModel, 'published'); ?>
    <?php echo $form->labelEx($menuModel, 'published'); ?>
    <?php echo $form->checkBox($menuModel, 'published'); ?>
</div>
<div class="section row">
    <button class="button" name="buttonPressed" value="save">
        <?php echo $menuModel->isNewRecord? 'Создать':'Сохранить'; ?>
    </button>
    <button class="button" name="buttonPressed" value="saveAndClose">
        <?php echo $menuModel->isNewRecord?'Создать и закрыть':'Сохранить и закрыть'; ?>
    </button>
    <button class="button" name="buttonPressed" value="close">
        Закрыть
    </button>
</div>
<?php  $this->endWidget();?>
<script>
<?php if(Yii::app()->user->hasFlash('saved')): ?>
    alert("<?php echo Yii::app()->user->getFlash('saved'); ?>");
<?php endif; ?>
</script>
