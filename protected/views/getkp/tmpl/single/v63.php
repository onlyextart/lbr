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
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/frontalnye-traktornye-pogruzchiki/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Фронтальные погрузчики Атлант/Геркулес ПРОФИ
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-hydrac-logo.jpg" height="30" style="border: 0; float: left;" alt="Логотип Expom">
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
                                    <img src="http://www.lbr.ru/images/kp/profi-63/mail-1.jpg" width="760" height="415" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding-right: 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Широкий спектр выполняемых работ:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    погрузка-разгрузка сельскохозяйственной продукции, компоста, силоса, сыпучих материалов, палет, а также другие работы по перемещению грузов в хозяйствах.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="3" style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    На базе самых ходовых тракторов в России:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 20px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 20px 10px 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; ">
                                                    <b>Атлант ПРОФИ 1600</b> устанавливается на трактор <b>МТЗ «Беларус 82.1»</b>.
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/profi-63/mail-2.jpg" width="110" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 20px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 20px 10px 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; ">
                                                    <b>Геркулес ПРОФИ 1700</b> устанавливается на трактор <b>МТЗ «Беларус-1221».</b>.
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/profi-63/mail-3.jpg" width="110" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="3" style="padding: 0">
                                                <img src="http://www.lbr.ru/images/kp/profi-63/mail-8.jpg" width="380" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 0px 0px 10px 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Надежная конструкция, узлы и фурнитура для профессиональной работы:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Навесная гидрофицированная рама</b>(постоянная оснастка), установленная на тракторе;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Трехсекционная гидравлика;</b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Еврорамка,</b>  позволяющая  использовать  широ-кую  гамму  легкомонтируемых  (демонтируемых) сменных рабочих органов;
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Гидравлический  амортизатор,</b>  уменьшающий вибрации  и  нагрузку  на  трактор  (в  погрузчиках Геркулес);
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Фастер</b> –  позволяет  осуществлять  монтаж-де-монтаж  погрузчика  за  3-5  минут  (в  погрузчиках Атлант);
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 12px 10px; width: 40px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0px 12px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Электрогидравлический  блок  управления</b> (джойстик)  –  для  максимально  комфортного управления всеми гидравлическими секциями.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                            <img src="http://www.lbr.ru/images/kp/profi-63/mail-4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <tr>
                    <td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <table width="560" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 20px 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Гарантированное, проверенное европейское качество и характеристики:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 20px 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 10px 20px 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Погрузчик  «Атлант  ПРОФИ  1600»</b> –  устанавливается  навесное  оборудование австрийского производителя <b>Hydrac</b>.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 20px 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td  style="padding: 10px 20px 5px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <b>Погрузчик «Геркулес ПРОФИ 1700»</b> – устанавливается навесное оборудование польского производителя <b>Hydramet</b>.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/default/mail-hydrac-logo-200.jpg" width="200" style="border: 0; float: left; margin-bottom: 10px;" alt="Картинки не отображаются">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-hydramet-logo-200.jpg" width="200" style="border: 0; float: left; margin-bottom: 10px;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px;">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                            Широкий выбор рабочих органов для выполнения разнообразных операций:
                        </p>
                        <img src="http://www.lbr.ru/images/kp/profi-63/mail-5.jpg" width="760" style="border: 0; float: left; margin-bottom: 10px;" alt="Картинки не отображаются">
                        <img src="http://www.lbr.ru/images/kp/profi-63/mail-6.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="bottom">
                                <td width="380" style="padding: 15px 0 5px;">
                                    <img src="http://www.lbr.ru/images/kp/profi-63/mail-7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="380" style="padding: 15px 0 5px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 140px; background: #d1d3d4;">Модель</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Атлант ПРОФИ 1600</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Геркулес ПРОФИ 1700</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота разгрузки, м</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,45</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,59</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, кг</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 520</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 650</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                            </tr>
                                        </tbody>
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

<?php
if($data['show_footer']=='1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;