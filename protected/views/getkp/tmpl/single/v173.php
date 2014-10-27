<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="720">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/kormorazdatchiki-i-kombikormovye-mini-zavody/smesiteli-kormorazdatchiki-gorizontalnye/388-gorizontalnye-smesiteli-kormorazdatchiki-senior/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Горизонтальные смесители-кормораздатчики «Сеньор»
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="40">
                                    <img src="http://www.lbr.ru/images/uploaded/RBS-(logo)_.jpg" width="40" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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

                <tr>
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-2.jpg" width="700" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>




                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="506">
                                    <!-- Первая колонка-->
                                    <table width="496" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding:10px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; font-style: italic; ">
                                                    Горизонтальные прицепные смесители-кормораздатчики российского
                                                    производства «Сеньор» предназначены для измельчения и смешивания
                                                    компонентов корма с использованием электронной системы
                                                    взвешивания, которая позволяет программировать множество
                                                    рецептов из большого числа необходимых компонентов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Одна полная загрузка - от 50 накормленных голов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Объем смесительного бункера от 8,5 м<sup>3</sup> до 14 м<sup>3</sup>. Широкий модельный
                                                    ряд – модели, как для малых хозяйств, так и для крупных агропромышленных комплексов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Эффективная резка любых компонентов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Система из ножей и противоножей, изготовленных из высококачественной 
                                                    износостойкой борной стали, в процессе работы создает «Эффект
                                                    ножниц». Шнеки и противоножи разделены расстоянием, составляющим
                                                    всего несколько миллиметров! Благодаря этому обеспечивается идеальная 
                                                    резка сенажа, сена, соломы, зеленой массы, а также корнеплодов.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td width="250">
                                    <table width="250" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 0px 3px 20px;">
                                                <table width="230" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding:0px;">
                                                            <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-3.jpg" width="230" style="border: 0;" alt="Изображения не отображаются">
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
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="308">
                                    <!-- Первая колонка-->
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-4.jpg" width="308" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td width="448">
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;" valign="top">
                                                <table width="428" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                   <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                                Равномерное смешивание.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                Расположение шнеков и высокая скорость их
                                                                вращения позволяют смешивать корм быстро и
                                                                равномерно по всему объему приготовляемой смеси.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                                100% выгрузка.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                Ванна миксера и расположение выгрузного окна,
                                                                сконструированы так, что мертвые зоны отсутствуют,
                                                                поэтому выгрузка кормовой смеси достигает 100%.
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
                </tr>



            </table>



        </td>
    </tr>



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td colspan="2">
                                   <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Сконструирован для тяжелой и долговечной службы.
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Привод редуктора у Сеньор расположен в масляной ванне, что обеспечивает долговечную, надежную и
                                                    беспрерывную работу. А также такая конструкция полностью исключает затраты времени на техническое
                                                    обслуживание цепей.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-5.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Точный объем порции!
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Датчики высокоточной измерительной системы расположены так, что весы демонстрируют точный вес
                                                    продукта во всех режимах работы. Оператор может контролировать массу каждого загружаемого компонента
                                                    с помощью монитора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Самозагрузка.
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Использование кормораздатчика оборудованного грейфером позволит сократить или вовсе исключить
                                                    затраты на загрузку кормораздатчика фронтальным или телескопическим погрузчиком.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                    Технические характеристики:
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                          <td style="padding: 5px 0px 0px 0px;">
                                               <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                    <td width="20%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #d1d3d4;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong>Модель</strong></span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">A</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">B</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">C</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">D</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">E</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 10px;">Требуемая мощность, л.с.</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес, кг</span></td>
                                                        <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #d1d3d4;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong>Сеньор 8,5 м<sup>3</sup></strong></span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2190</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4970</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2170</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2060</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1810</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55/65</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3950</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #d1d3d4;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong>Сеньор 10,5 м<sup>3</sup></strong></span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2320</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5210</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2320</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2190</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1950</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70/80</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4800</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #d1d3d4;" ><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong>Сеньор 14 м<sup>3</sup></strong></span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2420</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5850</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2480</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2290</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2010</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70/80</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5650</span></td>
                                                        <td align="center" style="border: solid black 1px; background-clip:padding-box; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
                                                    </tr>
                                                </table> 
                                            </td> 
                                       </tr>
                                   </table>
                                </td>
                            </tr>
                            
                            
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="456" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-6.jpg" width="456" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                </td>
                                <td valign="top" style="padding:10px 0px 0px 0px;">
                                    <!-- Вторая колонка-->
                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/173-senior_goriz/mail-7.jpg" width="300" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                       
                              </table>
                    </td>
                </tr>
                
                
            </table>
        </td>
    </tr>
    
<!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/kormorazdatchiki-i-kombikormovye-mini-zavody/smesiteli-kormorazdatchiki-gorizontalnye/388-gorizontalnye-smesiteli-kormorazdatchiki-senior/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

</table>
</td>
</tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>







