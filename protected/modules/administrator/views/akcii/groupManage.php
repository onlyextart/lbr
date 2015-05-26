<style>
    .admin_main_features{float:left; width:60%;}
    .admin_additional_features{float:left; width:40%;}
    .button-column img{width:16px; height:16px;}
</style>
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
    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'group_form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:function(form, data, hasError){
                                if(!hasError){
                                    $.ajax({
                                            "type":"POST",
                                            "url":$("#group_form").attr("action"),
                                            "data":form.serialize(),
                                            "success":function(data){$("#test").html(data); setTimeout(function(){
                                                alertify.success("Сохранено");
                                            }, 500);},
                                    });
                                }
                                else{
                                    alertify.error("Поля формы заполнены не верно");
                                }
                            }'
            ),
        )
    );?>
    <div class="row">
        <?php echo $form->error($groupAkciiModel, 'description'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'description'); ?>
        <?php echo $form->textField($groupAkciiModel, 'description'); ?>
    </div>
    <div class="row">
        <?php echo CHtml::SubmitButton($groupAkciiModel->isNewRecord?'Создать':'Сохранить',array('class'=>'btn btn-green')); ?>
    </div> 
    <?php $this->endWidget(); ?>
</div>
