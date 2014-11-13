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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelekopateli/408-kartofelekopateli-wega/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Картофелекопалка WEGA
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/unia.jpg" width="100" style="border: 0; float: right;" alt="Логотип Great Plains">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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

                <tr>
                    <td style="padding: 10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="428" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 10px 0px;" >
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold; font-style: italic; text-align:center; ">
                                                    Картофелекопалка WEGA
                                                </p>

                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="padding:3px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="24" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                                выкапывает картофель из двух рядов
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:3px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="24"  style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                                очищает от земли
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:3px 0px 10px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="24" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                                укладывает картофель полосой и овощи рядами шириной от 60 до 80 см
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-transform:uppercase; text-align: justify; ">
                                                    Почему выбирают картофелекопалки Wega
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    1. Широкое применение.
                                                </p>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    WEGA используется для выкапывания картофеля,лука,столовой свеклы и т.д.
                                                </p>  
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="328" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="328" style="padding: 0px 0px 0px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/155-wega/mail-2.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="253" style="padding:0px 5px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-3.jpg" height="168" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td> 
                                <td width="253" style="padding:0px 5px 0px 5px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-4.jpg" height="168" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="253" style="padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-5.jpg" height="168" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td valign="top">
                                    <!-- Первая колонка-->
                                    <table width="428" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    2. Легкая транспортировка и минимум повреждений.
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Транспортеры состоят из металлических прутков, закрепленных на 3 толстых ремнях, каждый второй пруток
                                                    имеет оболочку из полимерного материала.
                                                </p>  
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <!-- Вторая колонка-->
                                    <table width="328" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="328" style="padding: 0px 0px 0px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/155-wega/mail-6.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">
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
<!-- Первый блок -->
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr valign="top">
                                            <td style="padding: 0px 0px 5px 0px;" >
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    3. Чистые клубни без земли.
                                                </p>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Копатели оснащены поперечными вибрирующими
                                                    прутками в передней части транспортера, на задней части установлен специальный встряхиватель.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 5px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/155-wega/mail-7.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: justify;">
                                                    4. Облегчает уборку урожая подборочным комбайнам.
                                                </p>
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Возможна дополнительная оснастка уминающим задним валом.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    <span style="font-weight:bold;">5. Постоянная глубина обработки </span> – каждая выкапы-
                                                    вающая секция копалки Wega 1600 Plus оборудована
                                                    бесступенчатой регулировкой ножей и копирующим ро-
                                                    ликом в диапазоне от 75 до 90 см ширины междуряд и
                                                    копирующим роликом, который ведет машину по бороз-
                                                    де и удерживает постоянную глубину обработки.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 45px 0px 0px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/155-wega/mail-11.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="25%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип</span></strong></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1400</span></strong></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1600</span></strong></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1600 PLUS</span></strong></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;">&nbsp;</td>
                                <td align="center" style="border: solid black 1px; text-align: center; padding:5px 0px 5px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-8.jpg" height="98" align="center" style="border: 0;" alt="Изображения не отображаются">
                                 </td>
                                 <td align="center" style="border: solid black 1px; text-align: center; padding:5px 0px 5px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-9.jpg" height="98" align="center" style="border: 0;" alt="Изображения не отображаются">
                                 </td>
                                 <td align="center" style="border: solid black 1px; text-align: center; padding:5px 0px 5px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/155-wega/mail-10.jpg" height="98" align="center" style="border: 0;" alt="Изображения не отображаются">
                                 </td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1400 (1500)</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1600</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1600</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина междурядий, см</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70-75</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">75-90</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">75-90</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество рядов, шт.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">2</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">2</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2 840</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">2 900</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">3 400</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1 800</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1 850</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1 890</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1 120</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1 120</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1 320</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">565</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">680</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">970</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность,л.с.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">60</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">50</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price2']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price3']; ?></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Лемех для лука</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price4']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price5']; ?></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Уминающий вал</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price6']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price7']; ?></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"></span></td>
                            </tr>
                        </table>
                    </td>
                </tr>

               

            </table>



        </td>
    </tr>
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
                if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                    Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                endif;
                ?>
            </td>
        </tr>

    </table>
<!-- Второй блок -->
</div>
</body>
</html>




