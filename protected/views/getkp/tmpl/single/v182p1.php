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
                                    <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                            
                        </table>
                    </td></tr>

                <!-- Контент первого блока (ч.1)-->
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 3px; padding: 0px 0px 3px 0px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                         Ботвоудалитель Struik
                                    </p>  
                                </td>
                                <td width="90" style="border-bottom:solid black 3px;padding: 0px 0px 3px 0px;">
                                    <img src="http://www.lbr.ru/images/makers/struk.jpg" width="90" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-2.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Эффективное измельчение ботвы</span><br>
                                                    Бичи, расположенные на валу ботвоудалителя, эффективно сбивают и измельчают ботву.
                                                </p>    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Свободный доступ к рабочим органам</span><br>
                                                    Окошки, расположенные в верхней части ботвоудалителя, 
                                                    обеспечивают свободный доступ к рабочим органам, позволяя без проблем проводить 
                                                    техническое обслуживание ботвоудалителя.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Обеспечение качественного удаления ботвы по всей форме гребня</span><br>
                                                    Специально разработанные ножи в вертикальном положении различной длины срезают и измельчают ботву.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  style="padding: 0px 0px 0px 20px; text-align: left;">
                                                <!--Таблица с данными-->
                                                <table width="428" bgcolor="#FFFFFF" cellspacing="0" cellpadding="1px" align="left" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="65%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="35%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 LKA 75</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Кол-во рядков</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 x 75</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Вес, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">870</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Необходимая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">70-80</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">ВОМ, об/мин</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1000</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, Га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,2-2,1</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price1']; ?></span></td>
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
                


                <!-- Контент первого блока (ч.2)-->
                <tr>
                    <td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 3px;" width="670" >
                                    <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelekopateli/410-kartofelekopateli-pd/" target="_blank" style="text-decoration: none;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;line-height: 20px;">
                                            Копалки для картофеля IMAC (Италия)<br>
                                            с боковой выгрузкой
                                        </p>  
                                    </a>
                                </td>
                                <td width="90" valign="bottom" style="border-bottom:solid black 3px; padding: 0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/makers/imac.jpg" width="60" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-3.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                <!--Вторая колонка-->
                                <td>
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 20px; padding-bottom: 5px;">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Качественная уборка. 
                                                        Увеличение производительности в 1,5-2 раза!</span><br>
                                                        Комбинированную уборку ведут в две фазы. Сначала
                                                        2 рядка картофеля выкапывают копателем и укладывают 
                                                        их в междурядья двух смежных не выкопанных рядков. 
                                                        В то же междурядье можно уложить клубни и с двух
                                                        смежных рядков по другую сторону. Затем двухрядный
                                                        комбайн подбирает валок картофеля, одновременно 
                                                        выкапывая клубни в остальных рядках. Этот способ
                                                        уборки увеличивает производительность комбайнов в
                                                        1,5-2 раза. Он применим при хорошей сепарации почвы
                                                        (гребневые посадки на супесях).
                                                </p>
                                            </td>
                                        </tr>
                                        
                                       <tr>
                                            <td style="padding: 0px 0px 0px 20px;">
                                                <!--Таблица с данными-->
                                                <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="1px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="62%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="19%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">PD1400</span></strong></td>
                                                        <td width="19%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">PD1650</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Диаметр ботвоудаляющих дисков, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">500</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">500</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,42-0,84</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,49-0,99</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Длина с валкоукладчиком, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">360</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">360</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина x высота, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">180x130</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">205x130</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Междурядье, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">70</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Необходимая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">от 60</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">от 80</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;  color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;  color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                

                <!-- Контент второго блока (ч.1)-->
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 3px; padding: 0px 0px 3px 0px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left; line-height: 20px;">
                                        Комбайны однорядные IMAC 8090 RB 45-55<br>
                                        для уборки картофеля
                                    </p>  
                                </td>
                                <td width="90" valign="bottom" style="border-bottom:solid black 3px;padding: 0px 0px 3px 0px;">
                                    <img src="http://www.lbr.ru/images/makers/imac.jpg" width="60" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:5px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="760" style="">
                                    <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-4.jpg" width="760" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                        <td style="padding: 0px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Комбайн с боковым подкопом</span><br>
                                        Трактор перед проходом комбайна не уплотняет почву,
                                        что существенно снижает нагрузку на уборочные механизмы комбайна. 
                                        В свою очередь, это позволяет использовать 
                                        широкие колеса на тракторе, что еще больше снижает уплотнение почвы.
                                        </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td style="padding: 10px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Точное выкапывание без повреждений</span><br>
                                        Выкапывающий механизм состоит из двух лемехов с ре-
                                        гулируемым рабочим углом. Автоматическое управление (опция) 
                                        позволяет оператору сконцентрироваться
                                        на уборке.
                                        </p>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0px 0px 5px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="170">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Бережная уборка</span><br>
                                                                Протряхивающий транс-
                                                                портер (75 см) и широкие
                                                                чистящие транспортеры
                                                                обеспечивают очень хорошую работу с медленной
                                                                скоростью вращения, исключая риск 
                                                                травмирования продукции.
                                                            </p>
                                                        </td>
                                                        <td width="208" style="padding:0px 0px 0px 15px;">
                                                            <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-5.jpg" width="193" style="border: 0; float:right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 10px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Лучшая очистка картофеля в своем классе</span><br>
                                        Очистка картофеля от земли и камней производится
                                        при совместной работе поперечного транспортера и
                                        двумя рядами резиновых пальцев, вращающихся вертикально.
                                        </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 10px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Высокая производительность</span><br>
                                        Сортировочный стол оборудован 4+4 линиями калибро-
                                        вочных катков и имеет ширину 80 см, транспортер для
                                        примесей имеет ширину 38 см. Сортировочный стол го-
                                        ризонтальный, рассчитан для работы 6 человек с удобными рабочим местами 
                                        и с отличным обзором всех стадий очистки.
                                        </p>
                                        </td>
                                        </tr>
                                        
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td  style="padding: 5px 0px 0px 20px; text-align: left;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" cellspacing="0" cellpadding="1px" align="left" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="70%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">8090 RB 45-55</span></strong></td>
                                                     </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Вес, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">6800</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Необходимая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Максимальная высота выгрузки из бункера, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Сцепка</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Регулируемая
                                                            гидравлическая
                                                            передняя сцепка</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Емкость бункера, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4500-5500</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина просеивающего транспортера, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">800</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина транспортера подъемника-бот-воудалителя, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">900</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина поперечного транспортера, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">820</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина сортировочного стола, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">800</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина транспортера для отходов, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">380</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, max Га/10 часов</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price4']; ?></span></td>
                                                     </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding: 10px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-6.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">  
                                            </td>
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
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                



            </table>



        </td>
    </tr>

    <!-- Второй блок -->

   </table>
