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
                <!-- Заголовок со ссылкой и логотипом: -->
                
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 5px 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 24px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        КОСИЛКИ, СИЛОСОРЕЗКИ</a>
                                    </a>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 5px 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        1. Косилка дисковая Bellon DL</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/uploaded/bellon-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0;">
                                               <img src="http://www.lbr.ru/images/kp/116-all/korm-all-1.jpg" width="370" style="border: 0; float: left;" alt="Логотип Expom">
                                            </td>
                                        </tr>                                                                                      
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 5px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="width: 333px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; ">Покос даже по сложному профилю поля.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="width: 333px; padding: 10px 0 0 35px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Качественное кошение всех зеленых культур:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="width: 333px; padding: 0 0 0 35px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                    конструкция косилки обеспечивает стабильный равномерный срез культуры, скашиваемая масса не режется дважды при работе. 
                                                    В результате получаем отличный готовый продукт без потерь и с минимальной засоренностью.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0; text-align: center;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL5</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">DL8</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,30</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,05</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,80</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,20</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                </tr>
                               
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                </tr>                                
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>  
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 5px 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        2. Косилка дисковая Bellon D 6000-7000 GM c плющением</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/uploaded/bellon-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0;">
                                               <img src="http://www.lbr.ru/images/kp/116-all/korm-all-2.jpg" width="500" style="border: 0; float: left;" alt="Логотип Expom">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 15px 0 0 0;">
                                               <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tbody>
                                                    <tr>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">D 6000 GM</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">D 7000 GM</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,40</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,80</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                                    </tr>                                
                                                    <tr>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                                        <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>                                                                                      
                                    </table>
                                </td>
                                <td>
                                    <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Гарантия заготовки максимально чистых кормов</span>
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                    – режущий аппарат закругленной и уплощенной формы, где ножи вращаются на минимальном расстоянии от верхнего края и от противоножа, что препятствует накоплению примесей в кормах и попаданию земли в скошенную траву.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Сжимание и растрескивание скошенной травы с помощью плющилки:</span>
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                    раскрывает наружный слой стеблей и выпускает из них избыточную влагу, ускоряя процесс сушки, при сохранении неизменной консистенции и всех питательных веществ.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>                               
                                </td>
                            </tr>                             
                        </table>
                    </td></tr>  
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
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
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr><td style="padding: 0 20px 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 5px 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        2. Косилка дисковая Bellon D 6000-7000 GM c плющением</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/uploaded/bellon-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-3.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">В работе не нужен второй трактор</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        – измельченная массы из силосорезки подается на прицеп, который может быть закреплен за силосорезкой с помощью зацепа (в стандартной комплектации). 
                                                                        Однако есть возможность загружать и прицепы, следующие рядом и агрегатированные с другим трактором.
                                                                    </p>
                                                                </td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Евро-КИР 1,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">650</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1, 5</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Скорость оборотов ВОМ, об./мин</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Скорость оборотов ротора, об./мин</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1430</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество ножей, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость, км/ч</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, кВт/л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45/60</td>
                                                                        </tr>                               
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        ВАЛКООБРАЗОВАТЕЛИ</a>
                                    </a>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        1. Валкообразователь TCR 8</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/tonutti-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-4.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 5px 0 0;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; ">Оптимальное загребание продукта.</span>
                                                                    </p>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; ">Качественные валки.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                                           
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Пальцевые колеса</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        деликатно загребают зеленую массу, не отделяя листья, которые содержат большую часть питательных ценностей корма. 
                                                                        В результате сгребания получаем однородный и объемный валок, из которого легко сформировать ровный компактный рулон.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Возможность переворачивания валка для просушки.</span>
                                                                    </p>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Любая из сторон машины может быть заблокирована в транспортировочном положении для работы только одной стороной граблей.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Регулировка ширины валка под любой пресс-подборщик</span>
                                                                    </p>
                                                                    
                                                                </td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td style="padding: 0 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">TCR 8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество колес</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр колес, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 480 до 570</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина валка, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 90 до 210</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с. (кВт)</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30 (22,4)</td>
                                                                        </tr>                               
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        2. Валкообразователь Raptor</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/tonutti-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-5.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>                                                                           
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        В отличие от отечественных моделей ступица колеса</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">вращается на двух подшипниках</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        , а не на капроновых втулках.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Вертикальное расположение рабочего колеса на независимой подвеске –</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; "> копирование рельефа почвы и качественный сбор травы.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Зубья особой изогнутой формы из качественной пружинной стали –</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; "> работа на кручение в двух плоскостях без поломок даже при попадании камней.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">V12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,73</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих колес</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость, км/ч</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 20</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30</td>
                                                                        </tr>                                                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr> 
                                    </table>
                                </td></tr> 
                        </table>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
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
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr><td style="padding: 0 20px 10px 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 0 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        3. Валкообразователь Millenium</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/uploaded/bellon-logo.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-6.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Одна из самых высокопроизводительных машин в своем сегменте!</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Рекомендуемая рабочая скорость – 22 км/ч!
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Низкое потребление мощности по сравнению с роторными граблями.</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        <b>11,7 м - идеально для МТЗ 82!</b>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Идеальное копирование рельефа поля.</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Отсутствие запутывания зеленой массы на колес машины.
                                                                    </p>
                                                                </td>
                                                            </tr>                                                           
                                                            <tr>
                                                                <td style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 207px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Millennium V20-7GW</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих колес, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная ширина захвата, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,7</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Регулировка ширины валка, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-180</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                                                                        </tr>                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        4. Валкообразователь ПРОФИЛАЙНЕР 380</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/famarol-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-7.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 5px 0 0 0;">
                                                                   <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Профилайнер 380</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">340</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество граблин на роторе</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                                                        </tr>                               
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>                                                                            
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Формирование правильного валка</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; ">
                                                                        – залог получения в дальнейшем плотного рулона, который способен храниться длительное время.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        На роторе валкообразователя размещены 45 двойных сгребающих пальца специальной формы (по 5 на 9 штангах), 
                                                                        что обеспечивает очень чистое и точное сгребание (без остатков в углублениях почвы), а валок формируется с высокой степенью точности. 
                                                                        Качественный плотный валок позволяет полноценно загрузить пресс-подборщик, увеличивая его производительность.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">9 метров сенокоса в один валок!</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Профилайнер 380 образует ровный и непрерывный валок с левой стороны по ходу движения трактора. 
                                                                        При работе челночным ходом валок формируется в два прохода с ширины 9-9,5 метра.</span>
                                                                    </p>
                                                                </td>
                                                            </tr> 
                                                                                                                     
                                                                      
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        5. Валкообразователь ПРОФИЛАЙНЕР 800</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/uploaded/Pronar.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-8.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 15px 0 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Бережное перемещение зеленой массы по всей рабочей ширине граблей.</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Не повреждаются листья бобовых культур.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                                            
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 5px 0 15px;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: #808285; ">Широко сгребает на большой скорости и идеально укладывает.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Валкообразователь состоит из двух роторов с рабочим диаметром 3,1 м на общей несущей раме. 
                                                                        Собственное шасси типа „тандем” и соединение с рамой при помощи крестообразной шарнирной системы гарантирует идеальное копирование поверхности даже в самых сложных условиях, а также высокую рабочую скорость.</span>
                                                                    </p>
                                                                </td>
                                                            </tr> 
                                                            <tr>
                                                                <td colspan="2" style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Профилайнер 800</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, мин/макс, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,0/8,0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина образуемого валка, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,9 – 1,9</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр ротора, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,1</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество роторов, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                                                        </tr>  
                                                                         <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество штанг на роторе, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11</td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td style="margin: 0; padding: 3px 0 0 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во пружинных зубьев на штанге</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4 шт</td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 80</td>
                                                                        </tr>                                                                                                     
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr> 
                                    </table>
                                </td></tr>           
                            
                        </table>
                        <!-- Внутренности блока; -->
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
<!-- Блок Четвертый; -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 0 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        6. Валкообразователь RCS</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/tonutti-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-9.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 0 0 0;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 10px 0 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; ">Универсальны в качественной работе с любым типом продукта и видом травы.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>   
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Варианты регулирования рабочего положения машины под конкретную задачу на поле:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>    
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        В конструкции валкообразователя RCS используется одиночный действующий гидравлический цилиндр для поднятия граблей в рабочее положение из кабины трактора. 
                                                                        При необходимости любая сторона может быть заблокирована в транспортном положении для работы только одной стороной граблей (дополнительный комплект).</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td style="padding: 0 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">RCS 12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих колес, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во зубцов в колесе</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, кВт (л.с.)</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">19 (25)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина при транспортировке, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px 10px 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 15px 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        7. Роторные грабли-ворошилки ЕвроГВР-6</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-10.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 0 0 0;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 10px 0 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: #808285; ">Расширенные технологические возможности граблей благодаря изменению направления вращения роторов в работе.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>   
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; ">
                                                                       Выполняемые операции:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                       сгребание в валки, ворошение, переворачивание валков, сдваивание валков, разбрасывание валков.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>    
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Машина отлично справляется со сгребанием и ворошением даже плотной зеленой массы.</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Это особенно актуально при работе с намокшей травяной массой, что ускоряет процесс сушки и способствует получению качественного корма.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                      
                                                            <tr>
                                                                <td style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ЕвроГВР-6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина валка, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,4</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость, км/ч</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Число роторов, шт.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price14']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        ПРЕСС-ПОДБОРЩИКИ</a>
                                    </a>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        1. Пресс-подборщик рулонный Колумбия Р10</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/307_1340614499.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 5px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-11.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                                                                                                    
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Заготовка одной универсальной машиной всех видов кормов</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        – упаковка как сухого, так и влажного продукта.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Подтвержденная фактами производительность:</span>
                                                                    </p>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        40 рулонов в час! 1 рулон за 1,5 минуты!</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                           <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Плотность прессования в 2 раза выше</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        чем у отечественных аналогов.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td style="padding: 0 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Колумбия Р10 Парма</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Колумбия Р10 Рио</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр рулона, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина рулона, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подборщика, см</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">162</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">193</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Система подачи</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">укладчик с возвратно-поступающим движением</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">роторный укладчик</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                                                        </tr>                               
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price15']; ?></td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price16']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                    </table>
                                </td></tr>           
                            
                        </table>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                </table>
             </td>
                </tr>
