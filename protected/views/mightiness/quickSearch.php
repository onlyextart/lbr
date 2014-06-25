<?php
if(!empty($data)) {
    foreach ($data as $li) {
       if(isset($li['reduction'])) {
          echo '<li><span s-id="'.$li['id'].'">'.$li['title'].' ('.$li['reduction'].')</span></li>';
       } else echo '<li><span s-id="'.$li['id'].'">'.$li['title'].'</span></li>';
    } 
} else {
   echo '<li>Совпадений нет ...</li>';
}

