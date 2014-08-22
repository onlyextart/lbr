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
                                        <img src="http://www.lbr.ru/images/kp/151-morkov/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                                <!-- Оранжевый блок -->
                                <tr>
                                    <td style="padding: 15px 0px 0px 0px;">
                                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                            Техника для уборки моркови
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </td></tr>

                    <!-- Контент первого блока (ч.1)-->
                    <tr>
                        <td style="padding:15px 20px 5px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="670" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/morkovouborochnye-kombajny/416-morkovouborochnyj-kombajn-pstcmr/" target="_blank" style="text-decoration: none;">
                                                Морковоуборочный комбайн Simon
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
                                        <img src="http://www.lbr.ru/images/kp/151-morkov/mail-2.jpg" width="760" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                    </tr>

                    <tr>
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="438" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <table width="438" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td valign="top">
                                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                            </td>
                                                            <td style="padding:0px 0px 0px 5px;" width="400">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #58595d; text-align: justify; font-style:italic;">
                                                                    Навесной морковоуборочный комбайн теребильного типа производства компании Simon
                                                                    (Франция) – бережная уборка моркови за ботву ряда с последующей выгрузкой в рядом
                                                                    идущее транспортное средство.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table width="438" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td width="20" align="left" style="padding:5px 0px 0px 0px;">
                                                                •
                                                            </td>
                                                            <td style="padding:5px 0px 0px 0px;" valign="top">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                    Расположенный в нижней части комбайна лемех бережно подкапывает морковь, облегчая ее вытягивание за ботву.
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left" style="padding:0px 0px 0px 0px;" valign="top">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                    Обрезное устройство(расположенное в верхней
                                                                    части подъёмного устройства) срезает ботву моркови.
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 5px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Опционально можно установить устройство для подбора лука с валка.
                                                    </p>
                                                </td>
                                            </tr>

                                                   


                                        </table>
                                    </td>

                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="318" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 10px;">
                                                    <img src="http://www.lbr.ru/images/kp/151-morkov/mail-3.jpg" width="298" style="border: 0; float:right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/151-morkov/mail-4.jpg" width="298" style="border: 0; float:right;" alt="Изображения не отображаются">
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

</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">


    <!-- Второй блок -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="font-weight: bold; color:#F58220;">Навесной комбайн для уборки моркови Simon </span> –
                                                        экономичная модель комбайна, предназначенная для
                                                        малых хозяйств, работает с трактором от 40 до 60 л.с.
                                                        На комбайне установлена собственная гидростанция,
                                                        которая позволяет использовать трактора с гидросистемой малой производительности. 
                                                        Сортирующий конвейер 550 мм шириной и 2600 мм длиной, расстояние
                                                        между прутками 28 мм. Все прутки покрыты мягким пластиком 
                                                        8 x 14 мм, что минимизирует повреждения корнеплодов.
                                                    </p>
                                                </td>
                                            </tr>

                                            
                                            <tr>
                                                <td style="padding: 5px 0px 5px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                        Расположенные в верхней части подъемного устройства
                                                        <span style="font-weight: bold;">ножи</span>, обрезают ботву моркови. Обрезанная ботва вы-
                                                        брасывается на поле, а морковь падает на <span style="font-weight: bold;">транспортер</span>,
                                                        который доставляет ее в грузовик. Все элементы транс-
                                                        портера имеют резиновое покрытие, которое максимально 
                                                        уменьшает степень повреждения корнеплодов.
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
                                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 5px 0px 5px 0px;" width="140">
                                                                <img src="http://www.lbr.ru/images/kp/151-morkov/mail-5.jpg" width="140" style="border: 0; float:right;" alt="Изображения не отображаются">
                                                            </td>
                                                            <td style="padding: 5px 0px 5px 15px;" width="218">
                                                                <img src="http://www.lbr.ru/images/kp/151-morkov/mail-6.jpg" width="203" style="border: 0; float:right;" alt="Изображения не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td  style="padding: 0px 0px 0px 20px;">
                                                    <!--Таблица с данными-->
                                                    <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="50%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">S2TCMR</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">S2DCMR</span></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество рядков</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40-60</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40-60</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, га/ч</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,1-0,12</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,11 – 0,14</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
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

                    <tr>
                        <td style="padding:10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="735" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/622-pritsepy-lmr/" target="_blank" style="text-decoration: none;">
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
                                                    <img src="http://www.lbr.ru/images/kp/151-morkov/mail-8.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                                <img src="http://www.lbr.ru/images/kp/151-morkov/mail-9.jpg" width="250" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                            <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                            <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">LMR-14</span></strong></td>
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
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
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
                        <td style="padding:10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="695" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-samosvalnye/621-pritsepy-samosvalnye-barkas/" target="_blank" style="text-decoration: none;">
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
                                                    <img src="http://www.lbr.ru/images/kp/151-morkov/mail-10.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                    <td width="50%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Тип</strong></span></td>
                                    <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong>Баркас</strong></span></td>
                                    <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Баркас 10</strong></span></td>
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
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price4']; ?></span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price5']; ?> </span></td>
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







