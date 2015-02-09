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
             <img src="http://www.lbr.ru/images/kp/194-hercules/mail-1.jpg" width="800" style="border: 0;" alt="Изображения не отображаются">
         </td>
    </tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="650">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/321-plugi-polunavesnye-oborotnye-vn-plus-herkules/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Полунавесной оборотный плуг Herkules 9
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="110">
                                    <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="110" style="border: 0; float: right;" alt="Логотип Bargam">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/194-hercules/mail-2.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                <td style="padding:20px 20px 0px 20px;">
                    <img src="http://www.lbr.ru/images/kp/194-hercules/mail-3.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                </td>
            </tr>


                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 10px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 18px;text-align: justify; ">
                                                    Вспашка должна быть гладкой
                                                    с минимальными затратами:
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    • <span style="font-weight:bold">Все рабочие органы из сверхпрочного материала:
                                                    стали Permanit ©plus</span> – передняя часть дополнительно
                                                    обогащена углеродом, путем специальной закалки
                                                    достигнута ее сверхпрочность, в то же время задняя
                                                    часть очень эластична.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding:5px 0px 5px 0px;">
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                    <td width="189" style="padding:0px 0px 0px 0px;" valign="top" >
                                                             <img src="http://www.lbr.ru/images/kp/194-hercules/mail-4.jpg" width="179" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="189" style="padding:0px 0px 0px 10px;" >
                                                            <img src="http://www.lbr.ru/images/kp/194-hercules/mail-5.jpg" width="179" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                               </table>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding:5px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold;text-align: justify; ">
                                                    •  Стабильный оборот пласта и качественная заделка
                                                    пожнивных остатков.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td>
                                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                    <td width="200" style="padding:0px 0px 0px 0px;" valign="top" >
                                                        <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                            Изогнутый универсальный отвал
                                                            WY 400 для средних и тяжелых
                                                            почв, целинных участков и склонов.
                                                            Особенно легко идет по чистой
                                                            борозде. Глубина обработки – до
                                                            30 см.
                                                        </p>
                                                    </td>
                                                        <td width="178" style="padding:0px 0px 0px 10px;" >
                                                            <img src="http://www.lbr.ru/images/kp/194-hercules/mail-6.jpg" width="168" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                               </table>
                                            </td>
                                        </tr>
                                        
                                       
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 10px 20px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Копирование рельефа и безопасность.
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight:bold;">Гидравлически управляемый шарнирный узел рамы</span>,
                                                    серийно оснащенный автоматическим устройством для
                                                    оптимального приспособления к неровностям почвы.
                                                    Опорное колесо – на задней части рамы.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 5px 20px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    <span style="font-weight:bold;">Срезной болт</span> – это проверенное стандартное решение.
                                                    Под нагрузкой срезной болт ломается в определенной
                                                    точке, и корпус плуга отклоняется и уходит от препятствия
                                                    вверх.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td style="padding: 5px 0px 0px 20px;">
                                        <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                    <td width="150" style="padding:0px 0px 0px 0px;" valign="top" align="center" >
                                                        <img src="http://www.lbr.ru/images/kp/194-hercules/mail-7.jpg" width="50" style="border: 0;" alt="Изображения не отображаются">
                                                     </td>
                                                        <td width="208" style="padding:0px 0px 0px 10px;" align="center" >
                                                            <img src="http://www.lbr.ru/images/kp/194-hercules/mail-8.jpg" width="200" style="border: 0;" alt="Изображения не отображаются">
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
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:0px 0px 10px 0px;">
                                                <p style="margin:0; padding: 0; font-family: 'Trebuchet MS', sans-serif;  font-weight: bold; color:#F58220; font-size: 16px;text-align: justify; ">
                                                    Пахать можно на любой резине:
                                                </p>    
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0px 5px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Исполнение «ПО ПОЛЮ» on-land:
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    В исполнении «ПО ПОЛЮ» опорное колесо двигается
                                                    перед плугом в борозде. Таким образом достигается
                                                    оптимальный контроль глубины, исключается опрокиды-
                                                    вание агрегата через продольную ось. Надежная, полностью 
                                                    гидравлическая регулировка качения для более
                                                    легкого оборота плуга.
                                                </p>

                                            </td>
                                        </tr>
                                        
                                        
                                    </table>
                                </td>
                                <td valign="bottom">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top"  style="border: 0; border-collapse: collapse; background: white;">
                                          <tr>
                                            <td style="padding:0px 0px 0px 20px;">
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                                   <tr>
                                                        <td width="60%" align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Шаг корпусов, см</span></td>
                                                        <td width="40%" align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">100</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Высота рамы, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">82, плуги ST - 78</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; ">Ширина захвата на корпус, см</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">36/40/44/48</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Требуемая мощность трактора, л.с.</span></td>
                                                        <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">до 350</span></td>
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
</body>






