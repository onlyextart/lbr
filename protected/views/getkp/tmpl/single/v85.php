<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/600-plugi-oborotnye-navesnye-vis/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">Плуг загонный навесной Орлик</a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/unia-logo.jpg" width="23" height="27" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/85-orlik/orlik.jpg" width="760" height="415" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                            <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
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
                <tr><td style="padding: 20px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                             <tr valign="top">
                                <td style="width: 30px; padding: 10px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                </td>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; text-align: justify; ">
                                    Плуг Орлик – классическая версия легкого навесного плуга, предназначенного для средней и глубокой загонной вспашки. 
                                    Идеален для применения в небольших хозяйствах, для мелкоконтурных полей и подворий.
                                    </p>
                                </td>
                             </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           <tr valign="top">
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="padding-right: 10px; text-align: center; ">                                                
                                                <span style="font-family: 'Trebuchet MS', sans- serif; font-size: 16px; font-weight: bolder; color: #f58220;"><strong>Качественная почвообработка при простых рабочих установках и регулировках плуга:</strong></span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 10px 0; text-align: justify; vertical-align:middle; ">
                                                <img src="http://www.lbr.ru/images/kp/85-orlik/orlik1.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                           <td style="padding: 10px 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans- serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <strong>Корпус MХ</strong> (длина 120 см) с <strong>углосъемом</strong> обеспечивает полный срезу и оборот пласта при низких сопротивлениях во время вспашки. 
                                                  Корпус изготовлен из надежной закаленной крупнозернистой борсодержащей стали.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 10px 0; text-align: justify; vertical-align:middle; ">
                                                <img src="http://www.lbr.ru/images/kp/85-orlik/orlik2.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                           <td style="padding: 10px 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans- serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <span style="color: #f58220; font-weight: bolder;">Дисковый нож диам. 405 мм</span> – отделяет пласт от целины, благодаря этому стенка борозды остается гладкой, а растительные остатки намного лучше прикрыты.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 10px 0; text-align: justify; vertical-align:middle; ">
                                                <img src="http://www.lbr.ru/images/kp/85-orlik/orlik3.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                           <td style="padding: 10px 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans- serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <span style="color: #f58220; font-weight: bolder;">Удержание заданной глубины обработки плугом</span> благодаря жестяному опорному колесу.
                                               </p>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0; text-align: justify; ">
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                 Регулируемая вручную ширина вспашки:
                                                </span>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    30 или 35 см на корпус.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0; text-align: justify; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                  Плуг предназначен для агрегатирования с самыми простыми и недорогими тракторами от 60 л.с.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0; text-align: justify; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                  Простая и хорошо себя зарекомендовавшая система защиты на легких и малокаменистых почвах – защита болтом-предохранителем:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    Когда лемех сталкивается с препятствием массой около 1200 кг, болт разрывается и корпус проходит препятствие. 
                                                    Чтобы вернуть корпус в рабочее положение, его необходимо выдвинуть вперед и снова зафиксировать срезным болтом.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0; text-align: justify; ">
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                 Возможность дополнительного повышения качества подготовки почвы перед посевом
                                                </span>
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    (опциональная оснастка):
                                                </span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0; text-align: justify; ">
                                                <table>
                                                <tr>
                                                    <td style="padding: 0 10px 10px 0; text-align: justify; vertical-align:middle; ">
                                                        <img src="http://www.lbr.ru/images/kp/85-orlik/orlik4.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                                    </td>
                                                    <td style="padding: 0 10px 10px 0; text-align: justify; vertical-align:middle; ">
                                                        <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <strong>Предплужники</strong> – срезается верхний слой почвы и в перевернутом положении перемещается на дно борозды, что улучшает заделку соломы, травы, сорняков и т.п.
                                                    </span>
                                                </td>
                                                </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0 10px 15px 0;">
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="60%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">«Орлик»</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30 или 35</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество корпусов</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">76/88</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">66/75</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                                </tr>                                
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px; font-weight: bold;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                </tr>                                
                            </tbody>
                        </table>
                                                
                                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                                </p> 

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
                        Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', 
                                array(
                                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/600-plugi-oborotnye-navesnye-vis/',
                                    'colspan' => false,
                                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                                    )
                                );
                    ?>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800px" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Первый; -->
<?php
if($data['show_footer']=='1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;