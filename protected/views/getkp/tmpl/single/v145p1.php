<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<div class="table w-800">
    <!-- Первый блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!--Заголовок -->
                    <tr><td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <!-- Картинка-->
                                <tr>
                                    <td style="padding-bottom:10px;">
                                        <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                                <!--Оранжевый блок-->
                                <tr>
                                    <td style="padding-bottom:5px;">
                                        <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-2.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--Контент первого блока (ч.1)-->
                    <tr>
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        1. Супернадежные и износостойкие корпуса – залог долговечной работы в любых условиях почвообработки.
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Все рабочие органы из сверхпрочного материала: стали <span style="font-weight:bold;">Permanit ©plus</span> – передняя часть дополнительно обогащена углеродом, путем специальной закалки достигнута ее сверхпрочность, в то же время задняя часть очень эластична.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-3.jpg" width="378" style="border: 0;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="350">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    увеличенный срок службы плугов,
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="350">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    высокая ударопрочность,
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="350">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    меньшая необходимая сила тяги,
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="350">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    сниженный расход топлива,
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="350">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    меньшее залипание при работе вследствие более гладкой поверхности.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-4.jpg" width="358" style="border: 0; float: left;" alt="Стрелка вправо">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <!--Контент первого блока (ч.2)-->
                    <tr>
                        <td style="padding: 15px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        2. Стабильный оборот пласта и качественная заделка пожнивных остатков.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td width="185" style="padding: 0px 4px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    Изогнутый универсальный отвал WY 400 для средних и тяжелых почв, целинных участков и склонов. Особенно легко идет по чистой борозде. Глубина обработки – до 30 см.
                                                                </p>
                                                            </td>
                                                            <td width="185" style="padding: 0px 0px 0px 4px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-5.jpg" width="185" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 4px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        3.Подбор серии под ваш трактор и площади:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px 0px 2px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • Навесные плуги для самых ходовых тракторов 120 и 150 л.с., 4-5 корпусов – <span style="font-weight:bold;">серии М и XMS</span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 2px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • Полунавесные плуги для тракторов до 300 л.с., 6-9 корпусов – <span style="font-weight:bold;">серии Herkules, Hektor</span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 0px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • Полунавесные плуги для тракторов свыше 300 л.с., 10-12 корпусов – <span style="font-weight:bold;">серия Heros</span>
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
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Второй блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!--Контент второго блока (ч.1)-->
                    <tr>
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        4. Надежные системы защиты плуга при наезде на препятствия. Подбор под ваш тип и сложность почвы.
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • Защита срезным болтом (в стандартной комплектации в сериях плугов М и XMS)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • Гидравлическая система защиты (доступна как опция на выбор в сериях Herkules, Hektor, Heros)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        5. В <span style="text-decoration:underline;">стандартной комплектации</span> достаточный комплект оборудования для получения качественной обработки почвы:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td width="178" style="padding: 0px 2px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Нож полевой доски </span> – недорогая альтернатива дисковому ножу, снижа-ет износ корпуса плуга и сокращает потребность в тяговом усилии.
                                                                </p>
                                                            </td>
                                                            <td width="140" style="padding: 0px 2px 0px 3px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-6.jpg" width="140" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                            </td>
                                                            <td width="50" rowspan="3" style="padding: 0px 0px 0px 3px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-7.jpg" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="323" colspan="2" style="padding:5px 2px 60px 0px;" >
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Предплужники </span> – универсальны в применении: от перепашки луга до кукурузной стерни.
                                                                </p>
                                                            </td>
                                                        </tr>


                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 5px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        6. Улучшенная работа плуга в зависимости от типа почвы и условий почвообработки – благодаря под-бору <span style="text-decoration:underline;"> дополнительных опций</span> к плугу:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 0px 20px;">
                                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td width="216" style="padding: 5px 5px 2px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Ажурные (полосовые) отвалы WST 430 </span> – для липких почв и условий, где важно в большей степени измельчение пласта.
                                                                </p>
                                                            </td>

                                                            <td width="132" style="padding: 5px 0px 2px 5px;" rowspan="2">
                                                                <table width="127" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-8.jpg" width="132" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-9.jpg" width="132" style="border: 0; float: right;" alt="Картинки не отображаются">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="206" style="padding: 2px 5px 2px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Углоснимы</span> – срезает угол пласта во время работы (в отличие от предплужников), смешивает растительные остатки.
                                                                </p>
                                                            </td>


                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 5px 0px 0px 20px;">
                                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td colspan="2" width="253" style="padding: 2px 5px 5px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Дисковый нож </span> – предназначен для вертикального разрезания пласта и получения ровного обреза борозды.
                                                                </p>
                                                            </td>
                                                            <td rowspan="2" width="100" style="padding: 2px 2px 10px 5px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-11.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="148" style="padding: 5px 5px 2px 3px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="font-weight:bold;">• Чистик крыла  для полунавесного коле-са </span> – для защиты от налипания земли и грязи во время работы.
                                                                </p>
                                                            </td>
                                                            <td width="100" style="padding: 5px 0px 2px 8px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-10.jpg" width="80" align="center" style="border: 0; float: left;" alt="Картинки не отображаются">
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

                    <!--Контент второго блока (ч.2)-->
                    <!--Заголовок-->
                    <tr>
                        <td style="padding: 10px 20px 3px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr style="border-bottom:solid black 4px;">
                                    <td width="550" style="padding-bottom: 3px;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/navesnie/" style="text-decoration: none;">
                                                Навесные оборотные плуги M 950 XMS 950
                                            </a>
                                        </p>
                                    </td>
                                    <td width="110" style="padding: 0px 5px 3px 15px;">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="110" align="right" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 3px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-12.jpg" width="760" style="border: 0; margin: 0; float: left;" alt="Изображения не отображаются">
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
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Для самых распространенных на территории РФ тракторов 120 и 150 л.с.!
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 4px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Надежная крепкая рама - изготовлена из высокопрочной стали и имеет сечение:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • для серии М - 120х100х8 мм;
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • для серии XMS - 150х100х12 мм.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Стабильный и плавный оборот пласта в процессе работы плуга
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Оборотная ось диаметром 80 мм у серии M и 100 мм у XMS с регулируемой опорой на конических роликоподшипниках в системе с гидроцилиндром 2-го действия с автоматическим переключателем.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Регулировка ширины захвата в серийной комплектации (4 ступени).
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td style="padding-left: 20px;">
                                        <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Система защиты – срезной болт:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • закалённые пластины фланца;
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • болты классом прочности 10.9 и специальной формы;
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        • поворотная точка грядиля расположена на большой высоте и вынесена далеко вперёд – плуг не выносит вверх при ослаблении болта при его замене.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px 0px 0px 0px;">
                                                    <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="50%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> М 950 3+1</strong></span></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> XMS 950 4+1</strong></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1 160</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1 360</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество корпусов</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4 (3+1)</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5 (4+1) </span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Просвет под рамой, см</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">78</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">82</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Требуемая мощность трак-тора, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">90-130</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">150-200 </span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price1']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
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

    </table>
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Третий блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!--Контент третьего блока (ч.1)-->
                    <!--Заголовок-->
                    <tr>
                        <td style="padding: 10px 20px 3px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr style="border-bottom:solid black 4px;">
                                    <td width="550" style="padding-bottom: 3px;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/322-plugi-polunavesnye-oborotnye-hektor/" style="text-decoration: none;">
                                                Полунавесной оборотный плуг Hektor
                                            </a>
                                        </p>
                                    </td>
                                    <td width="110" style="padding: 0px 5px 3px 15px;">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="110" align="right" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 2px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 3px 0px 0px 0px;" colspan="2">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-13.jpg" width="478" style="border: 0;  float: left;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                                <tr>
                                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;" colspan="2">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info2']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td>
                                                    <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td width="368" style="padding: 5px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="color:#F58220; font-weight: bold;">Точное управление плугом в процессе работы по глубине пахоты</span> благодаря полунавесному колесу большого диаметра (диаметром 980 мм и шириной 500 мм) при низком давлении на грунт. Колесо серийно оснащено гидропневматическим амортизатором.
                                                                </p>
                                                            </td>
                                                            <td width="100" style="padding: 5px 0px 0px 10px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-14.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="278" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 10px 0px 5px 10px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight: bold;">Простая и плавная регулировка плуга</span> – механическая изменение ширины захвата (4 ступени).
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 10px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight: bold;">Надежная рама</span> – сечение 150х150 мм с толщиной стенки 12 мм!
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 10px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight: bold;">Удобное и наиболее эффективное агрегатирование с трактором </span> благо-даря соединению плуга при помощи быстросъемного пальца. Таким образом, масса плуга равномерно распределяется по раме и при сцепке с трактором агрегатирование осуществляется ровно и без пробуксовки его колес. При этом достигается наиболее рациональное использование технических возмож-ностей трактора.
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                <tr>
                                    <td width="30%" align="left" style="border: solid black 1px;background-clip: padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                    <td width="23%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Hektor 1000, 6</strong></span></td>
                                    <td width="23%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Hektor 1000, 8</strong></span></td>
                                    <td width="24%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Hektor 1000, 9</strong></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3070</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3610</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3880</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество корпусов</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6 (5+1)</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8 (7+1)</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9 (8+1)</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Ширина захвата на корпус, см</span></td>
                                    <td align="center" colspan="3" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">36/40/44/48</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота рамы, см</span></td>
                                    <td align="center" colspan="3" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">76/82</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Требуемая мощность трактора, л.с.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">180</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">240</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">270</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price5']; ?></span></td>
                                </tr>


                            </table>
                        </td>
                    </tr>
                   
                    <!--Контент третьего блока (ч.2)-->
                    <!--Заголовок-->

                    <tr>
                        <td style="padding: 10px 20px 3px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr style="border-bottom:solid black 4px;">
                                    <td width="550" style="padding-bottom: 3px;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/321-plugi-polunavesnye-oborotnye-vn-plus-herkules/" style="text-decoration: none;">
                                                Полунавесной оборотный плуг Herkules
                                            </a>
                                        </p>
                                    </td>
                                    <td width="110" style="padding: 0px 5px 3px 15px;">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="110" align="right" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 2px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 3px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-15.jpg" width="478" style="border: 0; margin:0; float: left;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info3'] && !empty($data['product_info3'])): ?>
                                                <tr>
                                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;" colspan="2">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info3']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td>
                                                    <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td width="218" style="padding: 0px 0px 0px 0px;">
                                                                <table width="218" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                                    <tr>
                                                                        <td style="padding: 0px 0px 1px 0px;">
                                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                                                Вспашка без проблем на тракторах со спаркой и на гусеничном ходу.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 1px 0px 1px 0px;">
                                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                                                Исполнение плуга «ПО ПОЛЮ» («on land»)
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 1px 0px 1px 0px;">
                                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                                В исполнении «ПО ПОЛЮ» опорное колесо двигается перед плугом в борозде. Таким образом, дости-гается оптимальный контроль глубины, исключается опроки-дывание агрегата через про-дольную ось. Надежная полностью гидравлическая регулировка каче-ния для более легкого оборота плуга.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td  style="padding: 1px 0px 0px 0px;">
                                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                                                <span style="color:#F58220; font-weight: bold;">Мощная рама</span> – сечение 150х250 мм с толщиной стенки 12 мм!
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td width="240" style="padding: 5px 0px 0px 20px;">
                                                                <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-16.jpg" width="235" style="border: 0; float:right;" alt="Картинки не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="268" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 2px 10px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight: bold;">Точное копирование поверхности поля даже при сложном рельефе: </span> гидравли-чески управляемый шарнирный узел рамы, серийно оснащенный автоматическим устройством для оптимального приспо-собления к неровностям почвы. В работе обеспечивается абсолютная манев-ренность хвостовой части плуга благодаря «плавающему» положению рукоятки распределителя. Опорное колесо – на задней части рамы.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 2px 0px 3px 10px;">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-17.jpg" width="268" style="border: 0; float: right" alt="Картинки не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 0px 10px;">
                                                    <table width="268" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="60%" align="left" style="border: solid black 1px;background-clip: padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Модель</strong></span></td>
                                                            <td width="40%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Herkules, 9</strong></span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество корпусов</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">9</span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина захвата на корпус, см</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">36/40/44/48</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность трактора, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">280</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price6']; ?></span></td>
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

    </table>
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Четвертый блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!--Контент четвертого блока-->

                    <!--Заголовок-->
                    <tr>
                        <td style="padding: 5px 20px 3px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr style="border-bottom:solid black 4px;">
                                    <td width="550" style="padding-bottom: 3px;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/320-plugi-polunavesnye-oborotnye-vn-plus-heros/" style="text-decoration: none;">
                                                Полунавесной оборотный плуг Heros
                                            </a>
                                        </p>
                                    </td>
                                    <td width="110" style="padding: 0px 5px 3px 15px;">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="110" align="right" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 3px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-18.jpg" width="760" style="border: 0; margin: 0; float: left;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                                <?php if ($data['product_info4'] && !empty($data['product_info4'])): ?>
                                    <tr>
                                        <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info4']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color:black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight: bold;">Уверенность в долговременной надежной работе:</span> самая мощная в серии плугов Vogel&Noot балка рамы с диаметром 200х200х16 мм в передней части, задняя часть 200х100х12 мм.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 4px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Копирование всех неровностей почвы в работе
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 4px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Гидравлически управляемый шарнирный узел рамы, серийно оснащенный автоматическим устройством для оптимального приспособления к неровностям почвы. В работе обеспечивается абсолютная маневренность хвостовой части плуга благодаря «плавающему» положению рукоятки распределителя. Опорное колесо расположено на задней части рамы.
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <!--Второй столбец-->
                                    <td style="padding-left: 20px;">
                                        <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Исполнение «ПО ПОЛЮ» («on land»)
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        В исполнении «ПО ПОЛЮ» опорное колесо двигается перед плугом в борозде. Таким образом, достигается оптимальный контроль глубины, исключается опро-кидывание агрегата через продольную ось. Надежная полностью гидравлическая регулировка качения для более легкого оборота плуга.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 2px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  font-weight: bold; color: #F58220; text-align: justify;">
                                                        Для агрегатирования плуга с трактором, не обору-дованным 3-х точечной навеской, специальное ре-шение – тележка Top Lift!
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <tr>
                        <td style="padding: 10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <!--Первый столбец-->
                                    <td>
                                        <table width="502" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 2px 0px 0px;">

                                                    <table width="502" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="40%" align="left" style="border: solid black 1px;background-clip: padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                                            <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Heros 1000 <br> on-land, 10</strong></span></td>
                                                            <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Heros 1000 <br> on-land, 11</strong></span></td>
                                                            <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Heros 1000 <br> on-land, 12</strong></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5526</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5819</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6112</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество корпусов</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">10</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">11</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">12</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Ширина захвата на корпус, см</span></td>
                                                            <td align="center" colspan="3" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">36/40/44/48</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота рамы, см</span></td>
                                                            <td align="center" colspan="3" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">76/82</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Требуемая мощность трактора, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">300</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">340</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">380</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price7']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price8']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price9']; ?></span></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                        </table>  
                                    </td>
                                    <!--Второй столбец-->
                                    <td>
                                        <table width="250" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 5px 0px 0px 2px;">
                                                    <img src="http://www.lbr.ru/images/kp/145-Vogel&Noot/mail-19.jpg" width="250" style="border: 0; float: left;" alt="Картинки не отображаются">
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
        <tr valign="top">
            <td style="padding: 0px 20px 0;">
                <?php
                if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                    Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                endif;
                ?>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
