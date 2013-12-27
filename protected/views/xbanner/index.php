<?php
    Yii::app()->clientScript->registerScriptFile('/js/site/AjaxMakersDescriptionLoader.js');
    Yii::app()->clientScript->registerScriptFile('/js/site/banners.js');
    
    if(Yii::app()->params['currentMenuItem']->header && Yii::app()->params['currentMenuItem']->header!=''){
        echo '<h1>'.Yii::app()->params['currentMenuItem']->header.'</h1>';
    }
    
    switch (Yii::app()->params['currentMenuItem']->level)
    {
        case '1':
        case '2':
        case '3':
            $item = 'items/_section';
        break;
        case '4':
            $item = 'items/_subsection';
        break;
        default :
            $item = 'items/_category';
        break;
    }
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'itemView'=>$item, // представление для одной записи
        'ajaxUpdate'=>false, // отключаем ajax поведение
        'emptyText'=>'Нет баннеров',
        'itemsTagName'=>'div',
        'itemsCssClass'=>'xbanners',
        'pager'=>false,
        'id'=>'xbanners',
        'template'=>'{items}',
        'htmlOptions'=>array('class'=>'xbanners_container')
    ));