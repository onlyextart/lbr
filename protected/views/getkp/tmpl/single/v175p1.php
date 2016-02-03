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
                                <td style="padding-bottom: 3px;" width="740">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/337-kultivatory-viking/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Культиватор Viking XL
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="20">
                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" width="20" style="border: 0; float: right;" alt="Логотип Feraboli">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/175-vikingXL/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding:  3px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                            <td width="150">
                                    <!-- Первая колонка-->
                                    <table width="150" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="text-align: center;">
                                               <img src="http://www.lbr.ru/images/kp/175-vikingXL/mail-2.jpg" width="80" style="border: 0;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td width="606">
                                    <table width="606" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="586" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px;font-weight:bold;text-align: justify; ">
                                                                Более прочная рама и соответственно более сильные зубья SL!                                                            
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 3px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                Зубья SL имеют более широкую лапу, что обеспечивает более качественное рыхление почвы и измельчение пожнивных остатков. 
                                                                Образуют больший просвет под рамой.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px;font-weight:bold;text-align: justify; ">
                                                                Применяется:
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                                • для предпосевной обработки для зерновых, под сахарную свеклу, подсолнечник, кукурузу;<br>
                                                                • для обработки паров;<br>
                                                                • для работы после пахоты и дискования.<br>
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td style="text-align: left;padding: 3px 0px 0px 0px;">
                                                            <table width="486" bgcolor="#FFFFFF"  cellspacing="0" cellpadding="1px" align="left" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                                <tr>
                                                                    <td width="50%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box;background-color: #eeeeee;" ><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                                    <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box;background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">XL 6.0H</span></strong></td>
                                                                    <td width="25%" align="center" style="border: solid black 1px; background-clip:padding-box;background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">XL 8.0H</span></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Рабочая ширина, м</span></strong></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6,0</span></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">8,0</span></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Количество зубьев</span></strong></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30</span></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">40</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Вес, кг</span></strong></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2800</span></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3100</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="border: solid black 1px;padding-left:2px;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></strong></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">160-190</span></td>
                                                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">200-230</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></strong></td>
                                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                                    <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="padding: 5px 0px 0px 0px;">
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



        </td>
    </tr>


</table>
<!-- Первый блок -->

</div>
</body>









