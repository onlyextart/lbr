<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                    <img src="http://www.lbr.ru/images/kp/197-kpm/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                 </td></tr>
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:10px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                    <a href="#" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Культиватор КПМ<br>
                                    (КПМ-12, КПМ-10, КПМ-8, КПМ-6)
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" valign="bottom" width="100">
                                    <img src="http://www.lbr.ru/images/makers/tehmash.jpg" width="100" style="border: 0; float: right;" alt="Логотип Tehmash">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/197-kpm/mail-2.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <td style="padding:15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <p style="margin:0; color:#8fb745; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                        Один культиватор – решение нескольких задач:
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
                                        <tr valign="top">
                                            <td width="20" align="left" style="padding:0px 0px 0px 0px;">
                                                •
                                            </td>
                                            <td style="padding:0px 0px 0px 0px;" valign="top">
                                                <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                    Ранневесеннее закрытие влаги
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 0px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                Паровая и предпосевная обработка всех типов минеральных почв
                                            </p> 
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 0px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                Совмещает культивацию, рыхление, выравнивание и предпосевное прикатывание почвы
                                            </p> 
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 5px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                Создает в посевном слое уплотненное ложе для семян
                                            </p> 
                                          </td>
                                        </tr>
                            
                                        
                                        <tr>
                                            <td style="padding-top: 10px;" colspan="2">
                                                <p style="margin:0; color:#8fb745; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                                    Почему применяем культиватор КПМ?
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:5px 0px 0px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:5px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                полное отсутствие глыб и гребней
                                            </p> 
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 0px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                эффективное выравнивание
                                            </p> 
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 0px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                подповерхностное уплотнение почвы на глубине посева
                                            </p> 
                                          </td>
                                        </tr>
                                        <tr valign="top">
                                          <td width="20" align="left" style="padding:0px 0px 5px 0px;" valign="top">
                                            •
                                          </td>
                                          <td style="padding:0px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                создание сверху мульчированного слоя почвы
                                            </p> 
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
                                                    <td style="padding: 0px 0px 0px 0px;">
                                                        <img src="http://www.lbr.ru/images/kp/197-kpm/mail-3.jpg" width="358" style="border: 0; float: left;" alt="Изображения не отображаются">
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
     



    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->

