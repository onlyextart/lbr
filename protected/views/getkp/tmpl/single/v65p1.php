<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Блок Первый: -->
<div class="table w-800">
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
                                        <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/338-kultivatory-kos/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Культиватор стерневой KOS
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/kp/unia-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                        <div class="img-wrapper">
                                            <img src="http://www.lbr.ru/images/kp/kos-65/print-1.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                            <div class="orange-plash">Крошит, рыхлит, перемешивает в любых условиях!</div>

                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <div class="img-fin-block" style="right: 0; bottom: 80px; max-width: 500px;">
                                                    <?php echo $data['product_info1']; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td width="40" style="padding: 5px 0;">
                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                </td>
                                                <td style="padding: 5px 0 0;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                        Предназначен для обработки стерни, основной и предпосевной обработки почвы. Неглубокое перемешивание пожнивных растительных остатков, таких как солома и промежуточные культуры с почвой является самой эффективной защитой от эрозии и залипания.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td></tr>
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td style="padding: 10px 20px 10px 0; text-align: center;" width="260">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-2.jpg" width="240" style="border: 0; float: left; " alt="Картинки не отображаются">
                                    </td>
                                    <td style="padding: 10px 10px 10px 0; text-align: center;" width="260">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-3.jpg" width="150" style="border: 0;" alt="Картинки не отображаются">
                                    </td>
                                    <td style="padding: 10px 0px 10px 0; text-align: center;" width="250">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-4.jpg" width="180" style="border: 0; " alt="Картинки не отображаются">
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 0px 20px 10px 0;" width="260">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            • интенсивное крошение пласта
                                        </p>
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            • подрезка сорняков
                                        </p>
                                    </td>
                                    <td style="padding: 0px 10px 10px 0;" width="260">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            • измельчение растительных остатков
                                        </p>
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            • заделка их в почву
                                        </p>
                                    </td>
                                    <td style="padding: 0px 0px 10px 0;" width="250">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            • дробление комков
                                        </p>
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            • выравнивание и уплотнение поверхности
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 0px 20px 10px 0;" width="260">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            Мощные лапы, работа на глубину до 20 см
                                        </p>
                                    </td>
                                    <td style="padding: 0px 10px 10px 0;" width="260">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            Сферические диски, расположенные под углом друг	к другу
                                        </p>
                                    </td>
                                    <td style="padding: 0px 20px 10px 0;" width="250">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                            Трубчатый вал, диам. 500 мм
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </td></tr>
                    <tr><td style="padding: 10px 20px 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td style="padding-right: 20px; width: 370px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            <span style="font-weight: 900; color: #F58220;">Крепкие  мощные  зубья  для  лущения  стерни  на  глубину до 20 см,</span>	разрыхления	и	смешивания	растительных остатков,	что	позволяет	создать	оптимальные	условия	для прорастания	выпавших	во	время	уборки	урожая	семян.
                                        </p>    
                                    </td>
                                    <td colspan="2" style="width: 370px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            <span style="font-weight: 900; color: #F58220;">Работа даже при влажной почве без забивания органов агрегата </span> –	оптимальное	расстояние	между	рабочими	органами		и	большой	просвет	под	рамой	(80	см).
                                        </p>    
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding-right: 10px; width: 370px;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-5.jpg" width="370" style="border: 0; float: right;  margin-right: 20px;" alt="Картинки не отображаются">
                                    </td>
                                    <td style="padding-right: 10px; width: 190px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            <span style="font-weight: 900; color: #F58220;">Простое регулирование глубины  обработки  почвы	</span>(до	20	см)	благодаря наличию	системы	шплинтов,	которые	можно	легко переставлять	без	использования	 каких-либо	 дополнительных	 специальных	инструментов.
                                        </p>    
                                    </td>
                                    <td style="width: 180px;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-6.jpg" width="180" style="border: 0; float: right;" alt="Картинки не отображаются">
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
</div>
<!-- Блок Первый; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<!-- Блок Второй: -->
<div class="table w-800">
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <!-- Внутренности блока: -->
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!-- Заголовок со ссылкой и логотипом: -->
                    <tr>
                        <td valign="top" width="370" style="padding-left: 20px; padding-right: 10px;">
                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center"  valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; color: #f58220; ">
                                            Подбор  наиболее  подходящей  системы  защиты стоек для работы на ваших почвах:
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 10px 0 0 0;">
                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding: 0 10px 0 0;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                                        •
                                                    </p>
                                                </td>
                                                <td colspan="2">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                                        <b>защита  болтом-предохранителем   (серия  B) </b>– для	легких	и	среднетяжелых	почвах;
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="top">
                                                <td style="padding: 5px 10px 0 0;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                                        •
                                                    </p>
                                                </td>
                                                <td style="padding-top: 5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                                        <b>пружинная  защита  (серия  S)</b> – для	 работы	 на	 более	 тяжелых	 и каменистых	почвах.
                                                    </p>
                                                </td>
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/kos-65/mail-7.jpg" width="100" style="border: 0; float: left; margin-left: 10px;" alt="Картинки не отображаются">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 10px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                            <span style="font-weight: 900; color: #F58220;">Агрегатирование  с  самыми  ходовыми  тракторами  80-260  л.с.</span>	(зависимости	от	ширины	захвата	и	ком-плектации):	МТЗ	82,	МТЗ	1025,	МТЗ	1221,	МТЗ	1523,	Т 150,	К	700	и	пр.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 10px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: #F58220;">
                                            Подбор	 вида	 прикатывающего	 катка	 для	 достижения нужной	степени	тщательности	обработки	почвы:
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 5px 0 0 0;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-9.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 20px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            •  <b>пружинный	</b>диам. 600 мм, рабочая ширина 3/4,5H/6H
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 5px 0 0 0;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-10.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 20px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                            •  <b>спиральный</b> диам.600 мм, рабочая ширина 3/4,5H/6H
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td valign="top" width="370" style="padding-right: 20px; padding-left: 10px;">
                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white; height: 1px;">
                                <tr>
                                    <td>
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: 900; color: black; text-align: justify; ">
                                            Удобство транспортировки агрегата:
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">
                                            •  <b>гидравлическое складывание рабочих секций</b> для транспортировки по дорогам общественного пользования (в агрегатах с рабочей шириной от 3,7 м).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding: 10px 0 0 0;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-11.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: justify; color: black; ">
                                            •  <b>дооснащение  тележкой  для  полунавесной версии</b>  – обеспечивает удобную транспортировку и снимает	нагрузку	с	системы	навески	трактора;
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0 0 0;">
                                        <img src="http://www.lbr.ru/images/kp/kos-65/mail-8.jpg" width="370"  style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top" style="padding: 10px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <span style="font-weight: 900; color: #F58220; ">Для  агрегатирования  с  тракторами   К  700  и  Т  150</span> агрегат	должен	быть	укомплектован	специальной	цен-тральной	системой	навески,	а	также	опорными	колесами.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 5px 20px 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 175px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,0 В</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,0 S</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,7 В</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,7 S</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5,4 ВH</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5,4 SH</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">6,0 ВH</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">6,0 SH</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">3,0</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">3,7</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">5,4</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">6,0</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">915</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1170</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1215</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1780</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1780</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2276</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1900</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2400</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество	зубцов,	шт.</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">7</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">9</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">13</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">13</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество	дисков,	шт.</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">8</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">10</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">14</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">14</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с. </td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-140</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">115-150</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-160</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-180</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-200</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200-260</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-200</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200-260</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                        <td style="margin: 0; padding: 3px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: left; ">
                                * Также все модели доступны с пружинной защитой зубьев
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td colspan="2" style="padding: 0px 20px 0;">
                            <?php
                            if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
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
<!-- Блок Второй; -->
</body>
</html>