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
                    <tr>
                        <td style="padding:15px 20px 5px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="border-bottom:solid black 4px; padding-right: 20px;" width="750" valign="middle">
                                        <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/remplodex.jpg" width="100" style="border: 0; float:right;" alt="Изображения не отображаются">
                                        <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 24px; font-weight: bold; color: black; text-align: left;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/422-sortirovochnye-kompleksy-remprodex/" target="_blank" style="text-decoration: none;">
                                                Сортировщики картофеля и лука
                                            </a>
                                        </p>  
                                    </td>
                                    <td width="40">
                                        <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/krukowiak.jpg" width="40" style="border: 0; float:right;" alt="Изображения не отображаются">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding-top: 3px;">
                                        <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                        <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td width="500" style="padding:0px 0px 0px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-2.jpg" width="500" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding:15px 0px 5px 0px;">
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                        1. КОМПАКТНЫЕ И УДОБНЫЕ
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:0px 0px 5px 0px;">
                                                    <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                        Площадь хранения сортировщика M-616 составляет всего 7 кв. м! Конструкция рамы шасси позволяет быстро сложить комплекс одному человеку и
                                                        легко перемещать машину в любое место помещения с твердым полом.
                                                    </p>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                        2. РАБОТА В УДОВОЛЬСТВИЕ
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:0px 0px 5px 0px;">
                                                    <p style="margin:0; color:black; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                        Сортировщики серии M имеют осветительное устройство с флуоресцентными лампами и подогрев рабочего стола, что существенно облегчает работу операторов.
                                                    </p>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                        3. СОРТИРОВКА ПО РАЗМЕРУ
                                                    </p>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding:0px 0px 0px 0px;">
                                                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td width="187" valign="top">
                                                                <p style="margin:0; color:black; padding: 0px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                                    Сортировщики предназначены для сортировки картофеля и лука округлой формы на
                                                                    3 фракции. Имеет в комплекте
                                                                    обменные сита, которые по-
                                                                    зволяют менять размер сорти-
                                                                    руемой фракции с шагом 5 мм.
                                                                    Обеспечивают очистку от на-
                                                                    липшей грязи и почвы.
                                                                </p>  
                                                            </td>
                                                            <td width="148" style="padding:0px 0px 0px 0px;" valign="bottom">
                                                                <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-3.jpg" width="138" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                            <td width="140" style="padding:0px 0px 0px 10px;" valign="bottom">
                                                                <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-4.jpg" width="130" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0px 0px 3px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-5.jpg" width="240" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 3px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-6.jpg" width="240" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 3px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-7.jpg" width="240" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 3px 0px 0px 20px;">
                                                    <img src="http://www.lbr.ru/images/kp/154-sortirovschiki/mail-8.jpg" width="240" style="border: 0; float: right;" alt="Изображения не отображаются">
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

                    <tr><td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding:5px 0px 0px 0px;">
                                        <!--Таблица с данными-->
                                        <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                            <tr>
                                                <td width="" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                                <td width="" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">M-647 MINI</span></strong></td>
                                                <td width="" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">M-647</span></strong></td>
                                                <td width="" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">M-616</span></strong></td>
                                                <td width="" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">M-900</span></strong></td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Размеры окошек сита, мм</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">35-40-50</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">35-40-50</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">от 25х25 до 80х80</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">от 25х25 до 80х80</span></td>
                                            </tr> 
                                            <tr>
                                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Масса, кг</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">600</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">850</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">650</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">950</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Производительность, т/ч</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4-6</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4-6</span></td>
                                                <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">6-9</span></td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Цена</span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
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








