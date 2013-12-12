<h1>Поиск - Индексирование страниц</h1>
<div class="search-status-panel">
    <div class="search-status-text">
        <span>Всего страниц: <?php echo $status['count_no_index']+$status['count_in_search']+$status['count_no_search'];?></span>
        <span>Не проиндексированные: <?php echo $status['count_no_index'];?></span>
        <span>Участвуют в поиске: <?php echo $status['count_in_search'];?></span>
        <span>Не участвуют в поиске: <?php echo $status['count_no_search'];?></span>
    </div>
</div>
<div class="search-status-button right-panel">
    <form action="/administrator/search/reindex/" id="reindex-form" method="post">
        <div class="search-reindex">
            <div class="search-reindex-button">Реиндексация страниц</div>
            <div class="search-reindex-params">
                <div class="search-reindex-group-params">
                    <span>Типы индексируемых страниц:</span>
                    <div class="search-reindex-one-param">
                        <input id="reindex_product" name="reindex[tables][products]" type="checkbox" value="1"/>
                        <label for="reindex_product">Товары</label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_cat" name="reindex[tables][banners]" type="checkbox" value="0"/>
                        <label for="reindex_cat">Категории</label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_contact" name="reindex[tables][contacts]" type="checkbox" value="1"/>
                        <label for="reindex_contact">Контакты</label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_news" name="reindex[tables][news]" type="checkbox" value="1"/>
                        <label for="reindex_news">Новости</label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_static" name="reindex[tables][pages]" type="checkbox" value="1"/>
                        <label for="reindex_static">Статические страницы</label>
                    </div>
                </div>
                <div class="search-reindex-group-params">
                    <span>Статус:</span>
                    <div class="search-reindex-one-param">
                        <input id="reindex_status_0" name="reindex[status]" type="radio" value="0"/>
                        <label for="reindex_status_0"><?php echo SearchIndex::$status[0]?></label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_status_1" name="reindex[status]" type="radio" value="1" checked="checked"/>
                        <label for="reindex_status_1"><?php echo SearchIndex::$status[1]?></label>
                    </div>
                    <div class="search-reindex-one-param">
                        <input id="reindex_status_2" name="reindex[status]" type="radio" value="2"/>
                        <label for="reindex_status_2"><?php echo SearchIndex::$status[2]?></label>
                    </div>
                </div>
             <button type="submit" class="btn btn-green">Запустить</button>
            </div>
        </div>
    </form>
</div>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$data,
        'id'=>'search-index',
        'itemsCssClass'=>'results',
        'itemView'=>'index/_item', // представление для одной записи
        'ajaxUpdate'=>true, // отключаем ajax поведение
        'emptyText'=>'Нет страниц',
        'template'=>'{sorter} {items} {pager}',
        'sorterHeader'=>'',
        'itemsTagName'=>'ul',
        'sortableAttributes'=>array('header','type', 'status','date'),
        'pager'=>array(
            'class'=>'CLinkPager',
            'header'=>false,
            'prevPageLabel'=>'<',
            'nextPageLabel'=>'>',
            'lastPageLabel'=>'>>',
            'firstPageLabel'=>'<<'
        ),
    ));
    ?>


<?php if($data->pagination->pageCount!=0) { ?>
    <style>
    #search-index .pager ul.yiiPager li.page{
        width: <?php echo 100/$data->pagination->pageCount; ?>%;
    }
    </style>
<?php }
