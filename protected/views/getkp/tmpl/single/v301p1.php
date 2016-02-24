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
                                    <a href="#" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/301-grabli-gvv/1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                <td style="padding-top: 3px;">
                                    <p style="margin: 0px; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align:justify; color: black;line-height:20px; ">
                                        Грабли предназначены для сгребания провяленной травы из прокосов в валки, ворошения ее в прокосах, оборачивания и сдваивания валков.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 3px;">
                                    <a href="#" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        <img src="http://www.lbr.ru/images/kp/301-grabli-gvv/2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table width="700" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                        <tr>
                                            <td style="padding: 5px 20px 0px 20px;">
                                                <table width="500" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border: 0; border-collapse: collapse; background: #ffffff;">
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
                                            <td  align="center" style="padding: 0px 20px;">
                                                <table width="600" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box; ">Ширина захвата</td>
                                                            <td width="50%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">не более 6,0 м</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Наибольшая производительность за час</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,2 га/ч</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая скорость</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">не более 14,5 км/ч</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная скорость</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">не более 20 км/ч</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">не более 500 кг</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1100 кг</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габаритные размеры двух секций в сборке</td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">не более при сгребании 5000х6100х1400</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                            <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td style="padding: 5px 0px 0px 20px;">
                                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: center;">
                                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
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
    <tr valign="top">
        <td style="padding: 0px 20px;">
            <?php
            if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
            endif;
        ?>
        </td>
    </tr>
  </table>
</td></tr></table>
<!-- Блок Первый; -->
</div>
</body>
</html>

