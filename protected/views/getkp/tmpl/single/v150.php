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
                                    <img src="http://www.lbr.ru/images/kp/150-luk/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                            <!-- Оранжевый блок -->
                            <tr>
                                <td style="padding: 15px 0px 0px 0px;">
                                    <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                        Техника для уборки лука
                                    </p>
                                </td>
                            </tr>

                        </table>
                    </td></tr>

                <!-- Первая сторока первого блока-->
                <tr>
                    <td style="padding:15px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="750" valign="middle">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/615-botvoudaliteli-dlya-luka/" target="_blank" style="text-decoration: none;">
                                            Обрезчик ботвы лука KRUKOWIAK
                                        </a>
                                    </p>  
                                </td>
                                <td width="40">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                           
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ШИРОКИЕ ВОЗМОЖНОСТИ БОТВОУДАЛИТЕЛЯ</span><br>
                                                    Ботвоудалитель позволяет одинаково эффективно уда-
                                                    лять ботву лука, моркови и столовой свеклы!
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ТОЧНАЯ РАБОТА - ОТЛИЧНЫЙ РЕЗУЛЬТАТ!</span><br>
                                                    Срезающие ножи в паре со специальными заслонками
                                                    создают поток воздуха, с помощью которого ботва лука,
                                                    лежащая на земле, приподнимается, что позволяет
                                                    улучшить качество обрезки ботвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ ИСПОЛНЕНИЯ</span><br>
                                                    Конструкция обрезчика позволяет навешивать его как
                                                    на передний, так и на задний ВОМ трактора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="60%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,2 м</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,5 м</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина захвата штанги</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,2 м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5 м</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 0,7</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 0,9</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/615-botvoudaliteli-dlya-luka/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 0px; padding-right: 13px;'
                        )
                );
                ?>


                <!-- Вторая строка первого блока-->
                <tr>
                    <td style="padding:10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/botvoudaliteli/407-obrezchiki-botvy-luka-simon/" style="text-decoration: none;">
                                            Обрезчик ботвы лука SIMON
                                        </a>
                                    </p>  
                                </td>
                                <td width="90" style="border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/makers/simon-logo-for-site.JPG" width="90" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-3.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info2']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <!--Таблица с данными-->
                                                <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,5 м</span></strong></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Обрезчик ботвы лука 1,5 с авто-матическим кон-тролем рабочей высоты</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, м</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Изменяемая колея, мм</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1400-2000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,6</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">От 60</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
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
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">АВТОМАТИЧЕСКИЙ КОНТРОЛЬ ВЫСОТЫ ОБРЕЗАНИЯ БОТВЫ!</span><br>
                                                    Опционально устанавливаемый на обрезчике контроль
                                                    высоты обрезания ботвы минимизирует ошибки опера-
                                                    тора, улучшая качество уборки лука на 30%!
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ЛЕГКОСТЬ И ПРОСТОТА ОБСЛУЖИВАНИЯ ОБРЕЗЧИКА!</span><br>
                                                    Верхняя крышка обрезчика легко поднимается вверх,
                                                    что позволяет проводить обслуживание обрезчика и за-
                                                    мену рабочих органов без сложной разборки элементов
                                                    обрезчика.
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">СВЕРХПРОЧНЫЕ НОЖИ ДЛЯ ОБРЕЗАНИЯ БОТВЫ!</span><br>
                                                    Ножи, изготовленные из высококачественной стали,
                                                    расположены под углом 45 градусов, что создает воз-
                                                    душный поток, которые приподнимает ботву лука, по-
                                                    зволяя обрезать ботву даже со сломанного или по-
                                                    врежденного лука. Лезвия, используемые на обрезчике
                                                    ботвы двухсторонние. При стачивании одной стороны,
                                                    можно легко использовать другую просто перевернув
                                                    лезвие.
                                                </p>
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
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/grebneobrazovateli/390-grebneobrazovateli-imac/',
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
                                <td style="border-bottom:solid black 4px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelesazhalki/395-kartofelesazhateli-kora/" style="text-decoration: none;">
                                            Картофелесажатели KORA
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/imac.jpg" width="60" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-7.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info3'] && !empty($data['product_info3'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info3']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ПРОСТАЯ И НАДЕЖНАЯ</span><br>
                                                    Картофелесажатели KORA оснащены натяжным устрой-
                                                    ством для ленты и высаживающими лопатками, которые
                                                    обеспечивают сортировку и выборку клубней размером
                                                    от 35 мм до 60 мм. Опциональные вкладыши дают воз-
                                                    можность высаживать клубни большего или меньшего
                                                    размера.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">МНОГООБРАЗИЕ РЕШЕНИЙ</span><br>
                                                    Опционально сажалка KORA 2 и KORA 4 может быть ос-
                                                    нащена подсеивателем гранулированных удобрений и
                                                    протравливателем клубней.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ГАРАНТИЯ РАВНОМЕРНОСТИ ВСХОДОВ</span><br>
                                                    Копирующие колеса, установленные на сажалке KORA 4
                                                    и KORA 4HP, позволяют соблюдать одинаковую глубину
                                                    посадки во всех рядах, несмотря на неровности почвы.
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
                    <td style="padding:10px 20px 10px 20px;">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="40%" align="left" style="border: solid black 1px;padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Тип</strong></span></td>
                                <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> KORA 2</strong></span></td>
                                <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> KORA 4</strong></span></td>
                                <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> KORA 4HP</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Количество рядов, шт.</span></td>
                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2</span></td>
                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4 </span></td>
                                <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Рабочая ширина, м</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1,4-1,5</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1,8 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3,6 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3,6</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Ширина междурядий, см</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">70/75</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">90 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">75 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">90</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">75 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">90</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Грузоподъемность картофельного бункера, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">400</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">450 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">840 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">900 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2000 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2200</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Глубина посадки, см</span></td>
                                <td align="center" colspan="6" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4-12</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Производительность, га/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">0,3-0,5</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">0,4-0,6 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">0,6-1,1 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">0,7-1,2 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1,6 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1,7</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">370</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">420 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">895 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">950 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1430 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1500</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Требуемая мощность трактора, л.с.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">50</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">60 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">75 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">80 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">75 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">90</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price9']; ?></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price10']; ?> </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price11']; ?> </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price12']; ?> </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price13']; ?> </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; color: #DD2A1B;"><?php echo $data['price14']; ?></span></td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelesazhalki/395-kartofelesazhateli-kora/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

                <!-- Контент второй строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/botvoudaliteli/405-botvoudaliteli-imac/" style="text-decoration: none;">
                                            Ботвоудалители IMAC
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px;border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/imac.jpg" width="60" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-8.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info4'] && !empty($data['product_info4'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info4']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <td style="padding:5px 0px 5px 0px;">
                                            <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                <tr>
                                                    <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                    <td width="35%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TF 2F 75-80-85-90</span></strong></td>
                                                    <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TF 4F 75</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество рядков</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2x75-80-90</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4х75</span></td>
                                                </tr> 
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес, кг</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">720</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1300</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина, см</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">190</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">190</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина, см</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">215</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">345</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота, см</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">135</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">135</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Необходимая мощность трактора, л.с.</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">60</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">80</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,6-1</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,2-2,1</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price15']; ?></span></td>
                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price16']; ?></span></td>
                                                </tr>
                                            </table> 
                                        </td>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 10px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Удобство работы и качественный результат</span><br>
                                                    Многофункциональная машина для удаления ботвы
                                                    картофеля. Агрегат приподнимает, срезает и измельча-
                                                    ет ботву, равномерно укладывая остатки в междурядье.
                                                    Машина может навешиваться на заднюю или переднюю
                                                    часть трактора (в стандартной комплектации навешива-
                                                    ется позади трактора).
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 10px 0px 10px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Идеальное копирование гребня</span><br>
                                                    Вертикально расположенные ножи различной длины
                                                    предназначены для копирования гребня, что обеспе-
                                                    чивает качественное удаление и измельчение ботвы по
                                                    всей форме гребня.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 15px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Свободный доступ к рабочим органам</span><br>
                                                    «Окошки» расположенные в верхней части ботвоудали-
                                                    теля обеспечивают свободный доступ к рабочим орга-
                                                    нам, позволяя без проблем проводить техническое об-
                                                    служивание ботвоудалителя.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 15px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-9.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/botvoudaliteli/405-botvoudaliteli-imac/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>



            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>   


