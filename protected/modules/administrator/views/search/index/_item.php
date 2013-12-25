<li class="row" id="i_<?php echo $data->id; ?>">
<?php
    $type = MenuItems::getMenuItemsType();
    echo '<span class="header">'.$data->header.'</span>'; 
    echo '<span class="type">'.$type[$data->type].'</span>'; 
    echo '<span class="status">'.  SearchIndex::$status[$data->status].  '</span>'; 
    echo '<span class="date">'.$data->date.'</span>'; 
?>
</li>