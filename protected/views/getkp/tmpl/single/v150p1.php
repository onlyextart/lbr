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
                                <td style="padding: 5px 0px 0px 0px;">
                                    <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                        Техника для уборки лука
                                    </p>
                                </td>
                            </tr>

                        </table>
                    </td></tr>

                <!-- Первая сторока первого блока-->
                <tr>
                    <td style="padding:5px 20px 5px 20px;">
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
                    <td style="padding: 0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-2.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ШИРОКИЕ ВОЗМОЖНОСТИ БОТВОУДАЛИТЕЛЯ</span><br>
                                                    Ботвоудалитель позволяет одинаково эффективно удалять ботву лука, моркови и столовой свеклы.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ТОЧНАЯ РАБОТА - ОТЛИЧНЫЙ РЕЗУЛЬТАТ</span><br>
                                                    Срезающие ножи в паре со специальными заслонками
                                                    создают поток воздуха, с помощью которого ботва лука,
                                                    лежащая на земле, приподнимается, что позволяет
                                                    улучшить качество обрезки ботвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ ИСПОЛНЕНИЯ</span><br>
                                                    Конструкция обрезчика позволяет навешивать его как
                                                    на передний, так и на задний ВОМ трактора.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Обрезчик ботвы лука 1,2 м</span></strong></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Обрезчик ботвы лука 1,5 м</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина захвата штанги</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,2 м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5 м</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">до 0,7</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">до 0,9</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
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


                <!-- Вторая строка первого блока-->
                <tr>
                    <td style="padding:10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/616-obrezchiki-botvy-luka-simon/" style="text-decoration: none;">
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
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-3.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">СВЕРХПРОЧНЫЕ НОЖИ ДЛЯ ОБРЕЗАНИЯ БОТВЫ</span><br>
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

                                <!--Вторая колонка-->
                                <td>
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">АВТОМАТИЧЕСКИЙ КОНТРОЛЬ ВЫСОТЫ ОБРЕЗАНИЯ БОТВЫ</span><br>
                                                    Опционально устанавливаемый на обрезчике контроль
                                                    высоты обрезания ботвы минимизирует ошибки оператора, улучшая качество уборки лука на 30%.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ЛЕГКОСТЬ И ПРОСТОТА ОБСЛУЖИВАНИЯ ОБРЕЗЧИКА</span><br>
                                                    Верхняя крышка обрезчика легко поднимается вверх,
                                                    что позволяет проводить обслуживание обрезчика и замену рабочих органов без сложной разборки элементов
                                                    обрезчика.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding: 5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; border-bottom:0;background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Обрезчик ботвы лука 1,5 м</span></strong></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Обрезчик ботвы лука 1,5 с автоматическим контролем рабочей высоты</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, м</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Изменяемая колея, мм</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1400-2000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,6</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Мощность трактора, л.с.</span></td>
                                                        <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">От 60</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
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



        </td>
    </tr>

    <!-- Первый блок -->

   </table>
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
     <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

                <!-- Контент первой строки второго блока-->
                <tr>
                    <td style="padding:0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="720" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/417-kopalka-dlya-luka-z653-1/" target="_blank" style="text-decoration: none;">
                                            Копалка для лука Z-653/1
                                        </a>
                                    </p>  
                                </td>
                                <td width="40" style="padding: 0px 5px 0px 15px;">
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
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-4.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                            <td style="padding-left: 20px; padding-bottom: 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">БЕРЕЖНАЯ УБОРКА ЛУКА</span><br>
                                                    Квадратный лемех, приводимый в движение от BOM
                                                    трактора с помощью вала, бережного и аккуратного, вы-
                                                    капывает лук.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ВАЛОК БЕЗ ПРОВОЛОК</span><br>
                                                    В задней части копалки расположен прикатывающий
                                                    каток, предназначенный для уплотнения почвы перед
                                                    укладкой лука. В задней части копалки установлены от-
                                                    ражатели, которые укладывают лук в ровный валок для
                                                    облегчения последующей сборки подборщиком.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px;padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Модель</strong></span></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Z-653/1 (1,2 м)</strong></span></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Z-653/1 (1,5 м)</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производитель, га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,5</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,7</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,2</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">45</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">50</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price5']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price6']; ?> </span></td>
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


                <!-- Контент второй строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/419-kopalki-dlya-luka-simon/" style="text-decoration: none;">
                                            Копалка для лука SIMON
                                        </a>
                                    </p>  
                                </td>
                                <td width="90" style="padding: 0px 5px 0px 15px;border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/makers/simon-logo-for-site.JPG" width="90" style="border: 0;" alt="Изображения не отображаются">
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
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-5.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                        <tr>
                                            <td style="padding: 5px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ФУНКЦИОНАЛЬНОСТЬ – ЛУК И КАРТОФЕЛЬ ОДНОЙ КОПАЛКОЙ.</span>
                                                    Опционально на копалке возможна установка лемехов,
                                                    для выкапывания картофеля.
                                                </p>
                                            </td>
                                        </tr>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ПОЛНОСТЬЮ МЕХАНИЧЕСКАЯ – НИКАКОЙ ГИДРАВЛИКИ</span><br>
                                                    Машина полностью механическая, работает от ВОМ
                                                    трактора, без необходимости использовать гидравлику трактора или собственную гидростанцию. Располо-
                                                    женная в передней части вращающаяся планка подка-
                                                    пывает растущий впереди лук и загружает его вместе с
                                                    землей на транспортер, где происходит последующая
                                                    очистка лука от земли.
                                                </p>
                                            </td>
                                        </tr>

                                        
                                        <tr>
                                            <td style="padding:5px 0px 5px 20px;">
                                            <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                <tr>
                                                    <td width="70%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                    <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Копалка 1,5 м</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, м</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5</span></td>
                                                </tr> 
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">ВОМ, об/мин</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1400-2000</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,2</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность трактора, л.с.</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">От 70</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price7']; ?></span></td>
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
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="720" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/418-podborshchiki-luka-z-437/" style="text-decoration: none;">
                                            Подборщик лука Z-437
                                        </a>
                                    </p>  
                                </td>
                                <td width="40" style="padding: 0px 5px 0px 15px;">
                                    <img src="http://www.lbr.ru/images/kp/150-luk/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-6.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                             <tr>
                                            <td style="padding: 5px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">БЕРЕЖНАЯ УБОРКА БЕЗ ПОВРЕЖДЕНИЙ</span><br>
                                                   Уборка лука осуществляется при помощи устройства,
                                                    состоящего из полиуретанового вальца и решетчатого
                                                    транспортера. Такая конструкция подборщика гарантирует быструю и качественную уборку лука, исключая
                                                    механические повреждения.
                                                </p>
                                            </td>
                                        </tr>
                                        

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                       

                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">БЫСТРОЕ ПЕРЕМЕЩЕНИЕ МЕЖДУ ПОЛЯМИ</span><br>
                                                    Подборщик оснащен системой гидравлики, которая по-
                                                    зволяет перевести подборщик из транспортного поло-
                                                    жения в рабочее меньше, чем за минуту.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 15px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КАЛИБРОВКА ЛУКА СРАЗУ</span><br>
                                                    Просеивающий транспортер комбайна позволяет от-
                                                    сортировать луковицы маленького размера сразу при
                                                    подборе его комбайном.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 5px 20px;">
                                            <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                <tr>
                                                    <td width="70%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                    <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Z 437</span></strong></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Мощность трактора, л.с.</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">от 30</span></td>
                                                </tr> 
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина подбора, м</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1000</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота выгрузки, м</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2,9</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,60</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price8']; ?></span></td>
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


            </table></td></tr>
   </table>   
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">


