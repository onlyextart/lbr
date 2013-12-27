<?php
//Banners list/
?>
<h3>Список баннеров</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array(
            'header'=>'Имя', 
            'value'=>'$data->bannerRegions[0]->name',
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{update}{delete}',
        ),
    ),
));

?>
<a href="/administrator/banners/create/" class="btn btn-green">Создать баннер</a>
<script>
    $(function() {
        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>