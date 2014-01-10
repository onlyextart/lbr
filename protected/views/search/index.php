<div class="search">
    <div class="search-form">
            <?php echo CHtml::form('/search/', 'GET', array('id'=>'search-form'));?>
            <div class="search-metod">
                <h1>Поиск по сайту</h1>
                <span>Все результаты</span>
<!--                <a href="/search/image/<?php echo $q?'?q='.urlencode($q):'';?>">Картинки</a>
                <a href="/search/video/<?php echo $q?'?q='.urlencode($q):'';?>">Видео</a>-->
            </div>
            <div class="query-field">
                <?php echo CHtml::textField('q', $q?$q:'Найти на сайте...', array('id'=>'query', 'class'=>$q?'':'nofocus', 'autocomplete'=>'off')); ?>
                <ul class="quick-result"></ul>
            </div>
            <button class="btn green" type="submit" form="search-form">Найти</button>
        <?php echo CHtml::endForm();?>
    </div>
    <div class="search-result">
        <?php 
        if($empty){
            if($q){
                echo '<p class="not-query">По вашему запросу "'.$q.'" ничего не найдено.</p>';
            }
             Yii::app()->getController()->renderPartial('empty', array('data'=>$empty));
        }else if ($result){
            $l = 0;
            if(count($result)==1){
                $l = 69;
            }
            $label = SearchLog::labelTypes();
            foreach ($result as $name=>$r){
                echo '<div class="result-'.$l.'">';
                echo '<div class="result-header">'.$label[$name].'</div>';
                foreach ($r as $item){
                $href = CategoryUrlRule::getUrl($item['menu_item_id']);
                $link = '<a href="'.$href.'/" title="'.$item['header'].'">'.$item['header'].'</a>';
                $url = CategoryUrlRule::getParents($item['menu_item_id']);
                    echo '<div class="one-result">';
                        echo '<div class="one-header">';
                            echo $link;
                        echo '</div>';
                        echo '<div class="one-breadcrums">';
                            for($i=0; $i<count($url); $i++){
                                if($url[$i]['id']=='56' || ($url[$i]['header']=='' && $url[$i]['path']=='/index')){
                                    $url[$i]['header'] = 'Главная';
                                    $url[$i]['path'] = '';
                                }
                                echo '<span class="one-bread-item"><a href="'.$url[$i]['path'].'/" title="'.$url[$i]['header'].'">'.$url[$i]['header'].'</a></span>';
                                echo '<span class="one-bread-divider">»</span>';
                            }
                            echo '<span class="one-bread-item">'.$link.'</span>';
                        echo '</div>';
                        echo '<div class="one-content">';
                            if(count($query)>1)
                            {
                                $query[0]=$query[1];
                            }
                            $str_start = stripos($item['content'], $query[0]);
                            $conte = mb_eregi_replace('/ {2,}/i',' ', $item['content']);
                            $content = mb_strcut($conte, $str_start, 340);
                            foreach ($query as $onequery)
                            {
                                $patterns = "/(".$onequery.")+/i";
                                $conte = preg_replace($patterns, "<b>$1</b>", $content);
                            }
                            echo '<p>'.$conte.'...</p>';
                        echo '</div>';
                    echo '</div>';
                }
                $this->widget('CLinkPager', array(
                    'pages' => $pages[$name],
                    'header'=>false,
                    'prevPageLabel'=>'<',
                    'nextPageLabel'=>'>',
                    'lastPageLabel'=>'>>',
                    'firstPageLabel'=>'<<'
                ));
                echo '</div>';
                if($pages[$name]->pageCount!=0) { 
                    $c = ($pages[$name]->pageCount+4);
                    ?>
                    <style>
                    .wrapper .search .search-result .result-<?php echo $l;?> ul.yiiPager li{
                        width: <?php echo round(100/($c>14?14:$c), 2); ?>%;
                    }
                    </style>
            <?php }
                $l++;
            }
        }
        
        ?>
    </div>
</div>
