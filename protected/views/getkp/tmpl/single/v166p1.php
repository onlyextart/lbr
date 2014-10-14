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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FECC00" align="center" style="border: 0; border-collapse: collapse; background: #FECC00;">
                            <tr>
                            <td style="padding: 0 10px 0 20px; text-align: left;" align="left">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-logo-orange.jpg" width="300" style="border: 0; float: left;" alt="Логотип Dieci">
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <p style="font-size: 33px; text-align: center; font-family: 'Arial Black', Arial; text-decoration: none; color: white;">
                                        DIECI AGRI STAR 38.10
                                    </p>                                    
                                </td>
                                
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/164-agri38/3.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center; padding: 20px 0 0;">                                   
                                   <table width="700" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                            <tr>
                                                <td width="44%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color: white; border-right: 1px solid grey; border-bottom: 1px solid black; width: 220px; background: #999999;">Технические характиристики</td>
                                                <td width="28%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color: grey; border-right: 1px solid grey; border-bottom: 1px solid black; background: #FFCC00;">Dieci Agri Star 38.10</td>
                                                <td width="28%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color: grey; border-right: 1px solid grey; border-bottom: 1px solid black; background: #99CC99;">Merlo 34.10</td>
                                            </tr>
                                           
                                             <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная грузоподъемность (кг)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">
                                                        3800</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3400</td>
                                            </tr>
                                             <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная высота подъема (м)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">
                                                        9,75</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9,6</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность на макс. высоте (кг)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">2200</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1200</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность на макс. вылете (кг)</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">450</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/light-green-arrow.png" width="9" style="padding: 0 12px 0 0; border: 0; float: left;" alt="double-disk">600</td>
                                            
                                            </tr>                                                                    
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Макс. горизонтальный вылет (м)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">
                                                        6,45</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габариты (длина/ширина/высота) (мм)</td>
                                                <td style="margin: 0; padding: 0 18px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4950 х 2220 х 2310</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4405 х 2230 х 2475</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Радиус разворота (мм)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">3840</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3990</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Снаряженная масса (кг)</td>
                                                <td style="margin: 0; padding: 2px 18px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7900</td>
                                                <td style="margin: 0; padding: 2px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7450</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная скорость (км/ч)</td>
                                                <td style="margin: 0; padding: 0 18px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/light-green-arrow.png" width="9" style="padding: 0 12px 0 0; border: 0; float: left;" alt="double-disk">35</td>
                                            </tr>
                                             <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем топливного бака (л)</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">95</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/light-green-arrow.png" width="9" style="padding: 0 12px 0 0; border: 0; float: left;" alt="double-disk">150</td>
                                            </tr>
                                             <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем гидравлического бака (л)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">140</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">105</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Двигатель (марка, мощность (л.с.))</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">IVECO, 127</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">DEUTZ, 120</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Трансмиссия</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">Гидростатическая *</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Гидростатическая</td>
                                            </tr>                                             
                                             <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность насоса (л)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">110</td>
                                                <td style="margin: 0 ; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">102</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальное рабочее давление (бар)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">230</td>
                                                <td style="margin: 0; padding: 0 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">210</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мосты (производство)</td>
                                                <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/122-dieci/orange-arrow.png" width="9" style="padding: 0 10px 0 0; border: 0; float: left;" alt="double-disk">Dana Spycer **</td>
                                                <td style="margin: 0; padding: 0 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Собственного производства</td>
                                            </tr>
                                        </tbody>
                                   </table>                         
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                     <tr valign="top">
                                <td width="760" style="padding: 10px 20px; text-align: center;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">                                                   
                                        * Гидростатическая трансмиссия позволяет погрузчику передвигаться плавно, с точностью до сантиметра, что позволяет выполнять погруза – разгрузочные работы с высокой точностью и аккуратностью.                                    
                                    </p>
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 10px 20px; text-align: center;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">                                                   
                                        ** Мосты Dana Spycer – специализированная компания по производству мостов на сельскохозяйственную и строительную технику. Признана мировым лидером (США).
                                      </p>
                                </td>
                            </tr>                              
                <!-- Контент первого блока; -->                
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Пятый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci15.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="760" style="padding: 10px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-proizvod.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="700" style="padding: 0 40px; text-align: center;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                        Dieci - узкоспециализированная компания по производству телескопических погрузчиков, которая первой в Европе начала производство погрузчиков в 1982 году. 
                                        На сегодняшний день компания имеет самый большой модельный ряд в мире, который составляет 110 погрузчиков. 
                                        Для изготовления своих погрузчиков, Dieci использует комплектующие только мировых производителей - лидеров в своей сфере, таких как <b>Bosch, Danfos, Dana Spycer, Iveco, Perkins, Sauer Bibus.</b>
                                    
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0 20px; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci16.jpg" width="740" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>                           
                        </table>
                    </td></tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Пятый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Шестой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-komfort.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Самая большая дверь среди аналогичной продукции обеспечивает легкий доступ к водительскому месту. 
                                                   Внутри салона все служит для облегчения работы оператора. 
                                                   Благодаря подлокотнику на правой панели, позволяющему уменьшить напряжение руки, достигается наилучший доступ к джойстику. 
                                                   Звуконепроницаемость, регулируемый по высоте и глубине руль, электрический стеклоподъемник, проемы для вещей позволяют работать в условиях полного комфорта. 
                                                   Оптимальное распределение вентиляционных решеток повышают эффективность системы охлаждения и кондиционирования воздуха, обеспечивая хорошее распространение воздуха внутри салона и позволяя избежать проблем с перегревом и задымлением. 
                                                   Открываемая крыша, устанавливаемая серийно на всех моделях, обеспечивает наилучшее вентилирование во время движения.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci17.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-obzor.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Запатентованная кабина позволяет обеспечить 360 градусный обзор благодаря яйцеобразной форме кабины и приподнятому сиденью. 
                                                   Также имеется 2 зеркала заднего вида, которые не оставляют по бокам «мертвых зон».                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci18.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                                         
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px; max-height: 876px;">
                                    <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                          <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-design.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Запатентованная кабина позволяет обеспечить 360 градусный обзор благодаря яйцеобразной форме кабины и приподнятому сиденью. 
                                                   Также имеется 2 зеркала заднего вида, которые не оставляют по бокам «мертвых зон».                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci19.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-security.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Для обеспечения максимальной безопасности все модели машины оборудованы электронной системой, позволяющей держать под постоянным контролем нагрузку на вилы или на другое оборудование во время работы. 
                                                   Ограничитель нагрузки обеспечивает гибкое и точное управление как серийным, так и специальным оборудованием.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci20.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-price.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Завод Dieci - самый современный и роботизированный завод</b> по производству телескопических погрузчиков во всем мире! 
                                                   Благодаря максимальной роботизации удалось снизить затраты по производству погрузчиков, а значит и стоимость самих погрузчиков!                                                                                                     
                                                </p>
                                            </td>
                                        </tr> 
                                    </table>                                    
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
                    
            </table>
            <!-- Внутренности блока; -->
            
        </td>
    </tr>