<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

                <!-- Контент первой строки третьего блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelekopateli/408-kartofelekopateli-wega/" style="text-decoration: none;">
                                            Картофелекопалки WEGA
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/imac.jpg" width="60" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-10.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info5'] && !empty($data['product_info5'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info5']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КАЧЕСТВЕННАЯ УБОРКА – МИНИМУМ ПОТЕРЬ</span><br>
                                                    Каждый второй пруток имеет оболочку из полимерного
                                                    материала, что облегчает транспортировку картофеля и
                                                    способствует минимизации повреждений.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ И ДОСТУПНОСТЬ</span><br>
                                                    Копалку WEGA можно использовать для выкапывания
                                                    картофеля, лука (при использовании специальной на-
                                                    садки), столовой свеклы, моркови и других культур, что
                                                    делает копалку идеальным помощником для овощных
                                                    хозяйств.
                                                </p>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="padding-left: 20px; padding-top: 3px;" valign="bottom">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="46%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="18%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1400</span></strong></td>
                                                        <td width="18%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1600</span></strong></td>
                                                        <td width="18%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">WEGA 1600 PLUS</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1400 (1500)</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1600</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1600</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина междурядий, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70-75</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">75-90</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70-90</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество рядов, шт.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">565</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">680</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">970</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">60</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price17']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price18']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price19']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelekopateli/408-kartofelekopateli-wega/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>


                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                            Картофелеуборочные комбайны
                        </p>
                    </td>
                </tr>
                <!-- Контент второй строки третьего блока-->
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/412-kartofeleuborochnye-kombajny-pyra-2/" style="text-decoration: none;">
                                            Картофелеуборочный комбайн PYRA
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;" align="right" valign="bottom">
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/unia.jpg" width="90" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

               <tr>
                        <td style="padding:15px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr>
                                    <td style="padding: 5px 0px 0px 0px;">
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-11.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                    </td>
                                </tr>
                                <?php if ($data['product_info6'] && !empty($data['product_info6'])): ?>
                                    <tr>
                                        <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info6']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </td>
                    </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="378">
                                    <!-- Первая колонка-->
                                    <!--Таблица с данными-->
                                    <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">PYRA 1500</span></strong></td>
                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">PYRA 1500</span></strong></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Емкость бункера, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1500</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">3000</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота разгрузки, м</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,25-2,70</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1,25-3,14</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Привод транспортера</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">гидравлический</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ходовые колеса</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10/75-15,3</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">16,0/70-20</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">80</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price20']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price21']; ?></span></td>
                                        </tr>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" style="border:0; border-collapse: collapse; background-clip:padding-box;">

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Меньше радиус поворота на краю поля    </span><br>
                                                    За счет использования поворотных колес и дышла с ги-
                                                    дравлическим управлением картофелеуборочные ком-
                                                    байны PYRA позволяют обеспечить меньший радиус
                                                    разворота комбайна.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Качественная сепарация почвы</span><br>
                                                    Благодаря использованию многих современных решений комбайн PYRA собирает картофель 
                                                    при минимальном показателе механических повреждений с
                                                    одновременным очищением растений от всякого рода
                                                    загрязнений.
                                                </p>
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
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/412-kartofeleuborochnye-kombajny-pyra-2/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>  


