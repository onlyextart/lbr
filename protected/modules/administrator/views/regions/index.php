<h3>Список регионов</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'name', 
        'district_id'=> array (
        'name'=> 'district_id',
        'value'=> 'Yii::app()->params["districts"][$data->district_id]',
        ),
        'contact_id'=> array (
        'name'=> 'contact_id',
        'value'=> '$data->contact->name',
        ),
        'published'=> array(
        'name'=> 'published',
        'value'=> '($data->published==1)?"Опубликовано":"Не опубликовано"',
        ),           
       
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        ),
    ),
));

?>
<a href="/administrator/regions/create/" class="btn btn-green" >Создать регион</a>
<script>
    $(function() {
        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>