</div>


<!-- Второй блок -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
   <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                

                <!-- Контент третьего блока (ч.1)-->
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="border-bottom:solid black 3px; padding: 0px 0px 3px 0px;" width="670" >
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left; line-height: 20px;">
                                        Комбайны двухрядные IMAC 165 для уборки<br>
                                        картофеля с боковой выгрузкой
                                    </p>  
                                </td>
                                <td width="90" valign="bottom" style="border-bottom:solid black 3px;padding: 0px 0px 3px 0px;">
                                    <img src="http://www.lbr.ru/images/makers/imac.jpg" width="60" style="border: 0; float:right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:5px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="760" style="">
                                    <img src="http://www.lbr.ru/images/kp/182-kartofel-premium/mail-7.jpg" width="760" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                        <td style="padding: 0px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: black; text-align: justify;">
                                                Двухрядный картофелеуборочный комбайн произ-
                                                водства компании IMAC (Италия) производит уборку
                                                картофеля или свеклы с двух рядов одновременно.
                                            </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 5px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Обеспечение комфорта работЫ</span><br>
                                                Сцепка комбайна с трактором осуществляется при помощи гидравлически 
                                                регулируемого по высоте и сторонам сцепного устройства. 
                                                <span style="font-weight:bold;">Для более удобной работы по навеске и отключению машины</span> 
                                                от трактора создана гидравлическая подножка.
                                            </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 5px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Контроль качества уборки</span><br>
                                                Комбайны IMAC оборудованы подпружиненными бот-
                                                воотделяющими дисками и плавающим катком контроля уровня.
                                            </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 5px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                <span style="color:#F58220; font-weight:bold;">КОНТРОЛЬ ДАВЛЕНИЯ НА ПОЧВУ (опция)</span><br>
                                                Это важно когда работы выполняются на влажной почве – для уменьшения количества земли, прилипаемой
                                                к клубням.
                                            </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding: 5px 0px 0px 5px;">
                                                
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify;">
                                                                Благодаря большим ботвоотделяющим каткам
                                                                <span style="color:#F58220; font-weight:bold;">двойные ножи (лемеха) «не забиваются»</span>, что позволяет выполнять работу
                                                                в любых условиях.
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
                                                <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Продуманные транспортеры</span><br>
                                                Транспортер подъемник более широкий, чем просеива-
                                                ющий транспортер, чтобы избежать заторов продукции
                                                на пересечении двух транспортеров. Для транспортировки продукции вверх, 
                                                транспортер оснащен штангами с “пальцами” из резины, 
                                                которые не позволяют продукции вращаться и скатываться вниз.
                                            </p>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                            <td  style="padding: 5px 0px 0px 20px; text-align: left;">
                                                <!--Таблица с данными-->
                                                <table width="358" bgcolor="#FFFFFF" cellspacing="0" cellpadding="1px" align="left" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="80%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                        <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">165</span></strong></td>
                                                     </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Кол-во рядков</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Междурядье, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75-90</span></td>
                                                    </tr> 
                                                   <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина просеивающего транспортера, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1650</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина бокового транспортера погрузчика, мм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1000</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Минимальная высота выгрузки, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">70</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Максимальная высота выгрузки, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">400</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Необходимая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, Га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,25 – 0,62</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price5']; ?></span></td>
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                



            </table>



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
    <!-- Третий блок -->

</table>

</div>
</body>
</html>






