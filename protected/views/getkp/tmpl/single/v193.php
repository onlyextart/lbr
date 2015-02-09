<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
     Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td style="padding:15px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/193-pronar/mail-1.jpg" width="800" style="border: 0; float: left;" alt="Изображения не отображаются">
         </td>
    </tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td style="padding:15px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/192-pronar/mail-2.jpg" width="800" style="border: 0; float: left;" alt="Изображения не отображаются">
         </td>
    </tr>
</table>


<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>






