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
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                <tr>
                <td width="660" style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/757-navesnye-zagonnye-plugi-svetlogradagromash/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Загонные навесные плуги серии ПН
                    </a>
                </td>
                <td width="100" style="padding-bottom: 3px; text-align: right;" align="right">
                    <img src="http://www.lbr.ru/images/makers/svetloagromash_text.jpg" width="70" style="border: 0; float: right;" alt="Логотип Светлоградагромаш">
                </td>
                </tr>
            </table>
        </td></tr>
        <!-- Заголовок со ссылкой и логотипом; -->
        <!-- Контент первого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding-top: 20px;">
                    <img src="http://www.lbr.ru/images/kp/224-pn2/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                <td>
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding: 10px 0px 0px 0px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; text-align: justify ">
                                Плуги серии ПН от 3 до 5 корпусов под отечественный трактор мощностью от 80 до 150 л.с. предназначены для отвальной обработки всех типов почв.
                            </p>
                        </td>
                        </tr>
                    </table>
                </td>
                </tr>                        
            </table>
        </td></tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 15px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Надежная рама.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Рама изготовлена из профильной трубы из конструкционной стали повышенной прочности
                        (марка стали 09г2с).
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>

        <tr>

        <td style="padding: 15px 0px 0px 20px;">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                Долгая жизнь деталей.
            </p>
        </td>

        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Все детали производятся из конструкционной стали повышенной прочности (марка 65г) и проходят 3
                        этапа обработки:<br>
                        термическая закалка – <b>супер прочные детали</b><br>
                        нормализация – <b>металл не крошится</b><br>
                        плазменная наплавка борсосодержащими термосплавными порошками – <b>металл не стирается</b>,
                        присутствует <b>эффект самозатачивания лемеха</b>.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 15px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Качественная вспашка на глубину 30 см.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 10px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Полувинтовой отвал обеспечивает полный оборот пласта и 100% заделку пожнивных остатков.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>

        <td style="padding: 15px 0px 0px 20px;">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                Прочное покрасочное покрытие.
            </p>
        </td>
        </tr>

        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Технология электростатического нанесения краски с последующей обработкой в инфрокрасной сушке
                        обеспечивает высокое качество и равномерность покрытия.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        
        <tr>
                <td style="padding: 15px 0px 0px 10px;" align="center">
                    <img src="http://www.lbr.ru/images/kp/224-pn2/mail-2.jpg" width="750" style="border: 0;" alt="Изображения не отображаются">
                </td>
        </tr>

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
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                
                <tr>
                <td>
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding: 10px 0px 0px 0px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black;">
                                <b>Технические характеристики:</b>
                            </p>
                        </td>
                        </tr>
                    </table>
                </td>
                </tr>

                <tr><td style="padding: 10px 0px 10px 0px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                        <tbody>
                            <tr>
                            <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                            <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ПН-3х35 П</td>
                            <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ПН-4х35 П</td>
                            <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ПН-5х35 П</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px;" align="center" valign="middle">&nbsp;</td>
                            <td style="margin: 0; padding: 1px 6px;" align="center" valign="middle"><img src="http://www.lbr.ru/images/kp/224-pn2/mail-3.jpg" width="180" style="border: 0;" alt="Изображения не отображаются"></td>
                            <td style="margin: 0; padding: 1px 6px;" align="center" valign="middle"><img src="http://www.lbr.ru/images/kp/224-pn2/mail-4.jpg" width="180" style="border: 0;" alt="Изображения не отображаются"></td>
                            <td style="margin: 0; padding: 1px 6px;" align="center" valign="middle"><img src="http://www.lbr.ru/images/kp/224-pn2/mail-5.jpg" width="180" style="border: 0;" alt="Изображения не отображаются"></td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/ч</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,7</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих органов</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рама</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100х100х8</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100х100х8</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120х120х8</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Агрегатируется с тракторами</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">МТЗ-80, МТЗ-82</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ДТ-75, ДТ-75М</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Т-150, Т-150К
                                ХТЗ-150К, ХТЗ-17021,
                                ХТЗ- 17221</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса машины, кг</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">435</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">750</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1030</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td></tr>   
                <tr valign="top">
                <td style="padding: 5px 20px 0px 0px;">
                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                        * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                    </p> 
                </td>
                </tr>
            </table>
        </td></tr>   
        <!-- Ссылка-кнопка подробнее -->
        <?php
        Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
            'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/757-navesnye-zagonnye-plugi-svetlogradagromash/',
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
<!-- Блок Второй; -->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;