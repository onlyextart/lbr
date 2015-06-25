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
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/336-kultivatory-atlas/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Предпосевной культиватор Atlas
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/69-atlas/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
                            <tr>
                                <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info1']; ?>
                                        </p>
                                </td>
                            </tr>
                            <?php endif; ?>    
                            <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="40" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Агрегат предназначен для предпосевной подготовки почвы с возможностью одновременного посева (в комбинации с сеялками аналогичной ширины захвата).
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
                    
                    <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="padding: 0 0 0 15px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                         <tr>
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Интенсивная качественная почвообработка за один проход:</span> 
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">разрыхление следов колес трактора (разрыхлитель)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">выравнивание неровностей почвы (передняя волокуша)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">измельчение крупных комков (струнный каток)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">рыхление и подрезание (2 ряда S-образных лап)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">выравнивание разрыхленной почвы (задняя волокуша)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">измельчение и уплотнение (двойной каток типа Crosskill)</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">финишное выравнивание (легкая зубчатая балка)</span> 
                                                </li>
                                            </td>
                                        </tr>                                        
                                        <tr>
                                            <td style="padding: 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/69-atlas/mail-2.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0;">
                                                <img src="http://www.lbr.ru/images/kp/69-atlas/mail-5.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        
                                </table>
                                </td>
                                <td width="380" style="padding: 0;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 15px 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Стабильное удержание заданной глубины обработки</span> (до 12 см) 
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">по всей длине и ширине захвата</span>
                                                   (от 3 до 10 метров) – незаменимо при обработке почвы под овощи, свеклу, злаковые культуры, картофель и бобовые.                                                   
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 15px 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                <b>2 ряда S-образных стоек</b> размещены с определенным шагом – 
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">исключается забивание растительными остатками.</span>                                                 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 15px 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Подбор зубьев под ваши условия работы:</span>                                                    
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 8px  15px 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr>
                                                    <td style="padding: 0; text-align: center;">
                                                     <img src="http://www.lbr.ru/images/kp/69-atlas/mail-3.jpg" width="100" height="170" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0px 0 0 15px;">
                                                <img src="http://www.lbr.ru/images/kp/69-atlas/mail-4.jpg" width="100" height="170" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px 0 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Зубья SX</b> – для работы на легких и среднетяжелых почвах
                                                </p>
                                            </td>
                                            <td style="padding: 0px 0 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Зубья SZ</b> – усиленная основа зубьев для работы в более тяжелых условиях, на каменистых почвах.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 15px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Высокая производительность</span>                                                    
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 15px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Cкорость работы 8-13 км/ч, но наилучшее качество обработки достигается при рабочей скорости 12-13 км/ч (по данным проведенных испытаний в хозяйствах наших клиентов).                                                                                                     
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
                    </td></tr>                            
                <!-- Контент первого блока; -->
                <!-- Ссылка-кнопка подробнее -->
                    <?php
                        Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', 
                                array(
                                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/336-kultivatory-atlas/',
                                    'colspan' => false,
                                    'style' => 'text-align: right; padding-right: 13px;'
                                    )
                                );
                    ?>
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        
                                        
                                         
                                       <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0; text-align: justify;">
                                                <img src="http://www.lbr.ru/images/kp/69-atlas/mail-6.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2" style="padding: 15px 15px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Универсальность и простота в эксплуатации:</span>                                                    
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 15px 15px 0 25px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Полунавесная конструкция</b> – позволяет использовать агрегат с тракторами небольшой грузоподъемности.                                              
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 15px 15px 0 25px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Удобство транспортировки:</b> гидравлическое складывание агрегата для транспортировки. 
                                                   Транспортная ширина не превышает 3 м. Перевод колесной системы из транспортного положения в рабочее и обратно осуществляется гидроцилиндрами.                                              
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 15px 15px 0 25px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Установленная в стандарте тележка</b> со сцепкой для сеялки позволяет обеспечивать простое агрегатирование с сеялкой для проведения посева вместе с почвообработкой.                                              
                                                </li>
                                            </td>
                                        </tr>
                                        
                                       
                                        
                                                               
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 15px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                <b>При использовании культиватора Atlas в комплексе с сеялками Polonez/Mazur обеспечивается</b> 
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">процесс почвообработки одновременно с посевом за 1 проход:</span>                                                 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">экономия ГСМ на дополнительные проходы другой техники до 30%;</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">снижение уплотнения почвы за счет сокращения проходов;</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">увеличение производительности на 40%;</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">нет разрыва между культивацией и севом, что особенно важно для засушливых районов.</span> 
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; color: black; ">
                                                    сеялка Polonez+ Atlas                                                                                                      
                                                </p>
                                            </td>
                                            <td style="padding: 10px  0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; color: black; ">
                                                    сеялка Mazur + Atlas                                                                                                      
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px  0 0;">
                                                <img src="http://www.lbr.ru/images/kp/70-ares/ares7.jpg" width="185" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 5px  0 0;">
                                                <img src="http://www.lbr.ru/images/kp/70-ares/ares7.jpg" width="185" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; font-weight: bold; color: black; ">
                                                    120 л.с.                                                                                                       
                                                </p>
                                            </td>
                                            <td style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center; font-weight: bold; color: black; ">
                                                    180-200 л.с.                                                                                                      
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/70-ares/ares5.jpg" width="100" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 0; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/70-ares/ares6.jpg" width="100" height="79" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>                                    
                                </td>
                            </tr>                            
                        </table>
                    </td></tr>
                    <tr>
                                <td style="padding: 0 20px;">
                                   <img src="http://www.lbr.ru/images/kp/69-atlas/print-8.jpg" width="760" style="border: 0;"  alt="Картинки не отображаются">
                                            
                            </td>
                            </tr>         
                    <tr>
                                <td style="padding: 10px 0 0 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 4,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 6,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 8,0</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 10,0</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 050</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4 400</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5 300</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5 900</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество зубьев, шт.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">16</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">32</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/ч</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,8-4,4</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,2-6,6</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,6-8,8</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3-9,0</td>
                                    </tr> 
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-120</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170-220</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200-230</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-260</td>
                                    </tr> 
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                    </tr>
                                </tbody>
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
                    <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Второй; -->
</div>
</body>
</html>