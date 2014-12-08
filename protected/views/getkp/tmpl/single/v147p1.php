<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<div class="table w-800">
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
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                                <!-- Оранжевый блок -->
                                <tr>
                                    <td style="padding: 55px 0px 10px 0px;">
                                        <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                            ТЕХНИКА ДЛЯ ВОЗДЕЛЫВАНИЯ И УБОРКИ КАРТОФЕЛЯ
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </td></tr>

                    <!-- Контент первого блока (ч.1)-->
                    <tr>
                        <td style="padding:30px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="670" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/grebneobrazovateli/392-grebneobrazovateli-forma/" target="_blank" style="text-decoration: none;">
                                                Гребнеобразователи FORMA
                                            </a>
                                        </p>  
                                    </td>
                                    <td width="90" style="border-bottom:solid black 4px;">
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/unia.jpg" width="90" style="border: 0; float:right;" alt="Изображения не отображаются">
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
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-2.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                <td style="padding:5px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;  color: black; text-align: justify;">
                                                        <span style="color:#F58220;text-transform: uppercase;"> Применяйте гребнеобразователь в качестве окучника по всходам</span>
                                                        при снятии задней гребнеобразующей крышки
                                                    </p>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>

                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 5px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Две операции за один проход:</span><br>
                                                        Гребнеобразователи FORMA предназначены для глубокого разрыхления почвы (15-25 см), одновременного
                                                        формирования и уплотнения гребней под картофель с междурядьем 70-75 см. Специальные лапки
                                                        разрушают крупные комки земли, культивируют почву и образуют трапециевидные гребни.
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td  style="padding: 0px 0px 10px 20px;">
                                                    <!--Таблица с данными-->
                                                    <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">FORMA 2</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">FORMA 4</span></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, м</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">3,0</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество гребней</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,5-0,7</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,0-1,4</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">от 35</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">от 55</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Вес, кг</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">420</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">700</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price1']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price2']; ?></span></td>
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
                        <td style="padding:80px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="700" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/grebneobrazovateli/390-grebneobrazovateli-imac/" target="_blank" style="text-decoration: none;">
                                                Гребнеобразователи IMAC
                                            </a>
                                        </p>  
                                    </td>
                                    <td width="60" style="border-bottom:solid black 4px;">
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/imac.jpg" width="60" style="border: 0; float:right;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 5px 20px 40px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-5.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Качественное измельчение почвы</span><br>
                                                        Усиленные зубья, изготовленные из сверхпрочной стали обрабатывают почву, создавая равномерные и объемные 
                                                        гребни. Гребнеобразователь интенсивно обрабатывает почву и разрушает комки земли, создавая
                                                        рыхлую почву, что способствует повышению производительности при уборке.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0px 0px 20px;">
                                                    <!--Таблица с данными-->
                                                    <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="40%" align="left" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель RR</span></strong></td>
                                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4F75</span></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество рядков</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Расстояние между рядками, см</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество зубьев</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">64</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">80</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
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

        <!-- Первый блок -->

        <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
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
                        <td style="padding:5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="710" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelesazhalki/395-kartofelesazhateli-kora/" target="_blank" style="text-decoration: none;">
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="298" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-7.jpg" width="298" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                        <table width="458" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 10px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">ПРОСТАЯ И НАДЕЖНАЯ</span><br>
                                                        Картофелесажатели KORA оснащены натяжным устройством для ленты и высаживающими лопатками, которые
                                                        обеспечивают сортировку и выборку клубней размером
                                                        от 35 мм до 60 мм. Опциональные вкладыши дают воз-
                                                        можность высаживать клубни большего или меньшего
                                                        размера.
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">МНОГООБРАЗИЕ РЕШЕНИЙ</span><br>
                                                        Опционально сажалка KORA 2 и KORA 4 может быть оснащена подсеивателем гранулированных удобрений и
                                                        протравливателем клубней.
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
                        <td style="padding:5px 20px 10px 20px;">
                            <!--Таблица с данными-->
                            <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="1px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                <tr>
                                    <td width="40%" align="left" style="border: solid black 1px;padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Тип</strong></span></td>
                                    <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> KORA 2</strong></span></td>
                                    <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> KORA 4</strong></span></td>
                                    <td width="20%" colspan="2" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> KORA 4HP</strong></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество рядов, шт.</span></td>
                                    <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2</span></td>
                                    <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 </span></td>
                                    <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 </span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина междурядий, см</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">70/75</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Грузоподъемность картофельного бункера, кг</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">400</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">450 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">840 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">900 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2000 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">2200</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Глубина посадки, см</span></td>
                                    <td align="center" colspan="6" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4-12</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,3-0,5</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,4-0,6 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,6-1,1 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,7-1,2 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,6 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,7</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность трактора, л.с.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">50</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">60 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">80 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">75 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price5']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price6']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price7']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price8']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px; color: #DD2A1B;"><?php echo $data['price9']; ?></span></td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <!-- Контент второй строки второго блока-->
                    <tr>
                        <td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="710" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/botvoudaliteli/405-botvoudaliteli-imac/" target="_blank" style="text-decoration: none;">
                                                Ботвоудалители STRUIK
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="298" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-8.jpg" width="298" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="458" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold; text-transform: uppercase;">Удобство работы и качественный результат</span><br>
                                                        Агрегат приподнимает, срезает и измельчает ботву, равномерно укладывая остатки в междурядье.
                                                        Машина может навешиваться на заднюю или переднюю
                                                        часть трактора (в стандартной комплектации навешивается позади трактора).
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 3px 0px 0px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Идеальное копирование гребня</span><br>
                                                        Вертикально расположенные ножи различной длины
                                                        предназначены для копирования гребня, что обеспечивает качественное удаление и измельчение ботвы.                                                    </p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="padding:5px 0px 5px 20px;">
                                                    <table width="438" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="1px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 LKA 75</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 LKA 90</span></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Количество рядков</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 x 75</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">4 x 90</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Вес, кг</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">870</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">950</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">70-80</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">90</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">ВОМ, об/мин</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1000</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/час</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,2-2,1</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,8 – 2,5</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price10']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price11']; ?></span></td>
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
                        <td style="padding:5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="710" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofelekopateli/408-kartofelekopateli-wega/" target="_blank" style="text-decoration: none;">
                                                Картофелекопалки PYRUS
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="298" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-10.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                        <table width="458" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КАЧЕСТВЕННАЯ УБОРКА – МИНИМУМ ПОТЕРЬ</span><br>
                                                        Каждый второй пруток имеет оболочку из полимерного
                                                        материала, что облегчает транспортировку картофеля и
                                                        способствует минимизации повреждений.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">УНИВЕРСАЛЬНОСТЬ И ДОСТУПНОСТЬ</span><br>
                                                        Копалку PYRUS можно использовать для выкапывания
                                                        картофеля, лука (при использовании специальной насадки).
                                                    </p>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style="padding-left: 20px; padding-top: 3px;" valign="bottom">
                                                    <!--Таблица с данными-->
                                                    <table width="438" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="1px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="42%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                                            <td width="18%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">PYRUS Z-653, 1,5 м</span></strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Мощность трактора, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">55</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая скорость, км/час</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,5-5,0</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, мм</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1500</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочие обороты ВОМ, об/мин</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">540</span></td>
                                                         </tr> 
                                                         <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/час</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">0,5</span></td>
                                                         </tr>
                                                         <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Размеры: длина x ширина x высота, см</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">314x210x111</span></td>
                                                         </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price12']; ?></span></td>
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

                    <tr>
                        <td style="padding: 15px 20px 0px 20px;">
                            <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                Картофелеуборочные комбайны
                            </p>
                        </td>
                    </tr>
                    <!-- Контент четвертой строки второго блока-->
                    <tr>
                        <td style="padding:15px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="710" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/412-kartofeleuborochnye-kombajny-pyra-2/" target="_blank" style="text-decoration: none;">
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td width="378">
                                        <!-- Первая колонка-->

                                        <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                            <tr>
                                                <td style="padding: 0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-11.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                        <table width="448" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" style="border:0; border-collapse: collapse; background-clip:padding-box;">

                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 3px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Меньше радиус поворота на краю поля    </span><br>
                                                        за счет использования поворотных колес и дышла с гидравлическим управлением.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 3px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">Качественная сепарация почвы</span><br>
                                                        Комбайн PYRA собирает картофель 
                                                        при минимальном показателе механических повреждений с
                                                        одновременным очищением растений.
                                                    </p>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding-left: 20px;">
                                                    <!--Таблица с данными-->
                                                    <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                        <tr>
                                                            <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Тип</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">PYRA 1500</span></strong></td>
                                                            <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">PYRA 1500</span></strong></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Емкость бункера, кг</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1500</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">3000</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота разгрузки, м</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1,25-2,70</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">1,25-3,14</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Привод транспортера</span></td>
                                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">гидравлический</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ходовые колеса</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">10/75-15,3</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">16,0/70-20</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">50</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">80</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price13']; ?></span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;"><?php echo $data['price14']; ?></span></td>
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



                    <!-- Контент первой строки третьего блока-->
                    <tr>
                        <td style="padding:10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="710" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/kartofeleuborochnye-kombajny/413-kartofeleuborochnye-kombajny-bolko/" target="_blank" style="text-decoration: none;">
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td width="308">
                                        <!-- Первая колонка-->
                                        <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 5px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-12.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="448" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" style="border:0; border-collapse: collapse; background-clip:padding-box;">

                                            <tr>
                                                <td style="padding-left: 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">КОМБАЙН ОТЛИЧНОГО КАЧЕСТВА И ДОСТУПНЫЙ ПО ЦЕНЕ    </span><br>
                                                        Комбайн BOLKO оснащен бункером емкостью 1250 кг с
                                                        подвижным полом и транспортерами для ступенчатой
                                                        очистки картофеля от грязи.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; padding-bottom: 3px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ОТДЕЛЯЕТ, ОЧИЩАЕТ, УДАЛЯЕТ!</span><br>
                                                        Очистительные механизмы эффективно удаляют ботву
                                                        картофеля, очищают его от грязи и обеспечивают отделение камней от картофеля с выгрузкой камней в спе-
                                                        циальный бункер емкостью 100 кг.
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
                        <td style="padding-top: 5px;">
                            <!--Таблица с данными-->
                            <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                <tr>
                                    <td width="30%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Модель</span></strong></td>
                                    <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">BOLKO</span></strong></td>
                                    <td width="30%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">BOLKO S</span></strong></td>
                                    <td width="20%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">BOLKO T</span></strong></td>
                                </tr> 
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Характеристика</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">с бункером 1250 кг</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">с площадкой для выгрузки в мешки, грузоподъемность – 500 кг</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">с транспортером</span></td>
                                </tr> 
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Рабочая ширина, см</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">62,5-75</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">62,5-75</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">62,5-75</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Производительность, га/ч</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">до 0,15</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">до 0,15</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">до 0,15</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота разгрузки, мм</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1250-2500</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">-</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">-</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">40</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">40</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">40</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price15']; ?></span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;"><?php echo $data['price16']; ?></span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;"><?php echo $data['price17']; ?></span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 25px 20px 0px 20px;">
                            <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                Внесение удобрений – всегда выгодно
                            </p>
                        </td>
                    </tr>

                    <!-- Контент третьей строки третьего блока-->
                    <tr>
                        <td style="padding:15px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td width="640" style="border-bottom:solid black 4px;">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/436-bochki-dlya-vneseniya-zhidkikh-udobrenij-meprozet/" target="_blank" style="text-decoration: none;">
                                                Бочка PITON 100 для жидкой органики и воды
                                            </a>
                                        </p>  
                                    </td>
                                    <td width="100" style="padding: 0px 5px 0px 15px; border-bottom:solid black 4px;" align="right" valign="bottom">
                                        <img src="http://www.lbr.ru/images/kp/147-kartophel/meprozet.jpg" width="100" style="border: 0;" alt="Изображения не отображаются">
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
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-15.jpg" width="308" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                            <tr>
                                                <td style="padding: 5px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: justify; text-transform: uppercase">
                                                        «Неубиваемая» бочка из оцинковки!
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <!--Вторая колонка-->

                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                            <tr>
                                                <td style="padding: 0px 0px 0px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        100 БЕД - ОДИН ОТВЕТ!
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 0px 5px 0px 20px;">
                                                    <table width="428" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td width="10" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    вывоз и внесение органических удобрений на поля;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="10" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    подвоз воды в летние лагеря;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="10" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    подвоз воды для заправки опрыскивателей;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="10" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    пожарные ёмкости в период уборки и засухи;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="10" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    всасывание жидких отходов из лагун и колодцев с глубины до 6 м.
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                    </table>  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 0px 0px 0px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; color: #F58220; text-align: justify;">
                                                        Всего 4,5 минуты – время наполнения и разгрузки.
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 0px 0px 10px 20px;">
                                                    <!--Таблица с данными-->
                                                    <table width="428" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box; margin:0;">
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Емкость, л</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size:11px;">10 000</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Длина/ширина/высота, мм</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">7 500/2 550/2 900</span></td>
                                                        </tr> 
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">100</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price18']; ?></span></td>
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

                    <!-- Контент второй строки четвертого блока-->
                    <tr>
                        <td style="padding:5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px;" width="725" >
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/pritsepnye-razbrasyvateli-tverdykh-organicheskikh-udobrenij/435-mashiny-dlya-vneseniya-organicheskikh-udobrenij-lmr/" target="_blank" style="text-decoration: none;">
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
                        <td style="padding: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <table width="605" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 10px 0px 0px;" width="370">
                                                    <table cellspacing="0" cellpadding="0" >
                                                        <tr valign="top">
                                                            <td style="padding: 0; margin: 0;">
                                                                <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-13.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">  
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
                                                    </table>
                                                </td>
                                                <td style="padding: 0px 5px 5px 10px;" width="219">
                                                    <table width="219" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td colspan="2" style="padding-bottom: 3px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                                    <span style="color:#F58220; font-weight:bold;text-transform: uppercase;">ЭКОНОМИЧЕСКИЙ ЭФФЕКТ</span><br>
                                                                    Позволяет получить экономический эффект за счёт меньшей
                                                                    собственной массы, большой ширины внесения, равномерности и
                                                                    увеличенной кубатуры, а также за
                                                                    счёт сокращения парка техники.
                                                                </p>
                                                            </td>
                                                        </tr> 

                                                        <tr>
                                                            <td colspan="2" >
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color:#F58220; text-align: justify;font-weight: bold;">
                                                                    3 в 1:
                                                                </p> 
                                                            </td> 
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 5px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    внесение органики;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 5px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    перевозка зеленой массы;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 5px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
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
                        <td style="padding: 10px 20px 10px 20px;" width="760">
                            <!--Таблица с данными-->
                            <table width="760" bgcolor="#FFFFFF" align="left" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box; margin:0;">
                                <tr>
                                    <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> Модель</strong></span></td>
                                    <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> PTU 6.0/14S</strong></span></td>
                                    <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> PTU 14S</strong></span></td>
                                    <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><strong> PTU 20S</strong></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Грузоподъемность, т</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">10</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">14</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">20</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Ширина разбрасывания, м</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">12-14</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">12-14 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">12-14 </span></td>
                                </tr> 
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Требуемая мощность, л.с.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">120-135</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">190-220 </span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">250-300</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price19']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price20']; ?> </span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price21']; ?> </span></td>
                                </tr> 
                            </table>
                        </td> 
                    </tr>
                    <!-- Заголовок-->


                    <tr>
                        <td style="padding: 75px 20px 0px 20px;">
                            <p style="margin: 0; padding: 0px 0px 3px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 22px; border-bottom:solid #F58220 4px; font-weight: bold; text-transform:uppercase; color: #F58220; text-align: left; ">
                                Транспортировка
                            </p>
                        </td>
                    </tr> 

                    <!-- Контент первой строки четвертого блока-->
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
                        <td style="padding: 15px 20px 30px 20px;">
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
                                            <?php if ($data['product_info10'] && !empty($data['product_info10'])): ?>
                                                <tr>
                                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info10']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td style="padding: 15px 0px 0px 0px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; color: #F58220; text-align: center; text-transform: uppercase">
                                                        Универсальность применения + Долговечность
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
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; color: #F58220; text-align: justify;">
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
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    безопасная погрузка и разгрузка овощей, опционально устанавливается комплект "овощник" (гаситель падения в кузов и козырёк разгрузки на борт).
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    перевозка зерна, сенажа и зелёной массы объёмом до 40 куб.м;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    загрузка сеялок семенами и минеральными удобрениями в период проведения посевных работ;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style="padding: 5px 0px 0px 20px;" colspan="2">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; color: #F58220; text-align: justify;">
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
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    один ярус надставных бортов в базовой комплек-тации;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    боковая стабилизация кузова (гидромеханическая);
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    реактивные тяги;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    две поворотные оси в версии тридем;
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td width="20" align="left">
                                                                •
                                                            </td>
                                                            <td style="padding:0px 0px 0px 0px;">
                                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify;">
                                                                    гидравлический задний борт с автоматической блокировкой.
                                                                </p> 
                                                            </td>
                                                        </tr>
                                                    </table>  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding: 5px 0px 3px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
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
                                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price22']; ?></span></td>
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
                    <!-- Контент второй строки четвертого блока-->                
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
                                                    <img src="http://www.lbr.ru/images/kp/147-kartophel/mail-19.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">  
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

                                        </table>
                                    </td>

                                    <!--Вторая колонка-->

                                    <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                            <tr>
                                                <td style="padding: 0px 0px 3px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220;font-weight:bold;"> НАДЁЖНОСТЬ – 100% ИТАЛЬЯНСКАЯ КОМПЛЕКТАЦИЯ :</span><br> 
                                                        оси ADR (Италия), тормозные системы CRAVER, высоконадёжный поворотный круг (Италия), боковые борта
                                                        завода MOSSO в Торино (Италия).
                                                    </p>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style="padding:3px 0px 3px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
                                                        <span style="color:#F58220;font-weight:bold;"> ДОПОЛНИТЕЛЬНЫЕ ПРЕИМУЩЕСТВА:</span><br>
                                                        сертификат производства РФ, низкая погрузочная высота 1,05 м, центральная система открывания бортов.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 3px 20px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: justify;">
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
                        <td style="padding: 5px 0px 0px 0px;">
                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; text-transform: uppercase">
                                Герметичность, надёжность, устойчивость
                                к коррозии и отсутствие потерь
                                при перевозках груза.
                            </p>
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
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Высота платформы, мм</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1130</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">1200</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Дорожный просвет, мм</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">350</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">405</span></td>
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
                                    <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price23']; ?></span></td>
                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 11px;"><?php echo $data['price24']; ?> </span></td>
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