<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                    <td style="padding: 5px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-top: 10px;" colspan="2">
                                                <p style="margin:0; color:#8fb745; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                                    Запасы почвенной влаги будут сохранены на 100%.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 2px 0px 0px 0px;" colspan="2">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Создает возможность окончания полевых работ
                                                    на 1-2 недели раньше обычной технологии, гарантирует
                                                    сохранение запасов почвенной влаги.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;" colspan="2">
                                                <p style="margin:0; color:#8fb745; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                                    Сокращение затрат на обработку почвы.
                                                </p>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 2px 0px 0px 0px;" colspan="2">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    Обеспечивает в 2-2,5 раза повышение производительности труда 
                                                    и снижение энерго- и ресурсозатрат на предпосевную обработку почвы.
                                                </p>
                                            </td>
                                        </tr>                          
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="288" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                    <td style="padding: 0px 0px 0px 0px;">
                                                        <img src="http://www.lbr.ru/images/kp/197-kpm/mail-4.jpg" width="288" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                      </td>
                                                </tr>
                                                
                                                </table>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td style="padding:0px 0px 0px 0px;" colspan="2">
                                    <p style="margin:0; color:#8fb745; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                        Особенности конструкции
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 0px 0px;" colspan="2">
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                        <b>1. Легко принимает транспортное положение. </b>Применена жесткая сварная конструкция рамы и крыльев 
                                        культиватора из труб квадратного и прямоугольного профиля. Крылья культиватора переводятся в
                                        транспортное положение и обратно гидроцилиндрами.
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-top: 10px;" colspan="2">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    <b>2. Лапы культиватора не забиваются растительными остатками. </b>
                                                    Благодаря расстоянию между ними с шагом 170 мм в 4 ряда.
                                                </p> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="388" style="padding-top: 5px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    <b>3. Долговечность рабочих органов (производство – Италия):</b><br>
                                                    • S-образная стойка 45х12<br>
                                                    • Подпружинник 45х10<br>
                                                    • Стрельчатая лапа шириной 220 мм.<br>
                                                </p> 
                                            </td>
                                            <td width="60" style="padding: 5px 0px 0px 5px;">
                                                 <img src="http://www.lbr.ru/images/kp/197-kpm/mail-5.jpg" width="55" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                                            
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="288" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/197-kpm/mail-6.jpg" width="288" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 0px 0px;" colspan="2">
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                        <b>4. Перевод опорных колес</b> из транспортного положения в рабочее и обратно <b>осуществляется гидроцилиндрами</b>. Для регулировки глубины обработки на раме дополнительно установлен ограничитель хода
                                        опорных колес (регулировочный болт).
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-top: 0px;" >
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    <b>5. </b>Спереди культиватора установлены планки для выравнивания почвы.
                                                    Крепление планки к раме выполнено хомутами, что позволяет быстро
                                                    смонтировать ее на культиватор (или демонтировать).
                                                    Регулировка планки по высоте относительно земли производится
                                                    перестановкой трубы в отверстиях кронштейна крепления,
                                                    а наклон – затяжкой гаек винта (<b>как дополнительная опция
                                                    для КПМ 6 – КПМ 12</b>).
                                                </p> 
                                            </td>
                                        </tr>                  
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="288" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/197-kpm/mail-7.jpg" width="288" style="border: 0; float: left;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>

                            </tr>
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-top: 0px;" >
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; ">
                                                    <b>6. </b>Конструкция пружинно-катковой приставки позволяет регулировать
                                                    высоту установки пружин и их наклон, а также наклон и силу
                                                    прижатия катка. Крепление приставки к раме выполнено
                                                    хомутами, что позволяет быстро смонтировать ее на культиватор
                                                    или демонтировать и установить другую приставку.
                                                </p> 
                                            </td>
                                        </tr>                  
                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="308" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="288" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding: 0px 0px 0px 0px;" align="center">
                                                            <img src="http://www.lbr.ru/images/kp/197-kpm/mail-8.jpg"  width="200" style="border: 0;" alt="Изображения не отображаются">
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
 
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                <tr>
                    <td style="padding: 10px 20px 10px 20px;" colspan="2">
                        <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; text-align: justify; ">
                            <b>Технические характеристики:</b> 
                        </p>
                    </td>
                </tr>
                
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                <tr valign="top">
                   <td style="padding:0px 0px 0px 0px;">
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="40%" align="left" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Модель</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">КМП 6</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">КМП 8</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">КМП 10</span></strong></td>
                                            <td width="15%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">КМП 12</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold;">Рабочая скорость движения, км/ч</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6-15</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6-15</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6-15</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6-15</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Рабочая ширина захвата, м</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">6</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">8</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">10</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Глубина обработки, см</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5-12</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5-12</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5-12</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">5-12</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Агрегатируемая мощность трактора, л.с.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">120</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">160</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">200</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">240</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Шаг расстановки стоек, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">170</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">170</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">170</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">170</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px; font-weight:bold;">Шаг между стойками в ряду, мм</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">680</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">680</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">680</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">680</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Количество рядов стоек, шт</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">4</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Количество стоек с лампами, шт</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">39</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">51</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">61</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">75</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px; "><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;  font-weight:bold;">Цена с НДС, руб.</span><span style="color:red; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 14px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 14px;"><?php echo $data['price2']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 14px;"><?php echo $data['price3']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 14px;"><?php echo $data['price4']; ?></span></td>
                                        </tr>
                                    </table>
                                </td> 
                </tr>
                <tr valign="top">
                    <td colspan="2" style="padding:0px 0px 0px 0px;">
                        <p style="margin:0; color:red; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                
            </table>
        </td>
    </tr>
  
 
</table>
</td>
</tr>
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>





