<?php
if($data){
//    var_dump($data);
    echo '<div class="result-69">';
        echo '<div class="result-header">Возможно Вы искали</div>';
            foreach ($data as $item){
                $model = SearchIndex::model()->find('menu_item_id='.$item->menu_item_id);
                    echo '<div class="one-result">';
                        echo '<div class="one-header">';
                            $href = CategoryUrlRule::getUrl($item->menu_item_id);
                            $link = '<a href="'.$href.'/" title="'.$model->header.'">'.$model->header.'</a>';
                            echo $link;
                        echo '</div>';
                        echo '<div class="one-content">';
                            $conte = mb_eregi_replace('/ {2,}/i',' ', $model->content);
                            $content = mb_strcut($conte, 0, 341);
                            echo '<p>'.$content.'...</p>';
                        echo '</div>';
                    echo '</div>';
            }
    echo '</div>';
}