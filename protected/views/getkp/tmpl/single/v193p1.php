<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link href="http://www.lbr.ru/css/printKp.css" type="text/css" rel="stylesheet" />
    <style>
        p{mso-line-height-rule:exactly !important; line-height: 13pt;}
        a, a:active, a:visited{color:black;}
    </style>
</head>
<body style="background: white; margin: 0; padding: 0; border: 0;">
<table width="800" bgcolor="white" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr>
                        <td style="padding: 10px 0px 10px 20px;">
                            <div class="header-text">
                                <?php echo $data['header']; ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
 </table>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td style="padding:10px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/193-pronar/mail-1.jpg" width="800" style="border: 0; float: left;" alt="Изображения не отображаются">
         </td>
    </tr>
</table>
<!-- Первый блок -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td style="padding:0px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/193-pronar/mail-2.jpg" width="800" style="border: 0; float: left;" alt="Изображения не отображаются">
         </td>
    </tr>
    <tr valign="top">
    <td  style="padding: 0px 20px 0;">
        <?php
        if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
        endif;
        ?>
    </td>
    </tr>
</table>

</body>






