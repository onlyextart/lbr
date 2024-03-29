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
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/chizeli-i-glubokorykhliteli/kombinirovij-turbo-chizel-ts/" style="font-size: 25px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Агрегат для основной обработки почвы <br> Турбо-Чизель ТС
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" width="91" style="border: 0; float: right;" alt="Логотип Great Plains">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <!-- Контент первого блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
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

        </td>
    </tr>

    <!-- Основная информация -->
    <tr>

        <td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <!--Первый столбец -->
                    <td>
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td style="width: 30px; padding: 10px 10px 0 0px;">
                                    <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                </td>
                                <td style="padding: 10px 10px 0 0; ">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">Обладает  характерными  особенно-стями,  используется  для  ОСНОВНОЙ ОБРАБОТКИ ПОЧВЫ: </span>
                                    </p>                                                
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="width: 30px; padding: 10px 10px 0 0;">
                                    &nbsp;
                                </td>
                                <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• <strong>работает по растительным остаткам любого размера и любой плотности на глубину до 35 см</strong></span>
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="width: 30px; padding: 10px 10px 0 0;">
                                    &nbsp;
                                </td>
                                <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">• создает	«рыхлую»	почву	для посева и уничтожает плужную подошву предыдущих обработок
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="width: 30px; padding: 10px 10px 0 0;">
                                    &nbsp;
                                </td>
                                <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• <strong>вертикально	обрабатывает	переувлаж-ненную, подмерзшую или пересушенную почву,не забивается</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="width: 30px; padding: 10px 10px 0 0;">
                                    &nbsp;
                                </td>
                                <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">• не	оборачивает	пласт,	предотвращает	развитие эрозии	почвы
                                    </p>
                                </td>
                            </tr>



                        </table>
                    </td>
                    <!--Вторая колонка-->
                    <td>
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">                                                        
                                <td style="padding: 10px 0px 15px 23px;">
                                    <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-2.jpg" width="360" style="border: 0; float: left;" alt="double-disk">
                                </td>
                            </tr>


                            <tr valign="top">                                                        
                                <td style="padding: 5px 0px 15px 23px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; "> Турбо-Чизель	– высокоскоростное орудие <br>13-15	км/час</span>
                                    </p> 
                                </td>
                            </tr>                                       
                        </table>                               
                    </td>
                </tr> 
            </table>
        </td></tr>  
    <tr>
        <td style="padding: 10px 20px 15px 20px;" align="center">
            <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-3.jpg" width="760" style="border: 0;" alt="double-disk">
        </td>
    </tr>

    <tr>
        <td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0;  border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td style="width: 30px; padding: 0px 10px 0px 0px;">
                        <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                    </td>
                    <td style="padding: 0px 10px 0px 0px; ">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; ">Турбо-Чизель объединяет в себе лучшие качества стерневых культиваторов и дисковых борон </span>
                        </p>
                        <p style="margin: 0; padding: 10px 0px 20px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; ">Благодаря чему это происходит? </span>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><td style="padding:0px 20px 20px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; ">
                <tr valign="top">
                    <td>
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-4.jpg" style="border: 0; float: left;" width="290" alt="">
                    </td>
                    <td style="padding:0px 10px;" width="300">
                        <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; ">Турбо-чизель можно оборудовать стандарт-ными чизельными ла-пами или установить 1 ряд – АА усиленные, 2 ряд – чизельная лапа. </span>
                        </p>  
                    </td>
                    <td style="padding:0px">
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-5.jpg" style="border: 0; float: left;" width="140" alt="">
                    </td>
                    <td width="300">
                        <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; ">Усиленная лапа спо-собна выдерживать горизонтальную нагрузку до 1111 кг. В случае столкновения с пре-пятствием, она откиды-вается и автоматически возвращается в исходное положение. </span>
                        </p>
                    </td>
                </tr>


            </table>


            <!-- Ссылка-кнопка подробнее -->
            <?php
            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/chizeli-i-glubokorykhliteli/kombinirovij-turbo-chizel-ts/',
                'colspan' => false,
                'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                    )
            );
            ?>
