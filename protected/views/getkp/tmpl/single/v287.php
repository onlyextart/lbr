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
                                        <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                                    <b>ЖВП - 6,4 с МПН</b> жатка валковая прицепная предназначена для скашивания в валок
                                                    зерновых культур средней и малой урожайности в степной зоне.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/line1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="35" style="padding:0px 0px 5px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    укладывание валка хорошего качества и оптимальной мощности;  
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 0px 5px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    высокую продуктивность работы на скашивание и на подбор; 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 0px 0px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    облегчение условий труда механизатора.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                           <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/line2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="35" style="padding:0px 0px 5px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    укомплектована ременно-планчатыми транспортерами;  
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 0px 5px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   механизм привода ножа (МПН) типа Shumaher с вертикальным расположением
                                                   шкива;
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 0px 0px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   имеет приспособление для быстрого и удобного перехода в рабочее и в
                                                   транспортное положение;
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 0px 0px 15px;">
                                                <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-red.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   улучшенная система агрегатирования обеспечивает плавный ход и точное копирование
                                                   рельефа поля.
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
                    <td style="padding: 0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/ok.jpg" width="400" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 5px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="45" style="padding:0px 0px 5px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-green.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="715" style="padding:0px 0px 5px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        наличие пружинного компенсатора на снице жатки, что позволяет ликвидировать
                                        отставание правого полевого колеса; 
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="45" style="padding:0px 0px 5px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-green.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="715" style="padding:0px 0px 5px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        наличие амортизатора, что позволяет наиболее точно отрегулировать необходимую
                                        высоту среза;
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="45" style="padding:0px 0px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/marker-green.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="715" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        ширина стола жатки оставлена прежней, что позволяет жатке работать как с
                                        высокостебельными, так и низкорослыми культурами.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
                <tr>
                    <td style="padding: 0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/287-zhvp6-4/traktor.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                        ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ ПРИЦЕПНОЙ ЖАТКИ ЖВП–6,4 С МПН
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
                                    <td width="320" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Тип агрегатирования</td>
                                    <td width="320" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">прицепной</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина захвата, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,4</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая скорость, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Транспортная скорость, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Производительность</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 2 до 5 га/час</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Высота среза, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80-250</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8035</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 130px;">
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
