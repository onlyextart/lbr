<div class="search">
    <div class="search-form">
            <?php echo CHtml::form('/search/', 'GET', array('id'=>'search-form'));?>
            <div class="search-metod">
                <h1>Поиск по сайту</h1>
                <span>Все результаты</span>
                <a href="/search/image/<?php echo $q?'?q='.urlencode($q):'';?>">Картинки</a>
                <a href="/search/video/<?php echo $q?'?q='.urlencode($q):'';?>">Видео</a>
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
        if ($result){
            var_dump($result);
//            foreach ($result as $table=>$item){
                //$link = CategoryUrlRule::getUrl($item['item_id']);?>
                <div class="one-result">
                    <a href="<?php echo $link;?>/"><?php echo $item['name'];?></a>
                    <div class="small-link"><?php echo $_SERVER['HTTP_HOST'].$link;?></div>
                    <div class="o-r-description"><?php echo substr(strip_tags($item['review']), 0, 400).'...';?></div>
                </div>  
            <?php // }
            $this->widget('CLinkPager', array(
                'pages' => $pages
            ));
        }
        
        ?>
    </div>
</div>