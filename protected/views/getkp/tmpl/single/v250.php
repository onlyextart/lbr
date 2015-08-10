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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/646-seyalka-zernotukovaya-astra-sz-3-6a/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        СЕЯЛКА ЗЕРНОТУКОВАЯ СЗП 3,6 В И ЕЕ МОДИФИКАЦИИ
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
                                    <img src="http://www.lbr.ru/images/kp/250-szp3_6V/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                <td style="padding: 20px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align:justify; color: black; ">
                                                    <b>СЗП 3,6 В</b> - сеялка зернотуковая прессовая предназначена для рядового посева семян зерновых, 
                                                    зернобобовых культур с одновременным внесением в засеваемые рядки гранулированных
                                                    минеральных удобрений.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td width="190" style="padding: 15px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/250-szp3_6V/mail-2.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="570" style="padding: 15px 0px 0px 10px;">
                                    <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: normal; text-transform:uppercase; text-align: justify; color: black; ">
                                                    ОСОБЕННОСТИ КОНСТРУКЦИИ
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 15px 0px;">
                                                <table width="540" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="40" style="padding: 10px 5px 5px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/242-seyalka-szp3_6B/clock.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                        <td width="490" style="padding: 10px 0px 5px 3px;" valign="top">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                                Сокращение время на загрузку и простои
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                                Объем бункера для семян и удобрений увеличен в
                                                                1,5 раза (туковые - 400 дм3, зерновые - 600 дм3);
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 37px 0px 3px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Бесступенчатый механизм передач (вариатор)
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 7px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Обеспечивает легкую и быструю регулировку норм высева
                                                    семян и удобрений.<br>
                                                    Оснащение семенных и туковых высевающих аппаратов
                                                    сеялки вариаторами, обеспечивает плавное регулирование
                                                    норм высева и значительно упрощает и сокращает время
                                                    подготовки к работе.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 55px 0px 3px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Долговечность рабочих органов
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Зерновые и туковые высевающие аппараты,
                                                    выполненные из полимерного материала.
                                                </p> 
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding: 20px 0px 3px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Контроль нормы внесения удобрений -
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 15px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    настройка нормы внесения удобрений вручную с помощью
                                                    рукоятки.
                                                </p> 
                                            </td>
                                        </tr>
                                        
                                    </table>
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
                                <td width="190" style="padding: 0px 15px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/250-szp3_6V/mail-3.jpg" width="190" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="570" style="padding: 0px 0px 0px 10px;">
                                   <table width="545" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Идеальная борозда при посеве
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Благодаря стали специальной закалки, которая содержит бор,
                                                    продлевается срок службы сошников.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; color:#f58220; ">
                                                    Два варианта сеялки под потребности агрария:
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    • с двухдисковыми сошниками (стандартная комплектация)<br>
                                                    • с двухдисковыми сошниками и металлическими катками для
                                                    уплотнения грунта.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    <span style="color:#f58220;font-weight:bold;">Дисковые металлические катки для прессования повторяют
                                                    рельеф поля</span> (является дополнительной комплектацией)
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Катки по четыре секции.<br>
                                                    Секции с помощью вилок присоединяются шарнирно к раме
                                                    сеялки. Такое присоединение секций катков к раме дает возможность каткам копировать рельеф поля.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    <span style="color:#f58220;font-weight:bold;">Крайние секции катков</span> служат для привода валов высевающих аппаратов.
                                                </p> 
                                            </td>
                                        </tr>
                                         
                                   </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="padding: 35px 0px 0px 0px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                                        <span style="color:#f58220; font-weight:bold;">• Полноценное обеспечение семян влагой на дне борозды<br>
                                        • Осуществление газообменом благодаря открытым зонам </span> -
                                        способствует не только более раннему прорастанию семян,
                                        но и гибели сорняков в неуплотненных холмиках.
                                    </p> 
                                </td>
                            </tr>
                            
                            
                            
                        </table>
                    </td>
                </tr>
                
                <tr valign="top">
                    <td style="padding:20px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="400" valign="middle" style="padding:0px 10px 0px 0px;">
                                    <table width="390" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform: uppercase; text-align: justify; color:#f58220; ">
                                                    ДРУЖНЫЕ ВСХОДЫ СЕМЯН
                                                </p>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    Прессование почвы в рядках производится с
                                                    целью создания контакта между семенами и
                                                    влажной почвой на дне борозд, обеспечивает
                                                    капиллярный подъем влаги в плотных зонах, что
                                                    <b>создает благоприятные условия для более
                                                    раннего и дружного прорастания семян при
                                                    посеве в засушливых районах и в районах,
                                                    подверженных ветровой эрозии почвы</b>.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                                       
                                <td width="360" style="padding:0px 0px 0px 50px;">
                                    <img src="http://www.lbr.ru/images/kp/250-szp3_6V/mail-4.jpg" width="310" style="border: 0; float: left;" alt="Картинки не отображаются">
                                 </td>
                            </tr>           
                        </table>
                    </td>
                </tr>
                
                 <tr valign="top">
                    <td style="padding:20px 20px 10px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="400" valign="middle" style="padding:0px 10px 0px 0px;">
                                    <table width="390" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 10px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform: uppercase; text-align: justify; color:#f58220; ">
                                                    ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС
                                                    ИЗ ТРЕХ СЕЯЛОК
                                                </p>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color:black; ">
                                                    При помощи сцепки СП-11Г сеялки СЗП 3,6В
                                                    соединяются между собой в один ряд. Мощность трактора для такого широкозахватного
                                                    комплекса – <b>ВСЕГО 150 ЛС</b>.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                                       
                                <td width="360" style="padding:0px 0px 0px 50px;">
                                    <img src="http://www.lbr.ru/images/kp/250-szp3_6V/mail-5.jpg" width="310" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                    <td width="60%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #9c9d9d;background-clip: padding-box; color:white;">Модель</td>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center;  border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #9c9d9d;background-clip: padding-box; color:white;">СЗП 3,6В</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина захвата, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Количество рядов, шт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">24</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  ">Ширина междурядья, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15 </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Нормы высева, кг/га</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">- для семян</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">15-400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">25-200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Глубина заделки семян и удобрений, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">40-80</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Рабочая скорость, км/час</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">9-12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/час</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3,2-4,3</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Емкость бункеров, (суммарная), куб.дм:</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">- для семян</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">600</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">- для удобрений</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габаритные размеры, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3985х3710х1850</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;  background-color: #ececec;background-clip: padding-box;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">1640</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">от 65</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price1']; ?></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/646-seyalka-zernotukovaya-astra-sz-3-6a/',
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
