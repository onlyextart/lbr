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
        ),
    ));
    
    $titleLabel = 'Новости ЛБР-АгроМаркет';
    $lastPage = ceil($count/$data->pagination->pageSize);
    $loadedPage = (int)($data->pagination->getCurrentPage()+1);
    
    $prev = $loadedPage - 1;
    $next = $loadedPage + 1;
    Yii::app()->params['meta_pagerNext'] = '/company/events/page-'.$next.'/';
    Yii::app()->params['meta_pagerPrev'] = '/company/events/page-'.$prev.'/';
    if($prev == 1) Yii::app()->params['meta_pagerPrev'] = 'company/events/';
    
    if($loadedPage > 1) {
        $titleLabel = 'Новости ЛБР-АгроМаркет - страница '.$loadedPage;
        if($loadedPage == $lastPage) Yii::app()->params['meta_pagerNext'] = null;
    } else { //firstPage
        Yii::app()->params['meta_pagerPrev'] = null;
    }
    
    Yii::app()->params['meta_title'] = Yii::app()->params['currentMenuItem']->meta_title = $titleLabel;
