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
                                    <a href="http://www.lbr.ru/tehnika/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/seyalki-yp-825a-16tr/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пневматическая пропашная сеялка точного высева YP-825A-16TR со сдвоенными рядами</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" height="50" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/125-yp825/yp825.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0; vertical-align: middle;">
                                                <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">Посев по No-till
                                                </p>
                                            </td>
                                        </tr>                                        
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 20px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Высев различных видов культур с одновременным внесением удобрений
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 20px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 17px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Простота в эксплуатации
                                                </p>
                                            </td>
                                        </tr>                                                      
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Частоту посева</span>
                                                    обеспечивают сдвоенные ряды, расположенные со смещением 10 см друг относительно друга. 
                                                    Таким образом, расстояние между строчками составляет 20 см, а расстояние между смежными рядами 56 см. 
                                                    При посеве со сдвоенными рядами обеспечивается увеличение урожайности в 1,5 раза. 
                                               </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #F58220; text-align: justify; font-weight: bolder; ">
                                                Частоту посева
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">                                                
                                                    Система подачи семян Air-Pro. 
                                                    Высевающая трубка CLEAR SHOT идеально подходит для точного высева на высокой скорости. 
                                                    Датчик считывает движение семян прямо сквозь высевающую трубку, что повышает точность высева. 
                                                    Воздуховод Air-Pro имеет систему перегородок и заслонок, которая обеспечивает равномерную подачу воздуха ко всем высевающим аппаратам Air-Pro. 
                                               </li>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 15px;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">                                                
                                                    Непрерывный контроль высева с помощью монитора Dickey-john: количество семян на гектар, скорость движения, площадь посева. 
                                               </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #F58220; text-align: justify; font-weight: bolder; ">
                                                Универсальность сеялки
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify; ">                                                
                                                    Широкий выбор высевающих дисков обеспечивает высев любой культуры. 
                                               </p>
                                            </td>
                                        </tr>                                                                                      
                                    </table>
                                </td>
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 10px 0 5px 0;">
                                                <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_1.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Внесение сухих гранулированных удобрений</span>
                                                    в междурядья, ниже зоны высева семян. 
                                                    Это способствует улучшенному и полноценному питанию растений.
                                               </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 15px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bolder; color: #F58220; ">Работа по технологии No-Till</span>
                                                    – разрезающий турбодиск для обработки почвы в зоне высева. 
                                                    Турбодиск подрыхляет (приподымает) почву.
                                               </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td style="padding: 5px 0 5px 0;">
                                                <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_2.jpg" width="380" style="border: 0; float: left;" alt="double-disk">
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
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">


                                        <tr valign="top">
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                   <tr valign="top">                                                        
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; color: #F58220; text-align: justify; font-weight: bolder; ">
                                                            Преимущества конструкции:
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="padding: 0 15px 0 15px;">
                                                    <table>
                                                    <tr valign="top">
                                                        <td colspan="2" style="padding: 10px 5px 0 0;">
                                                             <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            <b>Высевающие аппараты Air-Pro®</b> с позитивным давлением. Семена, попадая в <b>Air-Pro®</b>, потоком воздуха прижимаются к пазу высевающего диска,                                              
                                                             </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 5px 0 0;">
                                                             <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            затем высевающий диск поворачивается и щетки удерживают семена в выемках диска до тех пор, пока они не будут сброшены в высевающую трубку CLEAR SHOT, откуда они под собственным весом попадают в борозду, 
                                                                            что выгодно отличает УР-825А-16TR от вакуумных аппаратов.                                              
                                                             </p>
                                                        </td>
                                                        <td style="padding: 0 0 0 5px;">
                                                            <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_3.jpg" width="130" style="border: 0;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    </table>
                                                    </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td colspan="2" style="padding: 10px 15px 0 15px;">
                                                             <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            <b>Высевающие диски</b> Great Plains выполнены из специальных антистатических полимерных материалов.                                              
                                                             </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td colspan="2" style="padding: 10px 15px 0 15px;">
                                                             <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                            <b>Полимерные семенные ящики</b> обеспечивают непрерывное поступление семян под действием силы тяжести в высевающие аппараты Air-Pro(R). 
                                                                            Емкость каждого ящика: 56,4 л.                                              
                                                             </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_4.jpg" width="370" style="border: 0;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                <b>Приводное колесо.</b> Агрессивное стальное колесо намного надежнее, чем остальные типы контактного привода.                                                                                                 
                                                            </li>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0 15px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                <b>Маркеры.</b> Гидравлические маркеры с зубчатым диском имеют прочную конструкцию.                                                                                                 
                                                            </li>
                                                        </td>
                                                    </tr>   
                                                    <tr valign="top">
                                                        <td style="padding: 10px 15px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_8.jpg" width="370" style="border: 0;" alt="double-disk">
                                                        </td>
                                                    </tr>             
                                                </table>
                                            </td>
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    
                                                    <tr>
                                                        <td style="padding: 0;">
                                                            <img src="http://www.lbr.ru/images/kp/125-yp825/yp825_5.jpg" width="370" style="border: 0;" alt="double-disk">
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td style="padding: 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                                <b>Сеялка также укомплектована дисковыми турбоножами и очистителями линии сева для обработки почвы в зоне высева, что делает ее универсальной сеялкой для использования в нулевой технологии сева.</b>                                                                                       
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                    <tr valign="top">
                                                        <td style="padding: 5px 0 0 0;">
                                                            <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="60%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                        <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">YP-825A-16TR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Тип</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">прицепная</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">76</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина высева, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0-9</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Шаг регулировки глубины высева, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0,5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем семенных ящиков, л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">896 (16 х 56)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем ящиков для удобрений, л</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1000 (4 х250)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Скорость высева, км/ч</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8-11</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Привод высевающих аппаратов</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">механический, 2 приводных колеса</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вертикальное перемещение сошника</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25 см</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Давление на сошник, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40– 80</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">
                                                                        <table>
                                                                        <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black;">
                                                                        Давление на турбо-нож, кг 
                                                                        </td>
                                                                        <td>
                                                                        <img src="http://www.lbr.ru/images/kp/123-pd/pd6.jpg" alt="turbo" width="70" />
                                                                        </td>
                                                                        </tr>
                                                                        </table>
                                                                        </td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">185-227</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">
                                                                        <table>
                                                                        <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black;">
                                                                        Прикатывающие колеса 
                                                                        </td>
                                                                        <td style="text-align: right; padding: 0 0 0 30px;">
                                                                        <img src="http://www.lbr.ru/images/kp/123-pd/pd7.jpg" alt="turbo" width="50" style="float: right;" />
                                                                        </td>
                                                                        </tr>
                                                                        </table>
                                                                        </td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">V-образные прикатывающие колеса с регулировкой усилия и прижимателем</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная длина, м</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4.6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес с пустыми бункерами, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 950</td>
                                                                    </tr>                                                                   
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Необходимая мощность трактора, л.с.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150-190</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>                                                        
                                                    </tr> 
                                                    <tr valign="top">
                                                    <td style="padding: 5px 0px 0px 0px;">
                                                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                                        </p> 
                                                    </td>
                                                </tr>
                                                </table>
                                            </td>
                                        </tr> 
                                    </table>
                                </td></tr>           
                            
                        </table>
                        <tr valign="top">
                    <td colspan="2" style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>  
                        <!-- Внутренности блока; -->
                    </td>
                </tr>
</table>
</td>
</tr>
</table>
            <!-- Блок Второй; -->
</div>
</body>
</html>