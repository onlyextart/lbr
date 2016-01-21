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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/773-plugi-polunavesnye-ppo/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/279-ppo8+2/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    <b>Оборотный плуг ППО-(8+2+1)х40</b> – самый большой надежный плуг, производимый на
                                                    территории РФ. Плуг предназначен для отвальной обработки всех типов почв, не засоренных
                                                    камнями, плитняком и другими препятствиями с удельным сопротивлением 0,09 МПа (0,9
                                                    кг/см²) и твердостью до 4,0 МПа (40 кг/см²).
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                           
                            <tr valign="top">
                                <td  align="center" style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="2" bordercolor="#fabc68" align="center" style="border-collapse: collapse; background: white; border:2px solid #fabc68;">
                                        <tbody>
                                            <tr>
                                                <td width="240" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; background-color: #f29313; background-clip: padding-box; border:2px solid #fabc68;"><b>Модель</b></td>
                                                <td width="260" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; background-color: #f29313; background-clip: padding-box; border:2px solid #fabc68;"><b>ППО-(8+2)х40</b></td>
                                                <td width="260" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; background-color: #f29313; background-clip: padding-box; border:2px solid #fabc68;"><b>ППО-(8+2+1)х40</b></td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:2px solid #fabc68;">Производительность, га/ч</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">4</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">4,1</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black;background-clip: padding-box; border:2px solid #fabc68;">Рама</td>
                                                <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">150х150х12 + 150х250х12</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:2px solid #fabc68;">Просвет под рамой</td>
                                                <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">70</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:2px solid #fabc68;">Агрегатируется с тракторами</td>
                                                <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">«Кировец» серия К-9000, John Deere 9, New Holland 9, Buhler HHT</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; background-clip: padding-box; border:2px solid #fabc68;">Масса машины, кг</td>
                                                <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border:2px solid #fabc68;">8760</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td colspan="2" style="padding:0px 0px 10px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                                    НАДЕЖНАЯ РАМА  
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td width="200" style="padding:0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/279-ppo8+2/2.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="560" valign="top" style="padding:0px 10px 10px 15px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    <b>Модульная усиленная рама с профилем 150х150+150х250</b>
                                                    изготовлена из профильной трубы, которая производится из
                                                    конструкционной стали повышенной прочности (марка стали 09г2с).<br>
                                                    Толщина стенки рамы увеличена до 12мм!<br>
                                                    Рамная конструкция плуга предусматривает вспашку при движении
                                                    трактора по полю.
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
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; text-align:left; color: black;font-weight: bold; line-height:20px;color:#478779;">
                                                    ЗАЩИТА КОРПУСА - СРЕЗНАЯ ШПИЛЬКА  
                                                </p>
                                                <p style="margin: 0px; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    Для повышения степени безопасности агрегата его стандартно
                                                    оснащают <b>срезными шпильками</b>. Это особенность конструкции
                                                    препятствует серьезной поломке техники, поскольку при увеличении
                                                    нагрузки на корпус шпилька срезается, ослабляет болт – корпус уходит от
                                                    препятствия, избегает повреждения.
                                                </p>
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
                    <td style="padding: 10px 20px 0px 20px;">
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
                                    <img src="http://www.lbr.ru/images/kp/279-ppo8+2/4.jpg" width="480" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
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
                    <td style="padding: 15px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="300" valign="top" style="padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/279-ppo8+2/marker.jpg" width="30" style="border: 0; float: left; margin: 0px 5px 0px 0px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Полувинтовой отвал
                                        обеспечивает полный
                                        оборот пласта и 100%
                                        заделку пожнивных остатков.
                                    </p>
                                </td>
                                <td width="460" rowspan="2" style="padding:0px 0px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/279-ppo8+2/5.jpg" width="440" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td width="300" valign="top" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/279-ppo8+2/marker.jpg" width="30" style="border: 0; float: left;  margin: 0px 5px 0px 0px;" alt="Картинки не отображаются">
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
                    <td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/279-ppo8+2/6.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                        • ГАРАНТИЯ 12 МЕСЯЦЕВ.<br>
                                        • СТАБИЛЬНЫЕ ЦЕНЫ И ДОСТАВКА В КРАТЧАЙШИЕ СРОКИ: <b>100% ПРОИЗВОДСТВО РФ</b>.<br>
                                        • ЗАПАСНЫЕ ЧАСТИ И РАСХОДНИКИ СОБСТВЕННОГО ПРОИЗВОДСТВА ВСЕГДА В НАЛИЧИИ НА
                                        СКЛАДЕ В РФ.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                <td  align="center" style="padding: 10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #f29313;"><b>НАИМЕНОВАНИЕ</b></td>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #f29313;"><b>ЦЕНА<span style="color:#cc3333; font-size:12px;">*</span></b></td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">ППО 8+1х40</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; color: #DD2A1B;"><?php echo $data['price1']; ?></td>
                                 </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">ППО 8+2+1х40</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; color: #DD2A1B;"><?php echo $data['price2']; ?></td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Тележка-навеска ТНГ-3000</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; color: #DD2A1B;"><?php echo $data['price3']; ?></td>
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
