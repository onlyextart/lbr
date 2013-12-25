<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $submit_text = 'Сохранить';
    $name = $model->id;
    $delete_button = CHtml::link('Удалить страницу', '/administrator/pages/deletepage/id/'.$model->id, array('id'=>'del_'.$model->name,'class'=>'btn del', 'onclick'=>'return confirm("Внимание! Страница будет безвозвратно удалена. Продолжить?")'));
    $header_form = 'Редактирование страницы '.$model->name;
    $action = '/administrator/pages/editpage/id/'.$model->id.'/';
    if ($model->isNewRecord){
        $submit_text = 'Создать';
        $name = 'new';
        $header_form = 'Создание новой страницы';
        $action = '/administrator/pages/createpage/';
        unset($delete_button);
    }
    $list_region = '<ul class="region_list">';
    foreach (Contacts::getFilialsArray() as $id_key=>$name)
    {
        $list_region .= '<li class="region" value="'.$id_key.'">'.$name.'</li>';
    }
    $list_region .= '</ul>';
?>
<div class="form">
<div class="header-form">
    <? echo $header_form; ?>
</div>
<? $form = $this->beginWidget('CActiveForm', array('id'=>'form'.$model->id,
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
<?  echo $delete_button; 
    echo CHtml::button('Закрыть',array('onclick'=>'$(".total .right").html(" ");','class'=>'btn'));
    echo CHtml::submitButton($submit_text, array('id'=>'but_'.$name,'class'=>'btn btn-green')); 
?>
</div>
<div class="field">
<?  echo $form->error($model, 'name'); 
    echo $form->labelEx($model, 'name');
    echo $form->textField($model, 'name');?>    
</div>
    
<div class="field published">
<?  echo $form->error($model, 'published'); 
    echo $form->labelEx($model, 'published');
    echo $form->checkBox($model, 'published');?>    
</div>
    
<div id="tabs">
<? 
    $filials = Contacts::getFilialsArray();
    $tabs_name = '<li><span id="add_tab">Добавить регион</span>'.$list_region.'</li>';
    $tabs_content = '';
    
if ($model->isNewRecord){
    $tabs_name .= '<li><a href="#tab-'.Yii::app()->params->defaultRegionId.'">'.$filials[Yii::app()->params->defaultRegionId].'</a></li>';
    $tabs_content .= '<div id="tab-'.Yii::app()->params->defaultRegionId.'">'
                        .CHtml::textArea('Content['.Yii::app()->params->defaultRegionId.']').'</div>';
}else{
    foreach($model->pagesRegions as $item){
        $tabs_content .= '<div id="tab-'.$item->filial_id.'">'
                        .CHtml::textArea('Content['.$item->filial_id.']', $item->content).'</div>' ;
        $tabs_name .= '<li><a href="#tab-'.$item->filial_id.'">'.$filials[$item->filial_id].'</a><span class="ui-icon ui-icon-close del_tab" role="presentation" value="'.$item->filial_id.'">Remove Tab</span></li>';
    }
}
?>
    <ul><? echo $tabs_name; ?></ul>
    <div><? echo $tabs_content; ?></div>
</div>
<div class="admin_additional_features_content">
    <div class="header-h4">Пункты меню на которых отображается страница</div>
<?php
    //получение массива дерева меню
    function getMenuItemConteintigStatusClosure( $model )
    {
        $status = function( $menuItemId ) use ( &$model ){       
            return $model->hasMenuItem( $menuItemId );       
        };
        return $status;
    }
    $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure( $model );
//     $roots = MenuItems::model()->roots()->findAll();
    $this->widget('CTreeView', array(
        'data' => MenuItems::getMenuTreeWithCheckbox(
//                $roots, 
                'MenuItemConteintigThisPage', 
                $menuItemConteintigStatusClosure,
                array(MenuItems::STATIC_MENU_ITEM_TYPE)
            ), 
        'animated'=>100, 
        'htmlOptions'=>array(
            'class'=>'menuTreeView'
            )
        )
    );
?>
</div>
<? $this->endWidget();?>
</div>