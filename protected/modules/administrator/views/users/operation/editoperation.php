<?
    $submit_text = 'Сохранить';
    $name = $model->name;
    $delete_button = CHtml::submitButton('Удалить операцию', array('id'=>'del_'.$model->name,'class'=>'btn del', 'formaction'=>'/administrator/users/deleteoperation/name/'.$model->name));
    $header_form = 'Редактирование роли '.$name;
    if ($model->isNewRecord){
        $submit_text = 'Создать';
        $name = 'new';
        $header_form = 'Создание новой операции';
        unset($delete_button);
    }
?>

<div class="header-form">
    <? echo $header_form; ?>
</div>
<? $form = $this->beginWidget('CActiveForm', array('id'=>'form_'.$model->name)); ?>

<div class="buttons">
<?  echo $delete_button; 
    echo CHtml::button('Закрыть операцию', array('onclick'=>'$(".total .right").html(" ");','class'=>'btn'));
    echo CHtml::submitButton($submit_text, array('id'=>'but_'.$name,'class'=>'btn btn-green'));
?>
</div>

<div class="name field">
    <?
    echo $form->error($model, 'name'); 
    echo $form->labelEx($model, 'name');
    echo $form->textField($model, 'name');
    ?>
</div>
<div class="description field">
    <? 
    echo $form->error($model, 'description');
    echo $form->labelEx($model, 'description');
    echo $form->textarea($model, 'description');
    ?>
</div>
<div style="display:none;">
    <?
    echo $form->hiddenField($model,'type');
    echo $form->hiddenField($model,'bizrule');
    echo $form->hiddenField($model,'data');
    ?>
</div>
<? $this->endWidget(); ?>