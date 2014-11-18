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
                                <td style="padding-bottom: 3px;" width="740">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/borony-diskovye-i-diskatory/328-diskovyj-pochvoobrabatyvayushchij-agregat-max-t/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Почвообрабатывающий агрегат Max/Max T
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="20">
                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" width="20" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/171-Max/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding-left:5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                    Навесной почвообрабатывающий агрегат Max предназначен для предпосевной обработки
                                                    почвы с сохранением стерни. С максимальной эффективностью используется на легких и
                                                    среднетяжелых почвах. Глубина обработки до 8 см, в модели Max T – до 8-10 см.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;" colspan="2">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Качественная подготовка поверхности поля после первого прохода агрегата.
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
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight: bold">Модель Max</span> – <span style="font-style: italic;">сила зубьев</span>.<br>
                                                    Подбор зубьев под требуемые параметры эксплуатации.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:15px 0px 0px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="100" style="padding:0px 0px 0px 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-2.jpg" width="100" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="258" style="padding:0px 0px 0px 5px;" valign="middle">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                <span style="font-weight: bold;">2 ряда зубьев SX</span> – неглубокое рыхление 
                                                                под кукурузу, глубокое – под
                                                                пропашные культуры.
                                                            </p> 
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                       <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="100" style="padding:0px 0px 0px 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-3.jpg" width="100" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="258" style="padding:0px 0px 0px 5px;" valign="middle">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                <span style="font-weight: bold;">2 ряда зубьев SZ</span> – жесткие зубья с
                                                                    защитой срезными болтами, используются для мелкого рыхления.
                                                            </p> 
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="100" style="padding:0px 0px 0px 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-4.jpg" width="100" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="258" style="padding:0px 0px 0px 5px;" valign="middle">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                <span style="font-weight: bold;">4 ряда зубьев SV</span> – упругие разрыхляющие 
                                                                зубья, используются для
                                                                подготовки почвы под мелкозерновые культуры.
                                                            </p> 
                                                            
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
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td>
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                <span style="font-weight: bold">Модель Max T</span> – <span style="font-style: italic;">сила дисков</span>.
                                                            </p>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-5.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                <span style="font-weight:bold;">2 ряда дисков Premium диаметром 460 мм.</span> Незави-
                                                                симое крепление дисковых ножей на резиновых амор-
                                                                тизаторах обеспечивает соблюдение нужной глубины
                                                                обработки и возможность работы на каменистых участ-
                                                                ках. Благодаря специальной форме и вогнутости диска
                                                                обеспечивается точный срез и интенсивное перемеши-
                                                                вание почвы с пожнивными остатками.
                                                            </p>
                                                        </td>
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




            </table>



        </td>
    </tr>



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Приспособление рабочих органов к поверхности
                                                    почвы в процессе обработки
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/171-Max/mail-6.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/171-Max/mail-7.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Подбор секций доводящего катка для достижения
                                                    нужной степени тщательности обработки почвы:
                                                </p>

                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr valign="middle">
                                                        <td width="169" style="padding: 0px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-8.jpg" width="169" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="189" style="padding:0px 0px 0px 20px;" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-9.jpg" width="169" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td width="169"  style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;">
                                                                Каток ∅320 мм
                                                                с зубчато-струнным
                                                                катком ∅280 мм
                                                            </p> 

                                                        </td>
                                                        <td width="189" style="padding:5px 0px 0px 20px;" valign="top">
                                                            <p style="margin:0; color:black; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;">
                                                                Каток Crosskill ∅320 мм
                                                                с зубчато-струнным
                                                                катком ∅280 мм
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td width="169" style="padding: 5px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-10.jpg" width="169" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="189" style="padding:5px 0px 0px 20px;" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/171-Max/mail-11.jpg" width="169" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td width="169"  style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;">
                                                                Двойной каток Crosskill
                                                                ∅320 мм
                                                            </p> 

                                                        </td>
                                                        <td width="189" style="padding:5px 0px 0px 20px;" valign="top">
                                                            <p style="margin:0; color:black; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;">
                                                                Спиральный каток
                                                                ∅470 мм
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:20px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/171-Max/mail-12.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                              </table>
                    </td>
                </tr>
                <tr valign="top">
                   <td colspan="2" style="padding:10px 0px 0px 0px;">
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Max 7,5H</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Max 9H</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Max T 7,5H</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Max T 9H</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес без катка, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4 500</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5 500</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5 500</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6 400</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество зубьев SV, шт.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">80</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">96</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество зубьев SX/SZ, шт.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">36</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество дисков, шт.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">-</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">60</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">72</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">200-220</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">240-260</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">230-240</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">250-280</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:grey;">Цена с НДС, руб.</span><span style="color:red; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price4']; ?></span></td>
                                        </tr>
                                    </table>
                                </td> 
                </tr>
                <tr valign="top">
                    <td colspan="2" style="padding:0px 0px 0px 0px;">
                        <p style="margin:0; color:red; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                
                
            </table>
        </td>
    </tr>
  
<!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/borony-diskovye-i-diskatory/328-diskovyj-pochvoobrabatyvayushchij-agregat-max-t/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
</table>
</td>
</tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>





