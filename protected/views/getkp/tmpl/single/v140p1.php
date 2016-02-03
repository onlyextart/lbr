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
                    <tr><td style="padding: 0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/331-zernovye-seyalki-super-drill/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Механическая сеялка SuperDrill
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px; text-align: right;" align="right">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="200" height="35" style="border: 0; float: right;" alt="Логотип VN">
                                    </td>
                                </tr>
                            </table>
                        </td></tr>

                    <tr>
                        <td style="padding: 0px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding-top: 3px;">
                                        <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0px 20px 0px 20px;">
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
                        <td style="padding-top: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td>
                                        <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td>
                                                    <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                </td>
                                                <td style="padding-left:5px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                        Механическая сеялка SuperDrill предназначена для высева различного вида зерновых культур, бобовых, в том числе сои, рапса, люцерны, а также трав.
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
                        <td style="padding-top: 5px 20px 0px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td>
                                        <!-- Первая колонка-->
                                        <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                        Посев без забивания высевающих сошников.
                                                    </p>
                                                    <p style="margin:0; color:black; padding: 2px 0px 0px 0px; line-height:16px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; text-align: justify; font-weight: none;">
                                                        В конструкции высевающего аппарата использованы двухдисковые сошники (диаметр 300 мм) с надежной подшипниковой опорой. Скребки, расположенные с обеих сторон, и крышка с верхней стороны позволяют предотвратить забивание. Сошники справляются со всей работой даже при наличии большого количества остатков урожая.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-2.jpg" width="358" style="border: 0;" alt="Изображения не отображаются">
                                                </td>    
                                            </tr>
                                        </table>
                                    </td>
                                    <!--Вторая колонка-->
                                    <td>
                                        <table width="398" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding-left: 15px;" colspan="2">
                                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: justify; ">
                                                        Точный высев любых видов семян в любых условиях в зависимости от ваших требований и норм высева.
                                                    </p>  
                                                </td>                                            
                                            </tr>
                                            <tr>
                                                <td style="width: 20px; padding:5px 0px 0 15px; vertical-align: top;">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                </td>
                                                <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;font-weight: normal; color: black; text-align: justify; ">
                                                        <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> центральная и индивидуальная регулировка давления сошников; </span>                                  
                                                    </p>
                                                </td>                                                                              
                                            </tr>

                                            <tr>
                                                <td style="width: 20px; padding: 5px 0px 0px 15px; vertical-align: top;">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                </td>
                                                <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                        <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-3.jpg" width="190" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> точный высеивающий ап-парат. Вал высеивающего аппарата приводится в действие с помощью при-водных кассетных блоков и серийной зубчатой пере-дачи. С помощью зубчатой передачи есть множество вариантов настройки не-обходимой частоты вращения вала высеивающего аппарата.</span>

                                                    </p>
                                                </td> 
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <table>
                                                        <tr>
                                                            <td colspan="2">
                                                                <table width="290" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                                    <td style="width: 20px; padding: 5px 0px 0px 15px; vertical-align: top;">
                                                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                                    </td>
                                                                    <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                            <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> проверенная система кулачковой катушки высеивающего аппарата гарантирует точный высев в любых условиях.</span>
                                                                        </p>
                                                                    </td>     
                                                                </table>
                                                            </td>

                                                            <td rowspan="2" style="vertical-align: top;">
                                                                <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-4.jpg" width="100" style="border: 0;" alt="Изображения не отображаются">
                                                            </td>                                                      

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p style="margin: 0; padding: 5px 0px 0px 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> Для регулирования (сни-жения) нормы высева на катушку устанавливается накладка. Используется, например, при посеве рапса и люцерны. </span>                                  
                                                                </p>   
                                                            </td>

                                                            <td>
                                                                <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-5.jpg" width="90" style="border: 0; float: left" alt="Изображения не отображаются">  
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


