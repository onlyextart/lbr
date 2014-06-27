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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 4px solid red;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: center;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/teleskopicheskie-pogruzchiki/dieci/300-teleskopicheskie-pogruzchiki-serii-agri-farmer/" style="font-size: 30px; font-weight: 800; text-align: center; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        ТЕЛЕСКОПИЧЕСКИЕ ПОГРУЗЧИКИ
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
                                    <img src="http://www.lbr.ru/images/kp/132-dieci/1dieci.png" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td style="padding: 10px 10px 0 0;">
                                    <table width="40" height="20" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fecc00;">
                                        <tr>
                                            <td style="padding: 0 0 0 10px; vertical-align: middle; ">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: right; color: white;">
                                                    1
                                                </p>
                                            </td>
                                        </tr> 
                                    </table> 
                                    </td>
                                    <td>
                                    <table width="476" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: black; ">ГИДРОСТАТИКА – ТОЧНОСТЬ ДВИЖЕНИЯ ДО МИЛЛИМЕТРА!
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Сеялки точного высева оборудованы пневматическим высевающим аппаратом на положительном давлении, позволяющим осуществлять более точный высев, не допуская просевов. 
                                                    В них используется воздух для доставки семян из бункера к индивидуальному сошнику.
                                               </p>
                                            </td>
                                        </tr>                                                                             
                                    </table>
                                </td>
                                <td>
                                    <table width="230" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 0 0;">
                                               <img src="http://www.lbr.ru/images/kp/132-dieci/dieci.jpg" width="130" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                        </tr> 
                                    </table>                               
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 10px 10px 0 0;">
                                    <table width="40" height="20" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fecc00;">
                                        <tr>
                                            <td style="padding: 0 0 0 10px; vertical-align: middle; ">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: right; color: white;">
                                                    2
                                                </p>
                                            </td>
                                        </tr> 
                                    </table> 
                                    </td>
                                    <td>
                                    <table width="476" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: black; ">PERKINS – ЛИДЕР В РЕЙТИНГЕ ПО НАДЕЖНОСТИ ДВИГАТЕЛЕЙ!
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    101 л.с. – с лучшим крутящим моментом среди двигателей аналогичной мощности!
                                               </p>
                                            </td>
                                        </tr>                                                                             
                                    </table>
                                </td>
                                <td rowspan="2">
                                    <table width="230" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 0 0;">
                                               <img src="http://www.lbr.ru/images/kp/132-dieci/dieci1.jpg" width="230" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                        </tr> 
                                    </table>                               
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td style="padding: 10px 10px 0 0;">
                                    <table width="40" height="20" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fecc00;">
                                        <tr>
                                            <td style="padding: 0 0 0 10px; vertical-align: middle; ">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: right; color: white;">
                                                    3
                                                </p>
                                            </td>
                                        </tr> 
                                    </table> 
                                    </td>
                                    <td>
                                    <table width="476" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: black; ">С ЗАБОТОЙ ОБ ОПЕРАТОРЕ!
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Самая большая дверь среди аналогичной продукции обеспечивает легкий доступ к водительскому месту. 
                                                    Внутри салона все служит для облегчения работы оператора. 
                                                    Благодаря подлокотнику на правой панели, достигается наилучший доступ к джойстику. 
                                                    Звуконепроницаемость, регулируемый по высоте и глубине руль, электрический стеклоподъемник, кондиционер – все это позволяет работать оператору в условиях полного комфорта.
                                               </p>
                                            </td>
                                        </tr>                                                                             
                                    </table>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 10px 10px 0 0;">
                                    <table width="40" height="20" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fecc00;">
                                        <tr>
                                            <td style="padding: 0 0 0 10px; vertical-align: middle; ">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: right; color: white;">
                                                    4
                                                </p>
                                            </td>
                                        </tr> 
                                    </table> 
                                    </td>
                                    <td>
                                    <table width="476" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: black; ">БОЛЬШОЙ ВЫБОР РАБОЧИХ ОРГАНОВ!
                                                </p>
                                            </td>
                                        </tr>                                                                             
                                    </table>
                                </td>
                            </tr>                            
                            <tr valign="top">
                                <td colspan="3" style="padding: 10px 0 0 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0; vertical-align: middle; ">
                                               <img src="http://www.lbr.ru/images/kp/132-dieci/dieci2.jpg" width="120" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                            <td style="padding: 0; vertical-align: middle; ">
                                              <img src="http://www.lbr.ru/images/kp/132-dieci/dieci3.jpg" width="120" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                            <td style="padding: 0; vertical-align: middle; ">
                                               <img src="http://www.lbr.ru/images/kp/132-dieci/dieci4.jpg" width="120" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                            <td style="padding: 0; vertical-align: middle; ">
                                                <img src="http://www.lbr.ru/images/kp/132-dieci/dieci5.jpg" width="120" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                            <td style="padding: 0; vertical-align: middle; ">
                                               <img src="http://www.lbr.ru/images/kp/132-dieci/dieci6.jpg" width="120" style="border: 0; float: right;" alt="double-disk">
                                            </td>
                                        </tr> 
                                    </table> 
                                </td>
                            </tr>                            
                            <tr valign="top">
                            <td colspan="3">
                            <table>
                                <tr>
                                <td style="padding: 10px 10px 0 0; vertical-align: top;">
                                    <table width="40" height="20" cellspacing="0" cellpadding="0" bgcolor="##fecc00" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fecc00;">
                                        <tr valign="top">
                                            <td style="padding: 0 0 0 10px; vertical-align: middle; ">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: right; color: white;">
                                                    5
                                                </p>
                                            </td>
                                        </tr> 
                                    </table> 
                                    </td>
                                    <td style="vertical-align: top;">
                                    <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: black; ">КОМПЛЕКТАЦИЯ
                                                </p>
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Закрытая кабина со звукоизоляцией, обогревом и вентиляцией
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Открываемое заднее стекло
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Зеркало заднего вида
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Электрический стеклоподъемник
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Звуковой зуммер при движении назад
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Радио подготовка
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Кондиционер
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Зимняя подготовка гидравлики
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Дополнительный свет на крыше (вперед 2 фары, назад 2 фары)
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Дополнительный свет на конце стрелы
                                               </li>
                                               <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Мультиджойстик 4 в 1
                                               </li>
                                            </td>
                                        </tr>                                                                                
                                    </table>
                                </td>
                                <td>
                                    <table width="445" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                                                    <tr>
                                                                        <td width="70%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                        <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Agri Farmer 30.7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная высота подъема,м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,35</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная грузоподъемность, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Горизонтальный вылет, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,65</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность на максимальном вылете, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">700</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность на максимальной высоте, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Двигатель марка, мощность кВт/л.с.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Perkins 74/101</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Трансмиссия</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Гидростатическая</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Гидравлическая система, производительность</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110(л/мин)/230 бар</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Эксплуатационная масса, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6100</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габариты (длина х ширина х высота), мм</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4760х2220х2000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>                                        
                                </td>
                                </table>                                        
                                </td>
                            </tr>                       
                        </table>
                    </td></tr>  
                <!-- Контент первого блока; -->
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/teleskopicheskie-pogruzchiki/dieci/300-teleskopicheskie-pogruzchiki-serii-agri-farmer/',
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


            
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;