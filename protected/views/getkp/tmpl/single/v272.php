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
               
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/272-kt10/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </a>
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
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: black;line-height:20px; ">
                                                    Кормораздатчик тракторный КТ-10 (полуприцеп со сдвоенными колесами на балансире, без
                                                    поворотного круга) предназначен для приема, транспортировки и раздачи измельченных
                                                    листостебельных кормов, злаковых или бобовых трав, измельченной соломы, резаных корне-
                                                    плодов, а также полнорационных кормовых смесей.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                             <tr>
                                <td style="padding: 20px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                               <img src="http://www.lbr.ru/images/kp/272-kt10/2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="220" valign="top" style="padding:3px 0px 0px 5px; vertical-align: top;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;">
                                                    Загрузка корма –
                                                    до 4 т
                                                </p>
                                            </td>
                                            <td width="195" valign="top" style="padding:0px 20px 0px 0px; vertical-align: top;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;">
                                                    Объем – 10 м<sup>3</sup>
                                                </p>
                                            </td>
                                            <td width="185" style="padding:0px 20px 0px 0px; vertical-align: top;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;">
                                                    Агрегатирование с
                                                    тракторами тягового
                                                    класса 1,4 тс
                                                </p>
                                            </td>
                                            <td width="160" style="padding:0px;vertical-align: top;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    Подача в кормушки
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/272-kt10/line.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="300" style="padding-right:20px;">
                                                 <img src="http://www.lbr.ru/images/kp/272-kt10/3.jpg" width="280" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="460" valign="top" style="padding-top: 10px;">
                                                 <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                     Раздача кормов осуществляется во время движения 
                                                     кормораздатчика непрерывным регулируемым
                                                     потоком в кормушки с высотой борта не более
                                                     750 мм и шириной кормового прохода 
                                                     животноводческих комплексов не менее 2100 мм, а также
                                                     подача в загрузочные воронки стационарных раздатчиков 
                                                     на животноводческих фермах, на откормочных площадках, 
                                                     выгульно-кормовых дворах и
                                                     летних лагерях.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="50" style="padding-right:10px;">
                                                 <img src="http://www.lbr.ru/images/kp/272-kt10/mark.jpg" width="40" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="710" valign="center">
                                                 <p style="margin: 0px; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 17px; text-align:left; color: black;line-height:20px;font-weight: ">
                                                    РЕКОМЕНДОВАН ДЛЯ ФЕРМ С ШИРИНОЙ КОРМОВОГО ПРОХОДА НЕ МЕНЕЕ
                                                    2100 ММ.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 20px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <hr size="5px" color="#00ad5e">
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
                    <td  style="padding: 10px 20px 0;">
                        <img src="http://www.lbr.ru/images/kp/272-kt10/4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="130" style="padding:0px 10px 0px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/272-kt10/5.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="250">
                                    <p style="margin: 0px; padding: 10px 20px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align:left; color: black;line-height:20px; ">
                                        КОРМОРАЗДАТЧИКИ КТ-10
                                        ПРОИЗВОДЯТСЯ С ОКНАМИ ДЛЯ
                                        РАЗДАЧИ КОРМОВ КАК НА ОДНУ
                                        СТОРОНУ, ТАК И НА ДВЕ
                                        ОДНОВРЕМЕННО.
                                    </p>
                                </td>
                                <td width="120"  style="padding:0px 10px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/272-kt10/6.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="260">
                                    <p style="margin: 0px; padding: 10px 20px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align:left; color: black;line-height:20px; ">
                                        РАЗДАТЧИК МОЖЕТ БЫТЬ
                                        ИСПОЛЬЗОВАН ДЛЯ
                                        ТРАНСПОРТИРОВКИ И ВЫГРУЗКИ
                                        НАЗАД РАЗЛИЧНЫХ КОРМОВ И
                                        ПОДСТИЛОЧНОГО МАТЕРИАЛА.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#817f7e" align="center" style="border: 0; border-collapse: collapse; background: #817f7e;">
                            <tr>
                                <td style="padding:10px 20px 10px 20px;">
                                    <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:justify; color: white;line-height:20px;text-transform:uppercase; ">
                                        АГРЕГАТИРУЮТСЯ С КОЛЕСНЫМИ ТРАКТОРАМИ ТЯГОВОГО КЛАССА 1,4 ТС,
                                        ОБОРУДОВАННЫМИ РАЗДЕЛЬНО-АГРЕГАТНОЙ ГИДРОСИСТЕМОЙ, ИМЕЮЩИМИ
                                        ТЯГОВО-ЦЕПНОЕ УСТРОЙСТВО ПО ГОСТ-2349, А ТАКЖЕ ВЫВОДЫ ДЛЯ ПОДКЛЮЧЕНИЯ
                                        ТОРМОЗНОЙ ПНЕВМОСИСТЕМЫ И ЭЛЕКТРООБОРУДОВАНИЯ.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 20px 20px 0;">
                        <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;text-transform:uppercase;font-weight:bold; ">
                            ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ КОРМОРАЗДАТЧИКА КТ-10
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Грузоподъемность, кг, не более</td>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4000</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Вместимость кузова, куб.м, не менее</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Эксплуатационная масса раздатчика, кг, не более</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2600</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Привод рабочих органов</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">От ВОМ трактора</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Транспортная скорость движения, км/час, не более</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Потребляемая мощность, кВт, не более</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Габаритные размеры (д*ш*в), мм, не более</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6180*2405*2460</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина колеи, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1600</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Дорожный просвет без груза, мм, не менее</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Шины</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9,00-16Я 324А</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая тормозная система</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Пневматическая с однопроводным приводом</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Стояночная тормозная система</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Механическая, с ручным приводом</td>
                                </tr>
                                <tr>
                                    <td width="380" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