</table>
<!-- Блок Четвертый; -->
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
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr><td style="padding: 0 20px 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 0 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        2. Пресс-подборщик тюковый Z-511</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/famarol-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-12.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 0 0 0;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: #808285; ">Прямоугольные тюки – качественно спрессованный продукт; удобство хранения и использования.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>   
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; ">
                                                                        Формирование нужного вам тюка простой регулировкой:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       Длина тюка регулируется бесступенчато от 0,3 до 1,3 м. 
                                                                       Такие небольшие тюки удобно транспортировать на место хранения с поля.
                                                                    </li>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       Также бесступенчато регулируется и плотность прессования.
                                                                    </li>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Опционально возможна установка системы направляющих, которая позволяет грузить тюки в прицеп.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>                                                       
                                                            <tr>
                                                                <td style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Z-511</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подбора, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,85</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина тюка, м</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,3-1,3</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30</td>
                                                                        </tr>                                                                         
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price17']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 0 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        3. Пресс-подборщик рулонный COLUMBIA SUPER</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/307_1340614499.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-13.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                              
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 10px 0 0 15px;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 10px 0 0 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: italic; color: #808285; ">Повышенная производительность благодаря увеличенной плотности прессования и низким расположением загребного вала и специального роторного устройства.</span>
                                                                    </p>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">
                                                                        Выработка пресс-подборщика:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       При упаковке сеткой - <b>40-48 рулонов в час!</b>
                                                                    </li>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       При упаковке шпагатом - <b>27-32 рулонов в час!</b>
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Подбор скошенной культуры максимально тщательно и аккуратно.</span>
                                                                        
                                                                    </p>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        Подбор осуществляется широким подборщиком с гребенчатым или роторным укладчиком, что улучшает качество сбора различных видов культур.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>                               
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                <td colspan="2" style="padding: 0; text-align: center;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">COLUMBIA R12 SUPER</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">COLUMBIA R10 SUPER/2000</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">COLUMBIA R12 SUPER/2000</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">370</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">340</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">370</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">224</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">224</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">224</td>
                                </tr>
                               
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">218</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">195</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">228</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Треб. мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">50</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">55</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">60</td>
                                </tr> 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Размер рулона, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">диам. 155х120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">диам. 120х120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">диам. 155х120</td>
                                </tr> 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Подборщик, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">162</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">193</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">193</td>
                                </tr>                                 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price18']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price19']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price20']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                </td>
                            </tr>                             
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        ПРЕСС-ПОДБОРЩИКИ</a>
                                    </a>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        1. Обмотчик рулонов FW 36</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/307_1340614499.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-14.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                                                                                                    
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Загрузка и обмотка рулонов без остановок</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        – прицепная конструкция с боковой загрузкой. 
                                                                        Контроль и управление работой производится непосредственно из кабины трактора, что позволяет экономить время оператора.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Результат работы машины – идеально упакованный в пленку рулон для длительного хранения:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                           <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        возможность обмотки пленкой шириной 500 или 750 мм
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        возможность регулировать предварительное натяжение при помощи трех вальцов-натяжителей.
                                                                    </li>
                                                                </td>
                                                            </tr>                                                              
                                                            <tr>
                                                                <td style="padding: 5px 0 0 15px;">
                                                                   <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 0 0 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 260px; background: #d1d3d4;">Модель</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">FW 36</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Макс. размер рулона (ширина и диаметр)</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120 х 160 см</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Система разгрузки рулона</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">задняя</td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35</td>
                                                                        </tr>                        
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price21']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </td>
                                                            </tr>           
                                                        </table>                               
                                                    </td>
                                                </tr>                             
                                            </table>
                                        </td></tr>
                                    </table>
                                </td></tr>          
                            
                        </table>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                </table>
             </td>
                </tr>