<!-- Второй блок -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
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
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">
                                                            <td>
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">
                                                                    <span style="color: #F58220; font-weight: bold;"> Равномерный посев и сниженное давление на почву </span> благодаря нали-чию ходовых колес большого диаметра (200/60 – 14,5).
                                                                </p>   
                                                            </td>
                                                            <td style="padding-left:10px;">
                                                                <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-6.jpg" width="200" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td>
                                                    <p style="margin: 0; padding: 15px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; font-weight:bold; ">
                                                        <span style="color: #F58220;"> Экономичный посев благодаря функциональному бункеру </span> 
                                                    </p>   
                                                </td>  
                                            </tr>

                                            <tr valign="top">
                                                <td>
                                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="width: 20px; padding:5px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Незначительное время простоя и загрузки бункера в процессе посева – сеялка оснащена бункером достаточной вместимости – 870 дм<sup>3</sup>. При рабочей ширине сеялки в 4 метра такой объем бункера позволяет добиться хорошей производительности в расчете на единицу площади.                                  
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Ворошильный валик в бункере, серийные клинья для максимального использования мелкозернистого посевного материала.           
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Облегченная загрузка благодаря балкам для мешков в бункере.                                  
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 20px; padding:0px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Пыленепроницаемое покрытие бункера.                              
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                    </table>
                                                </td>  
                                            </tr>
                                        </table>
                                    </td>

                                    <!--Вторая колонка-->
                                    <td style="padding-left: 15px;">
                                        <table width="363" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td>
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; font-weight:bold; ">
                                                        <span style="color: #F58220;"> Сквозная рама, бункер для посевного материала не выполняет несущей функции, что сохраняет его от перегрузок, перегибов, деформации после нагрузки. </span> 
                                                    </p>  
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; color: black; text-align: justify; font-weight:bold; ">
                                                        <span style="color: #F58220;"> Сеялка идеальна в работе с тракторами небольшой мощности – от 80 л.с. </span> 
                                                    </p>  
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td>
                                                    <table width="363" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="width: 20px; padding:2px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 2px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Навесная конструкция сеялки.                                
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 20px; padding:2px 0px 0 0px; vertical-align: top;">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                            </td>
                                                            <td style="padding: 2px 10px 0 0; vertical-align: top;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                    Требуется незначительное подъемное усилие в связи с небольшим собственным весом сеялки (705 кг).                                
                                                                </p>
                                                            </td> 
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr valign="top">
                                                <td style="padding: 10px 0px 0px 0px;">
                                                    <table width="363" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" align="center" style="border-collapse: collapse;background-clip:padding-box;">
                                                        <tr>
                                                            <td width="278" align="left" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"><strong> Модель</strong></td>
                                                            <td width="100" align="center" style="border: solid black 1px; background-color:#eeeeee;background-clip:padding-box;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"><strong> D 400</strong></td>             
                                                        </tr>
                                                        <tr>
                                                            <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">Рабочая ширина, м</td>
                                                            <td width="100" align="center" style="border: solid black 1px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> 4</td>             
                                                        </tr>
                                                        <tr>
                                                            <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> Количество рядов</td>
                                                            <td width="100" align="center" style="border: solid black 1px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">33</td>             
                                                        </tr>
                                                        <tr>
                                                            <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">Емкость семенного ящика, дм<sup>3</sup></td>
                                                            <td width="100" align="center" style="border: solid black 1px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">870</td>             
                                                        </tr>
                                                        <tr>
                                                            <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> Требуемая мощность трактора, л.с.</td>
                                                            <td width="100" align="center" style="border: solid black 1px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">от 80</td>             
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="border: solid black 1px; padding-left:5px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                            <td align="center" style="border: solid black 1px; color: #DD2A1B; padding-left:5px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price1']; ?></span></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr valign="top">
                                            <td style="padding: 5px 20px 0px 20px;">
                                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                                </p> 
                                            </td>
                                        </tr>

                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-7.jpg" width="363" style="border: 0;" alt="Картинки не отображаются"> 
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" style="padding-top:10px;">
                                        <img src="http://www.lbr.ru/images/kp/140-superdrill/mail-8.jpg" width="760" style="border: 0;" alt="Картинки не отображаются"> 
                                    </td>  
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
        </tr>

    </table>   

</div>
</body>
</html>
