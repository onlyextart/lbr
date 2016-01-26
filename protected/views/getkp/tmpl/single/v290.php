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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/768-Kul'tivator-kpm/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/290-kpm4-12/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                                   Один культиватор – решение нескольких задач: 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right:10px;">
                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-weight:bold; font-size: 14px; text-align:left; color: black; ">
                                                    • Ранневесеннее закрытие влаги<br>
                                                    • Паровая и предпосевная обработка всех типов минеральных почв<br>
                                                    • Совмещает культивацию, рыхление, выравнивание и предпосевное прикатывание почвы<br>
                                                    • Создает в посевном слое уплотненное ложе для семян
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 10px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="510" valign="top" style="padding: 0px 0px 10px 0px;">
                                                <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 10px 0px 30px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                                                Сокращение затрат на обработку почвы:<br>
                                                                Обеспечивает в 2-2,5 раза повышение производительности
                                                                труда и снижение энерго- и ресурсозатрат на предпосевную
                                                                обработку почвы. 
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0px 0px 5px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                                                Почему применяем культиватор КПМ?
                                                            </p>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td style="padding: 0px 0px 30px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                                                • полное отсутствие глыб и гребней<br>
                                                                • эффективное выравнивание<br>
                                                                • подповерхностное уплотнение почвы на глубине посева<br>
                                                                • создание сверху мульчированного слоя почвы
                                                            </p>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td style="padding: 0px 0px 5px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                                                Запасы почвенной влаги будут сохранены
                                                                на 100%.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                                                Создает возможность окончания полевых работ
                                                                на 1-2 недели раньше обычной технологии, гарантирует
                                                                сохранение запасов почвенной влаги.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="250">
                                                <img src="http://www.lbr.ru/images/kp/290-kpm4-12/2.jpg" width="250" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                                   Особенности конструкции
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-weight:normal; font-size: 14px; text-align:left; color: black; ">
                                                    <b>1. Легко принимает транспортное положение.</b> Применена жесткая сварная конструкция рамы и крыльев 
                                                    культиватора из труб квадратного и прямоугольного профиля. Крылья культиватора переводятся в
                                                    транспортное положение и обратно гидроцилиндрами.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                             <tr>
                                <td style="padding: 0px 0px 0px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="710" valign="middle" style="padding: 0px 0px 0px 0px;">
                                                <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                                    <b>2. Лапы культиватора не забиваются растительными остатками.</b>
                                                    Благодаря расстоянию между ними с шагом 170 мм в 4 ряда.
                                                </p>
                                            </td>
                                            <td width="150">
                                                <img src="http://www.lbr.ru/images/kp/290-kpm4-12/3.jpg" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <td style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td width="510" valign="top" style="padding: 0px 0px 10px 0px;">
                            <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                <td style="padding: 10px 0px 30px 0px;">
                                    <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                        Сокращение затрат на обработку почвы:<br>
                                        Обеспечивает в 2-2,5 раза повышение производительности
                                        труда и снижение энерго- и ресурсозатрат на предпосевную
                                        обработку почвы. 
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                        Почему применяем культиватор КПМ?
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 0px 0px 30px 0px;">
                                    <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                        • полное отсутствие глыб и гребней<br>
                                        • эффективное выравнивание<br>
                                        • подповерхностное уплотнение почвы на глубине посева<br>
                                        • создание сверху мульчированного слоя почвы
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight:bold; text-align:left; color: #8eb744;">
                                        Запасы почвенной влаги будут сохранены
                                        на 100%.
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding: 0px 0px 0px 0px;">
                                    <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                        Создает возможность окончания полевых работ
                                        на 1-2 недели раньше обычной технологии, гарантирует
                                        сохранение запасов почвенной влаги.
                                    </p>
                                </td>
                                </tr>
                            </table>
                        </td>
                        <td width="250">
                            <img src="http://www.lbr.ru/images/kp/290-kpm4-12/2.jpg" width="250" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                    <td style="padding: 10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color: black;line-height:20px; ">
                                        ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
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
                    'link' => "http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/768-Kul'tivator-kpm/",
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
<!-- Блок Третий; -->
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
