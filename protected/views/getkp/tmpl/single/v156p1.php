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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                    <p style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Трактор PUMA 210
                                    </p>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/kp/156-puma/case.jpg" width="100" style="border: 0; float: right;" alt="Логотип PUMA">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/156-puma/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding: 10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr valign="top">
                                            <td style="padding:0px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="18" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; text-align: justify; font-style: italic; ">
                                                                Максимальная мощность 242 л.с.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:3px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="18"  style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; text-align: justify; font-style: italic; ">
                                                                Скорость
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:3px 0px 5px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td>
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="18" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding-left:5px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; text-align: justify; font-style: italic; ">
                                                                Высокая маневренность и надежность – впечатляющий малый радиус поворота
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 0px 0px 5px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-2.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                    Дополнительный запас мощности трактора
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 3px 0px 5px 0px;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding:0px 0px 3px 0px;" width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 3px 0px;" width="358">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Интеллектуальная система управления</span> мощностью
                                                                двигателя позволяет использовать до 37 л.с. дополни-
                                                                тельно при работе с прицепом, а также при выполнении
                                                                энергоемких задач с применением ВОМ.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="378" style="padding: 0px 0px 0px 0px;" colspan="2" align="center">
                                                            <img src="http://www.lbr.ru/images/kp/156-puma/mail-3.jpg" width="240" style="border: 0;"  alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="20" align="left" style="padding:5px 0px 5px 0px;">
                                                            •
                                                        </td>
                                                        <td style="padding:3px 0px 5px 0px;">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                На двигателя тракторов <span style="font-weight:bold;">PUMA</span> установлена система
                                                                впрыска <span style="font-weight:bold;">CommonRail с функцией PowerBoost</span>,
                                                                позволяющая справляться с неравномерными нагруз-
                                                                ками, связанными с неровностями рельефа и другими
                                                                факторами.
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
                                            <td width="378" style="padding: 5px 0px 0px 50px;" colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-4.jpg" width="318" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 3px 0px 5px 50px;" colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-5.jpg" width="318" style="border: 0; float: right;" alt="Изображения не отображаются">
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
<!-- Первый блок -->
</div>


<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 5px 0px;" colspan="2">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                    Максимум комфорта и продуктивности в работе
                                                </p>

                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 0px 0px 0px;" >
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Удобные эргономичные органы и система управления,
                                                    которые значительно облегчают работу оператора. Она
                                                    по праву считается лучшей в своем классе, поскольку
                                                    основными критериями ее разработки были максимальный уровень комфорта и продуктивность 
                                                    работы оператора. Благодаря возможности регулировки подлокотника
                                                    сиденья, размещенные на нем органы управления всегда
                                                    находятся под рукой оператора.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 5px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-6.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 5px 0px;" colspan="2">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                    Система впрыскивания топлива
                                                </p>

                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 0px 0px 0px;" >
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    Благодаря системе <span style="color:#F58220; font-weight:bold;"> впрыска топлива под высоким
                                                        давлением Common Rail</span>, обеспечивающей его оптимальное дозирование, двигатели отличаются высокими
                                                    эксплуатационными характеристиками и экономичностью. Максимальный крутящий момент двигателя
                                                    составляет 984 Нм, благодаря чему трактор Puma 210
                                                    может работать в любых условиях.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 0px 0px;" >
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-7.jpg" width="378" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 0px 20px;" >
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Система автоматического включения полного
                                                        привода и блокировки дифференциала</span> срабатывает
                                                    автоматически в таких ситуациях, как совершение
                                                    крутого поворота и торможение или же в зависимости от
                                                    положения навесного устройства и скорости движения
                                                    трактора.
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 0px 5px 20px;" >
                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                    <span style="color:#F58220; font-weight:bold;">Впечатляюще малый радиус поворота.</span> Благодаря
                                                    компактным размерам двигателя тракторы Puma
                                                    отличаются чрезвычайно малым радиусом поворота.
                                                    Передние “динамические” крылья (с гибкой фиксацией)
                                                    на 30% уменьшают угол поворота трактора, что очень
                                                    важно для погрузочно-разгрузочных работ. Минималь-
                                                    ный радиус поворота - 6,1 м
                                                </p>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="378" style="padding: 5px 0px 5px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-8.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding:10px 0px 5px 20px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                    Удобство технического обслуживания
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding:0px 0px 5px 0px;" width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 5px 0px;" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Минимум регламентного технического обслужи-
                                                                    вания</span>: проверку уровня моторного масла и его доливку
                                                                можно произвести не поднимая капот двигателя.
                                                                Интервалы технического обслуживания увеличены до
                                                                600 моточасов.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding:0px 0px 5px 0px;" width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:0px 0px 5px 0px;" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Простота ежедневных проверок и очистки трактора</span>: необходимые точки сервисного обслуживания
                                                                доступны с уровня земли, а обновленный пакет охлаждения поворачивается наружу.<br>
                                                                Все радиаторы нового блока охлаждения легко
                                                                чистить, для этого не требуется инструмент.<br>
                                                                Указатель уровня масла трансмиссии позволяет
                                                                оперативно контролировать уровень трансмиссионной
                                                                жидкости.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding:5px 0px 5px 0px;" width="20" align="left">
                                                            •
                                                        </td>
                                                        <td style="padding:5px 0px 5px 0px;" width="338">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Капот двигателя, закрепленный сзади на шарнирных петлях</span>, легко открывается спереди вверх за счет
                                                                газонаполненных подъемных цилиндров.
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>  
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="378" style="padding: 5px 0px 0px 20px;" >
                                                <img src="http://www.lbr.ru/images/kp/156-puma/mail-9.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
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
<!-- Второй блок -->
</div>


