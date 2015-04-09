<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
<!-- Блок Первый: -->
<div class="table w-800">
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="730">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/posevnye-kombinatsii-i-agregaty/594-posevnaya-kombinatsiya-atlas-polonez/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Посевной комплекс: сеялка Polonez + культиватор Atlas
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="30">
                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" width="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td width="25" style="padding:5px 0px 0px 0px;">
                                   <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                </td>
                                <td width="735" valign="middle" style="padding:5px 0px 0px 10px;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; color: #999999; text-align: justify;">
                                       Посевная комбинация сеялки Polonez и культиватора Atlas = почвообработка и посев за 1 проход.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                           <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                         
                                        <tr>
                                            <td  style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    В результате использования такого комплекса обеспечивается экономия всех ресурсов:
                                                </p>

                                            </td>
                                        </tr> 
                                        
                                        <tr>
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    • до 30% - экономия ГСМ на дополнительные проходы другой техники;<br>
                                                    • до 40% - увеличение производительности;<br>
                                                    • снижение степени уплотнения почвы за счет умень-
                                                    шения количества проходов;<br>
                                                    • отсутствие временного разрыва между операциями культивации почвы и посева.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td  style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Рабочая ширина захвата посевной комбинации – 4
                                                    м.
                                                </p>

                                            </td>
                                        </tr> 
                                        <tr>
                                            <td  style="padding:2px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Посевная комбинация идеальна для использования
                                                    с самыми ходовыми тракторами – 120 л.с.
                                                </p>

                                            </td>
                                        </tr> 
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-2.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
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
                                                        <td colspan="2" style="padding:5px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; text-transform:uppercase; font-weight: bold;text-align: justify; ">
                                                                Особенности конструкции
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                    <td width="25" style="padding:5px 0px 0px 0px;">
                                                        <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                                    </td>
                                                    <td width="333" valign="middle" style="padding:5px 0px 0px 5px;">
                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; color: #999999; text-align: justify;">
                                                            ЗЕРНОВАЯ СЕЯЛКА POLONEZ
                                                        </p>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="padding: 5px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-3.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td colspan="2" style="padding:5px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                                Работа практически в любых погодных условиях:
                                                                <span style="color:#000000">посев, как в сухую, так и во влажную почву благо-
                                                                даря конструкции сошников.</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td colspan="2" style="padding:0px 0px 0px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                Сошники 2-х дисковые и расположены в шахматном порядке со смещением, что гарантирует:<br>
                                                                • бесперебойную работу без забивания,<br>
                                                                • облегчается разрезание пожнивных остатков,<br>
                                                                • улучшается проникновение сошника в почву.
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




            </table>



        </td>
    </tr>

</table>
<!-- Блок Первый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<!-- Блок Второй: -->
<div class="table w-800">
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                            
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td  style="padding:10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Равномерно и точно
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td>
                                            <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                              <tr>     
                                            <td valign="top" width="189" style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    В сеялке Polonez установ-
                                                    лен катушечный дозиру-
                                                    ющий механизм и бессту-
                                                    пенчатая коробка передач,
                                                    что позволяет высевать как
                                                    зерновые, так и мелкосеменные культуры 
                                                    без замены катушки.
                                                </p>
                                            </td>
                                            <td valign="top" width="189" style="padding:0px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-4.jpg" width="179" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold;text-align: justify; ">
                                                    Точный и экономный расход высеваемого материала – <span style="color:#000000">благодаря регулируемой норме высева</span> от 2 до 400
                                                    кг на гектар.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                           
                                            <td valign="top"style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-5.jpg" width="179" style="border: 0; float: right; margin-left: 15px;" alt="Изображения не отображаются">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="color:#F58220; font-weight:bold;">Посев со строгим соблю-
                                                    дением необходимой
                                                    глубины по всей рабочей
                                                    ширине захвата на про-
                                                    тяжении всего времени
                                                    сева</span> – функция высеваю-
                                                    щих сошников с централь-
                                                    ной регулировкой глубины
                                                    работы, с копирующе-прижимающей секцией (удельный нажим около 20 кг).
                                                </p>
                                            </td>
                                       </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <table width="378" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="60%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель зерновой сеялки</span></strong></td>
                                                        <td width="40%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Polonez 4/780 D</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Рабочая ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Тип сеялки</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">навесная</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Тип высеивающих аппаратов</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">катушечный</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Тип сошников</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">дисковые</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Количество рядов (сошников), шт</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">31</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Ширина междурядья, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Объем бункера, куб. дм</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">780</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Производительность, га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">3,2</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Максимальная рабочая скорость, км/ч</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">10</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Масса, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">1100</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Цена, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                    * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                                                </p> 
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td valign="top" style="padding:0px 0px 0px 20px;">
                                    <!-- Вторая колонка-->
                                    <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                          <td width="25" style="padding:5px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                          </td>
                                          <td width="333" valign="middle" style="padding:5px 0px 0px 5px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; color: #999999; text-align: left;">
                                                ПРЕДПОСЕВНОЙ КУЛЬТИВАТОР ATLAS
                                            </p>
                                          </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="padding:10px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Интенсивная почвообработка за один проход:
                                                </p>
                                            </td>
                                       </tr>
                                       <tr>
                                         <td colspan="2" style="padding:0px 0px 0px 0px;">
                                           <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                               • разрыхление следов колес трактора (разрыхлитель)<br>
                                               • выравнивание неровностей почвы (передняя воло-
                                               куша)<br>
                                               • измельчение крупных комков (струнный каток)<br>
                                               • рыхление и подрезание (2 ряда S-образных лап)<br>
                                               • выравнивание разрыхленной почвы (задняя воло-куша)<br>
                                               • измельчение и уплотнение (двойной каток типа
                                               Crosskill)<br>
                                               • финишное выравнивание (легкая зубчатая балка)
                                          </p>
                                         </td>
                                       </tr>
                                       <tr>
                                            <td colspan="2" style="padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-6.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                       </tr>
                                       <tr>
                                            <td colspan="2" style="padding:10px 0px 0px 0px;">
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                    <tr>
                                                        <td width="60%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель культиватора</span></strong></td>
                                                        <td width="40%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">XXL 4,0</span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Рабочая ширина, м</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">4</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Масса, кг</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2 050</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Количество зубьев, шт</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">16</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Производительность, га/час</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">2.8 - 4.4</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Цена, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
<!--                                        <tr valign="top">
                                            <td colspan="2" style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                    * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                                                </p> 
                                            </td>
                                        </tr>-->
                                       <tr>
                                            <td colspan="2" style="padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/213-polonez+atlas/mail-7.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                       </tr>
                                        
                                        
                                        
                              </table>
                    </td>
                </tr>
                
               
                
            </table>
        </td>
    </tr>
    <tr  valign="top">
    <td colspan="2" style="padding: 0px 20px 0;">
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
</div>
<!-- Блок Второй; -->
</body>
</html>





