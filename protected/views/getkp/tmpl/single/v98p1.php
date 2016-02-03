<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
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
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/372-grabli-kolesno-paltsevye-millennium/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Валкообразователь Millennium Pro
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/kp/default/tonutti.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <div class="img-wrapper">
                                        <img src="http://www.lbr.ru/images/kp/98-mill/print-1.png" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                        <div class="orange-plash">ЗАГРУЗИМ ВАШ ПРЕСС ИЛИ КОМБАЙН ПО ПОЛНОЙ!</div>
                                        
                                        <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
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
                                        <tr valign="top">
                                            <td width="40" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 10px 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Колесно-пальцевые валкообразователи Millennium Pro предназначены для сгребания подвяленной и сухой травяной массы, соломы из покосов в валки заданной ширины, ворошения ее в покосах, оборачивания валков. 
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
                            <tr>
                                <td colspan="2">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">
                                            Обеспечивают высокое качество сбора в рыхлый, нескрученный валок.
                                        </span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Форма пальцев колес обеспечивает контакт с поверхностью поля нескольких пальцев одновременно, что обеспечивает их бережное воздействие на почву и гарантирует чистоту сбора продукта. Позволяет бережно собирать траву, не повреждая листьев и сохраняя все питательные свойства (включая люцерну и клевер).
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="padding: 10px 0 20px;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-2.png" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">
                                                        Одна  из  самых  производительных  машин  в  своем сегменте! 
                                                    </span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0 25px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Максимальная ширина захвата – до 12 метров.
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    Рекомендуемая рабочая скорость – 22 км/ч.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Простая регулировка ширины валка</span> (от 90 до 180 см) происходит путем установки двух задних колес. Колеса расположены на задней раме.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380" style="text-align: right;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-3.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
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
    <tr valign="top">
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td style="padding: 0 0 0 20px; width: 380px;">
                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">
                                            Повторение контура поля в работе: 
                                        </span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                        •  <b>Колеса  с  подпружиненной  независимой  подвеской</b> идеально повторяют контур неровной местности.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-4.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        • <b> Независимые и шарнирно-сочлененные боковые рамы</b> гарантируют повторение контуров холмистой и неровной почв (в моделях MILLENNIUM V18, V20).
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-6-1.png" width="369" height="16" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-6-2.png" width="369" height="193" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; font-style: italic;">
                                        Конструкция рамы запатентована компанией Tonutti.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">
                                            Продуманная  форма  рабочих  пальцев  для  непрерывной эксплуатации даже при попадании камней.
                                        </span>
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Пружинные  пальцы  рабочих  колес   особой  изогнутой формы изготовлены из качественной стали, что позволяет им работать на кручение в двух плоскостях без поломок даже при попадании камней.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">
                                            Быстрая и легкая адаптация к решению конкретной задачи благодаря «циркульной раме»:
                                        </span>
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Валкообразователи  MILLENNIUM  легко  подготовить  к работе на поле благодаря гидравлическому механизму, который раскрывает грабли и одновременно укорачивает длину. Когда грабли раскрыты, фронтальная тяговая балка  передвигает  грабли  к  трактору  и  уменьшает  общую длину на 1,7 м. Тяговая балка скользит по нейлоновым подкладкам, которые не нужно смазывать.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-8.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0 20px 0 0; width: 380px;">
                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">Ветрозащитные  экраны  на  колесах  в  стандартной комплектации – </span>облегчают работу граблей в ветреную погоду или с короткой травой, не допуская наматывания травы  или  соломы  на  колеса  и  улучшая  поток  перемещаемого материала.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-5.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">Простая и быстрая транспортировка:</span>
                                    </p>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        •  Гидравлически  складываемая  рама  с  транспортной шириной 3 метра.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-7.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        •  Регулируемые тормоза для самоустанавливающихся колес для безопасной транспортировки по дороге.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-9.png" width="369" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</div>
<!-- Блок Второй; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr valign="top">
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td style="padding: 0 0 0 10px; width: 390px;">
                        <table width="390" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-11.png" width="390" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 15px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                                <td width="135" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4; width: 100px;">Millennium V20-7GW</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих колес, шт. </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр колес, см </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр зубца, мм </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с. </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная ширина захвата, м </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,7</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Регулировка ширины валка, см </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-180</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рекомендуемая рабочая скорость, км/ч </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">22</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса (стандартная модель), кг </td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2640</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr valign="top">
                            <td style="padding: 5px 0px 0px 10px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
                            </td>
                        </tr>
                        </table>
                    </td>
                    <td style="padding: 0 20px 0 0; width: 380px;">
                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td colspan="3" style="padding-bottom: 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                        <span style="font-weight: bold; color: #f58220;">Усовершенствованная работа в специфических условиях эксплуатации (опциональная оснастка):</span>
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-right: 10px; padding-top: 15px;">•</td>
                                <td style="padding-right: 10px; padding-top: 15px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Для более устойчивой работы  на  неровной почве – комплектация <b>2-мя  дополнительны- ми  опорными  колеса- ми.</b>
                                    </p>
                                </td>
                                <td rowspan="3">
                                    <img src="http://www.lbr.ru/images/kp/98-mill/mail-10.png" width="200" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-right: 10px; padding-top: 50px;">•</td>
                                <td style="padding-right: 10px; padding-top: 50px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Уменьшение  времени сушки  и  улучшение качества  последующего  подбора  пресс-подборщиком  –  установка  <b>центральных колес  для  ворошения центра валка.</b>
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding-right: 10px; padding-top: 35px;">•</td>
                                <td style="padding-right: 10px; padding-top: 35px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black;">
                                        Установка <b>комплекта световой сигнализа- ции</b> для  лучшей  безопасности на дороге
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
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
<!-- Блок Третий; -->

</body>
</html>