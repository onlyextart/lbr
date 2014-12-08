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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/592-kultivator-summers-superchisel/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Культиватор стерневой Summers SuperChisel</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/summers-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">Работает по классической технологии и технологии Mini-Till
                                                </p>
                                            </td>
                                        </tr>                                               
                                        <tr>
                                            <td colspan="2" style="padding: 25px 0 0;">
                                               <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel1.jpg" width="370" style="border: 0; float: left;" alt="Логотип Expom">
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Особенности конструкции:</span>
                                               </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    Специальное треугольное размещение колес рамы, передние сдвоенные колеса на осциллирующей оси и плавающая сцепка обеспечивают
                                               </p>
                                            </td>
                                        </tr>  
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    Отличную проходимость
                                               </li>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    Безупречное копирование рельефа
                                               </li>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    Поддержка постоянной заданной рабочей глубины в самых суровых условиях работы
                                               </li>
                                            </td>
                                        </tr>                                                                                     
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Беспрепятственное прохождение по пожнивным остаткам</span>
                                               </p>
                                            </td>
                                        </tr>
                                         <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    <b>Стойки</b>, выполненные по технологии Edge-on и расположенные в четыре ряда, клиренс 79 см.
                                               </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 5px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel2.jpg" width="368" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td style="padding: 5px 0 0 10px;">
                                                <table>
                                                <tr valign="top">
                                                    <td style="padding: 0 10px 0 0;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    <b>Шины</b> установлены на центральной секции для обеспечения большей проходимости.
                                                    </p>
                                                    </td>
                                                    <td style="padding: 0;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                    <b>Цилиндры подъёмника</b> обеспечивают отличный клиренс в транспортном положении, а также свободный доступ к стойкам для замены наконечников.
                                                    </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0 10px 0 0; text-align: center;">
                                                        <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel3.jpg" width="150" height="204" style="border: 0;" alt="double-disk">
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel4.jpg" width="150" height="204" style="border: 0;" alt="double-disk">
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
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/592-kultivator-summers-superchisel/',
                    'colspan' => false,
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
<!-- Блок Первый; -->

<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">


                                        <tr valign="top">
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 15px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Выравнивание поля и равномерное распределение остатков</span>
                                                            обеспечивается благодаря <b>дополнительным навесным боронкам с регулируемым углом атаки.</b> 
                                                            При отсутствии необходимости использования боронки фиксируются в поднятом состоянии. 
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 15px 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel5.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>                                                                                              
                                                </table>
                                            </td>
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                   <tr valign="top">                                                        
                                                        <td style="padding: 15px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Обеспечение глубокого проникновения даже на самых твердых почвах.</span>
                                                            <b>Установленная рабочая глубина поддерживается агрессивными пружинами стоек.</b> 
                                                            Стойки с давлением 320 кг, максимальная величина хода стойки 38 см. 
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 0;">
                                                            <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel6.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Благодаря конструкции</span>
                                                            Summers SuperChisel риск повреждения рабочих органов при столкновении с крупными препятствиями в поле (большие камни) сведен к минимуму. 
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                                                        
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                                        <td colspan="2" style="padding: 0;">
                                                            <img src="http://www.lbr.ru/images/kp/118-super-chizel/super-chizel7.jpg" width="760" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                        </tr>
                                        <tr><td colspan="2" style="padding: 10px 0 0;">
                                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="40%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                                            <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8Т9284</td>
                                                            <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8Т9404</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Размер</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">28' (8,53 м)</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40' (12,19 м)</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, мм</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5842</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная высота, мм</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3251</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4928</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6404</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8220</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество стоек, шт</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">28</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280-330</td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330-420</td>
                                                        </tr>                                                        
                                                        <tr>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </td></tr> 
                                    <tr valign="top">
                                    <td colspan="2" style="padding: 5px 0px 0px 0px;">
                                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                        </p> 
                                    </td>
                                    </tr>
                                    </table>
                                </td></tr>           
                            
                        </table>
                        <!-- Ссылка-кнопка подробнее -->
                            <?php
                            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                                'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/592-kultivator-summers-superchisel/',
                                'colspan' => 2,
                                'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                                    )
                            );
                            ?>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
            </table>
             </td>
                </tr>
</table>
            <!-- Блок Второй; -->
            
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;