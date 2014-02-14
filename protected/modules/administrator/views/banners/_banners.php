<?php
echo '<div class="banners">';
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$banners,
        'itemView'=>'_item', // представление для одной записи
        'ajaxUpdate'=>false, // включаем ajax поведение
        'emptyText'=>'Нет Банеров',
        'template'=>'{items}{sorter}',
        'itemsTagName'=>'ul',
        'viewData'=>array('count'=>$banners->itemCount)
    ));
echo '</div>';