<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

                <!-- Контент первой строки третьего блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/tekhnika-dlya-uborki-luka/420-podborshchiki-luka-simon/" style="text-decoration: none;">
                                            Лукоуборочный комбайн SIMON
                                        </a>
                                    </p>  
                                </td>
                                <td width="90" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/makers/simon-logo-for-site.JPG" width="90" style="border: 0;" alt="Изображения не отображаются">
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
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-7.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">СОБСТВЕННАЯ ГИДРОСТАНЦИЯ КОМБАЙНА</span><br>
                                                    На комбайне установлена собственная гидростанция,
                                                    что позволяет не использовать гидравлику трактора.
                                                    Именно поэтому для работы комбайна достаточно трактора малой мощности.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ВЫСОКАЯ ВЫСОТА ВЫГРУЗКИ</span><br>
                                                    Высота выгрузки комбайна составляет 3,3 метра, что
                                                    позволяет использовать транспортное средство с боль-
                                                    шим объемом кузова.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 3px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ОТЛИЧНАЯ ВИЗУАЛИЗАЦИЯ</span><br>
                                                    Все управление комбайном ведется из одного пульта,
                                                    расположенного в кабине трактора. Отличная визуали-
                                                    зация подъемного устройства комбайна, позволяет луч-
                                                    ше руководить процессом подборки лука.
                                                </p>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="padding-left: 20px; padding-top: 3px;" valign="bottom">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="46%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="18%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">СHO</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Колея, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2960-3200, регулируемая</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, т/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">свыше 25</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина подбора, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота разгрузки, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">3,3</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">50</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">ВОМ, об./мин</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">540</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price9']; ?></span></td>
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
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                            Прицепы для перевозки
                        </p>
                    </td>
                </tr> 

                <!-- Контент второй строки третьего блока-->
                <tr>
                    <td style="padding:5px 20px 0px 20px;">
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-8.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                        
                                        <tr>
                                            <td style="padding: 10px 0px 0px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="200">
                                                            <img src="http://www.lbr.ru/images/kp/150-luk/mail-9.jpg" width="200" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                        <td style="padding:0px 0px 0px 10px;" width="168" valign="middle">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: left;">
                                                                Овощникам! Оснащение гасителями падения овощей при загрузке
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
                                                    3 В 1 И ДАЖЕ БОЛЬШЕ
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 5px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 0px 0px;" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                безопасная погрузка и разгрузка овощей, опцио-
                                                                нально устанавливается комплект овощник (гаситель падения в кузов и козырёк разгрузки на борт);
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
                                            <td style="padding: 0px 5px 0px 20px;">
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
                                                     до 20% ГСМ. За счет меньшей собственной массы.
                                                </p>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="padding-left: 20px; padding-top: 3px;" valign="bottom">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">LMR-14</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Грузоподъемность, т</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">14</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Объем кузова с двумя ярусами надставных бортов, куб. м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">22</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Скорость транспортировки, км/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">30</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price10']; ?></span></td>
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
              

                
            </table></td></tr>
   </table>  

</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">


<!-- Четвертый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
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
                                                <img src="http://www.lbr.ru/images/kp/150-luk/mail-10.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                <td width="50%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Тип</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong>Баркас</strong></span></td>
                                <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Баркас 10</strong></span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Грузоподъемность, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">5000</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">8000 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Размеры платформы, м</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4,00х2,00х0,50</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4,41х2,11х0,60 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Габаритные размеры, мм – длина – ширина</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">5295 2081</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">6058 2320 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота платформы, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1200</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота с одним ярусом бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1630</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1800 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота с двумя ярусами бортов, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2130</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2400</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина колеи, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1500</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1700</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Дорожный просвет, мм</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">350</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">405</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Гидравлическая разгрузка</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">трехсторонняя</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">трехсторонняя</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Тормозная система</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">пневматическая</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">пневматическая</span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Масса, кг</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1300</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2200 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Допустимая скорость, км/ч</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">40</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">40 </span></td>
                            </tr>
                            <tr>
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price11']; ?></span></td>
                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price12']; ?> </span></td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table></td></tr>
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

</div>
</body>
</html>