<!-- Четвертый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <!-- Контент первой строки четвертого блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="710" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/413-kartofeleuborochnye-kombajny-bolko/" style="text-decoration: none;">
                                            Картофелеуборочный комбайн BOLKO
                                        </a>
                                    </p>  
                                </td>
                                <td width="50" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;" align="right" valign="bottom">
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/unia.jpg" width="90" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                        <td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr>
                                    <td style="padding: 5px 0px 0px 0px;">
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-12.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                    </td>
                                </tr>
                                <?php if ($data['product_info7'] && !empty($data['product_info7'])): ?>
                                    <tr>
                                        <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info7']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </td>
                    </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="378">
                                    <!-- Первая колонка-->

                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КОМБАЙН ОТЛИЧНОГО КАЧЕСТВА И ДОСТУПНЫЙ ПО ЦЕНЕ    </span><br>
                                        Комбайн BOLKO оснащен бункером емкостью 1250 кг с
                                        подвижным полом и транспортерами для ступенчатой
                                        очистки картофеля от грязи.
                                    </p>

                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" style="border:0; border-collapse: collapse; background-clip:padding-box;">


                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ОТДЕЛЯЕТ, ОЧИЩАЕТ, УДАЛЯЕТ!</span><br>
                                                    Очистительные механизмы эффективно удаляют ботву
                                                    картофеля, очищают его от грязи и обеспечивают отде-
                                                    ление камней от картофеля с выгрузкой камней в спе-
                                                    циальный бункер емкостью 100 кг.
                                                </p>
                                            </td>
                                        </tr> 
                                    </table>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="30%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">BOLKO</span></strong></td>
                                <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">BOLKO S</span></strong></td>
                                <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">BOLKO T</span></strong></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Характеристика</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">с бункером 1250 кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">с площадкой для выгрузки в мешки, грузоподъемность – 500 кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">с транспортером</span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, см</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">62,5-75</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">62,5-75</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">62,5-75</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5-5,0</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1,5-5,0</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1,5-5,0</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 0,15</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">до 0,15</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">до 0,15</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота разгрузки, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1250-2500</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">-</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">-</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Грузоподъемность бункера для камней, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">100</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">100</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">100</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">40</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">40</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1800</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1200</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">1500</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price22']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price23']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price24']; ?></span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                 <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/413-kartofeleuborochnye-kombajny-bolko/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                            Внесение удобрений – всегда выгодно
                        </p>
                    </td>
                </tr>
                <!-- Контент второй строки четвертого блока-->
                <tr>
                    <td style="padding:5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="725" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/pritsepnye-razbrasyvateli-tverdykh-organicheskikh-udobrenij/435-mashiny-dlya-vneseniya-organicheskikh-udobrenij-lmr/" style="text-decoration: none;">
                                            Разбрасыватели органики PTU (универсальные) от 5 до 22 т
                                        </a>
                                    </p>  
                                </td>
                                <td width="35" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/makers/lmr-azene-logo-big.jpg" width="35" style="border: 0;" alt="Изображения не отображаются">
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
                                    <table width="605" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 10px 0px 0px;" width="370">
                                                <table cellspacing="0" cellpadding="0" >
                                                    <tr>
                                                        <td style="padding: 0; margin: 0;">
                                                            <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-13.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                    </tr>
                                                    <?php if ($data['product_info8'] && !empty($data['product_info8'])): ?>
                                                        <tr>
                                                            <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                                <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                                    <?php echo $data['product_info8']; ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </table>
                                            </td>
                                            <td style="padding: 15px 5px 5px 10px;" width="219">
                                                <table width="219" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" style="padding-bottom: 3px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ЭКОНОМИЧЕСКИЙ ЭФФЕКТ</span><br>
                                                                Позволяет получить экономи-
                                                                ческий эффект за счёт меньшей
                                                                собственной массы, большой ши-
                                                                рины внесения, равномерности и
                                                                увеличенной кубатуры, а также за
                                                                счёт сокращения парка техники.
                                                            </p>
                                                        </td>
                                                    </tr> 

                                                    <tr>
                                                        <td colspan="2" >
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color:#F58220; text-align: justify;font-weight: bold;">
                                                                3 в 1:
                                                            </p> 
                                                        </td> 
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 5px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                внесение органики;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 5px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                перевозка зеленой массы;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 5px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                внесение извести, доломита, дефеката.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>  
                                            </td>
                                        </tr>


                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td style="padding:0px 0px 10px 0px;" width="140" valign='bottom'>
                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-14.jpg" width="140" style="border: 0;margin:0;"  align="right" alt="Изображения не отображаются">  
                                </td> 

                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 20px 10px 20px;" width="760">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="left" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box; margin:0;">
                            <tr>
                                <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> PTU 6.0/14S</strong></span></td>
                                <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> PTU 14S</strong></span></td>
                                <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> PTU 20S</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Грузоподъемность, т</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">14</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">20</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина разбрасывания, м</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12-14</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12-14 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12-14 </span></td>
                            </tr> 
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">120-135</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">190-220 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">250-300</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price25']; ?> </span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price26']; ?> </span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price27']; ?> </span></td>
                            </tr> 
                        </table>
                    </td> 
                </tr>

                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/vnesenie-udobrenij/pritsepnye-razbrasyvateli-tverdykh-organicheskikh-udobrenij/435-mashiny-dlya-vneseniya-organicheskikh-udobrenij-lmr/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>



            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<!-- Пятый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <!-- Контент первой строки пятого блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="640" style="border-bottom:solid black 4px;">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/436-bochki-dlya-vneseniya-zhidkikh-udobrenij-meprozet/" style="text-decoration: none;">
                                            Бочка PITON 100 для жидкой органики и воды
                                        </a>
                                    </p>  
                                </td>
                                <td width="100" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;" align="right" valign="bottom">
                                    <img src="http://www.lbr.ru/images/makers/meprozet-logo-big.JPG" width="100" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-15.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info9'] && !empty($data['product_info9'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info9']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td style="padding: 15px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify; text-transform: uppercase">
                                                    «Неубиваемая» бочка из оцинковки!
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                                <!--Вторая колонка-->

                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    100 БЕД - ОДИН ОТВЕТ!
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 5px 5px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                вывоз и внесение органических удобрений на поля;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                подвоз воды в летние лагеря;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                подвоз воды для заправки опрыскивателей;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                пожарные ёмкости в период уборки и засухи;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                всасывание жидких отходов из лагун и колодцев с глубины до 6 метров.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Всего 4,5 минуты – время наполнения и разгрузки.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 5px 0px 10px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box; margin:0;">
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Емкость, л</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">10 000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Длина/ширина/высота, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">7 500/2 550/2 900</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">100</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price28']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/436-bochki-dlya-vneseniya-zhidkikh-udobrenij-meprozet/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
                <!-- Контент второй строки пятого блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="640" style="border-bottom:solid black 4px;">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/437-bochki-dlya-vneseniya-zhidkikh-udobrenij-mzht/" style="text-decoration: none;">
                                            Бочки для внесения жидких удобрений МЖТ
                                        </a>
                                    </p>  
                                </td>
                                <td width="100" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;" align="right" valign="bottom">
                                    <img src="http://www.lbr.ru/images/makers/agromash-logo-big.jpg" width="100" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <!-- Первая колонка-->
                                <td>

                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-16.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info10'] && !empty($data['product_info10'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info10']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </table>
                                </td>

                                <!--Вторая колонка-->

                                <td valign="bottom">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Машина оборудована вакуумной системой и люком для загрузки машины автономными средствами.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box; margin:0;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                                        <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> МЖТ-Ф-11</strong></span></td>
                                                        <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> МЖТ-Ф-6</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Грузоподъемность, т</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">11</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">6</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина внесения удобрений, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6-12</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">6-12</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Дозы внесения, т/га</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10-60</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">10-60</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">120</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">80</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, т/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;">20</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price29']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:12px;"><?php echo $data['price30']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/437-bochki-dlya-vneseniya-zhidkikh-udobrenij-mzht/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
                <!-- Заголовок-->

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                            Транспортировка
                        </p>
                    </td>
                </tr> 

                <!-- Контент третьей строки пятого блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="735" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/622-pritsepy-lmr/" style="text-decoration: none;">
                                            Самосвальные полуприцепы LMR
                                        </a>
                                    </p>  
                                </td>
                                <td width="35" style="padding: 0px 5px 0px 15px; ">
                                    <img src="http://www.lbr.ru/images/makers/lmr-azene-logo-big.jpg" width="35" style="border: 0;" alt="Изображения не отображаются">
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-17.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info11'] && !empty($data['product_info11'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info11']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td style="padding: 15px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; text-transform: uppercase">
                                                    Универсальность применения + Долговечность
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="250">
                                                            <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-18.jpg" width="250" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                        <td style="padding:0px 0px 0px 10px;" width="118" valign="middle">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: left;">
                                                                Овощникам! Оснащение гаси-телями падения овощей при за-грузке
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
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    3 В 1 И ДАЖЕ БОЛЬШЕ!
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 5px 5px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                безопасная погрузка и разгрузка овощей, опцио-
                                                                нально устанавливается комплект овощник (гаситель падения в кузов и козырёк разгрузки на борт).
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                перевозка зерна, сенажа и зелёной массы объёмом до 40 куб.м;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                загрузка сеялок семенами и минеральными удо-брениями в период проведения посевных работ;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="padding: 5px 0px 0px 20px;" colspan="2">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    БОГАТАЯ БАЗОВАЯ КОМПЛЕКТАЦИЯ
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 5px 5px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                один ярус надставных бортов в базовой комплек-тации;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                боковая стабилизация кузова (гидромеханическая);
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                реактивные тяги;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                две поворотные оси в версии тридем – сокращается радиус разворота и нагрузка на кузов;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                гидравлический задний борт с автоматической бло-
                                                                кировкой при закрытии, блокировка гидропривода
                                                                поднятия кузова;
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 5px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ЭКОНОМИЯ</span><br>
                                                    Меньшая собственная масса по сравнению с аналогами
                                                    за счёт уникальной конструкции кузова. Позволяет получить до 20% экономии ГСМ.
                                                </p>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="padding-left: 20px; padding-top: 3px;" valign="bottom">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">LMR-14</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Грузоподъемность, т</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">14</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Объем кузова с двумя ярусами над-ставных бортов, куб. м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">22</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Скорость транспортировки, км/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price31']; ?></span></td>
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
                    'link' => 'http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/622-pritsepy-lmr/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>

            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>  

