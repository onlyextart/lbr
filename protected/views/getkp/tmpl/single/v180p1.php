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
                                    <span style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Фронтальный погрузчик Xtreme
                                    </span>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/makers/hydramet.png" width="100" style="border: 0; float: right;" alt="Логотип Mecmar">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/180-extreme/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Преимущества погрузчика Хtreme:
                                                </p>
                                            </td>
                                        </tr>
                                                
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight: bold">1. Меньший расход топлива и меньшая нагрузка погрузчика на передний мост трактора </span>
                                                    благодаря уменьшенной массе погрузчика Хtreme – на 80-100 кг.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight: bold">2. Гидравлика спрятана в раме погрузчика, </span>
                                                    что по-зволяет исключить механические повреждения и прод-лить срок службы.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-2.jpg" width="318" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight: bold">3. Модернизированная опора: </span>
                                                    более устойчивое по-ложение при хранении погрузчика.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-3.jpg" width="318" style="border: 0; " alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                <span style="font-weight: bold">4. Стабильность в работе. </span>
                                                                Боковые стойки снижены
                                                                на 12 см. Благодаря чему увеличен обзор из кабины, а
                                                                также смещен центр тяжести погрузчика, техника работает более стабильно.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                <span style="font-weight: bold">5. Улучшенный обзор: </span>
                                                                на боковых стойках нет троса
                                                                включения распределителя. Боковые стойки с выдвижной системой крепления стрелы.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                <span style="font-weight: bold">6. Улучшенная конструкция. </span>
                                                                Предусмотрено автома-
                                                                тическое устранение зазоров, возникающих в процессе
                                                                работы погрузчика (он не стучит).
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                <span style="font-weight: bold">7. В процессе изготовления применяется только
                                                                роботизированная сварка: </span>
                                                                что продлевает срок службы погрузчика.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px 0px 0px 0px;text-align: center;">
                                                            <img src="http://www.lbr.ru/images/kp/180-extreme/mail-4.jpg" width="298" style="border: 0;" alt="Изображения не отображаются">
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
                    <td style="padding:0px 20px 0px 20px;">
                       <img src="http://www.lbr.ru/images/kp/180-extreme/mail-19.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                     </td>
                </tr>
                <tr>
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="300">
                                     <table width="300" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="50%" align="center" style="border: solid black 1px;background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота подъема</span></strong></td>
                                                        <td width="50%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Грузоподъемность</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">L1 – 2760 mm</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Q1 – 2650 kg</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">L2 – 3618 mm</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Q2 – 2075 kg</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">L3 – 3916 mm</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Q3 – 2150 kg</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">L4 – 4488 mm</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Q4 – 1650 kg</span></td>
                                                    </tr> 
                                                   
                                                </table>
                                </td>
                                <td width="460" valign="top" style="padding:0px 0px 0px 30px; text-align: left;">
                                    <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;color: #DD2A1B; font-size: 16px; text-align: justify; ">
                                        <span style="font-weight:bold;color:black">Цена</span>*<span style="font-weight:bold;color:black">:   </span><?php echo $data['price1']; ?>
                                    </p>
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:15px 20px 0px 20px;">
                       <img src="http://www.lbr.ru/images/kp/180-extreme/mail-20.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                     </td>
                </tr>
                <tr valign="top">
                            <td style="padding: 5px 20px 0px 20px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
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

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td style="text-align: center;">
                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: center; ">
                                        Рабочие органы для любых операций
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="text-align: center; padding: 5px 0px 0px 0px;">
                                   <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                       <tr valign="top">
                                            <td width="190" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-5.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-6.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-7.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                             <td width="190" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-8.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                       </tr>
                                       <tr valign="top">
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                 <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                     Захват для рулонов<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price2']; ?></span>
                                                </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                      Ковш челюстной 3 в 1<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price3']; ?></span>          
                                                 </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Ковш для камней<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price4']; ?></span>            
                                                 </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Вилы для палет<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price5']; ?></span>           
                                                 </p>
                                            </td>
                                       </tr>
                                       
                                       <tr valign="top">
                                            <td width="190" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-9.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="190" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-10.jpg" width="130" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                            <td width="190" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-11.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                             <td width="190" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-12.jpg" width="150" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                       </tr>
                                       <tr valign="top">
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                 <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Вилы для навоза и рулонов соломы<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price6']; ?></span>               
                                                 </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Вилы для палет и рулонов<br><br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price7']; ?></span>           
                                                 </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Вилы для навоза<br>
                                                     с «крокодилом»<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price8']; ?></span>            
                                                 </p>
                                            </td>
                                            <td width="190" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Захват для тюков<br><br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price9']; ?></span>             
                                                 </p>
                                            </td>
                                       </tr>
                                   </table>
                                 </td>
                                </tr>
                                
                                <tr valign="top">
                                <td style="text-align: center; padding: 10px 0px 0px 0px;">
                                   <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                      <tr valign="top">
                                            <td width="253" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-16.jpg" width="160" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="254" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-14.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                            <td width="253" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-15.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                       </tr>
                                       <tr valign="top">
                                            <td width="253" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                 <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Ковш универсальный<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price10']; ?></span>              
                                                 </p>
                                            </td>
                                            <td width="254" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                   Ковш с «крокодилом»<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price11']; ?></span>            
                                                 </p>
                                            </td>
                                            <td width="253" style="text-align: center; padding: 5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                    Ковш для корнеплодов<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price12']; ?></span>          
                                                 </p>
                                            </td>
                                       </tr>
                                       
                                       <tr valign="top">
                                            <td width="253" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-13.jpg" width="150" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="254" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-17.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                            <td width="253" style="text-align: center; padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/180-extreme/mail-18.jpg" width="170" style="border: 0;" alt="Изображения не отображаются">
                                             </td>
                                       </tr>
                                       <tr valign="top">
                                            <td width="253" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                 <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                     Захват челюстной<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price13']; ?></span>            
                                                 </p>
                                            </td>
                                            <td width="254" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                      Ящик для овощей<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price14']; ?></span>        
                                                 </p>
                                            </td>
                                            <td width="253" style="text-align: center; padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: center; ">
                                                      Отвал коммунальный<br>
                                                     <span style="font-weight:bold;color: #DD2A1B;font-size: 12px; ">Цена*:   <?php echo $data['price15']; ?></span>          
                                                 </p>
                                            </td>
                                       </tr>
                                   </table>
                                </td>
                            </tr>
                            <tr valign="top">
                            <td style="padding: 10px 0px 0px 0px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
                            </td>
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


</div>
</body>
</html>





