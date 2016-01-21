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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/757-navesnye-zagonnye-plugi-svetlogradagromash/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/278-ppu/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </a>
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
                            
                            
                            <tr valign="top">
                                <td  align="center" style="padding: 10px 0px 0px 0px;">
                                    <table width="560" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="2" bordercolor="#b1b2b3" align="left" style="border-collapse: collapse; background: white; border:2px solid #b1b2b3;">
                                        <tbody>
                                            <tr>
                                                <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; background-color: #c5c6c6; background-clip: padding-box; border:1px solid #b1b2b3;"><b>Модель</b></td>
                                                <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; background-color: #c5c6c6; background-clip: padding-box; border:1px solid #b1b2b3;"><b>ПНУ-8х40</b></td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:1px solid #b1b2b3;">Производительность, га/ч</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:1px solid #b1b2b3;">3</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:1px solid #b1b2b3;">Рама</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:1px solid #b1b2b3;">150х150х8</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:1px solid #b1b2b3;">Просвет под рамой</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:1px solid #b1b2b3;">70</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:1px solid #b1b2b3;">Агрегатируется с тракторами</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:1px solid #b1b2b3;">К-701, К-744Р-1, К-744-Р2</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:1px solid #b1b2b3;">Масса машины, кг</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:1px solid #b1b2b3;">2190</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-top: 1px solid grey; border-right: 1px solid grey;">Цена<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-top: 1px solid grey; border-left: 1px solid grey; color: #DD2A1B;"><?php echo $data['price1']; ?></td>
                                            </tr>
                                        </tbody>
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
                            <tr>
                                <td style="padding: 20px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse;">
                                        <tr>
                                            <td colspan="2" style="padding:0px 0px 10px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                                    НАДЕЖНАЯ РАМА  
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td width="200" style="padding:0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/278-ppu/2.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="560" valign="top" style="padding:0px 10px 10px 15px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    <b>Усиленная рама 150х150х8</b> изготовлена из профильной
                                                    трубы, которая производится из конструкционной стали
                                                    повышенной прочности (марка стали 09г2с).<br>
                                                    Для придания дополнительной жесткости раме и последним
                                                    3 корпусам, рама дополнительно укреплена специальной фермой.
                                                    Рамная конструкция плуга предусматривает вспашку при
                                                    движении трактора по полю.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                                    ДОЛГАЯ ЖИЗНЬ ДЕТАЛЕЙ 
                                                </p> 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 15px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="260" valign="top" style="padding:0px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:right; color: black;line-height:20px; ">
                                                    Все детали
                                                    производятся из
                                                    конструкционной стали
                                                    повышенной прочности
                                                    (марка 65г) и проходят
                                                    <b>3 этапа обработки</b>:
                                                </p>
                                            </td>
                                            <td width="500" style="padding:0px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/278-ppu/3.jpg" width="480" style="border: 0; float: right;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           
                            
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</td></tr></table>
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
                    <td style="padding: 30px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                        КАЧЕСТВЕННАЯ ВСПАШКА НА ГЛУБИНУ 30 СМ 
                                    </p> 
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                 <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="300" valign="top" style="padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/278-ppu/marker.jpg" width="50" style="border: 0; float: left; margin: 0px 5px 0px 0px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Полувинтовой отвал
                                        обеспечивает полный
                                        оборот пласта и 100%
                                        заделку пожнивных остатков.
                                    </p>
                                </td>
                                <td width="460" rowspan="2" style="padding:0px 0px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/278-ppu/4.jpg" width="440" style="border: 0; float: right;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td width="300" valign="top" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/278-ppu/marker.jpg" width="50" style="border: 0; float: left;  margin: 0px 5px 0px 0px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Высокая стойка дает
                                        возможность вспашки
                                        по полям с большим
                                        количеством растительных
                                        остатков и предотвращает
                                        забивание.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                        ПРОЧНОЕ ЛАКОКРАСОЧНОЕ ПОКРЫТИЕ  
                                    </p>
                                    <p style="margin: 0px; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Технология электростатического нанесения краски с последующей обработкой в
                                        инфрокрасной сушке обеспечивает высокое качество и равномерность покрытия, что надолго
                                        придает технике высокий эстетический вид и защищает металл от коррозии.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                 <tr>
                    <td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/278-ppu/5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    
</table>
<!-- Блок Второй; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding:10px 20px 10px 20px;">
                        <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                            ДОПОЛНИТЕЛЬНЫЕ ПРЕИМУЩЕСТВА: 
                        </p> 
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        ГАРАНТИЯ 12 МЕСЯЦЕВ.<br>
                                        СТАБИЛЬНЫЕ ЦЕНЫ И ДОСТАВКА В КРАТЧАЙШИЕ СРОКИ: <b>100% ПРОИЗВОДСТВО РФ</b>.<br>
                                        ЗАПАСНЫЕ ЧАСТИ И РАСХОДНИКИ СОБСТВЕННОГО ПРОИЗВОДСТВА ВСЕГДА В НАЛИЧИИ НА
                                        СКЛАДЕ В РФ.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
              
            </table>    
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
<!-- Блок Третий; -->

</div>
</body>
</html>

