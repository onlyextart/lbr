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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Механические пропашные сеялки точного высева YР-1630F/2425F</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/119-yp/yp.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td colspan="2" style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">Работают по No-till технологии
                                                </p>
                                            </td>
                                        </tr>                                                                                     
                                    </table>
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0;">
                                               <img src="http://www.lbr.ru/images/kp/119-yp/yp1.jpg" width="370" height="260" style="border: 0; float: left;" alt="Логотип Expom">
                                            </td>
                                        </tr>                                                                                      
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 0;">
                                                <img src="http://www.lbr.ru/images/kp/119-yp/yp1.jpg" width="380" height="260" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/119-yp/yp4.jpg" width="600" style="border: 0;" alt="double-disk">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0; text-align: center;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: center; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; font-style: italic; color: #F58220; ">Качественный посев + рентабельность
                                    </p>
                                </td>
                            </tr>
                             <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 15px 0 0;">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <b>Механические сеялки точного высева YР-1630F и 2425F</b> используют воздух для доставки семян из бункера к индивидуальному сошнику, далее точность обеспечивает механический высевающий аппарат.
                                               </p>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td style="padding: 10px 15px 0 0;">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <b>Сеялки точного высева YР-1630F</b> оборудована пластиковым бункерам для удобрений объемом 3500 л и индивидуальными ящиками для семян общим объемом 1120л., по 70 литров на каждый сошник.
                                               </p>
                                            </td>
                                        </tr>                                                                                      
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 15px 0 0;">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <b>Сеялка точного высева YP-2425F</b> оборудована двумя металлическими бункерами: 84 бушеля <b>(2 964 литров) под удобрения</b> и 38 бушелей <b>(1 338 литров) под семена</b>. 
                                                    Сеялка может легко сеять свыше 160 акров <b>(64,8 Га) сои</b> и 250 акров <b>(101,25 Га) кукурузы за одну заправку</b> сеялки, что обеспечивает увеличение производительности на 52% для сои, и 12,8% для кукурузы. 
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
</table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">


                                        <tr valign="top">
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 5px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: justify; color: #f58220;">
                                                                Особенности технологии сеялок
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: justify; color: #f58220;">
                                                                YР-1630F и YP-2425F
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Высокая точность посева</b> калиброванного зерна достигается благодаря <b>пальчиковому дозатору высева</b>, который обеспечивает отличную точность посева зерен.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Дисковый сошник</b>, в котором диски смещены один относительно друг друга.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Простая и точная настройка</b>, для каждого рядка <b>глубины посева</b>.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Регулировка давления</b> сошника на землю.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Пневматическая подача семян</b> к дозаторам не имеет движущихся частей, которые нуждались в смазке и обслуживании. 
                                                                Поток воздуха подается в бункер от вентилятора по специальным каналам. 
                                                                Семена попадают по индивидуальному семяпроводу к дозаторам точного высева, которые размещены на рамах сошников.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Контроль параметров высева</b> количество семян на гектар, скорость движения, площадь посева осуществляется с помощью монитора Dickey-john.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Воздушная система доставки удобрений – запатентованная технология</b>
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 20px 15px 0 0;">
                                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">YР-1630F</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">YP-2425F</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">16</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,8</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,05</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Дорожный просвет, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0.56</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0.56</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость семенных ящиков, л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1120 под семена и 3500 под удобрения</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 964 под семена и 1 338 под удобрения</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ход сошника, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25,4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина высева, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0-10</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0-10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Давление на сошник ,кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">156-250 (6 положений пружины)</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40-70</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность трактора, л.с.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">180-240</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">300-375</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Маркеры</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">+</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">+</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Турбоколтеры</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">+</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">+</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="padding: 5px 15px 0px 0px;">
                                                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                                        </p> 
                                                    </td>
                                                </tr>
                                                    <tr>
                                                        <td style="padding: 10px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                <span style="font-weight: bold; color: #f58220;">Удобство при транспортировке ( 4 метра)</span>
                                                            </p>                                                            
                                                        </td>
                                                    </tr>                                                  
                                                </table>
                                            </td>
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 5px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                                <span style="font-weight: bold; color: #f58220;">Колтеры с внесением удобрений</span>
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                    <td>
                                                    <table>
                                                    <tr valign="top">
                                                    <td style="padding: 0 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                Турбо-диски диаметром 38 см на каждый сошник и 45 см на внесение удобрений. 
                                                                Давление регулируется от 185 до 227 кг в зависимости от установки пружины
                                                            </p>
                                                    </td>
                                                    <td>
                                                        <img src="http://www.lbr.ru/images/kp/119-yp/yp6.jpg" width="170" style="border: 0; float: left;" alt="maxim2"  />
                                                    </td>
                                                    </tr>
                                                    </table>
                                                    </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 15px 5px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                                <span style="font-weight: bold; color: #f58220;">Пальчиковые высевающие аппараты POPULATION MAX™</span>
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                    <td>
                                                    <table>
                                                    <tr valign="top">
                                                    <td style="padding: 0 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                Позволяет работать с разными формами и размерами семян, а упругий держатель пальцев обеспечивает надежную фиксацию семян.
                                                            </p>
                                                    </td>
                                                    <td>
                                                        <img src="http://www.lbr.ru/images/kp/119-yp/yp7.jpg" width="170" style="border: 0; float: left;" alt="maxim2"  />
                                                    </td>
                                                    </tr>
                                                    </table>
                                                    </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                                <span style="font-weight: bold; color: #f58220;">Превосходная маневренность</span>
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 0 0 0; text-align: justify;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                В рабочем положении секции сеялки 1630F могут отклоняться до 6° вверх и до 9°.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 5px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/119-yp/yp8.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 0;">
                                                            <img src="http://www.lbr.ru/images/kp/119-yp/yp9.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                                                          
                                                </table>
                                            </td>
                                        </tr> 
                                    </table>
                                </td></tr>         
                            
                        </table>
                        <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
            </table>
             </td>
                </tr>
</table>
<!-- Блок Второй; -->
</div>
</body>
</html>