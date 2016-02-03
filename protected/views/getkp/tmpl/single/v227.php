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
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/traktory/mccormick/237-traktory-mccormick-serii-ttkh/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Трактор McCORMICK TTX 190
                    </a>
                </td>
                <td style="padding-bottom: 3px; text-align: right;" align="right">
                    <img src="http://www.lbr.ru/images/makers/McCormick-logo-small.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                    <img src="http://www.lbr.ru/images/kp/227-mccormick/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
        <tr><td style="padding: 0;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430" style="padding: 0 0 0 0px;">
                    <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td>
                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                <td width="30" valign="middle" style="padding: 10px 0px 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 10px 0px 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Максимальная мощность 190 л.с.
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Скорость
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20"  style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Высокая маневренность и надежность –
                                        малый радиус поворота
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Трансмиссия POWER SHIFT 32+24
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20"  style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Мощная навеска
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20"  style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Тормоза для прицепов
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td width="30" valign="middle" style="padding: 2px 0;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td style="padding: 2px 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                        Мощная гидравлика – 130 л/мин.
                                    </p>
                                </td>
                                </tr>
                            </table>
                        </td>
                        </tr> 
                        <tr>
                        <td style="padding: 15px 0 0 0;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Современные 6-цилиндровые двигатели FTP IVECO
                                    Common Rail Euro III серии</span> 
                                с системой рециркуляции
                                выхлопных газов, турбокомпрессором с интеркулером
                                и электронным регулятором представляют собой мощные, неутомимые и гибкие двигатели, разработанные
                                для работы в течение многих тысяч часов даже в самых
                                тяжелых условиях работы.
                            </p>
                        </td>
                        </tr>
                        <tr>
                        <td style="padding: 5px 0 0 0;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Коробка Power Shift имеет 32+24 скорости.</span> <br>
                                Переключение скоростей осуществляется под нагрузкой. Подъемник имеет грузоподъемность до 10 500 кг.
                            </p>
                        </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 5px 0 0 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Кабина класса люкс в стандартной комплектации</span> 
                                </p>
                            </td>
                        </tr>
        
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• большая просторная кабина с эргономичным, понятным и надежным управлением</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• кондиционер</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• пневматическая подвеска кабины</span> 
                                </p>
                            </td>
                        </tr>


</table>
</td>
<td width="330" style="padding: 0;">
    <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">

        <tr>
        <td style="padding: 10px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/227-mccormick/mail-2.jpg" width="300" style="border: 0; float: right;"  alt="Картинки не отображаются">
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
        
        <tr><td style="padding: 0;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430" style="padding: 0 0 0 0px;">
                    <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding: 15px 0 0 0;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                        <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Многофункциональный трактор с богатой базовой
                            комплектацией среди европейских тракторов в одном классе.</span> 
                            </p>
                        </td>
                        </tr>
                        
                        <tr>
                            <td style="padding: 5px 0 0 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Отлично агрегатируется с:</span> 
                                </p>
                            </td>
                        </tr>
        
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Зерноперегрузчиками</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Прицепами</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Косилкой-бабочкой</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Пропашными 12-ти и 16-ти – рядными сеялками</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Фронтальными погрузчиками</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Внесение удобрений</span> 
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Свеклоубороными комбайнами</span> 
                                </p>
                            </td>
                        </tr>


</table>
</td>
<td width="330" style="padding: 0;">
    <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">

        <tr>
        <td style="padding: 15px 0px 0px 0px;">
            <img src="http://www.lbr.ru/images/kp/227-mccormick/mail-3.jpg" width="300" style="border: 0; float: right;"  alt="Картинки не отображаются">
        </td>
    </tr>               
</table>
</td>
</tr>   
</table>
            </td>
            </tr>
            
        <tr><td style="padding: 10px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td width="560" style="padding:0px 10px 0px 0px;">
                       
                                    <table width="550" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                            <tr>
                                                <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-color: #d1d3d4;">Модель</td>
                                                <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #d1d3d4;">TTX 190 М/Е</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">ДВИГАТЕЛЬ</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">FTP IVECO Common Rail Euro III</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Число цилиндров, шт./рабочий объем, л</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6 / 6728</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная мощность кВт (л.с.)</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">146 (199)</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем топливного бака, л</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">350</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">ТРАНСМИССИЯ</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Коробка передач</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">XtraSpeed 8 Powershifts/Shuttle</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная скорость, км/ч</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40 – ограничена электроникой</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество передач вперед /назад</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">32/24</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">ГИДРАВЛИЧЕСКАЯ СИСТЕМА</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, л/мин</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">129</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">НАВЕСНОЕ УСТРОЙСТВО</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Трехточечное, максимальная грузоподъемность на концах тяг, кг</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10 500</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">КАБИНА</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кондиционирование, отопление, вентиляция</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">В базовой комплектации</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Пневматическая подвеска кабины</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">В базовой комплектации</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #e6e7e8">ГАБАРИТЫ (могут изменяться в зависимости от комплектации трактора)</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Колесная база (В)/ длина с балластом (С)/
                                                    ширина без спарки (Е)/ высота (А), мм</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 873 / 5 307 / 2 415 / 3000</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса без балласта (зависит от
                                                     комплектации), кг</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7 700</td>
                                            </tr>
                                        </tbody>
                                    

                        </table>
                    </td>
                    <td width="200" style="padding-left: 10px;">
                        <img src="http://www.lbr.ru/images/kp/227-mccormick/mail-4.jpg" width="190" style="border: 0; float: right;"  alt="Картинки не отображаются">
                    </td>
                </tr>

    

            </table>                                    
            </td>
        </tr>
        <tr><td style="padding: 10px 20px 0;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
        <tbody>
            <tr>
                <td width="60%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Наименование</td>
                <td width="40%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
            </tr>
            <tr>
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><b>Трактор MC TTX 190</b> (c механическим управлением диапазонов переключения передач), пр-во РФ</td>
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
            </tr>
            <tr>
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><b>Трактор MC TTX 190</b> (c электронным управлением диапазонов переключения передач), пр-во РФ</td>
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
            </tr>
            <tr>    
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><b>Трактор McCORMICK TTX 190 M</b> ( с механическим управлением диапазонов переключения передач), пр-во Италия</td>
                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
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
        <!-- Ссылка-кнопка подробнее -->
<?php
Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
    'link' => 'http://www.lbr.ru/tehnika/traktory/mccormick/237-traktory-mccormick-serii-ttkh/',
    'colspan' => false,
    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
        )
);
?>
</table>
</td></tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
<!-- Внутренности блока; -->

</table>

<!-- Блок Второй; -->

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;