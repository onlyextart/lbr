<?php

if ($data->image_type=='1' || $data->image_type=='2' || $data->image_type=='3')
{
    $class_ = $data->image_type!='2'? '' : 'action';
    echo '<div class="review_photo time_to_buy '.$class_.'">';
    echo '<img src="'.$data->image.'" alt="'.$data->name.'" title="'.$data->name.'">';
    echo $data->image_top_left ? '<span class="time_to_buy_top_left">'.$data->image_top_left.'</span>':'';
    echo $data->image_top_right ? '<img src="/images/timetobuy/subsid.png" alt="Субсидируется" class="time_to_buy_top_right">':'';
    
    if($data->image_type=='3')
        echo $data->image_bottom_right ? '<img class="time_to_buy_bottom_right credit" src="/images/timetobuy/credit.png" alt="Рассрочка">':'';
    else
        echo $data->image_bottom_right ? '<span class="time_to_buy_bottom_right">'.$data->image_bottom_right.'</span>':'';
    
    echo $data->image_bottom_left ? '<img src="/images/timetobuy/oneSeason.png" alt="Окупается за один сезон!" class="time_to_buy_bottom_left">':'';
}else{
    echo '<div class="review_photo">';
    echo '<img src="'.$data->image.'" alt="'.$data->name.'" title="'.$data->name.'">';
}
echo '</div>';