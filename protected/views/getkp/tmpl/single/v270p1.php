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
                <!-- Контент первого блока: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
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
                <tr><td style="padding: 0px 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            
                            <tr valign="top">                                
                                <td width="760" style="padding: 5px 0px 0px 10px;">
                                    <table width="750" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:5px 0px 10px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black; ">
                                                    <b>СЗП 3,6 В</b> - сеялка зернотуковая прессовая предназначена для рядового посева семян зер-
                                                    новых, зернобобовых культур с одновременным внесением в засеваемые рядки гранулиро-
                                                    ванных минеральных удобрений.
                                                </p>
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0;">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-line1.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>   
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 15px; padding-bottom: 10px;" width="250" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/zn3.png" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding-left: 15px; padding-bottom: 10px;" width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/zn3.png" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" valign="top" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Объем бункера для семян и удобрений увеличен в 1,5 раза:
                                                    туковые - 400 дм3, зерновые - 600 дм3.
                                                </p>
                                            </td>
                                            <td width="250"  style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Бесступенчатый механизм передач (вариатор)
                                                    Обеспечивает легкую и быструю регулировку
                                                    норм высева семян и удобрений.
                                                    Оснащение семенных и туковых высевающих
                                                    аппаратов сеялки вариаторами, обеспечивает
                                                    плавное регулирование.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                                                      
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-2.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <tr>
                    <td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 15px; padding-bottom: 10px;" width="250" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/zn3.png" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding-left: 15px; padding-bottom: 10px;" width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/zn3.png" width="50" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="250" valign="top" style="padding: 0 15px;">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Cокращение времени на посев
                                                    норм высева и значительно упрощает и
                                                    сокращает время подготовки к работе;
                                                </p>
                                            </td>
                                            <td width="250"  style="padding: 0 15px;">
                                                <li style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">Зерновые и туковые высевающие аппараты
                                                    выполненные из полимерного материала.</li>
                                                    <li style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">Двухдисковые сошники из стали, которая
                                                    содержит бор.</li>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0;">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-4.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 5px 0 0;" aling="center">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-line.jpg" width="760" style="border: 0;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0px 0 0px;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding-left: 15px;" width="300" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-5.jpg" width="300" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding-left: 15px;" width="250" valign="top" align="center">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-6.jpg" width="250" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                        
                                    </table>
                                </td>
                            </tr>
                                                      
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;" aling="center">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-line2.jpg" width="760" style="border: 0;" alt="Картинки не отображаются">
                                </td>
                            </tr>                     
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">                                
                                <td width="760" style="padding: 5px 0px 0px 10px;">
                                    <table width="750" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding:5px 0px;" >
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:black; ">
                                                    ДИСКОВЫЕ МЕТАЛЛИЧЕСКИЕ КАТКИ ДЛЯ ПРЕССОВАНИЯ (СЗП 01.000 ПРИКАТЫВАЮЩИЕ
                                                    КАТКИ ДЛЯ СЗП (023 5566 7300 000 000) СОБРАНЫ В ЧЕТЫРЕ СЕКЦИИ.
                                                    Секции с помощью вилок присоединяются шарнирно к раме сеялки. Такое присоедине-
                                                    ние секций катков к раме дает возможность каткам копировать рельеф поля.
                                                    Крайние секции катков служат для привода валов высевающих аппаратов.
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
                    <td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;" aling="center">
                                    <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-line.jpg" width="760" style="border: 0;" alt="Картинки не отображаются">
                                </td>
                            </tr>                     
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td width="300" valign="top" align="center" style="padding-right: 30px;">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-7.jpg" width="300" style="border: 0; padding-right: 10px;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="450" valign="top" align="center">
                                                <li style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Прессование почвы в рядках производится с
                                                    целью создания контакта между семенами и
                                                    влажной почвой на дне борозд, обеспечивает
                                                    капиллярный подъем влаги в плотных зонах, что
                                                    создает благоприятные условия для более ранне-
                                                    го и дружного прорастания семян при посеве в
                                                    засушливых районах и в районах, подверженных
                                                    ветровой эрозии почвы.                                                   
                                                </li>
                                                <li style="margin: 0px; padding: 10px 0 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    Газообмен осуществляется благодаря откры-
                                                    тым зонам, что способствует не только более
                                                    раннему прорастанию семян, но и гибели сорня-
                                                    ков в неуплотненных холмиках.                                                   
                                                </li>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>                
            </table>
            <!-- Внутренности блока; -->
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
                <tr>
                    <td style="padding: 10px 0px 0 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td rowspan="2" width="300" valign="top" align="center" style="padding-right: 30px;">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/v270-8.jpg" width="300" style="border: 0; padding-right: 10px;" alt="Картинки не отображаются">
                                            </td>
                                            <td width="450" valign="top">
                                                <img src="http://www.lbr.ru/images/kp/270-3.6b/zn4.png" width="30" style="border: 0; padding-right: 10px; float: left;" alt="Картинки не отображаются">
                                                <span style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold; text-align:justify; color: #EE1C25; ">
                                                    ШИРОКОЗАХВАТНЫЙ КОМПЛЕКС ИЗ ТРЕХ СЕЯЛОК                                                    
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>                                            
                                            <td width="450" valign="top" align="center">
                                                <p style="margin: 0px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align:justify; color: black; ">
                                                    В основе конструкции сеялки лежит модульный
                                                    принцип. При помощи сцепки СП-11Г с маркером
                                                    можно создавать широкозахватные посевные
                                                    агрегаты из трех сеялок. Сеялки в агрегате
                                                    соединяются между собой по шеренговой
                                                    схеме.                                                  
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
                    <td style="padding: 10px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                         <tr style="padding: 5px;">                               
                             <td style="padding: 5px;">
                                 <p style="margin: 0; color: #58585A; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center;">
                                     ТРЕБУЕМАЯ МОЩНОСТЬ ТРАКТОРА ДЛЯ АГРЕГАТИРОВАНИЯ 3-Х СЕЯЛОК В СЦЕПКЕ – 150 Л.С.
                                 </p>
                             </td>
                         </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px 10px 0px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                         <tr style="padding: 5px;">                               
                             <td style="padding: 5px;">
                                 <p style="margin: 0; color: black; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold; text-align: center;">
                                     ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ:
                                 </p>
                             </td>
                         </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr valign="top">
                    <td  style="padding: 0px 20px;">
                        <table width="400" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>                                                                    
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов дисковых сошников, шт.</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между рядками, см</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Нормы высева:</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для семян</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15-400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для удобрений, кг/га</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25-200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/ч</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,2-5,4</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина заделки дисковых сошников, мм</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40-80</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункера:</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для семян, дм<sup>3</sup></td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">600</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">-для туков, дм<sup>3</sup></td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">400</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с .</td>
                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">65</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;">Цена с НДС</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #ececec;background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Внутренности блока; -->
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
<!-- Блок Третий; -->
</div>
</body>
</html>
