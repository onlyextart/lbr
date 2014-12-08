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
                                <td style="padding-bottom: 3px;" width="720">
                                    <!-- Заголовок -->
                                    <a href="#" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Кормораздатчик трехшнековый вертикальный «Сеньор»
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="40">
                                    <img src="http://www.lbr.ru/images/uploaded/RBS-(logo)_.jpg" width="40" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/172-senior_3shnek/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/172-senior_3shnek/mail-2.jpg" width="700" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:10px 0px 0px 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                    Смеситель-кормораздатчик «Сеньор» оборудован тремя вертикальными спиралевидными шнеками
                                                    дифференцируемого диаметра. На шнеках установлена система, состоящая из ножей и противоножей.
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
                                <td width="300">
                                    <!-- Первая колонка-->
                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/172-senior_3shnek/mail-3.jpg" width="300" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                               <img src="http://www.lbr.ru/images/kp/172-senior_3shnek/mail-4.jpg" width="300" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        

                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td width="456">
                                    <table width="456" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="436" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                                Измельчает без потерь.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                Смеситель-кормораздатчик «Сеньор» оборудован ограничительным ободом, 
                                                                который препятствует выбросу кормов во
                                                                время работы.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                                Не боится больших нагрузок!
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                Сверхпрочная рама кормораздатчика обеспечивает стойкость
                                                                механизма, а крепкое и надежное шасси рассчитано на
                                                                большую нагрузку. Днище, толщиной 12 мм и бункер с толщиной стенок в рабочей зоне шнеков 8 мм обеспечат долгую и
                                                                надежную работу всего механизма.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                               Особенности конструкции:
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                • Бункер на оси без тормозов с одиночными колесами и регули-
                                                                руемым дышлом<br>
                                                                • Механическая опора<br>
                                                                • Выгрузное окно справа без цепи<br>
                                                                • Электронная программируемая взвешивающая система<br>
                                                                • Карданный вал<br>
                                                                • Циклоидальные редукторы вертикальных шнеков
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
                                    <table width="456" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/172-senior_3shnek/mail-5.jpg" width="456" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                </td>
                                <td valign="top" style="padding:10px 0px 0px 0px;">
                                    <!-- Вторая колонка-->
                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Технические характеристики:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <table width="280" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Объем, м<sup>3</sup></span></td>
                                                        <td width="50%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">13</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5600</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2200</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2400</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Необходимая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">65</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4300</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                       <tr valign="top">
                                         <td style="padding: 5px 0px 0px 20px;">
                                             <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                 * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
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
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>