</table>
<!-- Блок Пятый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Шестой; -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr><td style="padding: 0 20px 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 0 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        2. Обмотчик рулонов SAVANNA EVOLUTION</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/307_1340614499.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-15.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                              
                                                                                                                                       
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td style="width: 30px; padding: 0 0 0 15px;">
                                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                                <td style="width: 333px; padding: 0; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; ">Последовательная и бережная схема обмотки рулонов для сохранения качества корма.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="padding: 0;">
                                                            <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                               
                                                                <td style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">
                                                                        Обмотка пленкой в плотный качественный рулон</span>
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                                        – всех модели обмотчиков Savanna Evolution оснащены двумя высококачественными натяжными роликами с постоянным 55%-ным натяжением пленки.</span>
                                                                    </p>
                                                                </td>
                                                                 <td style="padding: 0 0 0 15px;">
                                                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-16.jpg" width="170" style="border: 0; float: left;" alt="Стрелка вправо">
                                                                </td>
                                                            </tr> 
                                                            </table>
                                                            </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">
                                                                        1 катушка пленки на 50 рулонов!</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>                               
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                <td colspan="2" style="padding: 0; text-align: center;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7500-230</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7500-А-230MRC</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8400-230</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая длина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,86</td>
                                </tr>
                               
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,86</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр упаковываемого рулона, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 145</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 145</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 180</td>
                                </tr> 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность двигателя, л.с.</td>
                                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13,5</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Управление обмотчиком</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">механическое</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">автоматическое, пультом из кабины трактора</td>
                                </tr>                                 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price22']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price23']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price24']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                </td>
                            </tr>                             
                                            </table>
                                        </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 5px 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        Всегда в наличии все материалы для кормозаготовки</a>
                                    </a>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;">
                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-17.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid #f58220;">
                            <tr>
                                <td style="padding: 0;">
                                    <p style="font-size: 20px; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220;">
                                        Работаем вместе!</p>
                                    <p style="font-size: 20px; font-family: 'Arial Black', Arial; text-decoration: none; color: #f58220; line-height: 3px;">
                                        Машины-помощники для заготовки кормов.</p>
                                </td>                                
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding: 0 0 3px 0;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        1. Погрузчик навесной ТУР</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 0; vertical-align: middle;">
                                    <img src="http://www.lbr.ru/images/makers/spectrukagro1.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                    <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td colspan="2" style="padding: 10px 0 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-18.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>
                                                                                                                                    
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        Итальянская гидравлика и фурнитура
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        Трансформация «трактор-погрузчик-трактор» за 20 минут!
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        10 лет на рынке России! Ежегодный объем продаж до 500 шт. 
                                                                        Уже 3 500 довольных клиентов в 55 регионах России!
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        Срок службы 10-15 лет.
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 5px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; ">Рабочие органы для заготовки кормов:</span>
                                                                    </p>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                            <td style="padding: 0 0 0 15px;">
                                                            <table width="365">
                                                                <tr>
                                                                    <td>
                                                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-19.jpg" width="80" style="border: 0; float: left;" alt="Логотип Expom">
                                                                    </td>
                                                                    <td>
                                                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-20.jpg" width="80" style="border: 0; float: left;" alt="Логотип Expom">
                                                                    </td>
                                                                    <td>
                                                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-21.jpg" width="80" style="border: 0; float: left;" alt="Логотип Expom">
                                                                    </td>
                                                                    <td>
                                                                    <img src="http://www.lbr.ru/images/kp/116-all/korm-all-22.jpg" width="80" style="border: 0; float: left;" alt="Логотип Expom">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: center; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 10px; color: black; ">Захват для рулонов (1 или 2 цилиндра)</span>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: center; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 10px; color: black; ">Вилы для навоза и рулонов соломы</span>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: center; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 10px; color: black; ">Вилы для палет и рулонов</span>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; color: black; text-align: center; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 10px; color: black; ">Захват для тюков</span>
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
                                <td colspan="2" style="padding: 0; text-align: center;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ТУР-14</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ТУР-15</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ТУР-16</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">ТУР-17</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">850</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 500</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 700</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 350</td>
                                </tr>                                                     
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price25']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price26']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price27']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price28']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                </td>
                            </tr>                                          
                                            </table>
                                        </td></tr>
                                    </table>
                                </td></tr> 
                        </table>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                </table>
             </td>
                </tr>
