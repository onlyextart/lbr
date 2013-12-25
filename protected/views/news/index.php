<h1>Новости ЛБР-АгроМаркет</h1>

<?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $data,
        
        'itemView'     => 'items/_view',
        'ajaxUpdate'   => false, 
        'emptyText'    => 'Нет новостей',
        'itemsTagName' => 'ul',
        'summaryText'  => 'Показано {start}&mdash;{end} из {count}',
        'template'     => '{summary}{items}{pager}',
        'pager'        => array(
            'class'  => 'LinkPager',
            'header' => false,
            'firstPageLabel' => 'В начало',
            'prevPageLabel'  => 'Назад',
            'nextPageLabel'  => 'Вперёд',
            'lastPageLabel'  => 'В конец',   
        )
    )); 
    
 //$this->widget('LinkPager', array(
    //'pages' => $pages,
 //));
    //echo '<div class="pageNumbers" style="clear: right; float: none;">' . 'Current page is ' . (int)($data->pagination->getCurrentPage()+1) . '</div>';




