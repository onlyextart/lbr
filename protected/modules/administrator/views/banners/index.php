<?php
    Yii::app()->clientScript->registerCssFile('/css/admin/banners/banners.css');
    Yii::app()->clientScript->registerScriptFile('/js/admin/AjaxContentLoader.js');
    Yii::app()->clientScript->registerScriptFile('/js/admin/AdminBannersFilter.js');
    Yii::app()->clientScript->registerScriptFile('/js/admin/banners.js');
?>
<h3>Каталог - Управление баннерами</h3>
<?php
echo '<div class="left-20">';
    echo '<div id="menu-filter">';
        Banners::getList($select, $change);
    echo '</div>';
    echo '<div id="menu_subfilter">';
        Yii::app()->getController()->renderPartial('_subfilter', array('children'=>$children, 'change'=>$subchange));
    echo '</div>';
echo '</div>';
echo '<div class="left-80">';
    echo '<div class="panel">';
        echo '<a href="/administrator/banners/create/" class="btn btn-green">Создать баннер</a>';
    echo '</div>';
    echo '<div class="banners-content">';
        Yii::app()->getController()->renderPartial('_banners', array('banners'=>$banners));
    echo '</div>';
echo '</div>';
//$this->widget('zii.widgets.grid.CGridView', array(
//    'dataProvider'=>$dataProvider,
//    'columns'=>array(
//        array(
//            'header'=>'Имя', 
//            'value'=>'$data->bannerRegions[0]->name',
//        ),
//        array(
//            'class'=>'CButtonColumn',
//            'template'=>'{update}{delete}',
//        ),
//    ),
//));

?>
<script>
    $(function() {
        <?php if(Yii::app()->user->hasFlash('saved')): ?>
            alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
        <?php endif; ?>
    });
</script>