</table>
<!-- Блок Шестой; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Седьмой; -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->               
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr><td style="padding: 0 20px 10px 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                                <tr>
                                                    <td style="padding: 15px 0 3px 0;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/345-seyalki-yp-2425/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        2. Тележки для перевозки рулонов LMR</a>
                                                    </a>
                                                    </td>
                                                    <td style="padding-bottom: 0; vertical-align: middle;">
                                                        <img src="http://www.lbr.ru/images/makers/lmr-azene-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td></tr>
                                        <tr><td style="padding: 0 20px;">
                                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                
                                                <tr valign="top">
                                                    <td style="padding: 0;">
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr>
                                                                <td style="padding: 0;">
                                                                   <img src="http://www.lbr.ru/images/kp/116-all/korm-all-23.jpg" width="380" style="border: 0; float: left;" alt="Логотип Expom">
                                                                </td>
                                                            </tr>                                                                
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">
                                                                        Универсальная телега для выполнения работ в любой сезон:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       вывоз рулонов с поля к месту хранения;
                                                                    </li>
                                                                </td>
                                                            </tr> 
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       транспортировка зеленой массы;
                                                                    </li>
                                                                </td>
                                                            </tr> 
                                                             <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 30px; vertical-align: middle;">
                                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                       перевозка сельскохозяйственной техники в межсезонье.
                                                                    </li>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 10px 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">
                                                                        Возможны два варианта исполнения платформы:</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr valign="top">
                                                                <td colspan="2" style="width: 333px; padding: 0 0 0 15px; vertical-align: middle;">
                                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: black; ">
                                                                        прямая и с уклоном.</span>
                                                                    </p>
                                                                </td>
                                                            </tr>  
                                                        </table>                               
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0; text-align: center;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                    <td width="25%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">LMR-14S</td>
                                    <td width="35%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">LMR-14R</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, т</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">14</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3550</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3750 прямая / 3900 с уклоном</td>
                                </tr>
                               
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Размеры платформы: длина(мм) x ширина(мм)</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9000 x 2500</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6060 прямая / 6500 с уклоном x 2450</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td colspan="2" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-130</td>
                                </tr>                          
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price29']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price30']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                </td>
                            </tr>                             
                                            </table>
                                        </td></tr>
                                    </table>
                                </td></tr>           
                            
                        </table>
                        <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
                </table>
             </td>
                </tr>
</table>
<!-- Блок Седьмой; -->             
</div>
</body>
</html>