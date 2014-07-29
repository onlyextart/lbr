<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body style="background: #FFFFFF; margin: 0; padding: 0; border: 0;">
    <?php
    //$img_src = "http://www.lbr.ru/images/kp/time_to_by_kp/july_sampo/list1.jpg";
    //$imgbinary = file_get_contents($img_src);
    //$img_str = base64_encode($imgbinary);
    //echo '<img src="data:image/jpg;base64,' . $img_str . '" />';
    //?>
    

    <table width="840" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" style="border:0; border-collapse: separate;">
        <tr>
            <td>
                <!--Верхний блок-приветствие-->
                <table width="840" cellspacing="0" cellpadding="0" align="center" bgcolor="#eeeeee" style="border:0; border-collapse: separate;">
                    <tr>
                        <td style="padding: 0px 20px;">
                            <table width="800" cellspacing="0" cellpadding="0" align="center" bgcolor="#eeeeee"  style="border:0; border-collapse: separate;">
                                <tr>
                                    <td colspan="2" style="padding-top: 15px;"><img src="cid:mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                </tr>
                                <tr bgcolor="#FFFFFF" >
                                    <td style="padding: 0 5px; width: 635px;">
                                        <p style="padding: 0; font-size: 13pt; font-family: Calibri; color: #333333; margin: 0; text-align: center; line-height: 13pt; font-weight:bold; font-style: italic;">Уважаемый <?php echo $data['client']; ?>!</p>
                                        <p style="padding: 0; font-size: 13pt; font-family: Calibri; color: #333333; margin: 0; text-align: center; line-height: 13pt; font-weight:bold; font-style: italic;">Приобрести уборочную технику в разгар сезона </p>
                                        <p style="padding: 0; font-size: 13pt; font-family: Calibri; color: #333333; margin: 0; text-align: center; line-height: 13pt; font-weight:bold; font-style: italic;">по выгодной цене со скидкой? Запросто!</p>
                                        <p style="padding: 0; font-size: 13pt; font-family:  Calibri; color: #333333; margin: 0; text-align: center; line-height: 13pt; font-weight:bold; font-style: italic;"> Предлагаем вам комбайн Sampo со скидкой до 19 000 евро!</p>
                                    </td>
                                    <td width="150" style="padding-right:5px; background-clip:padding-box;" align="right">
                                        <a target="_blank" href="http://www.lbr.ru/?utm_source=google&utm_medium=email&utm_campaign=glavnaya" title="Сайт ЛБР-агромаркет" style=" text-decoration: none; border: 0;">
                                            <img src="cid:mail-lbr-logo-orange.jpg" width="150" style="border: 0; float: left;" alt="Нажмите отобразить рисунки">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding-bottom: 15px;">
                                        
                                        <img src="cid:mail-bot-line.jpg" width="800" style="border: 0; float: left;" alt="Нажмите отобразить рисунки"></td>
                                            
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>


                <!--Первая страница -->
                <table width="840" cellspacing="0" cellpadding="0" align="center" style="border:0; border-collapse: collapse;">
                    <tr>
                        <td>
                            <img src="cid:list1.jpg" width="840" style="border: 0; float: left;" alt="Нажмите отобразить рисунки">
                           
                        </td>
                    </tr>

                </table>



                <!-- Ссылка-кнопка подробнее -->
<?php
Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
    'link' => 'http://www.lbr.ru/tehnika/kombajny-zernouborochnye/sampo/476-kombajny-sampo-serii-3000/?utm_source=google&utm_medium=email&utm_campaign=glavnaya',
    'colspan' => '2',
    'style' => 'text-align: right; padding-top: 10px; padding-right: 0px;'
        )
);
?>
    </table>

    <!--Разделитель страниц -->
    <table width="840" cellspacing="0" cellpadding="0" align="center" style="border:0; border-collapse: separate;" bgcolor="#ffffff">
        <tr>
            <td height="30">
                &nbsp;
            </td>  
        </tr>
    </table>

    <!--Вторая страница-->
    <table width="840" cellspacing="0" cellpadding="0" align="center" bgcolor="" style="border:0; border-collapse: separate; bgcolor:#ffffff;">
        <tr>
            <td>
                <img src="http://www.lbr.ru/images/kp/time_to_by_kp/july_sampo/list2.jpg" width="840" style="border: 0; float: left;" alt="Нажмите отобразить рисунки"> 

            </td>
        </tr>
        <!-- Ссылка-кнопка подробнее -->
<?php
Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
    'link' => 'http://www.lbr.ru/tehnika/kombajny-zernouborochnye/sampo/476-kombajny-sampo-serii-3000/?utm_source=google&utm_medium=email&utm_campaign=glavnaya',
    'colspan' => false,
    'style' => 'text-align: right; padding-top: 10px; padding-right: 0px;'
        )
);
?>

    </table>

    <table width="840" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

        <tr>
            <td style="padding: 20px 20px 5px 10px; background: white;">
                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;">Всю подробную информацию Вы сможете получить у Вашего персонального менеджера. </p>
            </td>
        </tr>
        <tr>
            <td style="padding: 0px 20px 0px 10px; background: white;">
                <table style="border-collapse: collapse;" width="830" cellspacing="0" cellpadding="0" align="left" bgcolor="#FFFFFF">
                    <tr>
                        <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">Ждем Вас в филиале ЛБР-АгроМаркет (<b><?php echo $filial['name']; ?></b>)!</span><br></td>
                    </tr>
                    <tr>
                        <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['work_time']; ?></span><br></td>
                    </tr>
                    <tr>
                        <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['address']; ?></span><br></td>
                    </tr>
                    <tr>
                        <td><span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $filial['telephone']; ?></span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 20px 10px 10px; background: white;">
<?php echo AuthUser::getPasteboard($data['login'], 'email'); ?>
            </td>
        </tr>

    </table>
    <!-- Background grey; -->
</td>
</tr>
</table>
<!-- Background grey; -->
</body>


