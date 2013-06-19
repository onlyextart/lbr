<div class="search">
    <div class="search-form">
            <? echo CHtml::form('/search/', 'GET', array('id'=>'search-form'));?>
            <div class="search-metod">
                <h1>Поиск по сайту</h1>
                <span>Все результаты</span>
                <a href="/search/image/<? echo $q?'?q='.urlencode($q):'';?>">Картинки</a>
                <a href="/search/video/<? echo $q?'?q='.urlencode($q):'';?>">Видео</a>
            </div>
            <div class="query-field">
                <? echo CHtml::textField('q', $q?$q:'Найти на сайте...', array('id'=>'query', 'class'=>$q?'':'nofocus', 'autocomplete'=>'off'))?>
                <div class="quick-result"></div>
            </div>
            <button class="btn green" type="submit" form="search-form">Найти</button>
        <? echo CHtml::endForm();?>
    </div>
    <div class="search-result">
        <? 
        if ($result)
            var_dump ($result);
        if ($q && !empty($q))
        {
            echo '<div><p>'.$q.'</p></div>';
        }
        ?>
    </div>
</div>
    