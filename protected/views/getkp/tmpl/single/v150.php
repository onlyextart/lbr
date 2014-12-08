<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!--  -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <!-- Заголовок -->
                            <tr>
                                <td style="padding-bottom:5px;">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                            <!-- Оранжевый блок -->
                            <tr>
                                <td style="padding: 15px 0px 0px 0px;">
                                    <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                        Техника для уборки лука
                                    </p>
                                </td>
                            </tr>

                        </table>
                    </td></tr>

                <!-- Первая сторока первого блока-->
                <tr>
                    <td style="padding:15px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="750" valign="middle">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/615-botvoudaliteli-dlya-luka/" target="_blank" style="text-decoration: none;">
                                            Обрезчик ботвы лука KRUKOWIAK
                                        </a>
                                    </p>  
                                </td>
                                <td width="40">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info1']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ШИРОКИЕ ВОЗМОЖНОСТИ БОТВОУДАЛИТЕЛЯ</span><br>
                                                    Ботвоудалитель позволяет одинаково эффективно уда-
                                                    лять ботву лука, моркови и столовой свеклы.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ТОЧНАЯ РАБОТА - ОТЛИЧНЫЙ РЕЗУЛЬТАТ</span><br>
                                                    Срезающие ножи в паре со специальными заслонками
                                                    создают поток воздуха, с помощью которого ботва лука,
                                                    лежащая на земле, приподнимается, что позволяет
                                                    улучшить качество обрезки ботвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ ИСПОЛНЕНИЯ</span><br>
                                                    Конструкция обрезчика позволяет навешивать его как
                                                    на передний, так и на задний ВОМ трактора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="60%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,2 м</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,5 м</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина захвата штанги</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,2 м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5 м</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 0,7</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 0,9</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
                                                    </tr> 

                                                </table>
                                            </td>
                                        </tr>


                                    </table>
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>



                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/615-botvoudaliteli-dlya-luka/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 0px; padding-right: 13px;'
                        )
                );
                ?>
                
                 <!-- Контент второй строки первого блока-->
                <tr>
                    <td style="padding:0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="720" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/417-kopalka-dlya-luka-z653-1/" target="_blank" style="text-decoration: none;">
                                            Копалка для лука Z-653/1
                                        </a>
                                    </p>  
                                </td>
                                <td width="40" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-4.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info2']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">БЕРЕЖНАЯ УБОРКА ЛУКА</span><br>
                                                    Квадратный лемех, приводимый в движение от BOM
                                                    трактора с помощью вала, бережного и аккуратного, выкапывает лук.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ВАЛОК БЕЗ ПРОВОЛОК</span><br>
                                                    В задней части копалки расположен прикатывающий
                                                    каток, предназначенный для уплотнения почвы перед
                                                    укладкой лука. В задней части копалки установлены от-
                                                    ражатели, которые укладывают лук в ровный валок для
                                                    облегчения последующей сборки подборщиком.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px;padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Z-653/1<br> (1,2 м)</strong></span></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Z-653/1<br> (1,5 м)</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,5</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,7</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,2</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">45</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price4']; ?> </span></td>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>

                                    </table> 
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>



                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/417-kopalka-dlya-luka-z653-1/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
        </table>



        </td>
    </tr>

    <!-- Первый блок -->

    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>


<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
         <!-- Контент первой строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="720" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/418-podborshchiki-luka-z-437/" style="text-decoration: none;">
                                            Подборщик лука Z-437
                                        </a>
                                    </p>  
                                </td>
                                <td width="40" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-6.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info3'] && !empty($data['product_info3'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info3']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                         <td style="padding:5px 0px 5px 0px;">
                                            <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                <tr>
                                                    <td width="70%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                    <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Z 437</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">от 30</span></td>
                                                </tr> 
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина подбора, м</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1000</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота выгрузки, м</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2,9</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,60</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price5']; ?></span></td>
                                                </tr>
                                            </table> 
                                        </td>
                                        </tr>
                                           

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">БЕРЕЖНАЯ УБОРКА БЕЗ ПОВРЕЖДЕНИЙ</span><br>
                                                    Уборка лука осуществляется при помощи устройства,
                                                    состоящего из полиуретанового вальца и решетчатого
                                                    транспортера. Такая конструкция подборщика гарантирует быструю и качественную уборку лука, исключая
                                                    механические повреждения.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">БЫСТРОЕ ПЕРЕМЕЩЕНИЕ МЕЖДУ ПОЛЯМИ</span><br>
                                                    Подборщик оснащен системой гидравлики, которая по-
                                                    зволяет перевести подборщик из транспортного поло-
                                                    жения в рабочее меньше, чем за минуту.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 15px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КАЛИБРОВКА ЛУКА СРАЗУ</span><br>
                                                    Просеивающий транспортер комбайна позволяет от-
                                                    сортировать луковицы маленького размера сразу при
                                                    подборе его комбайном.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                    </table> 
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/418-podborshchiki-luka-z-437/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
                <!-- Контент второй строки второго блока-->                
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="695" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/621-pritsepy-samosvalnye-barkas/" style="text-decoration: none;">
                                            Универсальные прицепы Баркас
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-10.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info4'] && !empty($data['product_info4'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info4']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>

                                    </table>
                                </td>

                                <!--Вторая колонка-->

                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> НАДЁЖНОСТЬ – 100% ИТАЛЬЯНСКАЯ КОМПЛЕКТАЦИЯ :</span><br> 
                                                    оси ADR (Италия), тормозные системы CRAVER, высо-
                                                    конадёжный поворотный круг (Италия), боковые борта
                                                    завода MOSSO в Торино (Италия).
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ПРИЕМЛИМАЯ ЦЕНА И СРОКИ ПОСТАВКИ –</span><br> 
                                                    на 10% дешевле импортных аналогов, идеальное соот-
                                                    ношение цена – качество. <strong>Всегда в наличии!</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ДОПОЛНИТЕЛЬНЫЕ ПРЕИМУЩЕСТВА:</span><br>
                                                    сертификат производства РФ, низкая погрузочная вы-
                                                    сота 1,05 м, центральная система открывания бортов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ОСОБЕННОСТЬ:</span><br>
                                                    Лёгкая конструкция, основана на замкнутых профилях из
                                                    стали S355 (18G2A). Снижение собственной массы обеспечивает до 20% экономии ГСМ. Отсутствуют основные
                                                    проблемы отечественных ПТС: деформация кузова, болтающиеся борта и выход из строя поворотного круга.
                                                </p>
                                            </td>
                                        </tr>

                                    </table> 
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:10px 20px 10px 20px;">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="50%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Тип</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong>Баркас</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Баркас 10</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Грузоподъемность, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5000</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8000 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Размеры платформы, м</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,00х2,00х0,50</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,41х2,11х0,60 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Габаритные размеры, мм – длина – ширина</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5295 2081</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6058 2320 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота платформы, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1200</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота с одним ярусом бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1630</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1800 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота с двумя ярусами бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2400</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Ширина колеи, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1500</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1700</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Дорожный просвет, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">350</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">405</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Гидравлическая разгрузка</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">трехсторонняя</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">трехсторонняя</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Тормозная система</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">пневматическая</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">пневматическая</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1300</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2200 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Допустимая скорость, км/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">40</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">40 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['ice6']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price7']; ?> </span></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/621-pritsepy-samosvalnye-barkas/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table></td></tr>


            
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>   






<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>







