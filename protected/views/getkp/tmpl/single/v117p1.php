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
                                    <td style="padding-bottom: 0px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/313-kultivatory-wil-rich/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Культиваторы предпосевные Wil-Rich Quad X и Excel
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 0px; text-align: right;" align="right">
                                        <img src="http://www.lbr.ru/images/makers/amity-for-site.JPG" width="60" style="border: 0; float: right;" alt="Логотип Amity">
                                    </td>
                                </tr>
                            </table>
                        </td></tr>

                    <tr>
                        <td style="padding:0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding-top: 3px;">
                                        <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                        <td style="padding: 8px 20px 5px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="center">
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                </td>
                                                <td style="padding-left:5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                        Культиваторы Wil-Rich модели <span style="color:#F58220;">Quad X</span> идеально подходят для обработки почвы на холмистой местности. Оснащены системой плавающего сцепления Wil-Rich Floating Hitch.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="center">
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                </td>
                                                <td style="padding-left:5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                        Для обработки более ровного поля подойдет модель с жесткой сцепкой - Wil-Rich <span style="color:#F58220;">Excel</span>.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-2.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">           
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td width="370">
                                        <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-3.jpg" width="350" style="border: 0; float: left;" alt="Изображения не отображаются">           
                                    </td>
                                    <td width="370" style="padding-left:20px;">
                                        <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-4.jpg" width="350" style="border: 0; float: right;" alt="Изображения не отображаются">
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
        <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
        <tr>
            <td>
                <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                    <tr>
                        <td bgcolor="#FFFFFF" style="padding: 10px 20px 0px 20px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">
                                Для лучшего достижения результата:      
                            </p>  
                        </td> 
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" style="padding: 0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первая колонка-->
                                    <td>
                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 0px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    <span style="font-weight:bold;">Для борьбы с сорными растениями</span> следует приме-нять стрельчатые культиваторные лапы шириной 23 см.      
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding:5px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-5.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">

                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding:5px 0px 5px 0px;">
                                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 0px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    <span style="font-weight:bold;">В качестве финишного орудия </span> культиватор может быть оснащен бороной или бороной и прика-тывающими катками в зависимости от требуемых условий работы.
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding:5px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-6.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">

                                                </td>
                                            </tr>


                                        </table>
                                    </td>

                                    <!--Вторая колонка-->
                                    <td style="padding-left: 20px;">
                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0px 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 0px 0px 0px 0px; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    <span style="font-weight:bold;">Осеннюю обработку можно производить на глубину до 15 см</span> на полях с небольшим содержанием растительных остатков.                               
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 20px; padding:15px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 15px 0px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: black; text-align: justify; ">
                                                                    3-х рядная борона с подпружиненными пальцами и прикатывающими катками                              
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding:5px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-7.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding:5px 0px 5px 20px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                        - быстросъемные зубья 1х46 см<br>
                                                        - регулируемый угол атаки зубьев<br>
                                                        - катки диаметром 355 мм<br>
                                                        - обслуживаемые герметичные подшипники<br>
                                                        - быстрое отсоединение катков благодаря системе крепления.
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding-top: 15px;">
                                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td width="210">
                                                                <table width="210" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                                    <tr>
                                                                        <td style="width: 20px; padding:0px 0px 0px 0px; vertical-align: top;">
                                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                                        </td>
                                                                        <td style="padding: 0px 0px 0px 0px; vertical-align: top;">
                                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                                <span style="font-weight:bold;">Чистики для колес тандема (доп. опция).</span><br>
                                                                                Позволяют колесам тандема работать на постоянной глу-бине при условиях повышен-ной влажности почвы.
                                                                            </p>
                                                                        </td> 
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td width="150" style="padding-left:10px;">
                                                                <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-8.jpg" width="150" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                            </td>             
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>



                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" style="padding: 10px 0px 0px 0px;">
                                        <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-9.jpg" width="760" style="border: 0;" alt="Картинки не отображаются"> 
                                    </td>  
                                </tr>
                            </table>
                        </td>
                    </tr>


                    
                </table></td></tr>
        </table>
    <!--Второй блок--> 
</div>

<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!--Третий блок--> 
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">

                    <tr>
                        <td bgcolor="#FFFFFF" style="padding: 0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <!--Первая колонка-->
                                    <td>
                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-10.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <!--Вторая колонка-->
                                    <td style="padding-left: 20px;">
                                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding:10px 0px 5px 0px;">
                                                    <img src="http://www.lbr.ru/images/kp/117-wil-rich/mail-11.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding: 10px 20px 0px 20px;">
                            <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="2px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                <tr>
                                    <td width="160" align="left" style="border: solid black 1px;background-clip: padding-box; background-color: #eeeeee;"  bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Модель</strong></span></td>
                                    <td width="98" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 11 Excel2 25</strong></span></td>
                                    <td width="98" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 13 Quad X 32-34</strong></span></td>
                                    <td width="98" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 13 Quad X 37-39</strong></span></td>
                                    <td width="98" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 13 Quad X 32-42</strong></span></td>
                                    <td width="90" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 13 Quad X 37-50</strong></span></td>
                                    <td width="90" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" bgcolor="#eeeeee"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><strong> Wil-Rich 13 Quad X 55-60</strong></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Глубина обработки, мах,см</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">20</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Рабочая ширина, м</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">7,6</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">10,5</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">11,9</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">12,9</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">15,1</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">18,33</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Транспортная ширина, м</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,9</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5,62</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5,62</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5,62</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5,62</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5,62</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Транспортная высота, м</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">3,2</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,2</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,8</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,1</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,7</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4,7</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Кол-во стоек, шт</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">43</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">59</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">67</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">73</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">85</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">103</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Стрельчатая лапа, см</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">23</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Приблизительный вес, кг</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5556</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8330</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8837</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9879</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9025</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9830</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Опции</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Прикатыв. кат-ки, зуб. борон-ки, усиленные стойки</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Прикатыв. кат-ки, зуб. борон-ки, усиленные стойки</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Прикатыв. кат-ки, зуб. борон-ки, усиленные стойки</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Прикатыв. кат-ки, зуб. борон-ки, усиленные стойки</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Зубовые бо-ронки, усилен.стойки</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Зубовые бо-ронки, усилен.стойки</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Рабочая скорость, км/ч</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">9-12</span></td>
                                </tr>

                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Производительность, мах, га/ч</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">10</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">11</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">12</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">14</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">17</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Мощность трактора, л.с.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">180-250</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">260-350</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">300-380</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">330-420</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">380-450</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">430-550</span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price1']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price2']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price3']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price4']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price5']; ?></span></td>
                                    <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;color: #DD2A1B;"><?php echo $data['price6']; ?></span></td>
                                </tr>

                            </table>
                        </td>  
                    </tr>
                    
                </table></td></tr>
        <tr valign="top">
            <td style="padding: 0px 20px 0;">
                <?php
                if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                    Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                endif;
                ?>
            </td>
        </tr></table>
    <!--Третий блок--> 
</div>
</body>
</html>