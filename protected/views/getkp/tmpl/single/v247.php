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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: center;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/599-kultivatory-kshu/" style="font-size: 21px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black; text-align: center">
                                        КУЛЬТИВАТОР ШИРОКОЗАХВАТНЫЙ УНИВЕРСАЛЬНЫЙ<br>
                                        <span style="color:#6f6f6e;">ПОЛЯРИС</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/247-Polaris/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
            
             <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#d9dada" align="center" style="border: 0; border-collapse: collapse; background: #d9dada;">
                            <tr valign="top">
                                <td style="padding: 10px 10px 0px 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black;font-style: italic;">
                                        Полярис – это универсальный широкозахватный культиватор. Разработан
                                        специально для ресурсосберегающей предпосевной и паровой культивации почвы:
                                    </p> 
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 0px 10px 10px 20px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black;font-style: italic;">
                                        • подрезает и вычесывает сорняки<br>
                                        • выравнивает и уплотняет поверхностность почвы под посев
                                    </p> 
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
             <tr><td style="padding: 20px 20px 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/247-Polaris/2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
             </tr>
             
             <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
                            <tr valign="top">
                            <td width="35" style="padding: 0px 5px 0px 0px;" valign="middle">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="725" style="padding: 0px 0px 0px 5px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        ВЫРОВНЯТЬ И ПОДГОТОВИТЬ ПОЧВУ ПЕРЕД ПОСЕВОМ КАЧЕСТВЕННО И ВОВРЕМЯ
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black;">
                                        Культиватор выравнивает почву за счет выравнивателя и шлейф-катка. Обеспечивает крошение почвы до
                                        мелких комков размерами до 25 мм.
                                    </p> 
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
              <tr><td style="padding: 30px 20px 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/247-Polaris/3.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
             </tr>
             
             <tr><td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
                            <tr valign="top">
                                <td width="280" style="padding: 0px 0px 0px 0px;">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="255" style="padding: 0px 0px 0px 0px;">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="225" style="padding: 0px 0px 0px 0px;">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="280" style="padding: 5px 20px 0px 0px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:left; color:#f58220; ">
                                        ЛЕГКО И ПРОСТО НАСТРОИТЬ
                                        ГЛУБИНУ ОБРАБОТКИ
                                    </p>
                                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:left; color:black; ">
                                        С помощью винта, который
                                        располагается на центральной раме
                                        и винтовыми парами, которые
                                        находятся на опорных колесах
                                        крыльев.
                                    </p>
                                </td>
                                <td width="255" style="padding: 5px 20px 0px 0px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:left; color:#f58220; ">
                                        ЗА НЕСКОЛЬКО МИНУТ
                                        КУЛЬТИВАТОР ГОТОВ К
                                        ТРАНСПОРТИРОВКЕ ПО ОБЫЧНОЙ
                                        ДОРОГЕ
                                    </p>
                                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:left; color:black; ">
                                        На культиваторах Полярис 8 и
                                        Полярис 12 имеются крылья, они
                                        поднимаются и складываются вверх
                                        при помощи гидросистемы.
                                    </p>
                                </td>
                                <td width="225" style="padding: 5px 20px 0px 0px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color:#f58220; ">
                                        ДЛЯ ПОЛЯ С БОЛЬШОЙ
                                        ПЛОЩАДЬЮ ФОРМИРУЕМ
                                        ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС
                                        12 МЕТРОВ!
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                                        Соединив при помощи сцепки СП-12Г два и более культиватора
                                        Полярис 4, можно создавать
                                        широкозахватные
                                        почвообрабатывающие агрегаты до
                                        12 м.
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
<!-- Блок Первый; -->

