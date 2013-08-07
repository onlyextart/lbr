<div id="howtosell_content">
<?php
if (Yii::app()->user->checkAccess('editHowToSell'))
{
    Yii::app()->getController()->renderPartial('how-to-sell/edit', array('data'=>$data));
}
echo $data[0]->content;
?>
</div>
<style>
    .wrapper #content .product_wrapper .product_content ul.product_tab_button li#howtosell
    {
        position: fixed;
        left: 185px;
        bottom: 0;
        color: white;
        background: url("/images/icon-panel-admin.png") no-repeat scroll 5px 0px;
        cursor: pointer;
        z-index: 1000;
        height: auto;
        width: auto;
        display: inline;
        font-size: 1em;
        font-weight: normal;
        line-height: 22px;
        padding: 5px 13px 5px 33px;
        /*border-right: 2px ridge #b3b3b3;*/
    }
    .wrapper #content .product_wrapper .product_content ul.product_tab_button li#howtosell.active_tab, .wrapper #content .product_wrapper .product_content ul.product_tab_button li#howtosell:hover
    {
        background-position: 5px -32px;
        color: #333;
    }
    .wrapper #content .product_wrapper .product_content ul.product_tab_button li#howtosell:before
    {
        border: 0;
    }
</style>
