<?php
echo CHtml::openTag('div', array(
            'region_id'=>$eventRegionalDataModel->filial_id,
            
        )
    );?>
    <label for="tab_region_title">Описание</label> 
 <?php   echo CHtml::textArea(
            "NewsRegion[$eventRegionalDataModel->filial_id][description]",
            $eventRegionalDataModel->description,//value
            array(
                'style'=>'width:100%;'
            )
            ); 
    echo CHtml::textArea(
            "NewsRegion[$eventRegionalDataModel->filial_id][content]",
            $eventRegionalDataModel->content,//value
            array(
                'class'=>'with_tinymce',
                'style'=>'width:80%;'
            )
    );    

   
echo CHtml::closeTag('div');

?>