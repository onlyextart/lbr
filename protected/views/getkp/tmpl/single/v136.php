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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/687-kultivatory-maximulch-s-prikatyvayushchim-katkom/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Культиватор Maximulch c прикатывающим катком
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/Agrisem-logo.JPG" height="40" width="190" style="border: 0; float: right;" alt="Логотип Agrisem">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <!-- Контент первого блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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
                    </td></tr>




                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-bottom:5px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td valign="center">
                                                            <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">  
                                                        </td>
                                                        <td>
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                                                2 в 1: <br> КУЛЬТИВАТОР + ГЛУБОКОРЫХЛИТЕЛЬ
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td width="178" valign="bottom" style="padding: 5px 8px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px 0px 5px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: left; ">
                                                                Обработка почв в тяжелых условиях
                                                            </p>
                                                            <p style="margin: 0; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">
                                                                Состоит из двух рядов лап уникальной конструкции, которые находятся между двумя рядами вырезных дисков, благодаря чему может обрабатывать поч-ву различной степени тяжести.
                                                            </p>
                                                        </td>
                                                        <td width="184" style="padding: 5px 0px 0px 8px;">
                                                            <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-2.jpg" width="184" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
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
                                            <td style="padding-left: 20px;">
                                                <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-3.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px;">
                                                <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-4.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-5.jpg" width="760" style="border: 0;" align="center" alt="Изображения не отображаются"> 
                    </td>
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/687-kultivatory-maximulch-s-prikatyvayushchim-katkom/',
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
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-6.jpg" width="760" style="border: 0;" align="center" alt="Изображения не отображаются"> 
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF" style="padding:0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="bottom">
                                <!--Первая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 10px 5px 0px;">
                                                <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                                    Регулировка на любую глубину
                                                </p>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 5px 10px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-7.jpg" width="368" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка--> 
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 10px;">
                                                <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify; ">
                                                    Технология, которая работает
                                                </p>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="width: 20px; padding:3px 3px 3px 10px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td style="padding: 3px 0px 3px 0px; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; ">
                                                                Способствует развитию корневой системы                                 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20px; padding:3px 3px 3px 10px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td style="padding: 3px 0px 3px 0px; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; ">
                                                                Повышает пористость почвы                               
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20px; padding:3px 3px 3px 10px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td style="padding: 3px 0px 5px 0px; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; ">
                                                                Сохраняет структуру почвы – слои не перемешиваются                                
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 5px 0px 5px 10px;">
                                                <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-weight:bold;"> Запатентованная технология Agrisem International</span> заключается в образовании на почве складки и переме-щении ее в виде волны.
                                                </p>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding:10px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/136-maximulch/mail-8.jpg" width="368" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;"  bgcolor="#FFFFFF"> 
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="240" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                <td width="140" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Maximulch, 4,5 m</strong></span></td>
                                <td width="140" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Maximulch, 5 m</strong></span></td>
                                <td width="140" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Maximulch, 6 m</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4,5 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Транспортная ширина, м </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 3 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 3 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 3 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Количество дисков, шт. </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 28 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 32 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 36 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Диаметр дисков, мм </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 610 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 610 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 610 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Количество лап, шт. </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 10 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 10 </span></td>
                                <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Требуемая мощность трактора, л.с. </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 200-300 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 200-300 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 250-350 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/687-kultivatory-maximulch-s-prikatyvayushchim-katkom/',
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

