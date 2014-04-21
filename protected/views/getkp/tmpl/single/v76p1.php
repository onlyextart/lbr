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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/268-pnevmaticheskie-seyalki-nta3510/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пневматическая сеялка Great Plains NTA-3510</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/76-nta/nta.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 10px 10px 0 0; ">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">No-Till или минимальная технология обработки почвы
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Надежность конструкции
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Простота в обслуживании
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 10px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Быстрая окупаемость
                                                            </p>
                                                        </td>
                                                    </tr>                                                             
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Равномерный. Точный. Бережный посев</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                <tr>
                                                <td colspan="2">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <strong>Двухдисковый сошник</strong> обеспечивает точность бережного размещения семян в семяложе. 
                                                                Растительные остатки разрезаются волнистым диском, который ещё и рыхлит почву в зоне сева.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta2.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                            </td>
                                        </tr>                                                 
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta1.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                    <tr valign="top">                                                        
                                                        <td style="width: 161px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: #F58220; ">Гарантия равномерности всходов. Обеспечение равномерности нагрузки по всей ширине захвата
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Копирование неровной поверхности поля. Система гидравлического перераспределения веса способствует увеличению гибкости сеялки.
                                                            </p>
                                                            </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta3.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
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
                <!-- Заголовок со ссылкой и логотипом: -->               
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                                                                        
                                                    
                                                <tr valign="top">
                                                <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Экономия времени и топлива на посев</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Конструкция сеялки позволяет легко двигаться задним ходом на разворотных полосах и углах поля. 
                                                                Разворот сеялки с небольшим радиусом.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 15px 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta4.jpg" width="365" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>    
                                                    <tr>
                                                        <td style="padding: 10px 15px 10px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Посев в более сложных погодных условиях.</span>
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Даже на увлажненной почве</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                <tr>
                                                <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Режущий нож из закаленной стали, который расположен впереди двухдисковых сошников, разрезает аккуратно землю и пожнивные остатки (даже на увлаженной почве), 
                                                                а также создает борозду шириной 2,5 см, в которую сошники осторожно кладут семена и удобрения.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 15px 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta6.jpg" width="365" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                            </td>
                                        </tr>                                                 
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Обеспечение равномерного посева</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Датчики контроля забивания семяпроводов расположены на каждом сошнике.
                                                            </p>
                                                            </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta6.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="width: 161px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Экономия времени на простои.
                                                            </p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Посев с одновременным внесением удобрений
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                Большой объем бункера – 12 333 л. Достаточно для посева 35-40 га Возможность высевать семена из двух бункеров (по 6 166 л каждый) или же использовать один бункер для семян, а второй для удобрений.
                                                            </p>
                                                            </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td style="padding: 10px 0 15px 0;">
                                                            <img src="http://www.lbr.ru/images/kp/76-nta/nta7.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                 </table>                               
                                </td>
                            </tr> 
                            
                            <tr><td colspan="2">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                             <tr valign="top">                                                        
                                <td style="width: 161px; padding: 10px 0 0 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: black; text-align: center; ">
                                        <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 18px; color: #F58220; ">Меньшая ресурсоёмкость по сравнению с традиционным посевом*
                                    </p>                                    
                                </td>
                             </tr>
                            <tr>
                                <td style="padding-top: 10px;">
                                    <img src="http://www.lbr.ru/images/kp/76-nta/nta9.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                            <tr valign="top">                                                        
                                <td style="padding: 10px 0 0 0;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                    * Площадь посева 1700 га
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                        </table>
                    </td></tr>          
               
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
            </td>
    </tr>
</table>
<!-- Блок Второй; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/76-nta/nta10.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                                    
                                        <tr>
                                                <td colspan="2">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Преимущества над аналогами:</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                • При заглублении дисковых колтеров (ножей) растительные остатки остаются на поверхности.
                                                            </p>
                                                            
                                                        </td> 
                                                                                                             
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 5px 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                • Одновременное внесение семян и удобрений или только семян.
                                                            </p>
                                                            
                                                        </td> 
                                                                                                             
                                                    </tr>
                                                    
                                                    
                                                                                                       
                                                </table>
                                            </td>
                                        </tr>
                                                <tr>
                                                <td colspan="2">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Критерии климата:</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                засушливая почва, посев по увлажненной почве, неравномерное выпадение осадков.
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                            <span style="font-weight: bold; color: #f58220;">Критерии поля:</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                большие площади, каменистость, неравномерность рельефа (впадины, холмы).
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    
                                                                                                       
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/76-nta/nta11.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                                  
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr><td style="padding: 10px 0;">
                            <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">NTA-3510</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">19; 25</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество сошников, шт.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">55; 40</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес (пустой машины), кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12 246 (c тележкой ADC2350)</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,7</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,3</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортный клиренс, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота (без маркеров), м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,2</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,4 (c тележкой ADC2350)</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Размер шин</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11L x 15</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Перемещение сошника, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25,4</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина посева, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0-9</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Давление на сошник, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45,3-63,5</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Предустановленное давление режущего диска, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">203</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </td></tr>
                                 </table>                               
                                </td>
                            </tr> 
                        </table>
                    </td></tr>  
                <!-- Контент первого блока; -->
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
<!-- Блок Третий; -->
</div>
</body>