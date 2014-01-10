<?php
echo CHtml::openTag('div', array(
            'region_id'=>$productRegionalDataModel->filial_id,
            //'region_id'=>'test',
        )
    );
    echo CHtml::textArea(
            "ProductsRegion[$productRegionalDataModel->filial_id][additional_review]",
            $productRegionalDataModel->additional_review,//value
            array(
                'class'=>'with_tinymce',
                'style'=>'width:80%;'
            )
    );    
echo CHtml::closeTag('div');
?>