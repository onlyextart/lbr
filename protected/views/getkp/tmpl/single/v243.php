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
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/648-seyalka-zernotukovaya-astra-sz-5-4/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        СЕЯЛКА ЗЕРНОТУКОВАЯ СЗ 5,4 А И ЕЕ МОДИФИКАЦИИ
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
                                <td width="240" style="padding: 3px 0px 0px 0px;">
                                   <table width="240" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                         <td>
                                           <img src="http://www.lbr.ru/images/kp/243-cz5_4A/cz.jpg" width="240" style="border: 0; float: left;" alt="Картинки не отображаются">
                                         </td>
                                       </tr>
                                       <tr>
                                          <td>
                                              <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: black; ">
                                                  СЗ 5,4А - новое поколение
                                                  сеялок для рядового посева
                                                  семян зерновых (пшеница,
                                                  рожь, ячмень, овес), зернобобовых (горох, фасоль, соя,
                                                  чечевица, бобы, чина, нут,
                                                  люпин), мелкосемянных культур (рапс, горчица), сыпучих и
                                                  среднесыпучих семян трав, с
                                                  одновременным (или отдельно)
                                                  внесением минеральных
                                                  удобрений и прикатыванием
                                                  почвы в засеянных рядках
                                                  (СЗ 5,4А - 06).
                                                </p>
                                          </td>
                                       </tr>
                                   </table>
                                </td>
                                <td width="520" style="padding: 3px 0px 0px 20px;">
                                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-1.jpg" width="500" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                </td>
                            </tr>
                            
                        </table>
                    </td></tr>
            
                <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                            </td>
                            </tr>
                        </table>
                </td></tr>
            
                <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: normal; text-transform:uppercase; text-align: justify; color: black; ">
                                    ОСОБЕННОСТИ КОНСТРУКЦИИ
                                </p> 
                            </td>
                            </tr>
                        </table>
                </td></tr>
                
                 <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-3.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                            </td>
                            </tr>
                        </table>
                </td></tr>
            
                <tr><td style="padding: 10px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="253" style="padding: 0px 10px 0px 0px;">
                                    <table width="243" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                        <td width="40" style="padding: 0px 5px 5px 10px;">
                                            <img src="http://www.lbr.ru/images/kp/242-seyalka-szp3_6B/clock.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="203" style="padding: 0px 0px 5px 3px;" valign="top">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                Сокращение времени на загрузку и простои
                                            </p>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Объем бункера для семян и удобрений увеличен на 50% (туковые - 500 дм3, зерновые - 1000 дм3);
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="254" style="padding: 0px 10px 0px 5px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        Обеспечение непрерывной
                                        подачи семян
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Новый высевающий аппарат
                                        изготовлен из полимерных
                                        материалов, благодаря такому решению детали сеялки
                                        предохраняются от коррозии.
                                    </p>
                                </td>
                                <td width="253"style="padding: 0px 5px 0px 10px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        Расширен диапазон высева
                                        семян (от 0,7 кг/га)
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        – добавлена возможность высева мелкосемянных культур.
                                        Сводит к минимуму возможность механического повреждения семян.
                                    </p>
                                </td>
                            </tr>
                        </table>
                </td></tr>
            
                
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
                 <tr valign="top">
                    <td style="padding:10px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="200" style="padding: 0px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-4.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="560" style="padding: 0px 0px 10px 0px;">
                                   <table width="545" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Бесступенчатый механизм передач (вариатор)
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Обеспечивает легкую и быструю регулировку норм высева
                                                    семян и удобрений.<br>
                                                    Обеспечивает более точную и плавную регулировку в увеличенном диапазоне норм высева (от 0,7 до 400 кг/га).
                                                </p> 
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding: 20px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:black; ">
                                                    Порошковая покраска гарантирует защиту от коррозии не
                                                    менее 8 лет.
                                                </p> 
                                            </td>
                                        </tr>
                                   </table>
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>
                
                <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                            </td>
                            </tr>
                        </table>
                </td></tr>
            
                 <tr><td style="padding: 10px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="253" style="padding: 0px 10px 0px 0px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        Увеличенный ресурс работы
                                        сошника на 50%
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Использование современных
                                        сталей со специальной закалкой увеличивает ресурс 
                                        сошника на 50%.
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Посев на полях даже с большим количеством пожнивных
                                        остатков благодаря особенностям двухдисковых сошников 
                                        со смещением.
                                    </p>
                                </td>
                                <td width="254" style="padding: 0px 20px 0px 20px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        Прикатывающий каток
                                        + сошник
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Единая конструкция узла
                                        «сошник-прикатывающий
                                        каток» позволяет настраивать сошник на глубину с
                                        интервалом в 1 см.
                                        (СЗ 5,4А – 06).
                                    </p>
                                </td>
                                <td width="253"style="padding: 0px 5px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                        Гидрофицированные
                                        маркеры
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Гидрофицированные маркеры легко срезают 
                                        растительные остатки.
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                        Сеялка оснащена маркерами,
                                        на которых установлены
                                        отдельные гидроцилиндры,
                                        что облегчает управление ими
                                        механизатором прямо из
                                        кабины.
                                    </p>
                                </td>
                            </tr>
                        </table>
                </td></tr>
            
                 <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                    • Новое универсальное транспортное устройство позволяет перемещать сеялку по дорогам
                                    общего назначения.<br>
                                    • Агрегатируется с самым распространённым классом тракторов – с мощностью двигателя от
                                    80 л.с.
                                </p> 
                            </td>
                            </tr>
                        </table>
                </td></tr>
            
            <tr><td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform:uppercase; text-align: justify; color:#f58220; ">
                                    СЕЯЛКА В СООТВЕТСТВИИ С ПОТРЕБНОСТЯМИ АГРАРИЯ
                                </p> 
                            </td>
                            </tr>
                        </table>
                </td></tr>
            
            <tr><td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                            <td>
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal;text-align: justify; color: black; ">
                                    • СЗ 5,4А для рядового посева с двухдисковыми сошниками и пальцевыми загортачами.<br>
                                    • СЗ 5,4А – 06 для рядового посева с двухдисковыми сошниками и прикатывающими колесами.
                                </p> 
                            </td>
                            </tr>
                        </table>
                </td></tr>
                
                <tr valign="top">
                    <td style="padding:20px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                 <td width="360" style="padding:0px 50px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/243-cz5_4A/mail-6.jpg" width="250" style="border: 0; float: left;" alt="Картинки не отображаются">
                                 </td>
                                <td width="400" valign="middle" style="padding:0px 0px 0px 10px;">
                                    <table width="390" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform: uppercase; text-align: justify; color:#f58220; ">
                                                    ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС
                                                    ИЗ ДВУХ ПРОСТЫХ СЕЯЛОК
                                                </p>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    При использовании сцепки СП-10,8-01 можно составлять
                                                    тракторный гидрофицированный широкозахватный агре-
                                                    гат из двух сеялок, который повышает производитель-
                                                    ность в 1,5-2 раза. Требуемая мощность трактора для
                                                    агрегатирования 2-х сеялок в сцепке – 150 л.с.
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
                                    <td width="50%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #9c9d9d;background-clip: padding-box; color:white;">Модель</td>
                                    <td width="25%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗ 5,4 А</td>
                                    <td width="25%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗ 5,4А-06</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина захвата, м</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,4</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Количество рядов, шт</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">36</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  ">Ширина междурядья, см</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15 </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Нормы высева, кг/га</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">- для семян</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">0,7*-400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">25-200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Глубина заделки семян и удобрений, мм</td>
                                    <td colspan="2"  style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">40-80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Рабочая скорость, км/час</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">9-12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/час</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">4,9-6,5</td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Емкость бункеров, (суммарная), куб.дм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">- для семян</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1000</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">500</td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габаритные размеры(длина х ширина х высота), мм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">в рабочем положении без учета маркеров</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">8550x6180x1830</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">в транспортном положении (с учетом маркеров)</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6750х2950х2850</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">2700</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">3135</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Требуемая мощность трактора, л.с.</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">от 80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price2']; ?></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/648-seyalka-zernotukovaya-astra-sz-5-4/',
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