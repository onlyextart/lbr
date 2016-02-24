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
                                        <img src="http://www.lbr.ru/images/kp/298-pr185c/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
                                        <tr>
                                            <td rowspan="2" width='150' style="padding:0px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/298-pr185c/2.jpg" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td width='610' style="padding:0px 0px 0px 10px;">
                                                 <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align:left; color: black;line-height:20px; ">
                                                     Пресс-подборщик рулонный ПР-145С предназначен для подбора валков
                                                     сена естественных и сеяных трав или соломы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  valign='top' style="padding:0px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/298-pr185c/3.jpg" width="600" style="border: 0; float: left;" alt="Картинки не отображаются"> 
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="padding: 10px 0px 5px 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #fb9547;">
                                        <tr>
                                            <td style="padding:5px 10px">
                                                <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:left; color: white;font-weight: bold; ">
                                                    РАСПОЛОЖЕННОЕ СБОКУ ПРЕССА УСТРОЙСТВО СНИЦЫ ЗНАЧИТЕЛЬНО УЛУЧШАЕТ ОБЗОРНОСТЬ РАБОТЫ
                                                    ПОДБИРАЮЩЕГО УЗЛА И ПОЗВОЛЯЕТ ИЗБЕГАТЬ НАЕЗДА НА ВАЛОК СЕНА ИЛИ СОЛОМЫ.
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
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; text-align:center; color: black;line-height:20px; ">
                                        ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ 
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                <td  align="center" style="padding: 0px 0px;">
                        <table width="600" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="300" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Производительность:<br>
                                        - Сено<br>
                                        - Солома</td>
                                    <td width="300" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><br>5,5 тн/ч<br>
                                        3,2 тн/ч</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Плотность рулона</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-200 кг/м<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина захвата</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1400 мм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Масса рулона до</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">300 кг</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Диаметр рулона</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1450 мм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Масса машины</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2200 кг</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 5px 0px 10px 80px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>           
                            
                <!-- Контент первого блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
 </table>
</td></tr>
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
<!-- Блок Первый; -->
</div>
</body>
</html>
