<?php

if ($data->image_type=='1')
{
    echo '<div class="review_photo time_to_buy">';
    echo '<img src="'.$data->image.'" alt="'.$data->name.'" title="'.$data->name.'">';
    echo $data->image_top_left ? '<span class="time_to_buy_top_left">'.$data->image_top_left.'</span>':'';
    echo $data->image_top_right ? '<img src="/images/timetobuy/subsid.png" alt="Субсидируется" class="time_to_buy_top_right">':'';
    echo $data->image_bottom_right ? '<span class="time_to_buy_bottom_right">'.$data->image_top_left.'</span>':'';
    echo $data->image_bottom_left ? '<img src="/images/timetobuy/oneSeason.png" alt="Окупается за один сезон!" class="time_to_buy_bottom_left">':'';
}else{
    echo '<div class="review_photo">';
    echo '<img src="'.$data->image.'" alt="'.$data->name.'" title="'.$data->name.'">';
}
echo '</div>';
?>
