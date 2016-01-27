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
                                            <td width="560" valign="top" style="padding: 0px 0px 10px 0px;">
                                                <table width="550" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 10px 0px 20px 0px;">
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
                                                        <td style="padding: 0px 0px 20px 0px;">
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
                                                        <td style="padding: 0px 0px 10px 0px;">
                                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                                                Создает возможность окончания полевых работ
                                                                на 1-2 недели раньше обычной технологии, гарантирует
                                                                сохранение запасов почвенной влаги.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="200">
                                                <img src="http://www.lbr.ru/images/kp/290-kpm4-12/2.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td width="610" valign="top" style="padding: 0px 0px 20px 0px;">
                            <table width="590" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 10px 0px 30px 0px;">
                                        <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                            <b>3. Долговечность рабочих органов (производство – Италия):</b><br>
                                            • S-образная стойка 45х12<br>
                                            • Подпружинник 45х10<br>
                                            • Стрельчатая лапа шириной 220 мм. 
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 50px 0px;">
                                        <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                            <b>4. Перевод опорных колес</b> из транспортного положения в рабочее и
                                            обратно <b>осуществляется гидроцилиндрами</b>. Для регулировки
                                            глубины обработки на раме дополнительно установлен ограничитель
                                            хода опорных колес (регулировочный болт).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 50px 0px;">
                                        <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                            <b>5.</b> Спереди культиватора установлены планки для выравнивания почвы.
                                            Крепление планки к раме выполнено хомутами, что позволяет быстро
                                            смонтировать ее на культиватор (или демонтировать).
                                            Регулировка планки по высоте относительно земли производится
                                            перестановкой трубы в отверстиях кронштейна крепления,
                                            а наклон – затяжкой гаек винта (<b>как дополнительная опция
                                            для КПМ 4 – КПМ 12</b>).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 40px 0px;">
                                        <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                            <b>6.</b> Установленные на снице следорыхлители регулируются по высоте и
                                            ширине для разных тракторов.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal; text-align:left; color: black;">
                                            <b>7.</b> Конструкция пружинно-катковой приставки позволяет регулировать
                                            высоту установки пружин и их наклон, а также наклон и силу
                                            прижатия катка. Крепление приставки к раме выполнено
                                            хомутами, что позволяет быстро смонтировать ее на культиватор
                                            или демонтировать и установить другую приставку.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="150">
                            <img src="http://www.lbr.ru/images/kp/290-kpm4-12/4.jpg" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 20px 10px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                        <tr>
                            <td style="padding:0px 0px 0px 0px;">
                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color:  #8eb744; font-weight:bold; line-height:20px; ">
                                    КУЛЬТИВАТОРЫ КПМ ТАКЖЕ МОГУТ БЫТЬ ОБОРУДОВАНЫ<br>
                                    СЛЕДУЮЩИМИ ПРИСТАВКАМИ:
                                </p>
                            </td>
                        </tr>
                    </table>
                 </td>
             </tr>
             <tr>
                <td style="padding: 10px 20px 10px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                        <tr>
                            <td width="380" style="padding:0px 5px 0px 5px;">
                               <table width="370" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                   <tr>
                                        <td width="55" style="padding: 0px 10px 0x 20px;">
                                           <img src="http://www.lbr.ru/images/kp/290-kpm4-12/n-1.jpg" width="25" style="border: 0; margin: 0px 10px 0px 20px;" alt="Картинки не отображаются"> 
                                        </td>
                                        <td width="315" style="padding: 0px 0px 0x 0px;">
                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align:left; color: black;">
                                                Трехрядной пружинной приставкой (регулировка наклона зубьев)
                                            </p>
                                        </td>
                                   </tr>
                               </table>
                            </td>
                            <td width="380" style="padding:0px 5px 0px 5px;">
                               <table width="370" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                   <tr>
                                        <td width="55" style="padding: 0px 10px 0x 20px;">
                                           <img src="http://www.lbr.ru/images/kp/290-kpm4-12/n-2.jpg" width="25" style="border: 0; margin: 0px 10px 0px 20px;" alt="Картинки не отображаются"> 
                                        </td>
                                        <td width="315" style="padding: 0px 0px 0x 0px;">
                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align:left; color: black;">
                                                Однорядной катковой приставкой
                                            </p>
                                        </td>
                                   </tr>
                               </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" width="760" style="padding:0px 0px 0px 0px;">
                               <img src="http://www.lbr.ru/images/kp/290-kpm4-12/5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                            </td>
                        </tr>
                        <tr>
                            <td width="380" style="padding:0px 5px 0px 5px;">
                               <table width="370" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                   <tr>
                                        <td width="55" style="padding: 0px 10px 0x 20px;">
                                           <img src="http://www.lbr.ru/images/kp/290-kpm4-12/n-3.jpg" width="25" style="border: 0; margin: 0px 10px 0px 20px;" alt="Картинки не отображаются"> 
                                        </td>
                                        <td width="315" style="padding: 0px 0px 0x 0px;">
                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align:left; color: black;">
                                                Двухрядной катковой приставкой
                                            </p>
                                        </td>
                                   </tr>
                               </table>
                            </td>
                            <td width="380" style="padding:0px 5px 0px 5px;">
                               <table width="370" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                   <tr>
                                        <td width="55" style="padding: 0px 10px 0x 20px;">
                                           <img src="http://www.lbr.ru/images/kp/290-kpm4-12/n-4.jpg" width="25" style="border: 0; margin: 0px 10px 0px 20px;" alt="Картинки не отображаются"> 
                                        </td>
                                        <td width="315" style="padding: 0px 0px 0x 0px;">
                                            <p style="margin: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align:left; color: black;">
                                                Приставкой для навески зубовых борон
                                            </p>
                                        </td>
                                   </tr>
                               </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" width="760" style="padding:0px 0px 0px 0px;">
                               <img src="http://www.lbr.ru/images/kp/290-kpm4-12/6.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются"> 
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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">Модель</td>
                                    <td width="12%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">КПМ 4</td>
                                    <td width="12%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">КПМ 6</td>
                                    <td width="12%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">КПМ 8</td>
                                    <td width="12%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">КПМ 10</td>
                                    <td width="12%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #cacaca;">КПМ 12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая скорость движения, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-15</td>
                                </tr>
                               <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая ширина захвата, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Глубина обработки, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5-12</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5-12</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5-12</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5-12</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5-12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Агрегатируемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">240</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Шаг расстановки стоек, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Шаг между стойками в ряду, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">680</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Количество рядов стоек, шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Количество стоек с лампами, шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">29</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">39</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">51</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">61</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price3']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price4']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price5']; ?></td>
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
<!-- Блок Третий; -->
</div>
</body>
</html>