<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
                            <tr valign="top">
                            <td width="35" style="padding: 0px 5px 0px 0px;" valign="middle">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="725" style="padding: 0px 0px 0px 5px;" valign="middle">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        КУЛЬТИВАТОР ПОДБИРАЕТСЯ СПЕЦИАЛЬНО ПОД ВАШИ УСЛОВИЯ:
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr><td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
                            <tr valign="top">
                                <td style="padding:0px 50px 0px 45px;">
                                    <table width="665" cellspacing="0" cellpadding="0" bgcolor="#81abbb" align="center" style="border: 0; border-collapse: collapse; background: #81abbb;">
                                        <tr>
                                            <td style="padding:10px 10px 10px 35px">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: normal; text-align: left; color:white;line-height: 21px; ">
                                                    • лапы на С-образной стойке с пружинными<br>
                                                    механизмами: <b>Полярис 4, Полярис 8,5, Полярис 12</b><br>
                                                    • лапы на S-образной стойке:<br>
                                                    <b>Полярис 4S, Полярис 8,5S, Полярис 12S</b><br>
                                                    • выравнивателями почвы КШУ 26.000<br>
                                                    • катком для уплотнения почвы
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                           </tr>
                        </table>
                    </td>
                </tr>
                
                <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#f58220" align="center" style="border: 0; border-collapse: collapse; background: #f58220;">
                            <tr valign="top">
                                <td style="padding: 10px 10px 10px 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; text-align: justify; color:white;">
                                        • СТОЙКА
                                    </p> 
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
              <tr><td style="padding: 10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#d9dada" align="center" style="border: 0; border-collapse: collapse; background: #d9dada;">
                            <tr valign="top">
                                <td style="padding: 10px 10px 10px 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black;font-style: italic;">
                                        Вибрирующие стойки с пружинными ограничителями в процессе работы меньше
                                        забиваются почвой и растительными остатками и уменьшают энергетические
                                        затраты. При наезде на препятствие лапа может выглубляться из почвы за счет
                                        пружинного механизма, затем возвращаться назад.
                                    </p> 
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
             <tr><td style="padding: 10px 20px 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/247-Polaris/4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
             </tr>
             
             <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#f58220" align="center" style="border: 0; border-collapse: collapse; background: #f58220;">
                            <tr valign="top">
                                <td style="padding: 10px 10px 10px 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; text-align: justify; color:white;">
                                        • ЛАПА
                                    </p> 
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
             <tr><td style="padding: 10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="450" style="padding: 0px 10px 0px 5px;" valign="middle">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black;font-style: italic; line-height: 20px;">
                                        <b>Лапы</b> из стали 65Г имеют наплавленную
                                        кромку режущих краев сормайтом, что
                                        обеспечивает их самозатачиваемость и
                                        долговечность.
                                    </p> 
                                </td>
                                <td width="310" style="padding: 0px 0px 0px 50px;">
                                   <img src="http://www.lbr.ru/images/kp/247-Polaris/5.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                 </td>
             </tr>
             
              <tr><td style="padding: 10px 20px 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/247-Polaris/6.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #f58220;background-clip: padding-box; color:black;">Модель</td>
                                    <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #f58220;background-clip: padding-box; color:black;">Полярис 4</td>
                                    <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #f58220;background-clip: padding-box; color:black;">Полярис 8,5</td>
                                    <td width="20%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #f58220;background-clip: padding-box; color:black;">Полярис 12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Способ агрегатирования</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Прицепной</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Производительность</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,8 га/час</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8 га/час</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11 га/час</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Рабочая скорость</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 12 км/час </td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 12 км/час </td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 12 км/час </td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Ширина захвата</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,9 м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8,35 м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,8 м</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Количество плоскорежущих лап</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15 шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">31 шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">43 шт</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Глубина обработки</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-12 см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-12 см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6-12 см</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Количество выравнивателей</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Количество шлейф-катков</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Ширина захвата лапы</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330 мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330 мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330 мм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Масса</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1480 кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2467 кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4527 кг</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Трактор мощностью, не менее</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80 л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150 л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">300 л.с.</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
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
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/599-kultivatory-kshu/',
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
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