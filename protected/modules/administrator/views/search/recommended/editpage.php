<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $submit_text = 'Сохранить';
    $name = $model->id;
    $delete_button = CHtml::link('Удалить страницу', '/administrator/search/deletetop/id/'.$model->id, array('id'=>'del_'.$model->sorted,'class'=>'btn del', 'onclick'=>'return confirm("Внимание! Страница будет безвозвратно удалена. Продолжить?")'));
    $header_form = 'Редактирование Записи '.$model->sorted;
    $action = '/administrator/search/edittop/id/'.$model->id.'/';
    if ($model->isNewRecord){
        $submit_text = 'Создать';
        $name = 'new';
        $header_form = 'Создание новой записи';
        $action = '/administrator/search/createtop/';
        unset($delete_button);
    }
?>
<div class="form">
<div class="header-form">
    <?php echo $header_form; ?>
</div>
<?php $form = $this->beginWidget('CActiveForm', array('id'=>'form'.$model->id,
    'action'=>$action,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:function( form, data, hasError ) 
                                {     
                                    if( hasError ){
                                        return false;
                                    }
                                    else{
                                        return true;
                                    }
                                }'
    ),));
?>
<div class="buttons">
<?php  echo $delete_button; 
    echo CHtml::link('Закрыть','/administrator/search/top/',array('class'=>'btn'));
    echo CHtml::submitButton($submit_text, array('id'=>'but_'.$name,'class'=>'btn btn-green')); 
?>
</div>
<div class="content">
    <div class="field tree">
    <?php
        $children = MenuItems::model()->findAll(array('condition'=>'published=1 ORDER BY lft'));
        Banners::getList($children, $model->menu_item_id);
        echo $form->hiddenField($model, 'menu_item_id');?>    
    </div>
    <div class="field">
    <?php
        echo $form->error($model, 'sorted'); 
        echo $form->labelEx($model, 'sorted');
        echo $form->textField($model, 'sorted');?>    
    </div>
    <div class="field">
    <?php
        echo $form->error($model, 'text'); 
        echo $form->labelEx($model, 'text');
        echo $form->textArea($model, 'text');?>    
    </div>
</div>
<?php $this->endWidget();?>
</div>