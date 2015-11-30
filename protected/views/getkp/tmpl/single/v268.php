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
                                    <img src="http://www.lbr.ru/images/kp/268-3.6a/v268-1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                            <td style="padding:5px 0px 15px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black; ">
                                                    <b>СЗТ 3,6А</b> специально разработана для рядового посева семян зерновых, зер нобобовых
                                                    культур как раздельно, так с одновременным посевом сыпучих и не сыпучих семян трав и
                                                    внесением гранулированных минеральных удобрений.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/268-3.6a/v268-2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>   
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/268-3.6a/268-3.png" width="232" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/268-3.6a/268-4.png" width="232" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #F89B33;">ЗЕРНОВОЙ БУНКЕР СЕЯЛКИ ОСНАЩЕН ВОРОШИЛКОЙ ЗЕРНА,</span> 
                                                    горловина высевающего аппарата имеет нагнетатель. 
                                                    Заслонки технологических окон установлены в перегородке зернотукового бункера.
                                                </p>
                                            </td>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #F89B33;">ЛЕГКО НАСТРОИТЬ НОРМУ ВЫСЕВА.</span>
                                                    Сеялка оснащена устройством настройки на норму внесения семян трав. 
                                                    Горловина высевающего аппарата травяного бункера имеет нагнетатель.
                                                </p>
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
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/268-3.6a/268-5.png" width="232" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/268-3.6a/268-6.png" width="232" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #F89B33;">2 В 1</span> 
                                                    Наральниковые сошники для высева семян
                                                    трав одновременно служат загортачами.
                                                </p>
                                            </td>
                                            <td width="250" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <span style="color: #F89B33;">РЕДУКТОР ИМЕЕТ ШЕСТЬ ПЕРЕДАТОЧНЫХ ОТНОШЕНИЙ,</span>
                                                    которые переключаются с
                                                    помощью рычага.
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
                    <td style="padding: 10px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/268-3.6a/268-8.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                            <td width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/268-3.6a/268-7.png" width="250" style="border: 0;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="450" valign="top" align="center">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: black; ">
                                                    Три сеялки СЗТ 3,6А со сцепкой СП-11Г и прицепом 8160.000.000 составляют гидрофицированный широкозахватный агрегат для
                                                    посева зерновых культур. Сеялки в агрегате соединяются в шахматном порядке. 
                                                    Сцепка агрегатируется с тракторами оснащенными двигателями мощностью от 150 л.с. 
                                                    Агрегат со сцепкой СП-11Г повышает производительность в 1,5-2 раза.
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
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов дисковых сошников, шт.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов наральниковых сошников, шт.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">23</td>
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
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">453</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для удобрений</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">212</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для трав</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">86</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1540</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 65</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС, руб.</td>
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
