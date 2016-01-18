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
                                    <a href="" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                            <td style="padding-right:10px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    <b>ЖВП - 4,9</b> предназначена для скашивания зерновых колосовых и крупяных культур с
                                                    укладкой скошенной массы в одинарный встречно-поточный валок во всех зонах, где
                                                    применяется раздельный способ уборки.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/title1.jpg" width="300" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="55" style="padding:0px 0px 3px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 3px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    укладывание валка хорошего качества и оптимальной мощности;  
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="55" style="padding:0px 0px 3px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 3px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    высокую продуктивность работы на скашивание и на подбор; 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="55" style="padding:0px 0px 0px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    облегчение условий труда механизатора.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/title2.jpg" width="400" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="55" style="padding:0px 0px 3px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 3px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    снизить затраты на раздельную уборку;  
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="55" style="padding:0px 0px 3px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 3px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    освободить часть комбайнов от работы с валковыми жатками; 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="55" style="padding:0px 0px 0px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="705" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    более оптимально загрузить транспортный парк.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/title3.jpg" width="400" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="190" style="padding:0px 0px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/2.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="190" style="padding:0px 5px 5px 10px; border-right: #6f6a67 dashed 2px;" valign="top">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   жатка оборудована
                                                   двух
                                                   эксцентриковым
                                                   мотовилом, которое
                                                   предотвращает
                                                   наматывание
                                                   растительной массы
                                                   на граблины; 
                                                </p>
                                            </td>
                                            <td width="190" style="padding:0px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/3.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="190" style="padding:0px 0px 0px 15px;" valign="top">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    на жатке установлен
                                                    пальцевый режущий
                                                    аппарат;  
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
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
</td></tr></table>
<!-- Блок Первый; -->

<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 5px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="200" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/4.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="560" style="padding:0px 0px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left; margin-right: 5px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        НАДЕЖНЫЙ ПРИВОД РЕЖУЩЕГО АППАРАТА
                                        ОБЕСПЕЧИВАЕТ ВЫСОКУЮ СКОРОСТЬ РЕЗАНИЯ;
                                    </p>
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <hr color="#507bb5" size="4">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="450" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/5.jpg" width="450" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="310" style="padding:0px 0px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left; margin-right: 5px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        введен пружинный
                                        компенсатор, позволяющий
                                        ликвидировать отставание
                                        правого (полевого) колеса;
                                    </p>
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <hr color="#507bb5" size="4">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                 <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="310" style="padding:0px 20px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left; margin-right: 5px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        для упрощения перевода
                                        жатки в транспортное
                                        положение и обратно
                                        введено выдвижное дышло и
                                        изменено расположение
                                        опоры;
                                    </p>
                                </td>
                                <td width="450" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/6.jpg" width="450" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <hr color="#507bb5" size="4">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="450" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/5.jpg" width="450" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="310" style="padding:0px 0px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left; margin-right: 5px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        с целью регулировки высоты
                                        среза и улучшения
                                        копирования рельефа введен
                                        пружинный амортизатор;
                                    </p>
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <hr color="#507bb5" size="4">
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                 <tr>
                    <td style="padding: 15px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="260" style="padding:0px 20px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/marker.jpg" width="40" style="border: 0; float: left; margin-right: 5px;" alt="Картинки не отображаются">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        для улучшения
                                        ремонтоспособности
                                        изменена конструкция
                                        трансмиссионного вала.
                                    </p>
                                </td>
                                <td width="500" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/8.jpg" width="500" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
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
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/288-zhvp4-9/traktor.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                 <tr>
                    <td style="padding: 10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color: black;line-height:20px; ">
                                        ТЕХНИЧЕСКАЯ ХАРАКТЕРИСТИКА
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                <td  align="center" style="padding: 0px 20px 0;">
                        <table width="640" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="400" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Тип агрегатирования</td>
                                    <td width="120" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-</td>
                                    <td width="120" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">прицепной</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина захвата</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">м.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,9</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая скорость</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Транспортная скорость</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Производительность</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">га/час</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,8</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Высота среза</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60-250</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Масса</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1500</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 80px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                
                 <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/zhatki-i-podborshchiki/kukuruznye-zhatki/641-zhatki-zvp/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 0px; padding-right: 13px;'
                        )
                );
                ?>
            </table>    
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Третий; -->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
