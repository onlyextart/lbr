<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/morkovouborochnye-kombajny/416-morkovouborochnyj-kombajn-pstcmr/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Морковоуборочный комбайн Simon
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/makers/simon-logo-for-site.JPG" width="100" style="border: 0; float: right;" alt="Логотип Great Plains">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/153-simon/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding-left:5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                    Навесной морковоуборочный комбайн теребильного типа производства компании Simon (Франция) –
                                                    бережная уборка моркови за ботву ряда с последующей выгрузкой в рядом идущее транспортное
                                                    средство.
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
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Уборка без потерь урожая
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Расположенный в нижней части комбайна лемех бережно подкапывает морковь, облегчая ее вытягивание за
                                                    ботву.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 5px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/153-simon/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="160" valign="top">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                Устройство для
                                                                подбора лука
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Уборка лука с валка морковоуборочным комбайном с помощью дополнительной опции.
                                                            </p>  
                                                        </td>
                                                        <td width="218" style="padding:0px 0px 0px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/153-simon/mail-3.jpg" width="208" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="150" valign="top">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                Морковь на транс-портер – без ботвы
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Обрезное устройство
                                                                (расположенное в
                                                                верхней части подъ-
                                                                ёмного устройства)
                                                                срезает ботву мор-
                                                                кови. Обрезная ботва выбрасывается на
                                                                поле, а морковь пада-
                                                                ет на транспортер, который доставляет ее в
                                                                грузовик.</p>  
                                                        </td>
                                                        <td width="208" style="padding:0px 0px 0px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/153-simon/mail-4.jpg" width="198" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/153-simon/mail-5.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Особенности конструкции
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    • Автономная гидравлическая станция, работающая от ВОМ трактора 
                                                </p>  
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    • Возможность выгрузки в ящики максимальной гру-зоподъемностью до 1000 кг или в грузовик
                                                </p>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    • Все элементы выгрузного транспортера покрыты пластиком, что уменьшает степень повреждения моркови.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                                <!--Таблица с данными-->
                                                <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">S2TCMR</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">S2DCMR</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество рядков</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40-60</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40-60</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,1-0,12</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,11 – 0,14</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="bottom">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/153-simon/mail-6.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px 20px 0px 20px;">
                        <img src="http://www.lbr.ru/images/kp/153-simon/mail-7.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
                    </td>
                </tr>
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/morkovouborochnye-kombajny/416-morkovouborochnyj-kombajn-pstcmr/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table>
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>


