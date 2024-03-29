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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/685-diskovye-kultivatory-disc-o-mulch-s-prikatyvayushchim-katkom/" style="font-size: 25px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Дисковый культиватор Disc-o-Mulch <br> c прикатывающим катком
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/Agrisem-logo.JPG" height="40" width="190" style="border: 0; float: right;" alt="Логотип Great Plains">
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
                                    <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                            <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                    </td>
                                    <td style="padding-left:5px;">
                                        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td colspan="2" style="padding-bottom:5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                        <span style="color: #F58220;">Disc-O-Mulch</span> — агрегат на основе независимых дисков с запатентованной системой 3D, в конструкцию которого заложен дробитель комков. Он обеспечивает превосходное дробление и денсиметрическую сортировку земли:
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <img src="http://www.lbr.ru/images/kp/default/number_grey_one.jpg"  style="border: 0; float: left;" width="18" alt="Пункт один">
                                                </td>
                                                <td>
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: #999999; text-align: justify; font-style: italic; ">
                                                        мелкие частицы падают в первую очередь
                                                    </p> 

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/default/number_grey_two.jpg"  style="border: 0; float: none;" width="18" alt="Пункт два">
                                                </td>
                                                <td>
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: #999999; text-align: justify; font-style: italic; ">
                                                        крупные комки и солома остаются на поверхности, образовывая защитный слой
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
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                                    Disc-O-Mulch является незаменимым многофунк-циональным орудием — это
                                                </p>  
                                            </td> 
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• высокоскоростной лущильник</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• измельчитель пожнивных остатков</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• мульчировщик зерновой кукурузы</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• измельчитель «зеленых удобрений»</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 7px 10px 0px 0px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• механический уничтожитель сорняков</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td>
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 7px 10px 0px 0px;" height="15">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• агрегат, который можно ис-пользовать для внесения жидких удобрений, наилучший пла-нировщик.</span>
                                                            </p>
                                                        </td>
                                                        <td rowspan="7" style="padding: 15px 10px 0px 10px;" valign="bottom">
                                                            <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-2.jpg" width="120" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="padding:20px 10px 0px 0px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                                                Disc-o-mulch используем круглый год
                                                            </p>  
                                                        </td> 
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 7px 10px 0px 0px;" >
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• для подготовки однородной почвы</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0px 10px 0px 0px;" >
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• для заделки и прорастания семян</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0px 10px 0 0" >
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• измельчения растительных ос-татков</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0px 10px 0 0;" >
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• мульчирования кукурузы, унич-тожения сорняков,</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0px 10px 0 0;" >
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• измельчения сидераторов</span>
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
                                            <td style="padding-left: 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; ">
                                                    <span style="color:#F58220; font-weight:bold;">Слои почвы, отвечающие за процессы прорастания, могут обрабатываться на высоких скоростях – на основе независимых дисков с запатентованной системой 3D</span>, или на низких скоростях при помощи всем известной ротационной бороны. 
                                                    <br><strong>3D</strong> – три измерения <strong>для обеспечения полного предохранения ступицы диска от рабочих нагрузок.</strong>
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  style="padding:30px 0px 0px 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; ">
                                                    Приподнимаемая почва отбрасывается на специальное <span style="color:#F58220; font-weight: bold;"> полотно-дробитель комков</span>, что не влияет как на работу второго ряда дисков, так и на скорость.
                                                </p> 
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="padding:38px 0px 0px 10px;">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; ">
                                                                Данная система обеспечивает эффект «ударного действия бурильного молотка», позволяющего добиться <span style="color:#F58220; font-weight: bold;">100 % врезания диска в почву </span> с одновре-менной экономией энергетических затрат на производимые ра-боты.  
                                                            </p>   
                                                        </td>
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-3.jpg" width="200" style="border: 0; float: left;" alt="Изображения не отображаются">
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


                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/685-diskovye-kultivatory-disc-o-mulch-s-prikatyvayushchim-katkom/',
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
        <tr>
        <td bgcolor="#FFFFFF" style="padding:0px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td>
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-4.jpg" width="350" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:12px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                        Особенности и преимущества
                                    </p>  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Эффективно работает даже при наличии большого количества растительных остатков</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Разбивает комки и выравнивает почву</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Улучшенная способность проникновения в почву за счет высокого давления на каждый диск</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding-top:15px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                        Отличное измельчение на высокой скорости
                                    </p>  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Увеличен диаметр подшипников (в ступице SRE подшипник с внешним диаметром 100 мм, внутрен-ний диаметр – 45 мм).</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Disc-O-Mulch лидирует в минимальном количестве точек смазки (3—6 в зависимости от модели), коли-честве шарнирных соединений.</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding-top:15px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                        Антиударная система защиты
                                    </p>  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">• Два ряда дисков со спиральной антиударной системой защиты независимы друг от друга, что позволяет преодолевать препятствия на скорости.</span>
                                    </p>
                                </td> 
                            </tr>

                            <tr>
                                <td style="padding-top:15px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220;; text-align: justify; ">
                                        Улучшенная способность проникновения в почву
                                    </p>  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 7px 10px 0px 0px;" >
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                            Независимый диск с вертикальным углом осуществляет:<br>
                                            • выброс земли вверх <br>
                                            • превосходное смешивание земли с соломой<br>
                                            • более легкое проникновение<br>
                                        </span>
                                    </p>
                                </td> 
                            </tr>

                        </table>
                    </td>
                    <td>
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-5.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-6.jpg" width="340" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:10px;">
                                    <img src="http://www.lbr.ru/images/kp/113-Disc-o-Mulch/mail-7.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются"> 
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="padding: 20px 20px 0px 20px;"  bgcolor="#FFFFFF"> 
            <!--Таблица с данными-->
            <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse;">
                <tr bgcolor="#eeeeee">
                    <td width="240" align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                    <td width="140" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Platinum, 6 m</strong></span></td>
                    <td width="140" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Platinum, 8 m</strong></span></td>
                    <td width="140" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Gold, 8 m</strong></span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Рабочая ширина</span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Транспортная ширина, м </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество лап </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">11 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">15 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество дисков </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">36 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">48 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">65 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Диаметр дисков переднего ряда, мм </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">660 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"> 660 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"> 610 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Диаметр дисков заднего ряда, мм </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">610 или 660 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"> 610 или 660 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"> 560 или 610 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Требуемая мощность трактора, л.с. </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">200-300 </span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"> 300-400 </span></td>
                    <td align="center" style="border: solid black 1px;"> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">250-350 </span></td>
                </tr>
                <tr>
                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price1']; ?></span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
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
    

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/685-diskovye-kultivatory-disc-o-mulch-s-prikatyvayushchim-katkom/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
    </tr></table></td>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>   


<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>

