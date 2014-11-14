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
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/valkoobrazovatel-tcr-8/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Валкообразователь TCR 8
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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/96-TCR/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                            <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="40" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Колесно-пальцевые валкообразователи TCR 8 используются для сгребания в валки и ворошения любых видов трав. Их широкая рабочая часть и низкий центр тяжести обеспечивают хорошую и безопасную работу даже на склонах и на холмистой местности.
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
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Оптимальное загребание продукта. 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Качественные валки.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Пальцевые колеса</b> деликатно загребают зеленую массу, не отделяя листья, которые содержат большую часть питательных ценностей корма. В результате сгребания получаем  однородный  и  объемный  валок,  из  которого легко сформировать ровный компактный рулон.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-2.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">
                                                    Чтобы  получить  более  воздушный  валок  и  уменьшить  время сушки  в  конструкции  машины есть <b>центральное колесо</b> для осуществления  поворота  валка  на  полповорота  в  «мертвой зоне».
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-3.jpg" width="150" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Работа даже с большой массой скошенного продукта. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Более высокий дорожный просвет увеличивает способность сгребать и пропускать из-под рамы валкообразователя большой поток продукта.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 20px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Возможность переворачивания валка для просушки.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Любая из сторон машины может быть заблокирована в транспортировочном положении для работы только одной стороной граблей. Это позволяет, например, после дождя  подъехать  к  валку  и  перевернуть  его  на  вторую сторону для просушки.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-4.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <?php
                                        Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', 
                                            array(
                                                'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/valkoobrazovatel-tcr-8/',
                                                'colspan' => 2,
                                                'style' => 'text-align: right; padding-top: 10px; padding-right: 0;'
                                                )
                                            );
                                        ?>
                                    </table>
                                    <!-- Ссылка-кнопка подробнее -->
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Регулировка ширины валка под любой пресс-подборщик.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Поворотные  устройства  позволяют  граблям  адаптировать  размеры  валка  (от  90  до  210  см)  к  размерам  подборщика в пресс-подборщике, который следует за ними. Регулировать ширину можно за несколько секунд прямо на поле без использования специальных инструментов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-5.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Работа даже на сложных поверхностях поля:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Колесные  пары  с  центральными  шарнирными соединениями </b>для того, чтобы гарантировать идеальную  адаптацию  пальцевых  колес  к  полям  с  неровным контуром или с наклоном.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-6.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 10px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Балансирующие  устройства,</b>  расположенные  на каждой стороне граблей, контролируют верное почвенное давление при работе на грубой или неров-ной почве.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Для работы с тракторами различной конструкции и на полях с любым рельефом.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Простая и удобная регулируемая сцепка с трактором.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-8.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="3" style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Компактность машины и простота транспортировки</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 15px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 5px 10px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Прицепная  конструкция машины  позволяет  разгрузить  трехточечную навеску  трактора  и  улучшить  маневренность  как в рабочем, так и в транспортном положении.
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-9.jpg" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td colspan="2" style="padding: 10px 0 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Валкообразователи TCR имеют два действующих  гидравлических  цилиндра для  поднятия  граблей  в  транспортное  положение прямо  из  кабины  трактора.  Это  очень  удобно  при разворотах и переездах с поля на поле. Транспортная ширина – 2,8 метра
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-11-1.jpg" width="370" height="100" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-11-2.jpg" width="370" height="78" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="padding: 10px 0 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                                            <td width="90" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4; width: 90px;">TCR 8</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество колес</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр колес, см</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, см (F)</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 480 до 570</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина валка, см (E)</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 90 до 210</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина машины, см (A)</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">500</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная высота машины, см (C) </td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 257 до 286</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина колеи, см (B) </td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">203</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная ширина машины в транспортном положении, см (D)</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр пальцев, мм </td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес машины, кг </td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">610</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рекомендуемая рабочая скорость, км/ч </td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">22</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Шины</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">205/65 - 15 «</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с. (кВт)</td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"> 30 (22,4)</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                        <td colspan="3" style="padding: 5px 0px 0px 0px;">
                                            <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                            </p> 
                                        </td>
            </tr>
                                        <tr>
                                            <td colspan="3">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-12.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <img src="http://www.lbr.ru/images/kp/96-TCR/mail-13.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <!-- Ссылка-кнопка подробнее -->
                                        <?php
                                            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', 
                                                    array(
                                                        'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/valkoobrazovatel-tcr-8/',
                                                        'colspan' => 3,
                                                        'style' => 'text-align: right; padding-top: 10px; padding-right: 0;'
                                                        )
                                                    );
                                        ?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
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