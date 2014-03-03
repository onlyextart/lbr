<?php

if (is_array($data)){
    foreach ($data as $t){
        foreach ($t as $mess=>$res){
            echo '<p>Таблица "'.$mess.'" успешно проиндексирована. Страниц '.count($res).'</p>';
            echo '<div style="display:none;"><ul>';
            foreach ($res as $page){
                echo '<li><span>'.$page['menu_item_id'].'</span>';
                echo '<span>'.$page['header'].'</span></li>';
            }
            echo '</ul></div>';
        }
    }
}else{
    echo $data;
}

