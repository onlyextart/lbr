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
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style=" margin: 0; border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/propashnye-mezhduryadnye-kultivatory/propashnye-mezhduryadnye-kultivatory-gaspardo-hl/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пропашные междурядные культиваторы HL-12 и HL-8</a>
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
                                    <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td width="378">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">
                                                    Обрабатывает пропашные культуры (кукуруза, свекла, подсолнечник, соя и овощные культуры) – обеспечивает качественное рыхление почвы в междурядьях на заданную глубину
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">Уничтожает сорняки
                                                </p>
                                            </td>
                                        </tr>
                                         <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">Вносит удобрения
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                                        <td colspan="2" style="padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                            Легкость, маневренность, прочность и универсальность – эти качества позволяют легко и эффективно обрабатывать посевы с узким междурядьем. 
                                                            Культиватор Gaspardo HL-8 и HL-12 отличается жесткой рамой, благодаря чему он проходит самые тяжелые почвы.
                                                           </p>
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="padding: 0 10px 0 0;">
                                                            <p style="font-size: 14px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: justify; color: #F58220;">
                                                                Различные типы рабочих органов
                                                           </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="padding: 0 10px 0 0;">
                                                           <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                                <tr>
                                                                    <td style="padding: 0;"> 
                                                                        <p style="font-size: 13px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: center; color: black;">
                                                                            Защита<br /> пластиной
                                                                       </p>
                                                                    </td>
                                                                    <td style="padding: 0;"> 
                                                                        <p style="font-size: 13px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: center; color: black;">
                                                                            Защита диском
                                                                       </p>
                                                                    </td>
                                                                    <td style="padding: 0;"> 
                                                                        <p style="font-size: 13px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: center; color: black;">
                                                                            Окучник
                                                                       </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3" style="padding: 0;"> 
                                                                        <p style="font-size: 14px; font-family: 'Arial Black', Arial; text-decoration: none; text-align: justify; color: black;">
                                                                            <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_2.jpg" width="378" style="border: 0; float: left;" alt="double-disk">
                                                                        </p>
                                                                    </td>                                                        
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0;"> 
                                                                        <p style="margin: 0; padding: 0; font-style: italic; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                            стандарт
                                                                       </p>
                                                                    </td>
                                                                    <td style="padding: 0;"> 
                                                                        <p style="margin: 0; padding: 0; font-style: italic; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                            опция
                                                                       </p>
                                                                    </td>
                                                                     <td style="padding: 0;"> 
                                                                        <p style="margin: 0; padding: 0; font-style: italic; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                            опция
                                                                       </p>
                                                                    </td>
                                                                </tr>
                                                           </table>
                                                        </td>
                                                    </tr>   
                                    </table>
                                </td>
                                <td width="378">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_1.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                            </td>                                            
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_3.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
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
                    'link' => 'http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/propashnye-mezhduryadnye-kultivatory/propashnye-mezhduryadnye-kultivatory-gaspardo-hl/',
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
                                            <td colspan="2" style="padding: 0;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_4.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; color: black; text-align: justify; ">
                                                <b>В комплектацию входит:</b>
                                               </p>
                                            </td>
                                        </tr>       
                                         <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                трехточечная навеска кат. II
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                3 культиваторных лапки на S-образных пружинных стойках на каждой секции для версии 45 см и 5лапок для версии 70 см
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                защита пластинами или зубчатыми дисками (опция)
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                колеса контроля глубины
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_5.jpg" width="378" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-style: italic; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                В транспортном положении (опция)
                                               </p>
                                            </td>
                                        </tr>
                                        </table>
                                            </td>
                                            <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 0 0 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_6.jpg" width="368" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_7.jpg" width="368" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 10px 0 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/137-gaspardo/gaspardo_8.jpg" width="368" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0;"> 
                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="10%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес, кг</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Давление на почву, кг</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность трактора, л.с.</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядное расстояние, см</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производитель- ность, га/ч</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункеров для удобрений</td>
                                                                        <td width="11%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">HL-12</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1275</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60-80</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-150</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">~ 4,8</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4 х 200 л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">HL-8</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">950</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60-80</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80-120</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">~ 4.8</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4 x 200 л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                                    </tr>                                                                    
                                                                </tbody>
                                                            </table>    
                                
                                </td>
                            </tr>     
                            <tr valign="top">
                            <td colspan="2" style="padding: 5px 0px 0px 0px;">
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
                            <!-- Ссылка-кнопка подробнее -->
                            <?php
                            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                                'link' => 'http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/propashnye-mezhduryadnye-kultivatory/propashnye-mezhduryadnye-kultivatory-gaspardo-hl/',
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