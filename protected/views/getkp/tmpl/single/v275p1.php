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
                                    <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/275-pch6/275-1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </span>
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
                            <tr>
                                <td style="padding: 15px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr style="border-bottom: 3px dashed #336699;">
                                            <td width="370" valign="top" style="padding: 0 10px 10px 0px;">
                                                 <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                   <tr>
                                                       <td style="padding:0px;">
                                                            <img src="http://www.lbr.ru/images/kp/275-pch6/zn1.png" width="20" style="border: 0; float: left; margin:0px 5px 0px 0px;" alt="Картинки не отображаются">
                                                            <p style="margin: 0px; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight:bold; color: #336699;line-height:18px; ">
                                                                С УСИЛЕННОЙ РАМОЙ ПЛУГ ПРОСЛУЖИТ ДОЛГО
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Усиленная рама с профилем150х150х8 изготовлена из конструкционной стали повышенной прочности (марка стали 09г2с)
                                                            </p>
                                                        </td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0px;">
                                                           <img src="http://www.lbr.ru/images/kp/275-pch6/275-2.jpg" width="370" style="border: 0; float: left; margin:0px 0px 0px 0px;" alt="Картинки не отображаются">
                                                        </td>                                                       
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="370">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="120" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #99CCFF; background-clip: padding-box;">Модель</td>
                                                            <td width="120" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; background-color: #99CCFF; border-bottom: 1px solid grey; background-clip: padding-box;">ПЧП 6,0 К</td>
                                                            <td width="120" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; background-color: #99CCFF; border-bottom: 1px solid grey; background-clip: padding-box;">ПЧП 6,0 МК</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Агрегатируется с тракторами</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">К-744-Р2<br>К-744-Р3</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Не имеющими
                                                                заднего навесного устройства</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Произв-сть, га/ч</td>
                                                            <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5, 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рама</td>
                                                            <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150х150х8</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина обработки, см</td>
                                                            <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса машины, кг</td>
                                                            <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3965</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td valign="top" width="370" style="padding: 10px 10px 0 0;">
                                                 <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding:0px;">
                                                            <img src="http://www.lbr.ru/images/kp/275-pch6/zn1.png" width="20" style="border: 0; float: left; margin:0px 5px 0px 0px;" alt="Картинки не отображаются">
                                                            <p style="margin: 0px; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight:bold; color: #336699;line-height:18px; ">
                                                                ИЗНОСОСТОЙКИЕ ДЕТАЛИ
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td width="250" style="padding:0px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight: bold; color: #336699;line-height:18px; ">
                                                                Все детали производятся из конструкционной стали повышенной прочности (марка 65г) и проходят 3 этапа обработки:
                                                            </p>
                                                        </td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td width="370" style="padding:5px 0 0;" align="right">
                                                            <img src="http://www.lbr.ru/images/kp/275-pch6/275-6.jpg" width="370" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                        </td>                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="370" style="padding: 10px 0 0 10px;">
                                                 <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" style="padding:0px;">
                                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                                <tr>
                                                                    <td width="25" valign="top">
                                                                        <img src="http://www.lbr.ru/images/kp/275-pch6/zn1.png" width="20" style="border: 0; float: left; margin:7px 5px 0px 0px;" alt="Картинки не отображаются">
                                                                    </td>
                                                                    <td width="345" valign="top" style="padding:3px 0px 0px 0px;">
                                                                        <p style="margin: 0px; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:left; font-weight:bold; color: #336699;line-height:18px; ">
                                                                            КОНСТРУКЦИОННЫЕ ОСОБЕННОСТИ
                                                                            ОБЕСПЕЧИВАЮТ КАЧЕСТВЕННУЮ ВСПАШКУ
                                                                            НА ГЛУБИНУ 45 СМ
                                                                        </p>  
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                           
                                                        </td>                                                            
                                                    </tr>
                                                    <tr>
                                                        <td width="370" colspan="2">
                                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                                <tr>
                                                                    <td width="220" style="padding:0px 20px 0px 0px;">
                                                                        <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                            <b>Защита корпуса: срезная шпилька. </b>
                                                                            При увеличении нагрузки на стойку шпилька срезается, ослабляет болт – корпус уходит от препятствия, 
                                                                            избегает повреждения 
                                                                        </p>
                                                                    </td>
                                                                    <td width="80" style="padding:0px 10px 0px 0px;" align="left" valign="top">
                                                                        <img src="http://www.lbr.ru/images/kp/275-pch6/275-3.jpg" width="80" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                          </td>            
                                                    </tr>
                                                    <tr>
                                                        <td width="110" style="padding:10px 10px 0px 20px;" align="left" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/275-pch6/275-4.jpg" width="90" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="260" valign="top" style="padding:0px 20px 0px 0px;">
                                                            <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:18px; ">
                                                                Стойка «Параплау» улучшает качество обработки и повышает производительность.
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
                    <td valign="top" width="380" style="padding: 10px 0 0 20px;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="360" style="padding:0px;" align="left">
                                    <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="25" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/275-pch6/zn1.png" width="20" style="border: 0; float: left; margin:7px 5px 0px 0px;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="335" valign="top" style="padding:3px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:left; font-weight:bold; color: #336699;line-height:18px; ">
                                                    ИГОЛЬЧАТЫЙ КАТОК – ДОПОЛНИТЕЛЬНОЕ
                                                    РЫХЛЕНИЕ И ВЫРАВНИВАНИЕ<br>
                                                    ПОВЕРХНОСТНОГО СЛОЯ
                                                </p>  
                                            </td>
                                        </tr>
                                    </table>
                                </td>                                                        
                            </tr>
                            <tr>
                                <td width="250" style="padding:10px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight: bold; color: #336699;line-height:18px; ">
                                        Данная конструкция катка способствует:
                                    </p>
                                </td>                                                       
                            </tr>
                            <tr>
                                <td width="250" style="padding:0px;">
                                    <li style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight: normal; color: black; line-height:18px; ">
                                        лучшему измельчению почвы и более интенсивному перемешиванию растительных остатков;
                                    </li>
                                    <li style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; font-weight: normal; color: black; line-height:18px; ">
                                        созданию слегка спрессованной и открытой поверхности почвы.
                                    </li>
                                </td>                                                       
                            </tr>
                            <tr>
                                <td width="380" style="padding:5px 0 0; text-align: center;" align="center">
                                    <img src="http://www.lbr.ru/images/kp/275-pch6/275-5.jpg" width="330" style="border: 0;" alt="Картинки не отображаются">
                                </td>                                                        
                            </tr>
                        </table>
                    </td>
                    <td valign="top" width="360" style="padding: 10px 20px 0 0;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td colspan="2" width="360" style="padding:0px;" align="right">
                                   <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="25" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/275-pch6/zn1.png" width="20" style="border: 0; float: left; margin:7px 5px 0px 0px;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="335" valign="top" style="padding:3px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 3px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:left; font-weight:bold; color: #336699;line-height:18px; ">
                                                    ДОПОЛНИТЕЛЬНЫЕ ПРЕИМУЩЕСТВА
                                                </p>  
                                            </td>
                                        </tr>
                                    </table>
                                </td>                                                        
                            </tr>
                            <tr>
                                <td width="360" style="padding:15px 0 0 0;">
                                    <p style="margin: 0px; padding: 0 0 0 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:left; font-weight: bold; color: #336699; line-height:18px; ">
                                        • ГАРАНТИЯ 12 МЕСЯЦЕВ<br>
                                        • СТАБИЛЬНЫЕ ЦЕНЫ И ДОСТАВКА В КРАТЧАЙШИЕ СРОКИ: <span style="color: black; font-weight: normal;">100% производство РФ</span><br>
                                        • ЗАПАСНЫЕ ЧАСТИ И РАСХОДНИКИ СОБСТВЕННОГО ПРОИЗВОДСТВА ВСЕГДА В НАЛИЧИИ НА СКЛАДЕ В РФ.
                                    </p>
                                </td>                                                       
                            </tr>                            
                        </table>
                    </td>
                </tr> 
                <tr valign="top">
                    <td colspan="2"  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #99CCFF; background-clip: padding-box;">НАИМЕНОВАНИЕ</td>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; background-color: #99CCFF; border-bottom: 1px solid grey; background-clip: padding-box;">ЦЕНА<span style="color:#cc3333; font-size:12px;">*</span></td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПЧП-6,0</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>                                   
                                </tr>
                                 <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПЧП-6,0 М (Механизм выглубления)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price2']; ?></td>                                   
                                </tr>
                                 <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПЧП-6,0 К (Каток)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price3']; ?></td>                                   
                                </tr>
                                 <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПЧП-6,0 МК (Механизм выглубления, Каток)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price4']; ?></td>                                   
                                </tr>
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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