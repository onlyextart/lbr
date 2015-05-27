<style>
    .admin_main_features{float:left; width:60%;}
    .admin_additional_features{float:left; width:40%;}
    .button-column img{width:16px; height:16px;}
</style>
<?php
/*
 * $model модель групп меню
 */
if($groupAkciiModel->isNewRecord){
    $pageHeader = 'Создание группы';
}
else{
    $pageHeader = 'Редактирование группы';
}
?>
<h2>
    <?php echo $pageHeader ?>
</h2>
<div class="mightiness-menu-label menu_color_group_<?php echo $groupAkciiModel->menu_items->group_id; ?>" style="background-image: url(<?php echo Yii::app()->request->baseUrl.$groupAkciiModel->menu_items->mightiness_ico; ?>">
        <span><?php echo $groupAkciiModel->menu_items->name; ?></span>
</div>
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
        <?php echo $form->error($groupAkciiModel, 'id'); ?>
        <?php echo $form->labelEx($groupAkciiModel, 'id'); ?>
        <?php echo $form->textField($groupAkciiModel, 'id'); ?>
    </div>
    <div class="row">
        <?php 
            echo CHtml::SubmitButton($groupAkciiModel->isNewRecord?'Создать':'Сохранить',array('class'=>'btn btn-green')); 
            echo CHtml::link('Закрыть', '', array('class'=>'btn del', 'onclick'=>'$("#menu_features").html(" ")'));
        ?>
    </div> 
    <?php $this->endWidget(); ?>
</div>
