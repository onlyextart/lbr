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

$ProdMenuItems = MenuItemsContent::model()->with('item')->findAll(
    'page_id=3 AND item.type='.MenuItems::PRODUCT_MENU_ITEM_TYPE
);
$banMenuItems = MenuItemsContent::model()->with('item')->findAll(
    'page_id=3 AND item.type='.MenuItems::BANNERS_MENU_ITEM_TYPE
);
var_dump($ProdMenuItems);
var_dump($banMenuItems);
?>