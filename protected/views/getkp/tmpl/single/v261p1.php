<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
   <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                                    <b>СЕЯЛКА СЗ 5,4</b> специально разработана для рядового посева семян зерновых (пшеница,
                                                    рожь, ячмень, овес), зернобобовых культур (горох, фасоль, соя, чечевица, бобы, чина, нут,
                                                    люпин) с одновременным внесением минеральных удобрений. Может быть использована для
                                                    посева семян других культур, близких к зерновым по размерам семян и нормам высева
(гречиха, просо, сорго и др.).
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="300" style="padding: 0;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: #268FCC; ">
                                                    СЗ 5,4 — КОМПЛЕКТУЕТСЯ ДВУХДИСКОВЫМИ СОШНИКАМИ И ПАЛЬЦЕВЫМИ ЗАГОРТАЧАМИ.
                                                </p>
                                            </td>
                                            <td rowspan="3" width="350" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-2.jpg" width="350" style="border: 0; float: right;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="300" style="padding: 0;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-znak.png" width="35" style="border: 0; padding-right: 10px;  float: left;" alt="Картинки не отображаются">
                                НОРМА ВЫСЕВА НАСТРОИТСЯ С ПОМОЩЬЮ РЕДУКТОРА
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="300" style="padding: 0; background: #818284; ">
                                                <p style="margin: 0px; padding: 0 5px 0 10px;; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: white; ">
                                                    Регулировка номы высева в сеялках СЗ 5,4
                                                    происходит за счет настройки редуктора.
                                                    Редуктор имеет шесть передаточных отноше-
                                                    ний, которые переключаются с помощью
                                                    рычага.
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
                                    <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-7.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>                          
                        </table>
                    </td></tr>
                            
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Второй: -->


<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="300" style="padding: 0;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: #268FCC; ">
                                                    ШИРОКОЗАХВАТНАЯ СЕЯЛКА – ЛЕГКО!
                                                </p>
                                            </td>
                                            <td rowspan="3" width="350" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-2.jpg" width="350" style="border: 0; float: right;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="300" style="padding: 0;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    <img src="http://www.lbr.ru/images/kp/261-seyalka/v261-znak.png" width="35" style="border: 0; padding-right: 10px;  float: left;" alt="Картинки не отображаются">
                                                    ТРЕБУЕМАЯ МОЩНОСТЬ ТРАКТОРА
                                                    ДЛЯ АГРЕГАТИРОВАНИЯ 2-Х
                                                    СЕЯЛОК В СЦЕПКЕ – 150 Л. С.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="300" style="padding: 0; background: #818284; ">
                                                <p style="margin: 0px; padding: 0 5px 0 10px;; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: white; ">
                                                    При использовании сцепки СП-10,8-01 можно составлять тракторный гидрофицированный широкозахватный агрегат из двух сеялок,
                                                    который повышет производительность в 1,5-2 раза.
                                                </p>
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
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2554</td>
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
    <tr valign="top">
        <td style="padding: 0px 20px 0;">
            <?php
            if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
            endif;
        ?>
        </td>
    </tr>
</table>
<!-- Блок Второй; -->

</div>
</body>
</html>
