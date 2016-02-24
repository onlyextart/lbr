<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/296-kaddi/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </span>
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
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-right:0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    V-образные грабли Caddy имеют простую конструкцию, которая обеспечивает снижение полмок 
                                                    до минимума. Благодаря широкой рабочей части и низкому центру тяжести обеспечивется 
                                                    хорошая и безопасная работа граблей даже на склонах и на холмистой местности.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff; border-bottom: 2px dashed #999897;">
                                        <tr>
                                            <td width='380' style="padding:0px 20px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/296-kaddi/marker.jpg" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width='380' style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/296-kaddi/marker.jpg" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                        <td width='380' valign='top' style="padding:0px 20px 10px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Идеальное копирование рельефа поля.<br>
                                                   Колесные пары и секции с центральными
                                                   шарнирными соединениями для того, чтобы
                                                   гарантировать идеальную адаптацию пальцевых 
                                                   колес к полям с неровным контуром или
                                                   с наклоном, даже на высокой скорости.
                                                </p>
                                            </td>
                                            <td width='380' valign='top' style="padding:0px 0px 10px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    Максимальная эффективность сгребания
                                                    достигается благодаря рабочим колесам с
                                                    зубцами особой формы. Зубцы, изготовленные 
                                                    из гибкой стали, аккуратно сгребают
                                                    траву для получения однородного и объемного 
                                                    валка, из которого легко сформировать 
                                                    ровный компактный рулон. 
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; text-align:left; color: red;font-weight: bold;line-height:20px;text-decoration: underline; ">
                                                    ОСОБЕННОСТИ КОНСТРУКЦИИ:
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px dashed #999897;">
                                        <tr>
                                            <td rowspan="2" width="380" style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/296-kaddi/2.jpg" width="380" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="380" style="padding:0px 0px 10px 20px;">
                                               <img src="http://www.lbr.ru/images/kp/296-kaddi/header1.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                                             </td>
                                       </tr>
                                       <tr>
                                            <td width="380" style="padding:0px 0px 10px 20px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Грабли имеют два действующих гидравлических 
                                                   цилиндра для поднятия граблей 
                                                   в транспортное положение и для
                                                   опускания в рабочее положение. Рабочая ширина 
                                                   регулируется вручную.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                             <td width="380" style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/296-kaddi/header2.jpg" width="380" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td rowspan="2" align="center" width="380" style="padding:0px 0px 0px 20px;">
                                               <img src="http://www.lbr.ru/images/kp/296-kaddi/3.jpg" width="320" style="border: 0; " alt="Картинки не отображаются"> 
                                             </td>
                                       </tr>
                                        <tr>
                                            <td width="380" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   для осуществления оборота валка в «мертвой
                                                   зоне», чтобы получить более воздушный
                                                   валок и уменьшить время сушки. Два колеса
                                                   отдельно установлены вместе на одной вращающейся 
                                                   граблине для адаптации к контурам почвы.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
 </table>
</td></tr></table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
   <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 5px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px dashed #999897;">
                            <tr>
                                <td rowspan="2" width="380" align="center" style="padding:0px 0px 10px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/4.jpg" width="260" style="border: 0;" alt="Картинки не отображаются">
                                </td>
                                <td width="380" valign="top" style="padding:0px 0px 10px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/header3.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                                </td>
                            </tr>
                            <tr>
                                <td width="380" valign="top" style="padding:0px 0px 10px 20px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        позволяет пальцевым колесам идеально
                                        работать на любой поверхности и с любым
                                        продуктом. Помимо этого отверстия в креплении позволяют менять рабочий угол.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px dashed #999897;">
                            <tr>
                                <td width="380" valign="top" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/header4.jpg" width="380" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td rowspan="2" width="380" style="padding:0px 0px 10px 20px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/5.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                                </td>
                            </tr>
                            <tr>
                                <td width="380" valign="top" style="padding:0px 0px 10px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Опоры для крепления колёс и консоль для
                                        крепления рам закреплены болтами к основной
                                        раме, позволяя оператору легко осуществлять
                                        монтаж граблей в рабочее положение.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                 <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                   <img src="http://www.lbr.ru/images/kp/296-kaddi/header5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 20px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 20px; text-align:left; color: red;font-weight: bold;line-height:20px;text-decoration: underline; ">
                                        6 ОТЛИЧНЫХ ПРИЧИН ВЫБРАТЬ ГРАБЛИ CADDY:
                                    </p>
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
                <tr>
                    <td style="padding: 5px 20px 20px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="30" style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n1.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        НИЗКИЕ ЭКСПЛУАТАЦИОННЫЕ РАСХОДЫ
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        простое конструктивное решение
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        отсутствие карданных валов
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        отсутствие механических трансмиссий
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" style="padding:5px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n2.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:5px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        ВЫСОКОПРОИЗВОДИТЕЛЬНЫЕ МАШИНЫ
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        большая скорость работы, в отличие от машин, приводящихся в действие ВОМом
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        рабочая скорость не зависит от скорости вращения карданного вала
                                    </p>
                                </td>
                            </tr>
                             <tr>
                                <td width="30" style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n3.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:10px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        ЧИСТЫЕ ВАЛКИ
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        уменьшение загрязнения почвы
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        регулируемое давление на почву
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        работая независимо друг от друга, колеса прекрасно адаптируются к контуру почвы
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n4.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:10px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        ОПТИМАЛЬНОЕ ЗАГРЕБАНИЕ ПРОДУКТА
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        пальцевые колеса деликатно загребает продукт, не отделяя листья, которые содержат большую часть питательных ценностей корма.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n5.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:10px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        НИЗКОЕ ПОТРЕБЛЕНИЕ ТОПЛИВА
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        при использовании тракторов с низким потреблением мощности значительно
                                        уменьшается расход топлива, уменьшая расход топлива, увеличивается прибыль
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        значительное уменьшение загрязнения атмосферы
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/296-kaddi/n5.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="730" style="padding:10px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: #45b759;line-height:20px;font-weight:bold; ">
                                        НИЗКОЕ ПОТРЕБЛЕНИЕ МОЩНОСТИ
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="30" valign="top" align="center" style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:center; color: black;line-height:20px;font-weight:bold; ">
                                        •
                                    </p>
                                </td>
                                <td width="730" style="padding:0px 0px 0px 5px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px;font-weight:normal; ">
                                        тракторы с низким потреблением мощности могут буксировать грабли больших
                                        размеров
                                    </p>
                                </td>
                            </tr>
                         </table>
                     </td>
                </tr>
              
                
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
   </table>
<!-- Блок Второй; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
   <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               <tr>
                    <td style="padding: 10px 20px 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color: black;line-height:20px; ">
                                        ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ CADDY
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                <td  align="center" style="padding: 0px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="410" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #b1b0b0;">Технические характеристики</td>
                                    <td width="150" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; background-color: #b1b0b0;">CADDY 8</td>
                                    <td width="150" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #b1b0b0;">CADDY 10</td>
                                    <td width="150" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #b1b0b0;">CADDY 12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Количество колес</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Диаметр зубца, mm</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Рабочая ширина, cm</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">540</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">640</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">740</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Транспортная ширина, cm</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина валка (min-max) cm</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Вес,кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">600</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">660</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">720</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Колеса</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 (205/70x15)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 (205/70x15)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 (205/70x15)</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
               
                <tr valign="top">
                    <td style="padding: 5px 20px 20px 20px;">
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
   </table>
<!-- Блок Третий; -->

</div>
</body>
</html>


