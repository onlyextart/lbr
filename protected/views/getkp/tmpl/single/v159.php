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
                                    <a href="" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пресс-подборщик Extreme LT
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/makers/feraboli.jpg" width="80" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Пресс-подборщик с камерой переменного объема Extreme LT предназначен для прессова-
                                                    ния любых видов травяной массы, сена, соломы в рулоны правильной цилиндрической формы
                                                    с автоматической обвязкой двойным шпагатом, пленкой, сеткой или сеткой + шпагатом.
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
                                                    Возможность регулировать плотность прессования обрабатываемого продукта благодаря камере
                                                    переменного объема.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="308" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Выбор метода прессования в зависимости от обрабатываемого продукта и 
                                                                дальнейших условия использования и хранения готовых рулонов:
                                                            </p> 
                                                            <p style="margin:0; color:black; padding: 20px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                • создание постоянного давления в
                                                                прессуемом рулоне от сердцевины
                                                                до наружной части;
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 20px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                • образование мягкого сердечника с
                                                                регулируемым диаметром от 0 до
                                                                120 см.
                                                            </p> 

                                                        </td>
                                                        <td width="70" style="padding:0px 0px 0px 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-2.jpg" width="70" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Регулирование давление осуществляется на блоке
                                                    управления, расположенном в кабине трактора.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 5px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-3.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                        <td  colspan="2">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                Широкий и равномерный захват продукта. Надеж-
                                                                ная и устойчивая работа машины на полях с услож-
                                                                ненным рельефом.
                                                            </p>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="150" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify; ">
                                                                Рабочая ширина подборщика – 2 000 мм
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Опционально можно установить подборщик с шириной 2 200 мм.
                                                            </p>  
                                                        </td>
                                                        <td width="208" style="padding:5px 0px 0px 10px;">
                                                            <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-4.jpg" width="198" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 20px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Оптимальная подача любого продукта в течение
                                                    всего этапа сбора благодаря гребенному укладчи-
                                                    ку с возвратно-поступательным движением.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 20px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Не возникает сложностей даже с сухой и хрупкой соло-
                                                    мой или короткоствольным продуктом. Происходит де-
                                                    ликатная обработка продукта, что гарантирует хорошее
                                                    поступление продукта в камеру прессования.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-5.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
                            <tr>
                                <td style="padding: 0px 0px 0px 0px;">
                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold; text-align: justify; ">
                                        Подбор варианта увязки рулона в зависимости от используемой вами технологии заготовки кормов.
                                    </p>
                                    <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: justify; ">
                                        В пресс-подборщиках Eхtreme возможны следующие варианты увязки рулона:
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td style="padding:10px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="25%" style="padding: 0px 3px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-6.jpg" width="184" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                                <td width="25%" style="padding: 0px 3px 0px 3px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-7.jpg" width="184" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                                <td width="25%" style="padding: 0px 3px 0px 3px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-8.jpg" width="184" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                                <td width="25%" style="padding: 0px 0px 0px 3px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-9.jpg" width="184" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="25%">
                                    <p style="margin:0; color:black; padding: 0px 3px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: center; ">
                                        НИТЕВОЙ: <br>одна нитка; две нитки
                                    </p>
                                </td>
                                <td width="25%">
                                    <p style="margin:0; color:black; padding: 0px 3px 0px 3px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: center; ">
                                        СЕТЕВОЙ
                                    </p>
                                </td>
                                <td width="25%">
                                    <p style="margin:0; color:black; padding: 0px 3px 0px 3px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: center; ">
                                        КОМБИНИРОВАННЫЙ:<br> сетка+нитка
                                    </p>
                                </td>
                                <td width="25%">
                                    <p style="margin:0; color:black; padding: 0px 0px 0px 3px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight:normal; text-align: center; ">
                                        ПЛАСТИКОВАЯ ПЛЕНКА
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                    Удобно и просто регулировать и контролировать
                                                    работу пресс-подборщика прямо из кабины трактора.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 5px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="209" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Все функции управления за-
                                                                ведены на многофункцио-
                                                                нальный блок электронного
                                                                управления. С помощью дан-
                                                                ного блока осуществляется
                                                                настройка следующих параме-
                                                                тров работы:
                                                            </p> 
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                • изменение диаметра рулона;
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                • подбор плотности прессования рулона;
                                                            </p>
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                • выбор типа увязки рулона.
                                                            </p> 
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Вся необходимая полезная
                                                                информация отражается на
                                                                графическом дисплее – EASY
                                                                TRONIC.
                                                            </p>

                                                        </td>
                                                        <td width="169" style="padding:10px 0px 0px 10px;" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-10.jpg" width="159" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold;text-align: justify; ">
                                                    Удобное и быстрое техническое обслуживание
                                                    пресс-подборщика благодаря легкому доступу к
                                                    основным узлам машины.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-11.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="239" valign="top">
                                                            <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                Наличие автоматической системы смазки
                                                                цепей – полностью избегается загрязнение
                                                                продукта смазочными маслами.
                                                            </p> 

                                                        </td>
                                                        <td width="129" style="padding:5px 0px 0px 20px;" valign="top">
                                                            <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-12.jpg" width="129" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding:5px 20px 0px 20px;">
            <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-13.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
        </td>
    </tr>

</table>
</td>
</tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="66%" align="left" colspan="2" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="34%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Extreme 265 LT</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td width="33%" align="left" rowspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Размер рулона (изменяемая камера)</span></td>
                                            <td width="33%" align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина, мм</span></td>
                                            <td width="34%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1218</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Диаметр min-max, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">500-1650</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Трактор</span></td>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">ВОМ, об./мин</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">540</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Потребляемая мощность, кВт/л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">48/65</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="3" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Подборщик</span></td>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина захвата, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Опорные колеса</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2 резиновых</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Подъем-опускание</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гидравлика</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="4" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Камера прессования</span></td>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество вальцов</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ременной привод</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1 резиновый ролик</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Регулировка давления</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">электронная</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ремни</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5 шт., шириной 218 мм</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="3" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Система увязки</span></td>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Шпагат</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">есть (две нити)</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Автоматическая увязка сеткой</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">опция</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Автоматическая увязка пленкой</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">опция</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" rowspan="3" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Дополнительное оборудование</span></td>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Шины 400/60-15.5</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">стандарт</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Автоматическая система смазки</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">стандарт</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Толкатель рулонов</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">опция</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Габариты (ширина х высота х длина), мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2460 х 2550 х 4150</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2600</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:grey;">Цена с НДС, руб.</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td style="padding:15px 20px 15px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="370">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-14.jpg" width="370" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                                <td width="378" style="padding: 0px 0px 0px 10px;">
                                    <img src="http://www.lbr.ru/images/kp/159-extremeLT/mail-15.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
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

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>




