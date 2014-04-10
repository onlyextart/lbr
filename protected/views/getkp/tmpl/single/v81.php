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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/borony-diskovye/306-borona-diskovaya-summers-diamond-disk/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Дисковая борона Summers Diamond Disc<span style="font-size: 12px; color: #2518B4; font-weight: normal;">&nbsp;(подробнее...)</span></a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/summers-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Заголовок со ссылкой и логотипом; -->
                <!-- Контент первого блока: -->
                <tr><td>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/81-diamond/diamond.jpg" width="760" style="border: 0; float: left;" alt="Логотип GreatPlains">
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
                            
                        </table>
                    </td></tr>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; ">Мощность
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Долговечность
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Надежная и прочная конструкция</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Усиленная оригинальная ромбовидная рама обеспечивает качественную обработку почвы.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr>    
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Прохождение камней и пней. С-образная гибкая стойка помогает амортизировать колебания (толчки), что увеличивает срок службы подшипников и дисков. Втулки изготовлены из ковкой отливки и обладают большой прочностью.</li>
                                                            
                                                        </td>
                                                    </tr>       
                                                     
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                           
                                                            <img src="http://www.lbr.ru/images/kp/81-diamond/diamond1.jpg" width="368" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                           
                                                            <img src="http://www.lbr.ru/images/kp/81-diamond/diamond2.jpg" width="368" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Точный контроль глубины при очень тяжелых условиях</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Глубина может легко регулироваться. Каждое колесо оснащено гидравлическим цилиндром, контролирующим глубину.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr>   
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                            Борона тянется равномерно. Длинная плавающая сцепка следует за трактором и несет только собственный вес.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr>  
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Копирование рельефа полей</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 0 0 10px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Крылья рамы изгибаются на 80 см вверх и вниз обеспечивая копирование рельефа и проникновение в почву дисков.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr> 
                                                                                               
                                    </table>
                                </td>
                            </tr>  
                             
                        
                        </table>
                    </td></tr>
                <!-- Контент первого блока; -->
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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0 10px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Финишная подготовка почвы</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 20px 0 0;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Устанавливаются дополнительно пружинные боронки-загортачи с регулируемым углом атаки.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 20px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Удобство эксплуатации</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 20px 0 0;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Управление глубиной из кабины трактора с помощью гидравлики.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr>   
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 20px 0 0;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">Экранированные шариковые подшипники – смазываемые и самостоятельно выравниваемые на поворотах.
                                                                </li>
                                                            
                                                        </td>
                                                    </tr>
                                                   </table>
                                </td>
                                
                                
                    <td style="padding-top: 10px; padding-bottom: 10px;">
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="padding: 17px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/81-diamond/diamond3.jpg" width="368" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>
                                                    </tr> 
                                                          
                        </table>
                     
                                </td>
                            </tr>
                            <tr valign="top">                                                        
                               <td colspan="2" style="padding: 17px 0 0 0;">
                                   <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 230px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9928</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9932</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9938</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9944</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8,53</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9,91</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13,6</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,7</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,7</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная высота, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,9</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,8</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная длина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,3</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,3</td>
                                
                                </tr> 
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Предполагаемый вес, т</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8,8</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,5</td>
                                
                                </tr>  
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">66</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">78</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">94</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальное давление на диск, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">121</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">112</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">104</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280-330</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330-420</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">380-480</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">450-600</td>
                                
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                </tr>                                 
                            </tbody>
                        </table>
                               </td>
                            </tr> 
                            <tr valign="top">                                                        
                                 <td style="padding: 10px 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/81-diamond/diamond4.jpg" width="378" height="104"  style="border: 0; float: left;" alt="Стрелка вправо">
                                 </td>
                                 <td style="padding: 10px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/81-diamond/diamond5.jpg" width="378"  style="border: 0; float: left;" alt="Стрелка вправо">
                                 </td>
                             </tr> 
                             <tr valign="top">                                                        
                                 <td colspan="2" style="padding: 10px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/81-diamond/diamond6.jpg" width="765"  style="border: 0; float: left;" alt="Стрелка вправо">
                                 </td>
                             </tr>
                             
                        </table>
                    </td></tr>                
                
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