<!-- Шестой блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <!-- Контент первой строки шестого блока-->                
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="695" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/621-pritsepy-samosvalnye-barkas/" style="text-decoration: none;">
                                            Универсальные прицепы Баркас
                                        </a>
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
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-19.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <?php if ($data['product_info12'] && !empty($data['product_info12'])): ?>
                                            <tr>
                                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                        <?php echo $data['product_info12']; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td style="padding: 15px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; text-transform: uppercase">
                                                    Герметичность, надёжность, устойчивость
                                                    к коррозии и отсутствие потерь
                                                    при перевозках груза.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>

                                <!--Вторая колонка-->

                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> НАДЁЖНОСТЬ – 100% ИТАЛЬЯНСКАЯ КОМПЛЕКТАЦИЯ :</span><br> 
                                                    оси ADR (Италия), тормозные системы CRAVER, высо-
                                                    конадёжный поворотный круг (Италия), боковые борта
                                                    завода MOSSO в Торино (Италия).
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ПРИЕМЛИМАЯ ЦЕНА И СРОКИ ПОСТАВКИ –</span><br> 
                                                    на 10% дешевле импортных аналогов, идеальное соот-
                                                    ношение цена – качество. <strong>Всегда в наличии!</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ДОПОЛНИТЕЛЬНЫЕ ПРЕИМУЩЕСТВА:</span><br>
                                                    сертификат производства РФ, низкая погрузочная вы-
                                                    сота 1,05 м, центральная система открывания бортов.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 3px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220;font-weight:bold;"> ОСОБЕННОСТЬ:</span><br>
                                                    Лёгкая конструкция, основана на замкнутых профилях из
                                                    стали S355 (18G2A). Снижение собственной массы обеспечивает до 20% экономии ГСМ. Отсутствуют основные
                                                    проблемы отечественных ПТС: деформация кузова, болтающиеся борта и выход из строя поворотного круга.
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
                    <td style="padding:10px 20px 10px 20px;">
                        <!--Таблица с данными-->
                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr>
                                <td width="50%" align="left" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Тип</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong>Баркас</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Баркас 10</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Грузоподъемность, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5000</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8000 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Размеры платформы, м</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,00х2,00х0,50</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,41х2,11х0,60 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Габаритные размеры, мм – длина – ширина</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5295 2081</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6058 2320 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота платформы, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1200</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота с одним ярусом бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1630</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1800 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Высота с двумя ярусами бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2400</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Ширина колеи, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1500</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1700</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Дорожный просвет, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">350</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">405</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Гидравлическая разгрузка</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">трехсторонняя</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">трехсторонняя</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Тормозная система</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">пневматическая</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">пневматическая</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">1300</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">2200 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Допустимая скорость, км/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">40</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">40 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price32']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price33']; ?> </span></td>
                            </tr>
                        </table>
                    </td>
                </tr>



                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/621-pritsepy-samosvalnye-barkas/',
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







