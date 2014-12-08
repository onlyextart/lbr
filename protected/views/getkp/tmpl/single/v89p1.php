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
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/kosilki/kosilki-bellon-alfa/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Косилка дисковая Bellon DL
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-bellon-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 2px 0 0px;">
                                    <div class="img-wrapper">
                                        <img src="http://www.lbr.ru/images/kp/89-bellon/print-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                        <div class="orange-plash">С МТЗ 82 до 3,5 га в час!</div>
                                        
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
                                            <td width="40" style="padding: 0px 0 7px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0 7px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Боковая дисковая косилка Bellon DL предназначена для средних и небольших хозяйств. Используется при кошении всех зеленых культур для непосредственного скармливания, на сено и для дальнейшей переработки.
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
                                            <td style="padding: 0 0 20px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <span style="font-weight: bold; color: #f58220;">Качественное  кошение  всех  зеленых  культур:</span> конструкция  косилки  обеспечивает  стабильный  равномерный срез культуры, скашиваемая масса не режется дважды  при  работе.  В  результате  получаем  отличный готовый продукт без потерь и с минимальной засоренностью.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="text-align: left;">
                                                <img src="http://www.lbr.ru/images/kp/89-bellon/mail-2.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td style="padding: 10px 20px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <span style="font-weight: bold; color: #f58220;">Подбор модели под нужные площади эксплуатации </span> – машины с шириной кошения от 1,3 до 3,2 м, выбор в зависимости от нужного объема работ за сезон.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <span style="font-weight: bold; color: #f58220;">Оптимальная  производительность  при  агрегатировании с самыми ходовыми тракторами:</span> с МТЗ 82 при  кошении  злаковых  культур   –  до  3,5  га  в  час!  (при ширине косилки 3,2 м).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <span style="font-weight: bold; color: #f58220;">Минимальные  временные  затраты  на  агрегатиро-вание  косилки  с  трактором:</span>  удобная  и  надежная  3-х точечная навеска сокращает время на агрегатирование.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <span style="font-weight: bold; color: #f58220;">Покос по сложному профилю поля </span> 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Система с двойным гидравлическим поршнем обеспечивает  приспособление  машины  к  сложному  рельефу почвы при сохранении положения косилки параллельно земле  в  течение  всех  рабочих  операций.  Кроме  того, достигается  однородное  распределение  загрузки  на грунт и защита почвы и дернового слоя.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 10px; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/89-bellon/print-3.jpg" width="370" style="border: 0; float: right;" alt="Картинки не отображаются">
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Защита косилки при встрече с препятствием:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                •
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                В случае встречи косилки с препятствием, при ударе  срабатывает  автоматическая  аварийная  расцепка:  режущий  аппарат  целиком  автоматически смещается  назад,  а  после  преодоления  преграды снова возвращается в своё исходное положение.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                •
                                                            </p>
                                                        </td>
                                                        <td style="padding: 5px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Режущие рабочие органы в косилке закреплены на надежной  раме,  выдерживающей  различные  нагрузки.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                •
                                                            </p>
                                                        </td>
                                                        <td style="padding: 5px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Предохранительное  устройство  препятствует  косилке во время работы подниматься выше 35° в целях сохранения целостности карданного вала.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0 0; line-height: 193px;" width="370"><img src="http://www.lbr.ru/images/kp/89-bellon/mail-4-1.jpg" width="370" height="193" style="display: block; border: 0; float: left;" alt="Картинки не отображаются"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 10px; line-height: 56px;" width="370"><img src="http://www.lbr.ru/images/kp/89-bellon/mail-4-2.jpg" width="370" style="display: block; border: 0; float: left;" alt="Картинки не отображаются"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0 0px;" width="370"><img src="http://www.lbr.ru/images/kp/89-bellon/mail-7.jpg" width="370" style="display: block; border: 0; float: left;" alt="Картинки не отображаются"></td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Быстрое и простое техобслуживание косилки:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Удобство  конструкции  и  доступность  ко  всем  узлам агрегата.  Можно  заменять  шестерню  диска,  снимая только диск и кронштейн, без разборки всего режущего аппарата.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0 0px;">
                                                <img src="http://www.lbr.ru/images/kp/89-bellon/mail-5.jpg" width="370" style="border: 0; float: right;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Компактность и удобство транспортировки:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Подъём  режущего  бруса  при  помощи  гидроцилиндров обеспечивает малые габаритные размеры в транспортном положении. При помощи гидравлики косилка поднимается  вертикально  на  90  град.,  что  обеспечивает повышенную устойчивость движения и безопасность на дорогах общего пользования, т.к. косилка не выступает за габариты трактора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 0 0px; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/89-bellon/mail-6.jpg" width="230" style="border: 0; float: right;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 10px 20px 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL3</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL5</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL7</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL8</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,30</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,05</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,80</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,20</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт. </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с. </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Средняя производительность, га/час </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,2</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,0</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,8</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,2</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Обороты ВОМ, об./мин </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">540</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">540</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">540</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1000</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес косилки, кг </td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">310</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">420</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">560</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">650</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px; font-weight: bold;">*</span></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </td></tr>
            <tr valign="top">
            <td style="padding: 5px 20px 0px 20px;">
                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                </p> 
            </td>
            </tr>
                    <tr valign="top">
                        <td style="padding: 0px 20px 0;">
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
<!-- Блок Второй; -->
</body>