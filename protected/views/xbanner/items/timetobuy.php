<?php
    $class_ = $image->type=='1'?'':'action';
?>
<div class="time_to_buy <? echo $class_;?>">
    <div class="time_to_buy_description">
        <span><?php echo $image->description; ?></span>
    </div>

    <?php if($image->top_left):?>
        <div class="time_to_buy_top_left">
            <?php if($image->type=='1'): ?>
                <span>экономия</span>
                <span><?php echo $image->top_left;?> %</span>
            <?php endif;?>
        </div>
    <?php endif;?>

    <?php if($image->top_right):?>
        <div class="time_to_buy_top_right">

        </div>
    <?php endif;?>

    <?php if($image->bottom_right):?>
        <div class="time_to_buy_bottom_right">
        </div>
    <?php endif;?>

    <?php if($image->bottom_left):?>
        <div class="time_to_buy_bottom_left">
            <span><?php echo $image->bottom_left; ?></span>
        </div>
    <?php endif;?>

</div>