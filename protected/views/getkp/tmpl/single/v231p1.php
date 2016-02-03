<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):?>
    <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link href="http://www.lbr.ru/css/printKp.css" type="text/css" rel="stylesheet" />
    <style>
        p{mso-line-height-rule:exactly !important; line-height: 13pt;}
        a, a:active, a:visited{color:black;}
    </style>
</head>
<body style="background: white; margin: 0; padding: 0; border: 0;">
    <table width="800" bgcolor="white" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr>
                        <td style="padding-left: 20px; width: 800px;">
                            <div class="header-text">
                                <?php echo $data['header']; ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php endif;?>
<div class="w-800" style="margin:0 auto;">               
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>                       
            <img src="http://www.lbr.ru/images/kp/231-mecmar/mail-1.jpg" width="800" style="border: 0; float: left;" alt="Изображения не отображаются">
         </td>
    </tr>
</table>
</div>
<!-- Второй блок -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                
                                <td style="padding-bottom: 3px; text-align: right;" align="left" width="130">
                                    <img src="http://www.lbr.ru/images/kp/179-mecmar/mecmar.jpg" width="100" style="border: 0; float: left;" alt="Логотип Mecmar">
                                </td>
                                <td valign="bottom" width="630">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/dorabotka-i-khranenie-zerna/mobilnye-zernosushilki/635-mobilnye-zernosushilki-mecmar/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Мобильные зерносушилки Mecmar
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
        
                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="238" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/231-mecmar/mail-2.jpg" width="238" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                        <td style="padding:0px 0px 0px 0px;">
                                            <table width="238" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="518" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:40px 0px 3px 20px;">
                                                <table width="498" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td width="55%" align="left" style="border: solid black 1px; padding:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                        <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>13/119 Т</span></strong></td>
                                                        <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>20/153 Т</span></strong></td>
                                                        <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>25/210 Т2</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Емкость камеры сушки, куб.м.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">17</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">27</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">34</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Емкость камеры сушки, т</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">13</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">20</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">25</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Требуемая мощность электродвигателя, кВт</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">37</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Производительность - с 20% до 15%, куб.м./сутки</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">167</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">218</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">284</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Время загрузки / разгрузки, ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,22/0,22</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,3/0,3</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,43/0,43</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Сетка</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5; 2,5</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Требуемая мощность ВОМа трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50-70</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70-75</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">75-85</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="padding:0px 0px 0px 0px;">
                                                        <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
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
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:20px 20px 0px 20px;">                       
                        <img src="http://www.lbr.ru/images/kp/231-mecmar/mail-3.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                    </td>
                </tr>




            </table>



        </td>
    </tr>


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
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                
                                <td style="padding-bottom: 3px; text-align: right;" align="left" width="60">
                                    <img src="http://www.lbr.ru/images/makers/JM-for-site.jpg" width="40" style="border: 0; float: left;" alt="Логотип JM">
                                </td>
                                <td valign="middle" width="700">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/selkhoz-pritsepy-i-peregruzchiki/pritsepy-peregruzchiki-zerna-i-udobrenij/623-bunkery-peregruzchiki-j-m/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Бункер-перегрузчики J&M
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
            
                    <tr><td style="padding:3px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                
                                <td >
                                    <img src="http://www.lbr.ru/images/kp/231-mecmar/mail-4.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
            
            <tr>

            <td style="padding:0px 20px 0px 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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
            </td></tr>
                
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="color:#F58220; font-weight: bold;">• Простота и долговечность. </span>Один шнек и
                                                    редуктор с прямой передачей и усиленной
                                                    трансмиссией. В сравнение с двухшнековыми
                                                    конструкциями здесь отсутствуют дополнительные зубчатые, цепные или ременные
                                                    передачи. Конструкция бункера обеспечивает
                                                    максимально полную разгрузку при остатке
                                                    5—6 кг.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                       
                                    </table>
                                </td>
                                <td  style="padding:0px 0px 0px 40px" valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="362" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                       
                                        <tr>
                                            <td style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="color:#F58220; font-weight: bold;">• Богатая стандартная комплектация:</span><br>
                                                    -весы;<br>
                                                    -тент;<br>
                                                    -управляемый из кабины козырек шнека;<br>
                                                    -удлинитель шнека для работы с посевным комплексом.
                                                </p>
                                                <p style="margin-top:5px; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="color:#F58220; font-weight: bold;">• Универсальность! </span>
                                                    Перегрузка + загрузка посевных комплексов.
                                                </p>

                                            </td>
                                        </tr>
                                       
                                        
                              </table>
                    </td>
                </tr>
                
                <tr valign="top">
                    <td colspan="2" style="padding:0px 0px 0px 0px;">
                    
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="3px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="40%" align="left" style="border: solid black 1px; padding:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Тип</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">J&M 818</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">J&M 1118</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Общая вместимость, куб.м.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30,84</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40,5</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Диаметр шнека, см</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">45,7</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">45,7</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Скорость выгрузки, куб.м. /мин</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">15,4</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">14,5</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Масса порожнего прицепа, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4 185</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6 525</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Масса порожнего прицепа на сцепке, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">600</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1 300</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Масса полностью груженого прицепа на сцепке, кг</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1757</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1 900</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Давление, оказываемое на почву, кг/кв.см.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1,5</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price4']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price5']; ?></span></td>
                                         </tr>
                                    </table>
                               </td></tr>
                               <tr valign="top">
                                   <td colspan="2" style="padding:0px 0px 0px 0px;">
                                        <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                            * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                                        </p> 
                                  </td>
                             </tr>
                            
                
                
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            if ($data['show_footer'] == '1' || !isset($data['print_footer'])):
                Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
            endif;
            ?>
        </td>
    </tr>

</table>
</td>
</tr>
</table>

<!-- Третий блок -->

</div>
<!-- Закрывающий тег ОБЯЗАТЕЛЬНЫЙ -->
</body>
</html>





