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
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/246-diskovye-seyalki-double-disk/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Дисковая сеялка Double Disc<span style="font-size: 12px; color: #2518B4; font-weight: normal;">&nbsp;(подробнее...)</span></a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/amity-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk.jpg" width="760" height="415" style="border: 0; float: left;" alt="Логотип Expom">
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
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 10px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: #F58220; ">Минимальная и традиционная технология почвообработки и посева
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Лучшая сеялка для мелкозерновых, рапса и сои
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 10px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Возможность засеять с Double Disc 200-250 га за день работы в поле с трактором всего 220 л.с.!
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; ">Точный посев</span>
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">– каждый ряд имеет индивидуальную настройку глубины. 
                                                                Давление на почву до 80 кг на дисковый сошник настраивается гидравлически «на ходу» – как отдельно на каждый сошник, так и сразу для всей сеялки. Точность сохраняется на больших скоростях. 
                                                                На подготовленных полях <strong>скорость посева – до 15 км/ч.</strong></span>
                                                            </p>
                                                        </td>
                                                    </tr>        
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                <strong>Идеально для высева рапса</strong>, где очень важно производить посев <strong>на постоянную малую глубину</strong>.</span>
                                                            </p>
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">                                                        
                                                        <td style="width: 161px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Внесение сухих удобрений при посеве.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; ">Идеальная настройка глубины и качества заделки семян.</span>
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">Возможность эффективно работать при низком и среднем содержании растительных остатков.</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="width: 333px; padding: 10px 0px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; ">Узкие междурядья</span>
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">– каждому семени больше площади для роста!</span>
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">                                                        
                                                        <td style="width: 161px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Надежность и долговечность.
                                                            </p>
                                                        </td>
                                                    </tr>                                                   
                                </table>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top" style="padding-right: 0px;">                                                        
                                                        <td style="width: 280px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: black; ">Бункер (заднеприцепной) и основные рабочие элементы изготовлены из нержавеющей стали .
                                                            </p>
                                                            <p style="margin: 0; padding: 15px 0 0 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Лучшая производительность – потенциально высокий урожай.
                                                            </p>
                                                        </td>
                                                        <td style="padding: 10px 0 10px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/double-disc/double-disk1.jpg" width="181" style="border: 0; float: left;" alt="double-disk">
                                                        </td> 
                                                    </tr>                                               
                                </table>
                                
                                </td>
                                
                            </tr>
                            
                            
                                
                                
                                
                            <tr valign="top">
                                <td style="padding: 10px 0;" width="240">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top" style="padding-right: 0px;">
                                                        <td style="padding: 10px 0 10px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/double-disc/double-disk2.jpg" width="175" height="198px" style="border: 0; float: left;" alt="double-disk">
                                                        </td> 
                                                        <td style="padding: 10px 0 10px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/double-disc/double-disk3.jpg" width="175" height="198px" style="border: 0; float: left;" alt="double-disk">
                                                        </td> 
                                                    </tr>                                               
                                </table>
                                
                                </td>
                                <td style="padding: 10px 0;" width="378">
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk4.jpg" width="378" height="208px" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr valign="top">
                    <td style="padding-left: 20px; padding-right: 10px;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                           <tr valign="top">
                                <td style="padding: 5px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk7.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>                            
                            <tr valign="top">
                                <td style="padding: 5px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk5.jpg" width="378" height="230" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>                            
                        </table>
                    </td>
                    <td style="padding-right: 20px; padding-left: 10px;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: 900; color: #F58220; text-align: justify; ">
                                        Преимущества конструкции
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  Безопасная и удобная заправка секций бункера.
                                        Бункер оборудован удобной лестницей для доступа на просторную верхнюю площадку, оборудованную перилами.
                                    </p>
                            </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  &nbsp;Давление прикатывающих колес регулируется.
                                    </p>
                            </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">
                                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  Снижение уплотнения почвы. Широкие задние колеса установлены с большей колеёй, чем передние.
                                    </p>
                            </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">
                                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  Без дополнительных погрузочно-разгрузочных работ. 
                                        Стальной загрузочный шнек фиксируется в транспортном положении, а также может свободно поворачиваться.
                                         Результат – удобство при транспортировке, возможность производить загрузку секций бункера.
                                    </p>
                            </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">
                                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  Меньше времени на проведение наладочных работ. 
                                        Величина воздушного потока пневматической транспортной системы изменяется за счёт изменения частоты вращения вентилятора.
                                    </p>
                            </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                        •  На каждом дозирующем устройстве установлены датчики, контролирующие наличие в них посевного материала. 
                                        Результат – дистанционный контроль наличия семян в секциях бункера.
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 5px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk8.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td>
                </tr>
                
                <tr>                    
                    <td colspan="2" style="padding: 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/double-disc/double-disk6.jpg" width="760" style="border: 0; float: right;" alt="Картинки не отображаются">
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 10px 20px 0;">
                        <table width="368" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13,7</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункера, л</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9 865</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисковых сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр дисков, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35,6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Прикатывающие колеса, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35,6 x 7,6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Система контроля высева</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">на распределитель</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15,2</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10-15</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220</td>
                                </tr> 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </td>
                    <td style="padding-right: 20px; padding-left: 10px;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td style="padding: 5px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/double-disc/double-disk9.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
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

<?php
if($data['show_footer']=='1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;