<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
   <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/269-5.4/v269-1.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                    </td></tr>
                <tr><td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">                                
                                <td width="760" style="padding: 5px 0px 0px 10px;">
                                    <table width="750" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:5px 0px 10px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black; ">
                                                    <b>СЗТ 5,4</b> предназначена для рядового посева семян зерновых, зернобобовых культур как раздельно,
                                                    так с одновременным посевом сыпучих и не сыпучих семян трав и внесением гранулированных
                                                    минеральных удобрений.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0;">
                                    <img src="http://www.lbr.ru/images/kp/269-5.4/v269-line1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>   
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-2.jpg" width="180" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-3.jpg" width="180" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Из основных бункеров через
                                                    двухдисковые сошники со смещенными
                                                    дисками осуществляет высев семян
                                                    зерновых и зернобобовых культур, а
                                                    также среднесыпучих и несыпучих семян
                                                    трав.
                                                </p>
                                            </td>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Из травяных бункеров через
                                                    наральниковые сошники высеваются
                                                    мелкие сыпучие семена трав, а также
                                                    осуществляется высев сыпучих семян
                                                    трав под покров зерновых.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                                                      
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/269-5.4/v269-line2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #58585A">ЗЕРНОВОЙ БУНКЕР СЕЯЛКИ ОСНАЩЕН ВОРОШИЛКОЙ ЗЕРНА,</span> 
                                                    горловина
                                                    высевающего аппарата имеет нагнетатель.
                                                    Заслонки технологических окон установлены
                                                    в перегородке зернотукового бункера.
                                                </p>
                                            </td>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #58585A">ЛЕГКО НАСТРОИТЬ НОРМУ ВЫСЕВА</span> 
                                                    Сеялка оснащена устройством настройки на
                                                    норму внесения семян трав. Горловина высе-
                                                    вающего аппарата травяного бункера имеет
                                                    нагнетатель.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-4.jpg" width="200" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-5.jpg" width="200" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                            </tr>
                                                      
                        </table>
                    </td></tr>
                            
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

</table>
<!-- Блок Первый; -->

<!-- Блок Второй: -->


<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 10px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 10px 0px 0 0px;">
                                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="250" style="padding: 0 15px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                                <span style="color: #58585A">Бесступенчатый механизм передач
                                                                    (вариатор)</span> <br />
                                                                    Обеспечивает легкую и быструю регулировку
                                                                    норм высева семян удобрений.<br>
                                                                    Обеспечивает более точную и плавную
                                                                    регулировку в увеличенном диапазоне норм
                                                                    высева (от 0,7 до 400 кг/га).
                                                            </p>
                                                        </td>
                                                        <td width="250" valign="top" style="padding: 0 15px;">
                                                             <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                                <span style="color: #58585A">2 В 1</span> <br />
                                                                Наральниковые сошники для высева семян
                                                                трав одновременно служат загортачами.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="250" valign="top" align="center">
                                                            <img src="http://www.lbr.ru/images/kp/269-5.4/v269-6.jpg" width="200" style="border: 0;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="250" valign="top" align="center">
                                                            <img src="http://www.lbr.ru/images/kp/269-5.4/v269-7.jpg" width="200" style="border: 0;" alt="Картинки не отображаются">
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
                <tr>
                    <td style="padding: 10px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td rowspan="2" width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-8.jpg" width="400" style="border: 0; padding-right: 10px;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="450" valign="top" align="center">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #58585A; font-weight: bold;">2 СЕЯЛКИ = ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС.</span><br /><br /> 
                                                    При использовании сцепки СП-10,8-01 можно
                                                    составлять тракторный гидрофицированный
                                                    широкозахватный агрегат из двух сеялок,
                                                    который повышает производительность в 1,5-2
                                                    раза. Требуемая мощность трактора для
                                                    агрегатирования 2-х сеялок в сцепке – 150 л.с.                                                    
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/269-5.4/v269-9.jpg" width="100" style="border: 0; padding-right: 10px;" alt="Картинки не отображаются">
                                            </td>                                            
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                         <tr style="padding: 5px;">                               
                             <td style="padding: 5px;">
                                 <p style="margin: 0; color: black; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold; text-align: center;">
                                     ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ:
                                 </p>
                             </td>
                         </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 0px 20px;">
                        <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>                                                                    
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,4</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов дисковых сошников, шт.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">36</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов наральниковых сошников, шт.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина междурядий, см</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15/7,5</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость, км/ч</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-12</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункера, дм2:</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для зерновых</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для удобрений</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">318</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для трав</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">130</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2950</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

</table>
<!-- Блок Второй; -->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;