<h1>Технологический цикл</h1>
<div class="grid-wrapper">
<?php
//echo '<pre>';
//var_dump($data);exit;
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'userListGrid',
        'dataProvider'=>$data,
        'template'=>'{items}',
        'columns' => array(
            array( 
                'name'=>'title',
                'type'=>'raw',
                'value'=>'CHtml::link($data["title"], array("edit","id"=>$data["id"]))',
            ),
        ),
    ));
?>
</div>