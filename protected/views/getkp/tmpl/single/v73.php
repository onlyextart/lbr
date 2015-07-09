<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/glubokorykhliteli-i-chizeli/340-glubokorykhliteli-kret/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Глубокорыхлитель Kret
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
                                    <img src="http://www.lbr.ru/images/kp/73-kret/kret.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Предназначен для рыхления нетронутых во время традиционной вспашки слоев почвы. 
                                                    Благодаря обработке на глубину до 50 см значительно улучшает дренаж и аэрацию почвы.
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
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                         <tr>
                                            <td style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Уничтожает плужную подошву</span> – улучшается качество почвы, увеличивается ее способность к просачиванию воды и минеральных удобрений. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" valign="top" width="50%" style="padding: 5px 0 5px 0;">                                                        
                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; text-align: center; ">
                                                            Корневая система растений
                                                        </p>
                                                        </td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <td colspan="2" style="padding: 10 0;">
                                                        <img src="http://www.lbr.ru/images/kp/73-kret/kret1.jpg" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td style="padding: 10px 0; text-align: center;">
                                                        <span style="margin: 0; padding: 0;  font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">без обработки глубокорыхлителями</span>
                                                        </td>
                                                        <td style="padding: 10px 0; text-align: center;">
                                                        <span style="margin: 0; padding: 0;  font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">с обработкой глубокорыхлителями</span>
                                                        </td>
                                                        </tr>                                                        
                                                                                       
                                            </table>
                                             </td>
                                        </tr>
                                        
                                </table>
                                </td>
                                <td width="380" style="padding: 0 0 0 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding: 5px 0 15px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">Способствует накоплению влаги с осени</span> – работая на глубину до 50 см, способствует проникновению и накоплению влаги в более глубоких слоях почвы. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 13px 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        </tr>
                                                        <tr>
                                                        <td style="padding: 10 0;">
                                                        <img src="http://www.lbr.ru/images/kp/73-kret/kret3.jpg" width="180" height="220" style="border: 0; float: left;" alt="Изображения не отображаются">
                                
                                                        </td>
                                                         <td style="padding: 10 0;">
                                                        <img src="http://www.lbr.ru/images/kp/73-kret/kret4.jpg" width="180" height="220" style="border: 0; float: right;" alt="Изображения не отображаются">
                                
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td style="padding: 10px 0 0; text-align: center;">
                                                        <span style="margin: 0; padding: 0;  font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">Поля, не обработанные глубокорыхлителями</span>
                                                        </td>
                                                        <td style="padding: 10px 0 0; text-align: center;">
                                                        <span style="margin: 0; padding: 0;  font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">Поля, обработанные глубокорыхлителями</span>
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
                    <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                        <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220;">
                                                    Качественное рыхление в зависимости от степени уплотненности вашей почвы:
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Стойка типа L</span> (в стандартной комплектации): измельчение и рыхление глубоких слоев почвы без ее выворачивания. 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret2.jpg" width="110" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>
                                </table>
                                </td>
                                <td width="380" style="padding: 0 0 0 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Стойка типа XL</span> (опция): обеспечивает более глубокое и тщательное рыхление почвы, 
                                                   улучшает проникновение влаги к глубоким слоям почвы, что влияет на лучшее развитие корней растений. Такие зубья рекомендуются для выращивания сахарной свеклы и для сильно утрамбованных участков поля, 
                                                   например, для технологических дорожек. 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret5.jpg" width="110" style="border: 0; float: right;"  alt="Картинки не отображаются">
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
                                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/glubokorykhliteli-i-chizeli/340-glubokorykhliteli-kret/',
                                    'colspan' => false,
                                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                                    )
                                );
                    ?>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Первый; -->

<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
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
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Простая и надежная конструкция – уверенность в долгом сроке эксплуатации:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   шведская сталь,
                                                </li>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   рама выполнена из цельной трубы 100х200 мм,
                                                </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   защита рабочих органов (стоек зубьев).
                                                </li>
                                            </td>
                                        </tr>   
                                        
                                         <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    2 системы защиты стоек зубьев – работа в сложных условиях без опасений вывести из строя агрегат:
                                                </p>
                                            </td>
                                        </tr>
                                         <tr valign="top"> 
                                            <td colspan="2" style="padding: 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Защита срезным болтом (модель типа B)</span> – при достижении предельной нагрузки на стойку болт разрывается,
                                                    и стойка уходит назад, пропуская через себя камни, корни деревьев и т.д. 
                                                    Чтобы вернуть стойку в рабочее положение, ее необходимо выдвинуть вперед и снова зафиксировать срезным болтом. 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret6.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 0 10px;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">
                                                    Для работы на легких и среднетяжелых почвах.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Рессорная защита (модель типа S)</span> – при наезде на препятствие стойка уходит назад, 
                                                   рессора прогибается, проходит препятствие и возвращает стойку в исходное положение. 
                                                   <b>Для работы на тяжелых, на каменистых почвах.</b> 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret7.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr> 
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220">Удержание заданной глубины обработки и контроль стабильности хода агрегата</span> – комплектация резиновыми опорными колесами: 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret8.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>                                    
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Для самых ходовых тракторов – от 80 до 240 л.с.:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                    МТЗ 82, МТЗ 1221, МТЗ 1523, МТЗ 1021, МТЗ 1025, Т-150, К-700 и др.
                                                </p>
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; ">
                                                    Для агрегатирования с тракторами К 700 и Т 150 глуокорыхлитель должен быть укомплектован системой навески центральной.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Финальная обработка после глубокого рыхления
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center" style="padding: 5px 0 0 0; text-align: center;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret9.jpg" width="370" style="border: 0;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Трубчатый, диам. 600 мм, ширина 3/4/6 м</span> 
                                                   – для выравнивания, прикатывания легких почв;
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret10.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Резиновый, диам. 500 мм, ширина 3/4/6 м</span> 
                                                   – обеспечивается большее давление на почву по сравнению с трубчатым катком; применяется для выравнивания среднетяжелых и тяжелых почв, разрушения комьев земли;
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret11.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr> 
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black">• Жестяной каток, диам. 700 м, ширина 3/4/6 м</span> 
                                                   – для выравнивания среднетяжелых и тяжелых почв, дополнительно взрыхляет самый верхний слой почвы.
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                <img src="http://www.lbr.ru/images/kp/73-kret/kret14.jpg" width="180" style="border: 0; float: right;"  alt="Картинки не отображаются">
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
                    <tr valign="top">
                                <td style="padding: 0;">   
                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3В</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5В</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7В</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3S</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5S</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7S</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">610</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">840</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1140</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">830</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1300</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1785</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75-110</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110-150</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-210</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-130</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150-180</td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">180-240</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                        <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                                 </td></tr>
            <tr valign="top">
            <td colspan="2" style="padding: 5px 20px 0px 20px;">
                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                </p> 
            </td>
            </tr>
                            <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 15px 0 0 25px;">
                                                <img src="http://www.lbr.ru/images/kp/74-kret-plow/kret-plow12.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>                                    
                                </td>
                            </tr>
                        </table>
                    </td></tr>                
                    <!-- Ссылка-кнопка подробнее -->
                    <?php
                        Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', 
                                array(
                                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/glubokorykhliteli-i-chizeli/340-glubokorykhliteli-kret/',
                                    'colspan' => false,
                                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                                    )
                                );
                    ?>
                    
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Второй; -->
<?php
if($data['show_footer']=='1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;