</table>
<!-- Блок Шестой; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Седьмой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-lbr.jpg" width="720" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Компания ЛБР является официальным дилером телескопических погрузчиков с 2006 года! 
                                                   За все годы компания продала более 400 шт. погрузчиков по всей России. 
                                                   С 2012 года ЛБР является эксклюзивным дилером сельскохозяйственных погрузчиков. 
                                                   Компания имеет 23 филиала по всей России, что позволяет делиться опытом по сервисному обслуживанию между филиалами.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci21.jpg" width="720" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-spare.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Каждый филиал ЛБР имеет свой склад комплектов для проведения ТО, а также основных з/ч. 
                                                   На нашем логистическом центре в Смоленске хранится з/ч и узлов в сборе для погрузчиков на сумму свыше 20 млн руб, 
                                                   что позволяет поставлять з/ч к вышедшему из строя погрузчику в кратчайшие сроки.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci22.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                                  
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px; max-height: 876px;">
                                    <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                          <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-servise.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   На каждом филиале находятся инженеры, прошедшие обучение на заводе Dieci и получившие там аттестацию. 
                                                   Это гарантирует проведение ТО и ремонтных работ в кратчайшие сроки.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 20px 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci23.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        
                                    </table>                                    
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
                    </td></tr>
                   <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</div>
</body>
</html>