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
                <!--  -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <!-- Заголовок -->
                            <tr>
                                <td style="padding-bottom:5px;">
                                    <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/header.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                            <!-- Оранжевый блок -->
                            <tr>
                                <td style="padding-top: 5px;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-top-line-orange.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px;" bgcolor="#f58220">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 26px; font-weight: bold; color: #FFFFFF; text-align: center; line-height: 28px;">
                                        Полный ассортимент машин для приготовления и раздачи кормов, загрузки кормов в кормораздатчики,вывоза и использования органических удобрений.
                                    </p>                              
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 15px;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-bot-line-orange.jpg" width="760" style="border: 0;" alt="Изображения не отображаются"> 
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <!-- Контент первого блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 2px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; font-weight: bold; color: black; text-align: left;">
                                        Горизонтальные смесители-кормораздатчики Сеньор
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-1.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding:10px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td valign="center">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">  
                                                        </td>
                                                        <td style="padding:0px 0px 0px 3px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                Использование кормораздатчика CЕНЬОР для приготовления и раздачи полно-рационных кормовых смесей позволяет увеличить
                                                                прибыль на 20% (в отличие от раздельного кормления), а использование кормораздатчика с системой самозагрузки приносит 
                                                                дополнительную экономию не менее 400 тыс.рублей, т.к. снижаются, либо полностью исключаются, затраты на загрузку 
                                                                кормораздатчика фронтальным либо телескопическим погрузчиком.
                                                            </p> 
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
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Легко измельчает целые тюки!!!</span> Диаметр шнеков 63 см, позволяет с большой легкостью и за короткое время разорвать целые тюки сена, соломы или сенажа, а также максимально быстро перемешивать всю массу в ванне кормосмесителя.  
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Эффективное измельчение за минимальный срок.</span> Система из износостойких ножей и противоножей из износостойкой борной стали создает эффект ножниц. Зазор между шнеками и контрножами составляет всего несколько миллиметров!!! Результатом является именно отрезанный материал, а не оторванный или надлом-ленный.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Выгрузка кормовой смеси свыше 99% </span> достигается благодаря расположению выгрузного окна, форме и размеру измельчающих шнеков и специальной кон-струкции бункера. Такой результат позволяет свести к минимуму попадание закисшего продукта в кормушку или на кормовой стол. 
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px;" align="center">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-2.jpg" width="300" style="border: 0;" alt="Изображения не отображаются"> 
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="20%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> A</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> B</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> C</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> D</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> E</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Требуемая мощность, л.c.</strong></span></td>
                                <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Вес, кг</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">«СЕНЬОР» 8,5 м<sup>3</sup></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2190</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4970 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2170 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2060 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1810 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">55/65</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3950 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;">«СЕНЬОР» 10,5 м<sup>3</sup></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2320 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5210</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2320 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2190 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1950 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">70/80 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4800 </span></td>                                
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">«СЕНЬОР» 14 м<sup>3</sup></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2420 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5850 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2480 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2290 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2010 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">70/80 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5650 </span></td>                                
                            </tr>

                        </table>
                    </td>
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/687-kultivatory-maximulch-s-prikatyvayushchim-katkom/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

            </table>



        </td>
    </tr>

    <!-- Первый блок -->

    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>


<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

                <!-- Контент первой строки второго блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 2px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; font-weight: bold; color: black; text-align: left;">
                                        Вертикальные смесители-кормораздатчики Сеньор
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 10px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-3.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td valign="center">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">  
                                                        </td>
                                                        <td style="padding:0px 0px 0px 3px;" width="350">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                Работает с целыми рулонами или тюками. Легко их измельчает с помощью шнека большого диаметра с ножами из износо-стойкой стали.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td valign="center">
                                                            <img src="http://www.lbr.ru/images/kp/default/dollar-orange-bg.jpg" width="40" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                        <td style="padding:0px 0px 5px 7px;" valign="middle" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                Более компактная и дешевая модель по сравнению с горизонтальными кормо-раздатчиками.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td> 
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Рекомендован для небольших ферм семейного типа.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px;" align="right">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-4.jpg" width="320" style="border: 0;" alt="Изображения не отображаются"> 
                                            </td> 
                                        </tr>
                                    </table> 
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 10px 20px;">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="20%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> A</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> B</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"<span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> C</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> D</strong></span></td>
                                <td width="7%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> E</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Требуемая мощность, л.c.</strong></span></td>
                                <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Вес, кг</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;">Сеньор В 8 м<sup>3</sup></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2100</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5000 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2590 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1800 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">450 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">55/65</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3300 </span></td>
                            </tr>                            
                        </table>
                    </td>
                </tr>


                <!-- Контент второй строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 2px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; font-weight: bold; color: black; text-align: left;">
                                        Измельчитель рулонов Унибалл
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-5.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <td style="padding:5px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #f58220; text-align: justify;">
                                                Время измельчения тюка (d=180 см) 2-3 минуты!
                                            </p> 
                                        </td>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Дисковый ротор с увеличенным количеством ножей и
                                                    измененной геометрией их расположения позволяет
                                                    повысить качество измельчения и получить более одно-
                                                    родный материал. Дисковый ротор имеет преимуще-
                                                    ство по сравнению с барабанным, поскольку <span style="color:#F58220; font-weight:bold;">позволя-
                                                        ет измельчать равномерно без рывков при большей
                                                        производительности.</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Самозагрузка рулонов с помощью заднего борта.</span> Борт поднимается с помощью гидравлического меха-низма и подает рулон по направлению к дисковому ро-тору, где происходит его измельчение.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Три варианта выгрузки!</span> Помимо стандартной выгрузки справа сверху, теперь опционально доступны комплекты выгрузки поворотным раструбом сверху и снизу слева.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="55%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="45%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">УНИБАЛЛ</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Длина х высота х ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">3,3 х 2,52 х 2,06</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Диаметр измельчаемого рулона, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">до 1,8</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Дальность разбрасывания, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1-12</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">60</span></td>
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

                <!-- Контент третьей строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 2px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; font-weight: bold; color: black; text-align: left;">
                                        Измельчитель рулонов Унибалл
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/146-kormosmesiteli/mail-5.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <td style="padding:5px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #f58220; text-align: justify;">
                                                Время измельчения тюка (d=180 см) 2-3 минуты!
                                            </p> 
                                        </td>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Дисковый ротор с увеличенным количеством ножей и
                                                    измененной геометрией их расположения позволяет
                                                    повысить качество измельчения и получить более одно-
                                                    родный материал. Дисковый ротор имеет преимуще-
                                                    ство по сравнению с барабанным, поскольку <span style="color:#F58220; font-weight:bold;">позволя-
                                                        ет измельчать равномерно без рывков при большей
                                                        производительности.</span>
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Самозагрузка рулонов с помощью заднего борта.</span> Борт поднимается с помощью гидравлического меха-низма и подает рулон по направлению к дисковому ро-тору, где происходит его измельчение.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Три варианта выгрузки!</span> Помимо стандартной выгрузки справа сверху, теперь опционально доступны комплекты выгрузки поворотным раструбом сверху и снизу слева.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="55%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="45%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">УНИБАЛЛ</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Длина х высота х ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">3,3 х 2,52 х 2,06</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Диаметр измельчаемого рулона, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">до 1,8</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Дальность разбрасывания, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1-12</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">60</span></td>
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

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/687-kultivatory-maximulch-s-prikatyvayushchim-katkom/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>   


<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>