</table></td></tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>


<!-- Второй блок -->
<table width="800" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr bgcolor="#eeeeee"><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr><td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; ">
                <tr valign="top">
                    <td style="padding: 15px 19.5px 0px 20px;">
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-6.jpg" style="border: 0; float: left;" width="175" alt="">
                    </td>
                    <td style="padding: 15px 19.5px 0px 0px;">
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-7.jpg" style="border: 0; float: left;" width="175" alt="">
                    </td>
                    <td style="padding: 15px 19.5px 0px 0px;">
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-8.jpg" style="border: 0; float: left;" width="175" alt="">
                    </td>
                    <td style="padding:15px 19.5px 0px 0px;">
                        <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-9.jpg" style="border: 0; float: left;" width="175" alt="">
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 15px 20px 0px 20px;">
                        <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; ">Режущие <strong>турбо-диски</strong> диаметром 56 см <strong>разрезают пожнивные остатки и по-верхность грунта</strong>, направляя к лапам более рыхлую однородную массу. </span>
                        </p>  
                    </td>
                    <td style="padding: 15px 20px 0px 0px;">
                        <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "><strong>Безопасная и легкая транспортировка</strong> – транс-портная ширина менее 4,6 метра. </span>
                        </p> 
                    </td>
                    <td style="padding: 15px 20px 0px 0px;" colspan="2">
                        <p style="margin: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; ">При использовании этих приспособлений <strong>осенью, достаточно одного прохода для обработки почвы весной.</strong> Можно использовать опционный измельчитель или опционные грабли для разбивания комков, уплотнения и перемешивания пожнивных остатков с почвой, а также для выравнивания поверхности.</span>
                        </p> 
                    </td>

                </tr>


            </table>
        </td>
    </tr>
    <tr>
        <td> 
            <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-10-11.jpg" style="border: 0; padding:10px 20px"  width="760" alt="" >  
        </td>
    </tr>

    <tr>
        <td style="padding: 0px 20px;"> 
            <!--Таблица с данными-->
                <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; background-clip:padding-box;border-collapse: collapse;">
                    <tr>
                        <td width="240" align="left" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Тех. характеристики</strong></span></td>
                        <td width="140" align="center" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> TC5109</strong></span></td>
                        <td width="140" align="center" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> TC5111</strong></span></td>
                        <td width="140" align="center" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> ТС5315</strong></span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина</span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3,4 м </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4,24 м </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5,7 м </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Расстояние между дисками </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 19,1 cм</span> </td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 19,1 cм </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 19,1 cм </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество лап </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 9 </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 11 </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 15 </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество дисков </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 19 </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 23 </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 31 </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Транспортная ширина </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 3,5 м </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 4,3 м </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 4,4 м </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Вес </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3220 кг </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3765 кг </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">5490 кг </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> Шины </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">(4) 12,5L х 15, 12 ply </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">(4) 12,5L х 15, 12 ply </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">(6) 12,5L х 15, F1 </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина </span></td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 6,9 м </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6,9 м </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6,9 м </span></td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность тягового бруса в л.с.</span> </td>
                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> 140 – 180 л.с. </span></td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">160 – 220 л.с.</span> </td>
                        <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">220 – 300 л.с.</span> </td>
                    </tr>
                    <tr>
                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
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

    <tr>
        <td style="padding:15px 20px 20px 20px;"> <img src="http://www.lbr.ru/images/kp/112-turbo-chizel/mail-12.jpg" style="border: 0; float: right;" width="378" alt=""></td>
    </tr>
    <!-- Ссылка-кнопка подробнее -->
    <?php
    Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
        'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/chizeli-i-glubokorykhliteli/kombinirovij-turbo-chizel-ts/',
        'colspan' => false,
        'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
            )
    );
    ?>
    <tr bgcolor="#eeeeee"><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;