<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 10px 20px 0px 20px;">
                        <table width="760" bgcolor="#FFFFFF" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                            <tr valign="middle">
                                <td width="50%" align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; text-transform:uppercase; color:#F58220; font-weight:bold;">Двигатель<br></span></td>
                                <td width="50%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">  </span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Число цилиндров,тип охлаждения</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6, турбо с промежуточным охлаждением</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочий объем (л)</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6,7</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Номинальная мощность двигателя по стандарту ЕСЕ R120 (кВт/л.с.)</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">157 / 213</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Номинальная мощность двигателя по стандарту ECE R120  при  работе системы управления мощностью (кВт/л.с.) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">175 / 238</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Максимальная мощность двигателя по стандарту ECE R120  (кВт/л.с.) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">164 / 223</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Объем топливного бака (л) 410 </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">410</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:#F58220; font-weight:bold;">ТРАНСМИССИЯ<br></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Full Powershift 40 км/ч</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:#F58220; font-weight:bold;">ПОЛНЫЙ ПРИВОД И РУЛЕВОЕ УПРАВЛЕНИЕ<br></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> </span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип управления </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Электрогидравлическое</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;color:#F58220; font-weight:bold;">ВАЛ ОТБОРА МОЩНОСТИ<br></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> </span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Скорости вращения вала стандарт / опция (об/мин) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">540Е/1000</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:#F58220; font-weight:bold;">ГИДРАВЛИЧЕСКАЯ СИСТЕМА<br></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> </span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Макс. производительность насоса стандарт (л/мин) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">120 с компенсацией  давления и потока (PFC)</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочее давление (бар) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">215</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип управления </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Электронное управление навесным устройством (EHC) с регулировкой жесткости амортизатора</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Макс. грузоподъемность заднего навесного устройства (кг) стандарт </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">8647</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Макс. количество выносных клапанов стандарт </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; color:#F58220; font-weight:bold;">ГАБАРИТЫ<br></span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"> </span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">A: Общая длина (мм)</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4916</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">B: Общая высота (мм) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3100</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">C: Общая ширина (на задних крыльях с удлинением 150 мм) (мм) </span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2682</span></td>
                            </tr>
                            <tr valign="middle">
                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">D: Колесная база (мм) в стандартном исполнении</span></td>
                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2884</span></td>
                            </tr>
                        </table>
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
    </table>
<!-- Третий блок -->

</div>
</body>
</html>






