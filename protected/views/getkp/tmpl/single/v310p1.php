<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
 <div class="table w-800">
<!-- Background grey -->

<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
     <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px 20px;">
                        <img src="http://www.lbr.ru/images/kp/310-korm-premium/header.jpg" width="760" style="border: 0; float: left;">
                    </td>
                </tr>                                
            </table>
        </td>
    </tr>
 </table>                
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               <tr><td style="padding: 0 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify; background-color: #649451;padding:0px 0px 0px 20px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/kosilki/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #FFFFFF;">
                                        КОСИЛКИ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/bellon.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 3px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/kosilki/712-kosilki-bellon-dl/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                КОСИЛКА ДИСКОВАЯ BELLON DL</a>
                            </td>
                            
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/1.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    <tr>
                                        <td style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr>
                                                    <td width="30">
                                                        <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                    </td>
                                                    <td width="340" style="padding:0px 0px 0px 10px;">
                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                            ПОКОС ПО СЛОЖНОМУ ПРОФИЛЮ ПОЛЯ
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="40%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="15%"style="margin: 0; padding: 6px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D3L</td>
                                            <td width="15%"style="margin: 0; padding: 6px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D5L</td>
                                            <td width="15%"style="margin: 0; padding: 6px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D7L</td>
                                            <td width="15%"style="margin: 0; padding: 6px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D8L</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,30</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,05</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,80</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,20</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                                         
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
              <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                КАЧЕСТВЕННОЕ КОШЕНИЕ ВСЕХ ЗЕЛЕНЫХ КУЛЬТУР: <br>
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    конструкция косилки обеспечивает стабильный равномерный срез культуры, скашиваемая масса
                                    не режется дважды при работе. В результате - получаем отличный готовый продукт без потерь и
                                    с минимальной засоренностью.
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
           
            <tr><td colspan="2" style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-top:1px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px; padding-top: 10px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/bellon.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 10px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/kosilki/728-kosilki-bellon-d6000-7000-gm/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                КОСИЛКА ДИСКОВАЯ D 6000-7000 GM С ПЛЮЩЕНИЕМ</a>
                            </td>
                        </tr>
                    </table>
            </td></tr> 
            
             <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/2.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info2']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    <tr>
                                        <td style="padding:5px 0px 0px 0px;">
                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="25%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D 6000 GM</td>
                                            <td width="25%"style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">D 7000 GM</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,40</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,80</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Средняя производительность, га/ч</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,5</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,0</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                                         
                            </td>
                    </tr>
                </table>
              </td></tr> 
            <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr>
                    <td width="30" valign="top">
                        <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                    </td>
                    <td width="340" style="padding:0px 0px 0px 10px;">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                            ГАРАНТИЯ ЗАГОТОВКИ МАКСИМАЛЬНО ЧИСТЫХ КОРМОВ 
                    <span style="font-size: 15px; color: black;font-weight:normal">– режущий аппарат
                        закругленной и уплощенной формы, где
                        ножи вращаются на минимальном
                        расстоянии от верхнего края и от
                        противоножа, что препятствует накоплению
                        примесей в кормах и попаданию земли в
                        скошенную траву.</span>
                </p>
                </td>
                </tr>
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                СОКРАЩЕНИЕ ВРЕМЕНИ СУШКИ КУЛЬТУР С ТОЛСТЫМ СТЕБЛЕМ ПРИ СОХРАНЕНИИ ПИТАТЕЛЬНОЙ
                                ЦЕННОСТИ 
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    обеспечивает конструкция косилки с плющилкой. Плющилка раскрывает наружный
                                    слой стеблей и выпускает из них избыточную влагу, ускоряя процесс сушки, при сохранении
                                    неизменной консистенции и всех питательных веществ. В результате одновременно сушатся и
                                    толстые стебли, и тонкие части зеленого продукта.
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
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
</table>

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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify; background-color: #649451;padding:0px 0px 0px 20px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/valkoobrazovateli/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #FFFFFF;">
                                        ГРАБЛИ И ВАЛКООБРАЗОВАТЕЛИ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/tonutti-logo-big.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 0px 0px 0px 10px;" valign="top">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/372-grabli-kolesno-paltsevye-millennium/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ВАЛКООБРАЗОВАТЕЛЬ MILLENIUM</a>
                            </td>
                            
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/3.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="60%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="40%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Millennium V20-7GW</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих колес, шт</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная ширина захвата, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,7</td>
                                         </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Регулировка ширина валка, см</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-180</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                                         
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
              <tr><td style="padding: 10px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                 ОДНА ИЗ САМЫХ ВЫСОКОПРОИЗВОДИТЕЛЬНЫХ МАШИН В СВОЕМ СЕГМЕНТЕ!<br>
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    Максимальная ширина захвата – до 12 м.
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            <tr><td style="padding: 5px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                ВАЛКООБРАЗОВАТЕЛЬ ОБЕСПЕЧИВАЕТ ВЫСОКОЕ КАЧЕСТВО СБОРА В РЫХЛЫЙ, НЕСКРУЧЕННЫЙ
                                ВАЛОК.
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    Форма пальцев колес обеспечивает контакт с поверхностью поля нескольких пальцев
                                    одновременно, благодаря чему они бережно воздействуют на почву и гарантируют чистоту
                                    сбора продукта.  
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            <tr><td style="padding: 5px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                 ИДЕАЛЬНОЕ ПОВТОРЕНИЕ КОНТУРА ПОЛЯ.
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
           
            
            
            <tr><td colspan="2" style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-top:1px solid black;">
                        <tr>
                            <td style="padding-bottom: 3px; padding-top: 10px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/enorossi.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 10px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <span target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ГРАБЛИ КОЛЕСНО-ПАЛЬЦЕВЫЕ CADDY</span>
                            </td>
                        </tr>
                    </table>
            </td></tr> 
            
             <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td width="320" style="padding: 5px 0 0;">
                                <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/4.jpg" width="320" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info2'] && !empty($data['product_info2'])): ?>
                                    <tr>
                                        <td width="320px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info2']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    
                                </table>
                            </td>
                            <td width="440" style="padding: 5px 0px 0px 10px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td width="30" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:0px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                МАКСИМАЛЬНАЯ ЭФФЕКТИВНОСТЬ СГРЕБАНИЯ<br>
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    достигается благодаря рабочим колесам с
                                                    зубцами особой формы. Зубцы, изготовленные из
                                                    гибкой стали, аккуратно сгребают траву для
                                                    получения однородного и объемного валка, из
                                                    которого легко сформировать ровный компактный
                                                    рулон.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding:5px 0px 0px 0px;" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:5px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                ИДЕАЛЬНОЕ КОПИРОВАНИЕ РЕЛЬЕФА ПОЛЯ.<br>
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    Колесные пары и секции с центральными
                                                    шарнирными соединениями для того, чтобы
                                                    гарантировать идеальную адаптацию пальцевых
                                                    колес к полям с неровным контуром или с
                                                    наклоном, даже на высокой скорости.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                    </tr>
                </table>
              </td></tr> 
            <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td>
                            <table width="560" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="40%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модели</td>
                                            <td width="20%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">CADDY 8</td>
                                            <td width="20%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">CADDY 10</td>
                                            <td width="20%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">CADDY 12</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество колес</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр зубца, mm</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, cm</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">540</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">640</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">740</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, cm</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина валка (min-max) cm</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес,кг</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">600</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">660</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">720</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Колеса</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2(205/70x15)</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2(205/70x15)</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2(205/70x15)</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
            
           
                <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                        </p> 
                    </td>
                </tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->                


            </table>
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
                <!-- Заголовок со ссылкой и логотипом: -->
                
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; width:50px;">
                                <img src="http://www.lbr.ru/images/makers/pronar.jpg" width="50" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 0px 0px 0px 10px;" valign="middle">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/valkoobrazovateli/694-valkoobrazovatel-profiliner-800/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ВАЛКООБРАЗОВАТЕЛЬ ПРОФИЛАЙНЕР 800</a>
                            </td>
                            
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/5.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info3'] && !empty($data['product_info3'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info3']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="60%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="40%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Профилайнер 800</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, мин/макс, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,0/8,0</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина образуемого валка, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,9-1,9</td>
                                         </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр ротора, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,1</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество роторов, шт.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">От 80</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                                         
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
              <tr><td style="padding: 10px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                 НУЖНАЯ ШИРИНА ВАЛКА ПОД ВАШ ПРЕСС-ПОДБОРЩИК.
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    Регулировка рабочей ширины
                                    осуществляется гидравлически в границах 7-8 метров, ширина валка изменяется при этом от 0,9
                                    до 1,9 метров. Это позволяет подобрать оптимальную ширину валка для любого
                                    пресс-подборщика.
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            <tr><td style="padding: 5px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                ИДЕАЛЬНОЕ КОПИРОВАНИЕ РЕЛЬЕФА ДАЖЕ В СЛОЖНЫХ УСЛОВИЯХ БЛАГОДАРЯ СПЕЦИАЛЬНОЙ
                                СИСТЕМЕ ШАССИ ТИПА «ТАНДЕМ».
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    Пневматические копирующие колеса при каждом роторе
                                    позволяют повторять поверхность поля и работать даже на участках с уклоном. 
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
            
            <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify; background-color: #649451;padding:0px 0px 0px 20px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/press-podborshchiki/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #FFFFFF;">
                                        ПРЕСС-ПОДБОРЩИКИ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
            <tr><td colspan="2" style="padding: 0px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; padding-top: 10px; width:70px;">
                                <img src="http://www.lbr.ru/images/makers/feraboli.jpg" width="70" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 10px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <span target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ПРЕСС-ПОДБОРЩИК ENTRY120</span>
                            </td>
                        </tr>
                    </table>
            </td></tr> 
            
             <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td width="320" style="padding: 5px 0 0;">
                                <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/6.jpg" width="320" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info4'] && !empty($data['product_info4'])): ?>
                                    <tr>
                                        <td width="320px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info4']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    
                                </table>
                            </td>
                            <td width="440" style="padding: 5px 0px 0px 10px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td width="30" style="padding:15px 0px 0px 0px;" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:0px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    Результат работы пресс-подборщика –<br>
                                                </span>
                                                ОДНОРОДНЫЕ, ПЛОТНЫЕ РУЛОНЫ БЕЗ ПОТЕРЬ продукта.
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    Качество и плотность рулона обеспечивается благодаря
                                                    количеству вальцов транспортера-33 шт.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding:15px 0px 0px 0px;" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:15px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                В пресс-подборщиках Entry возможно использования
                                                трех типов увязки рулонов:<br>
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    - одна нитка;<br>
                                                    - две нитки;<br>
                                                    - сетка.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                    </tr>
                </table>
              </td></tr> 
            <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="460">
                            <table width="460" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="60%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="40%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Entry 120</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Размер камеры прессования, мм</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1200*диам. 1200</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подборщика</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1850</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество вальцов транспортера, шт.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">33</td>
                                        </tr>
                                         <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </td>
                        <td width="300" style="padding:0px 0px 0px 10px;">
                             <img src="http://www.lbr.ru/images/kp/310-korm-premium/7.jpg" width="273" style="border: 0; float: right;" alt="Картинки не отображаются">
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
            <tr valign="top">
                <td colspan="2" style="padding: 5px 20px 0px 20px;">
                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                        * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                    </p> 
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>

