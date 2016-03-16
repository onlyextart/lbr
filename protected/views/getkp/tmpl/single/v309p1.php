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
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/dorabotka-i-khranenie-zerna/protravlivateli-semjan/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/309-protravl/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </a>
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
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/header1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td valign="top" width="410" style="">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                    Транспортеры загрузки и выгрузки оборудованы
                                                    итальянской цельнотянутой шнековой спиралью,
                                                    предотвращающей защемление, повреждение и
                                                    дробление семян в процессе работы.
                                                </p>
                                            </td>
                                            <td width="350" align="center">
                                               <img src="http://www.lbr.ru/images/kp/309-protravl/2.jpg" width="200" style="border: 0;" alt="Картинки не отображаются"> 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/header2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="35" style="padding:0px 5px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   В случаи остановки протравливателя семена «запираются» в бункере и не высыпаются
                                                   непротравленными в камеру. 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 5px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Большая надежность и долговечность всех узлов машины, благодаря отсутствию
                                                   вибрационных нагрузок. 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 5px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 0px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Стабильность работы протравливателя в автоматическом режиме обеспечивается
                                                   высоконадежными датчиками емкостного типа, не имеющими в своей конструкции
                                                   подвижных частей.
                                                </p>
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                             <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/header3.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                       </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 5px 0px 10px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                           <td width="725" colspan="2" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Экономия до 1 часа сменного времени на промывке системы дозирования и гидрокоммуникаций при
                                                   смене используемого пестицида, благодаря оборудованию протравливателя встроенной системой
                                                   промывки, включающей дополнительный бак для чистой воды, систему запорной арматуры и
                                                   дополнительного рукава.  
                                                </p>
                                            </td>
                                       </tr>
                                        <tr>
                                            <td width="35" style="padding:0px 5px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Система позволяет не утилизировать остатки рабочей жидкости при постановке на
                                                   межсезонное хранение. 
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td width="35" style="padding:0px 5px 5px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/309-protravl/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="725" style="padding:0px 0px 5px 0px;">
                                               <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                   Конструкция протравливателей обеспечивает удобный доступ ко всем узлам при техническом
                                                   обслуживании и ремонте.
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
                    <td style="padding: 10px 0px 5px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/309-protravl/header4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="300" align="center">
                                    <img src="http://www.lbr.ru/images/kp/309-protravl/3.jpg" width="300" style="border: 0;" alt="Картинки не отображаются"> 
                                </td>
                                <td valign="top" width="460" style="padding:0px 0px 0px 20px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        ПС-20 и ПС-5М оборудованы выгрузным
                                        шнеком, который способен выгружать на
                                        высоту до 3,8 м. Это позволяет загружать
                                        протравленные семена напрямую в прицеп
                                        без использования дополнительной
                                        техники.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>      
                <tr>
                    <td style="padding: 10px 0px 5px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/309-protravl/header5.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 5px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                        Протравливатели Ремком, представлены серией из 4 машин с
                                        производительностью от 5 до 22 т/час. Протравливатели в зависимости от
                                        модели могут быть самоходными или ручными. Это позволяет подобрать нужный
                                        агрегат, подходящий под технологию, требования, а самое главное под бюджет.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 5px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#649451" align="center" style="border: 0; border-collapse: collapse; background: #649451;">
                            <tr>
                                <td style="padding:0px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/309-protravl/4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                        Технические характеристики
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
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Наименование параметра</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПС-20</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПС-5</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПС-5М</td>
                                    <td width="15%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПС-5 "Фермер"</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Тип привода основных рабочих органов</td>
                                    <td colspan="4" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Электрический, 380В, 50Гц</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Перемещение протравливателя</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Самопередвижной</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ручное</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Производительность за 1 час (на пшенице), т/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,0 – 22,0</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,0 - 5,0</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,0 - 5,0</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,0 - 5,0</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Емкость бака, л, не менее</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Потребляемая мощность, не более, кВт</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,0</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,5</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price3']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price4']; ?></td>
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
            <!-- Внутренности блока; -->
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
