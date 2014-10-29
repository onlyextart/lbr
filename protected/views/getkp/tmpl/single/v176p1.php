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
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <!-- Заголовок -->
                            <tr>
                                <td style="padding-bottom:5px;">
                                    <img src="http://www.lbr.ru/images/kp/176-posev/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                </td></tr>


                <!-- Контент первого блока (ч.1)-->
                <tr>
                    <td style="padding:0px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px; padding: 0px 0px 5px 0px;" width="640" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/grebneobrazovateli/391-grebneobrazovateli-tsa-165/" target="_blank" style="text-decoration: none;">
                                            Грядообразователи Ortiflor TSA120 и TSA165
                                        </a>
                                    </p>  
                                </td>
                                <td width="120" style="border-bottom:solid black 4px; padding: 0px 0px 5px 0px;">
                                    <img src="http://www.lbr.ru/images/makers/ortiflor.JPG" width="120" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                                <img src="http://www.lbr.ru/images/kp/176-posev/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                        <tr>
                                            <td style="padding:10px 0px 5px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  font-weight:bold;  color:#F58220; text-align: justify;">
                                                    Варианты использования грядообразователя:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/176-posev/mail-3.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="126">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: center;">
                                                                1. Без грядообра-зующего вала
                                                            </p>
                                                        </td>
                                                        <td width="126">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: center;">
                                                                2. С грядообразую-щим валом
                                                            </p>
                                                        </td>
                                                        <td width="126">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; color: black; text-align: center;">
                                                                3. Формирование гребней (опция)
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/176-posev/mail-4.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>

                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  font-weight:bold;  color:#F58220; text-align: justify;">
                                                    Универсальность применения
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Грядообразователи Ortiflor создают плотные и одина-
                                                    ковые гряды для последующей высадки лука, моркови,
                                                    свеклы и других корнеплодов, а также рассады.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/176-posev/mail-5.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td style="padding:10px 0px 5px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  font-weight:bold;  color:#F58220; text-align: justify;">
                                                    Глубоко разрыхляют почву
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="158" valign="top">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                Грядообразователи ос-
                                                                нащены специальной
                                                                фрезой с крепкими и
                                                                устойчивыми к стиранию
                                                                зубьями, которые глубоко разрыхляют почву и
                                                                прижимают боковые поверхности, сохраняя мягкую сердцевину.
                                                            </p>
                                                        </td>
                                                        <td width="200" valign="top" style="padding: 0px 0px 5px 10px;">
                                                          <img src="http://www.lbr.ru/images/kp/176-posev/mail-6.jpg" width="190" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  font-weight:bold;  color:#F58220; text-align: justify;">
                                                    Качественная посадка – дружные всходы
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 20px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    Фреза глубоко разрыхляет почву (25-30 см), формирует
                                                    и уплотняет боковые поверхности.<br>
                                                    Формирующие устройства сделаны из сортовой, устой-
                                                    чивой к стиранию стали.<br>
                                                    В задней части машины расположена двойная решетка
                                                    с зубьями (первый ряд зубьев фиксированный, второй
                                                    можно регулировать) диаметром 10-12 мм. Крупные
                                                    глыбы камней, попадая на эту решетку, укладываются
                                                    вниз и закрываются сверху слоем просеянной почвы.
                                                    Таким образом, создается идеальная почва для высева
                                                    овощей.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        
                                        

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 0px 0px;" colspan="2">
                                                <!--Таблица с данными-->
                                                <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="14%" align="left" style="border: solid black 1px;  background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="12%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">A (max cм)</span></strong></td>
                                                        <td width="12%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">B (max cм)</span></strong></td>
                                                        <td width="12%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">C (min cм)</span></strong></td>
                                                        <td width="12%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">D (min cм)</span></strong></td>
                                                        <td width="12%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес, кг</span></strong></td>
                                                        <td width="13%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></strong></td>
                                                        <td width="13%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TSA120</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">110</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">25</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">510</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">TSA165</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">150</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">25</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">710</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50-60</span></td>
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

                <!-- Контент второй строки второго блока-->
                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px; padding: 0px 0px 5px 0px;" width="700" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        Грядообразователи Euroclass CBP3B450
                                        
                                    </p>  
                                </td>
                                <td width="60" style="padding: 0px 0px 5px 15px; border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/kp/euroclass.jpg" width="60" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                 <tr>
                     <td style="padding:5px 20px 0px 20px;">
                     <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/176-posev/mail-7.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                     </table>
                     </td>
                </tr>
                
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="408" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Удобство! Долговечность! Универсальность применения!</span><br>
                                                    Грядообразователи для лука, моркови, свеклы и других корнеплодов, а также рассады.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Сокращение времени на обработку почвы</span><br>
                                                    Конструкция Euroclass CBP3B450 обеспечивает подготовку почвы за один проход в 3 гряды!<br>
                                                    • <span style="font-weight:bold;">Защита от ударов</span> – наличие амортизатора на 3-х
                                                    задних крышках.<br>
                                                    • <span style="font-weight:bold;">Четкие междурядья</span> – Борозды: 2 дисковые – боковые, 
                                                    2 «следорыхлителя» в форме лапы – центральные.<br>
                                                    • <span style="font-weight:bold;">Удобная транспортировка</span> по дорогам общего
                                                    пользования – тройное устройство закрытия ванн
                                                    для дорожной перевозки (2 гидравлических, 1 ручное, все с блокирующим клапаном).<br>
                                                    • <span style="font-weight:bold;">Осветительные приборы для транспортировки</span>
                                                    в соответствии с нормой ЕС.<br>
                                                    • <span style="font-weight:bold;">Высота от земли:</span> 100/200 мм.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom: 10px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Параметры обработки почвы:</span><br>
                                                    • Количество рядков – 3.<br>
                                                    • Рабочая ширина – 4560 мм.<br>
                                                    • Глубина гряды – 300 мм.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <table width="408" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="70%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> CBP3B450</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; "><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Глубины гряды, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">300</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Максимальная длина, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4800</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Минимальная транспортная ширина,мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2520</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Максимальная транспортная высота,мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2580</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">150-200</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2235</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                                    </tr>

                                                </table> 
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="348" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 10px;">
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/176-posev/mail-8.jpg" width="328" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                </td>
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

                <!-- Контент второй строки второго блока-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 4px; padding: 0px 0px 5px 0px;" width="660" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/ovoshchnye-seyalki-i-rassadoposadochnye-mashiny/seyalka-ovoshchnaya-gaspardo-olympia/" target="_blank" style="text-decoration: none;">
                                            Овощные сеялки точного высева Olimpia
                                        </a>
                                    </p>  
                                </td>
                                <td width="100" style="padding: 0px 0px 5px 15px; border-bottom:solid black 4px;">
                                    <img src="http://www.lbr.ru/images/uploaded/gaspardo-logo.JPG" width="100" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                 <tr>
                     <td style="padding:5px 20px 0px 20px;">
                     <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <img src="http://www.lbr.ru/images/kp/176-posev/mail-9.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; font-size: 14px;">Особенности сеялки Olimpia</span><br>
                                                    Высевающие сошники расположены в шахматном порядке. Конструкция высевающих аппаратов позволяет
                                                    производить высев в две строчки и изменять расстояние между строчками от 4 до 9 см.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="188">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Качественный посев</span>
                                                                обеспечивает модуль
                                                                сеялки, который крепится к раме с помощью па-
                                                                раллелограмма и пред-
                                                                ставляет собой секцию
                                                                с двумя высевающими
                                                                элементами.
                                                            </p> 
                                                        </td>
                                                        <td width="190" valign="top" style="padding:0px 0px 0px 10px;">
                                                           <img src="http://www.lbr.ru/images/kp/176-posev/mail-10.jpg" width="180" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="font-weight:bold;">Многофункциональность. Возможность посева различных видов культур.</span><br>
                                                    Жесткая рама сеялки представляет собой полую трубу квадратного сечения, 
                                                    благодаря конструкции которой возможно регулировать
                                                    междурядное расстояние.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="font-weight:bold;">Улучшение аэрации семян и сохранение влаги даже в засушливые периоды</span>
                                                    благодаря имеющимся прика-тывающим колесам с мягкой серцевиной.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="font-weight:bold;">Высокую точность посева</span>
                                                    обеспечивают высевающие диски диаметром 22 мм.
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
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Модель</strong></span></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Olimpia</strong></span></td>
                                                        <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><strong> Olimpia</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Двухстрочный высев</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4 секции</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12 секций</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина рамы, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2,50</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; "><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Сечение рамы, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">100 x 150</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">100 x 150</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина междурядий, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">26</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">26</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мин. ширина между строч-ками, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; "><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Макс. ширина между строч-ками, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">9</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">9</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; "><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">90</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая скорость, км/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Объем бункера для семян, л</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3,5</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3,5</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высевающие диски</span></td>
                                                        <td colspan="2" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Под лук – 90 отверстий,
                                                            диаметр отверстий 1,1 мм.<br>
                                                            Под морковь – 90 отверстий,
                                                            диаметр отверстий 0,8 мм</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС, руб.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color: #DD2A1B;"><?php echo $data['price5']; ?></span></td>
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

                <tr valign="top">
                        <td colspan="2" style="padding: 0px 20px 0;">
                            <?php
                            if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                                Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                            endif;
                            ?>
                        </td>
                    </tr>

            </table></td></tr>
   </table> 

</div>
</body>