<!-- Блок Третий; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Четвертый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                 <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; width:60px;">
                                <img src="http://www.lbr.ru/images/makers/wolagri.jpg" width="60" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 0px 0px 0px 10px;" valign="top">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/358-press-podborshchiki-columbia/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ПРЕСС-ПОДБОРЩИК С ВЫТАЛКИВАТЕЛЕМ COLUMBIA R10/2000 SUPER</a>
                            </td>
                            
                        </tr>
                    </table>
                </td></tr> 
                <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/8.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info5'] && !empty($data['product_info5'])): ?>
                                    <tr>
                                        <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info5']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>  
                                    </tr>
                                </table>
                            </td>
                            <td style="padding: 5px 0 0;">
                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="65%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="35%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">Columbia R10 Super/2000</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр рулона, см</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина рулона, см</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                         </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подборщика, см</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">193</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">55</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                                         </tr>
                                    </tbody>
                                </table>
                                                         
                            </td>
                    </tr>
                </table>
              </td></tr> 
                       
              <tr><td style="padding: 10px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                 ВЫСОКАЯ ПРОИЗВОДИТЕЛЬНОСТЬ МАШИНЫ
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    благодаря увеличенной плотности прессования,
                                    низкому расположению загребного вала и специального роторного устройства.
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            <tr><td style="padding: 5px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                ВЫРАБОТКА ПРЕСС-ПОДБОРЩИКА:<br>
                                <span style="font-size: 15px; color: black;font-weight:normal">
                                    - при упаковке сеткой до 40-48 рулонов в час!<br>
                                    - при упаковке шпагатом до 27-32 рулонов в час!  
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            <tr><td style="padding: 5px 20px 5px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td width="30">
                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                        <td width="740" style="padding:3px 0px 0px 10px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                 ТЩАТЕЛЬНЫЙ ПОДБОР СКОШЕННОЙ КУЛЬТУРЫ.
                                 <span style="font-size: 15px; color: black;font-weight:normal">
                                     Подбор осуществляется широким
                                     подборщиком с гребенчатым или роторным укладчиком, что улучшает качество сбора
                                     различных видов культур. 
                                </span>
                            </p>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
            
            <tr><td style="padding: 20px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify; background-color: #649451;padding:0px 0px 0px 20px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/obmotchiki-rulonov/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #FFFFFF;">
                                        ОБМОТЧИКИ РУЛОНОВ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            
            <tr><td colspan="2" style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; padding-top: 10px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/machinery.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 10px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/obmotchiki-rulonov/379-obmotchiki-rulonov-savanna-evolution/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                ОБМОТЧИКИ РУЛОНОВ SAVANNA EVOLUTION</a>
                            </td>
                        </tr>
                    </table>
            </td></tr> 
            
             <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td width="320" style="padding: 5px 0 0;">
                                <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/9.jpg" width="320" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info6'] && !empty($data['product_info6'])): ?>
                                    <tr>
                                        <td width="320px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info6']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    
                                </table>
                            </td>
                            <td width="440" style="padding: 5px 0px 0px 10px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td width="30" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:0px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                ПОСЛЕДОВАТЕЛЬНАЯ И БЕРЕЖНАЯ СХЕМА
                                                ОБМОТКИ РУЛОНОВ
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    для сохранения качества
                                                    корма. Конструкция обмотчика с плавным
                                                    переходом позволяет исключить излом рукава при
                                                    соприкосновении с почвой.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="padding:5px 0px 0px 0px;" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:5px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: justify; font-weight:bold;">
                                                БОЛЕЕ ЭФФЕКТИВНАЯ СИСТЕМА ЗАГОТОВКИ
                                                КОРМОВ ПО СРАВНЕНИЮ С ОБМОТКОЙ КАЖДОГО
                                                РУЛОНА ИНДИВИДУАЛЬНО.
                                                <span style="font-size: 15px; color: black;font-weight:normal">
                                                    Упакованные в рукав
                                                    корма сохраняют свои питательные свойства
                                                    длительное время. Пленка плотно облегает
                                                    рулоны, препятствуя проникновению света и
                                                    влаги, что предотвращает порчу корма.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                    </tr>
                </table>
              </td></tr> 
            <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td>
                            <table width="560" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="40%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="30%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">7500-А-230MRC</td>
                                            <td width="30%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">8400-230</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая длина, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр упаковываемого рулона, см</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">До 145</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">До 180</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность двигателя, л.с.</td>
                                            <td colspan="2" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13,5</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Управление обмотчиком</td>
                                            <td colspan="2" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Автоматическое, пультом из
                                            кабины</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price14']; ?></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price15']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
            
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
<!-- Блок Пятый; -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
             <tr><td style="padding: 0 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify; background-color: #649451;padding:0px 0px 0px 20px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/kormozagotovka/pritsepy-dlya-perevozki-tyukov-i-rulonov/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #FFFFFF;">
                                        ТЕЛЕЖКИ</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            
            <tr><td colspan="2" style="padding: 10px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding-bottom: 3px; padding-top: 10px; width:100px;">
                                <img src="http://www.lbr.ru/images/makers/machinery.jpg" width="100" style="border: 0; float: right;" alt="Логотип Unia">
                            </td>
                            <td style="padding: 10px 0px 0px 10px;">
                             <!-- Заголовок -->
                             <a href="http://www.lbr.ru/tehnika/kormozagotovka/pritsepy-dlya-perevozki-tyukov-i-rulonov/382-samozagruzochnye-telezhki-tac-20/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                САМОЗАГРУЗОЧНЫЕ ТЕЛЕЖКИ TAC</a>
                            </td>
                        </tr>
                    </table>
            </td></tr> 
            
             <tr><td style="padding: 0 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td width="320" style="padding: 5px 0 0;">
                                <table width="320" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0;">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/10.jpg" width="320" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                    </tr>
                                    <?php if ($data['product_info7'] && !empty($data['product_info7'])): ?>
                                    <tr>
                                        <td width="320px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info7']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php endif; ?>    
                                    
                                </table>
                            </td>
                            <td width="440" style="padding: 5px 0px 0px 10px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td width="30" valign="top">
                                            <img src="http://www.lbr.ru/images/kp/310-korm-premium/marker.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                        </td>
                                        <td width="400" style="padding:0px 0px 0px 10px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #649451; text-align: left; font-weight:bold;">
                                                КОНСТРУКЦИЯ ТЕЛЕЖКИ ПОЗВОЛЯЕТ
                                                ЗАГРУЖАТЬ РУЛОНЫ С ЛЮБОЙ СТОРОНЫ.<br><br>
                                                <span style="font-size: 15px; color: black;font-weight:normal;">
                                                    • Загрузочная вилка поднимает рулон,
                                                    переворачивает его и размещает на тележке.<br><br>
                                                    • Для разгрузки рама поднимается при помощи
                                                    гидравлической системы, а устройство для
                                                    передвижения рулонов разгружает тележку.
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                    </tr>
                </table>
              </td></tr> 
            <tr><td style="padding: 5px 20px 10px 20px; ">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td>
                            <table width="560" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="50%" style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-clip:padding-box;">Модель</td>
                                            <td width="50%"style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip:padding-box;">TAC-20</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,36</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, кг</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18 144</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Клиренс, м</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,2</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость (ширина рулона)</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20 шт.(1,2м)/17 шт.(1,5м)</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требования к трактору</td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3 гидравлических выхода</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 6px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price16']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </td>
                    </tr> 
                </table>
            </td></tr> 
            
           
            <tr valign="top">
            <td  style="padding: 5px 20px 0px 20px;">
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

</div>
</body>
</html>
