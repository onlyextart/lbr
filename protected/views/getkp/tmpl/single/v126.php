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
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/seyalki-sp-8-mt-8/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Навесные пневматические сеялки точного высева SP 8 Dorada и МТ 8</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/uploaded/gaspardo-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">Сеялки работают по классической технологии посева
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 20px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">Простота в обслуживании
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 20px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">Точность посева
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 0;">
                                                <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #F58220;">
                                                    <tr>
                                                        <td>                                    
                                                            <p style="font-size: 16px; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                                                Сеялка точного высева SP 8 Dorada</a>
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <b>Сеялка точного высева SP 8 Dorada</b> – универсальная сеялка для посева различных культур в подготовленную почву. 
                                               </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                Количество высевающих рядов – 8, междурядное расстояние – 70 см.
                                               </p>
                                            </td>
                                        </tr>                                                                           
                                    </table>
                                </td>
                                
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 5px 0;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo1.jpg" width="378" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2" style="padding-top: 3px;">
                                     <p style="font-size: 14px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: center; color: #F58220;">
                                         Особенности технологии:
                                     </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 5px 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo2.jpg" width="170" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                        <td style="padding: 5px 10px 0 0; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <span style="color: #F58220;"><b>Точный посев на заданную глубину.</b></span> 
                                                                Главное достоинство сеялкиэтой модели — анкерный высевающий аппарат типа SP – <b>посев с одновременным внесением удобрений.</b>
                                                            </p>
                                                        </td>                                                   
                                                </tr>
                                            <tr valign="top">
                                            <td colspan="2" style="padding: 15px 0 0 0;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="15%" style="padding: 0 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo3.jpg" width="100" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                        <td style="padding: 15px 10px 0 0; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Монитор контроля высева,</b> который указывает остановку высева в каком либо ряду и отображающий количество отсеянной площади.
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
                                
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="10%" style="padding: 0 0 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo4.jpg" width="100" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                            <td width="90%" style="padding: 0 0 0 10px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                    Прикатывающие двухдюймовые «V»-образные колеса помогают семени плотно прилегать к борозде (семена не выветриваются и не вымываются при сильном дожде).
                                                </p>
                                            </td>                                                   
                                        </tr>

                                        <tr valign="top">
                                            <td colspan="2" style="padding: 0;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="30%" style="padding: 0 0 0 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo5.jpg" width="170" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                        <td style="padding: 0 0 0 10px; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                            Централизованное устройство дозирования удобрений MINIMAX. 
                                                            Комплектация сеялки с внесением удобрений позволяет распределять гранулированные комплексные удобрения с надлежащей и легко регулируемой скоростью подачи.
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
                    </td></tr>  
                <!-- Контент первого блока; -->
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/seyalki-sp-8-mt-8/',
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
                                                    <tr>
                                            <td colspan="2" style="padding: 0 10px 0 0;">
                                                <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #F58220;">
                                                    <tr>
                                                        <td>                                    
                                                            <p style="font-size: 16px; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                                                Сеялка точного высева MT 8
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <b>Сеялка точного высева MT 8</b> – высокоточная профессиональная сеялка для посева в подготовленную почву. 
                                                Современная вакуумная высокопроизводительная сеялка идеально подходит для средних и малых хозяйств. 
                                               </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; text-align: justify; ">
                                                Максимальная производительность при небольшой стоимости сеялки.
                                               </p>
                                            </td>
                                        </tr>       
                                         <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <b>Качественный посев</b> по традиционной технологии (в подготовленную почву).Также при не сильно уплотненной почве с применением минимальной пахоты сеялка МТ 8 отлично справится с посевом.
                                               </p>
                                            </td>
                                        </tr> 
                                        </table>
                                            </td>
                                            <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo6.jpg" width="350" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2" style="padding-top: 3px;">
                                     <p style="font-size: 14px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: center; color: #F58220;">
                                         Отличительные характеристики:
                                     </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <b>Посев на постоянную заданную глубину сева – гарантия равномерности всходов.</b> 
                                                    <p>Посевные секции МТ-8 установлены на независимых параллелограммах с мощными прижимными пружинами, благодаря которым в совокупности с двумя резиновыми колёсами контроля глубины посев производится на постоянно заданную глубину.
                                                    </p>
                                                    <p>В конструкцию входит вакуумный дисковый дозирующий аппарат, в котором применяется двойной регулятор. 
                                                    Дозирующий аппарат гарантирует самую высокую точность посева, как обработанными семенами, так и семенами неправильной формы.
                                                    </p>
                                                    <p>Привод дозирующего аппарата выполняется точной, не нуждающейся в смазывании и техобслуживании карданной передачей.
                                                    </p>
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <b>Высокая скорость посева</b> по сравнению с аналогичными традиционными сеялками
                                               </li>
                                            </td>
                                        </tr>       
                                         <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; text-align: justify; ">
                                                Простая в эксплуатации и малогабаритная сеялка.
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo9.jpg" width="378" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo10.jpg" width="378" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        </table>
                                            </td>
                                            <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                       <td style="padding: 5px 0 0 10px;">
                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                            <td width="50%" style="padding: 0; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo7.jpg" width="130" style="border: 0;" alt="double-disk">
                                            </td>
                                            <td width="50%" style="padding: 0; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/126-gaspardo/gaspardo8.jpg" width="130" style="border: 0;" alt="double-disk">
                                            </td>
                                            </tr>
                                            <tr>
                                            <td style="padding: 0 5px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                Сеялка оснащается <b>дисковым высевающим аппаратом.</b>
                                               </p>
                                            </td>
                                            <td style="padding: 0 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                Централизованное устройство дозирования удобрений MINIMAX.
                                               </p>
                                            </td>
                                            </tr>
                                            </table>
                                       </td>
                                       </tr>
                                       <tr valign="top">
                                                        <td style="padding: 5px 0 0 10px;">
                                                            <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">SP-8</td>
                                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">MT-8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов - 8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядное расстояние - 70 см</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Камнеотбрасыватель</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Камнеотбрасыватель, загортачи, износостойкие чистики Widia</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объём бункера для семян 34 л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объём бункера для семян 36 л</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Карданный привод высевающего аппарата с срезным шплинтом предохранителем</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Бесступенчатая регулировка глубины высева</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Прикатывающие колёса 2-х дюймовые «V» образные</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Жесткая рама сеялки представляет одинарный брус квадратного сечения 150х150 мм</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Жесткая рама сеялки представляет одинарный брус квадратного сечения 150х150 мм</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Гидравлические маркёры</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Привод вентилятора от ВОМ 540 об/мин</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Сцепка 3х точечная II категории</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Внесение удобрений анкерным сошником</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Внесение удобрений двойным дисковым сошником</td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объём бункеров для удобрений 4х160 л</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Централизованное устройство дозирования удобрений MINIMAX</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высевающие диски для кукурузы и подсолнечника</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Монитор контроля высева, сигнализирующий об остановке высева в каком либо ряду и отображающий количество отсеянной площади</td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?> руб.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?> руб.</td>
                                                                    </tr>
                                                                </tbody>
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
                    </td></tr>  
                            <!-- Ссылка-кнопка подробнее -->
                            <?php
                            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                                'link' => 'http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/seyalki-sp-8-mt-8/',
                                'colspan' => 2,
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
             </td>
                </tr>
</table>
            <!-- Блок Второй; -->
            
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;