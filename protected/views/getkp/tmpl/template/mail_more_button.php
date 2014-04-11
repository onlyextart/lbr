<!-- Ссылка-кнопка подробнее -->
<?php
    if($colspan !== false){
        $col = 'colspan="'.$colspan.'"';
    }
?>
<tr>
    <td <?php echo $col; ?> style="<?php echo $style; ?>">
        <a href="<?php echo $link; ?>" target="_blank" style="text-decoration: none; border: 0;">
            <img src="http://www.lbr.ru/images/kp/default/button_more_orange.jpg" width="174" style="text-decoration: none; border: 0; float: right;" alt="Картинки не отображаются">
        </a>
    </td>
</tr>