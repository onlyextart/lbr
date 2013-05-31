<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<div class="header-form">';
echo($model->isNewRecord?'Создание нового пользователя':'Редактирование пользователя '.$model->name.' '.$model->surname);
echo '</div>';
$form = $this->beginWidget('CActiveForm', array('id'=>'form'.$model->id));

echo '<div class="buttons">';

if ($model->isNewRecord){
    echo CHtml::submitButton('Создать', array('class'=>'btn btn-green'));
    echo CHtml::button('Закрыть',array('onclick'=>'$(".total .right").html(" ");','class'=>'btn'));
}else{
    echo CHtml::submitButton('Удалить пользователя', array('id'=>'del'.$model->id,'class'=>'btn del', 'formaction'=>'/administrator/users/deleteuser/id/'.$model->id));
    echo CHtml::button('Закрыть',array('onclick'=>'$(".total .right").html(" ");','class'=>'btn'));
    echo CHtml::submitButton('Сохранить',array('id'=>'but'.$model->id,'class'=>'btn btn-green'));
}
echo "</div>";

echo '<div class="login field">';
echo $form->error($model, 'login'); 
echo $form->labelEx($model, 'login');
echo $form->textField($model, 'login');
echo '</div><div class="password field">';
echo CHtml::label('Пароль', 'User_password');
echo CHtml::passwordField('User_password', '', array('id'=>'User_password'));
echo '</div><div class="name field">';
echo $form->error($model, 'name'); 
echo $form->labelEx($model, 'name');
echo $form->textField($model, 'name');
echo '</div><div class="surname field">';
echo $form->error($model, 'surname'); 
echo $form->labelEx($model, 'surname');
echo $form->textField($model, 'surname');
echo '</div><div class="email field">';
echo $form->error($model, 'email');
echo $form->labelEx($model, 'email');
echo $form->emailField($model, 'email');
echo '</div><div class="group field">';
echo $form->error($model, 'group_id');
echo $form->labelEx($model, 'group_id');
echo $form->dropDownList($model, 'group_id', $group);
echo '</div>';
echo '<div style="display:none;">';
echo $form->hiddenField($model, 'password');
echo '</div>';
$this->endWidget(); 
?>