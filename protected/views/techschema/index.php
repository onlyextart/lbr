<h1>По технологическому циклу</h1>
<div id="tech-schema">
<?php 
/*
$form = $this->beginWidget('CActiveForm', array(
    'action' => '/selskohozyaystvennaya-tehnika/techschema/',
    'enableClientValidation' => true,        
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'afterValidate'=>'js:function( form, data, hasError ) 
        {     
            if( hasError ) {
                return false;
            }
            else{
                return true;
            }
        }'
    ),
));
*/
?>
     
     <?php $roots = TechSchema::model()->roots()->findAll(); ?>
     <?php if(!empty($roots)): ?>
        <?php foreach ($roots as $root): ?>
        <div>
            <span><?php echo $root->title; ?></span>
            <?php $cycle = TechSchema::model()->findByPk($root->id);
               $descendants=$cycle->descendants()->findAll();
               foreach ($descendants as $descendant):       
            ?>
            <p><?php echo CHtml::CheckBox('chk_group['.$descendant->id.']') . $descendant->title ?></p>
            <?php endforeach;?>
        </div>
        <?php endforeach;?>
    <?php endif; ?>
    <div><?php echo CHtml::button('Подобрать',array('id'=>'load-tech-schema', 'class'=>'btn'));//echo CHtml::submitButton('Подобрать', array('class'=>'btn')); ?></div>
    <div style="clear: both"></div>
<?php //$this->endWidget(); ?>
</div>
<div id="tech-schema-results">
    <?php //if(!empty($data)): ?>
    <!--table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
           <?php //foreach($data as $key => $value): ?>
              <td rowspan="2"><?php //echo $key; ?></td>
              <?php //foreach($value as $v): ?>
                 <td><?php //echo $v; ?></td>
              <?php //endforeach; ?>
           <?php //endforeach; ?>
        </tr>
        <tr>
            <?php //foreach($productList as $products): ?>
                <td>
                    <?php //if(!empty($products)): ?>
                    <ul>
                        <?php //foreach($products as $product): ?>
                        <li><?php //echo $product; ?></li>
                        <?php //endforeach; ?>
                    </ul>
                    <?php //endif; ?>
                </td>
            <?php //endforeach; ?>
        </tr>
    </table-->
    <?php //endif; ?>
</div>
<script>
(function($){
    $('#load-tech-schema').on('click', function() {
        var schemaIds = [];
        var nodes = $('input[name^=chk_group]');

        for (var i = 0, n; n = nodes[i]; i++) {
            if (n.checked == true) {
                name = n.name;
                index = name.indexOf(']'); 
                id = name.substring(10, index); 
                schemaIds.push(id);
            }
        }
        //alert(schemaIds);
        $.ajax({
            type: 'POST',
            url: '/selskohozyaystvennaya-tehnika/techschema/',
            dataType: 'json',
            data:{
                schemaIds: schemaIds,
                //productId: <?php //echo $productModel->id; ?>,
            },
            success: function(response) {
                $('#tech-schema-results').html(response.data);
            }
        });
    });
})(jQuery);
</script>