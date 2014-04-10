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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/697-pnevmaticheskie-seyalki-spartan-607/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пневматическая сеялка Spartan-607</a>
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
                                    <img src="http://www.lbr.ru/images/kp/84-spartan/spartan.jpg" width="760" height="385" style="border: 0; float: left;" alt="Логотип Expom">
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
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #F58220; ">No-till почвообработка и посев
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Точный посев не зависящий от условий
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 0 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="padding: 17px 0 0 10px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: black; text-align: center; ">Прочная конструкция
                                                            </p>
                                                        </td>
                                                    </tr> 
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Особенности сеялки Spartan-607</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                <strong>• Посев в условиях стерни или на увлажненной почве</strong> – турбодиски установлены на отдельной раме, позволяют оператору устанавливать глубину работы режущих дисков.
                                                            </p>
                                                        </td>
                                                    </tr>    
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                <strong>• Точность высева благодаря сошникам на параллелограмме с возможностью хода 24 см.</strong>
                                                                </p>
                                                        </td>
                                                    </tr>       
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                <strong>• Семена при посеве не повреждаются.</strong> Открывающиеся диски со смещением мягко укладывают семена за счет длинной семенной трубки, за которыми следует успокоитель, прижимая семена к дну борозды.
                                                                </p>
                                                        </td>
                                                    </tr>  
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                <strong>• </strong>Контроль глубины посева – с помощью Т-образной рукоятки, установленной на каждом сошнике.</li>
                                                            </p>
                                                        </td>
                                                    </tr>                                                    
                                                </table>
                                </td>
                                <td>
                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Преимущества конструкции</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                • Турбодиски имеют предохранительные пружины, которые установлены независимо от рамы сошников и способствуют лучшему проникновению.
                                                            </span>
                                                            </p>
                                                        </td>
                                                    </tr>    
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                • Возможность снять турбодиски и работать по подготовленной почве.
                                                                </span>
                                                                </p>
                                                        </td>
                                                    </tr>       
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #F58220; text-align: center; ">Копирование поверхностного слоя</span>                                                                
                                                            </p>                                                            
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                                                Конструкция орудий Spartan-607 позволяет сеялке независимо опускаться и подыматься при работе на неровных поверхностях.
                                                                </span>
                                                            </p>
                                                        </td>
                                                    </tr>  
                                                    <tr valign="top">
                                                        <td style="padding: 10px 0;" width="378">
                                                            <img src="http://www.lbr.ru/images/kp/84-spartan/spartan2.jpg" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>                                
                                                    </tr> 
                                                    <tr valign="top">
                                                        <td style="padding: 10px 0;" width="378">
                                                            <img src="http://www.lbr.ru/images/kp/84-spartan/spartan1.jpg" width="378" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                        </td>                                
                                                    </tr> 
                                                    <tr valign="top">                                                        
                                                        <td colspan="2" style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 15px; color: black; text-align: center; ">
                                                                <strong>Подходит для работы на всех типах почв</strong>
                                                                </span>
                                                            </p>
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
                <tr>                    
                    <td colspan="2" style="padding: 10px 20px;">
                         <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; ">Равномерное распределение нагрузки – более гибкая конструкция.</span>
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black;">Вес сеялки перераспределяется при помощи специальной гидравлической системы.</span>                                                                
                         </p>
                    </td>
                </tr>
                <tr>
                <td colspan="2">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="width: 380px; padding-left: 20px;">
                    <img src="http://www.lbr.ru/images/kp/84-spartan/spartan3.jpg" width="378" height="120px" style="border: 0; float: left;" alt="Картинки не отображаются">
                </td>
                <td style="width: 380px; padding-left: 4px;">
                    <img src="http://www.lbr.ru/images/kp/84-spartan/spartan4.jpg" width="378" height="120px" style="border: 0; float: left;" alt="Картинки не отображаются">
                </td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>                    
                    <td colspan="2" style="padding: 5px 20px;">
                         <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black;">По любой дороге</span> 
                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; color: #F58220; text-align: center; ">в транспортном положении сеялка SPARTAN-607 всего 3 метра</span>
                         </p>
                    </td>
                </tr>
                <tr>                    
                    <td colspan="2" style="padding: 0 20px;">
                        <img src="http://www.lbr.ru/images/kp/84-spartan/spartan5.jpg" width="760" height="350px" style="border: 0; float: left;" alt="Картинки не отображаются">
                    </td>
                </tr>
                <tr valign="top">
                <td style="padding: 10px 20px 0;">
                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                    <tbody>
                    <tr>                    
                    <td style="width: 380px;">
                    <img src="http://www.lbr.ru/images/kp/84-spartan/spartan7.jpg" width="378" height="60px" style="border: 0; float: left;" alt="Картинки не отображаются">
                    </td>
                    </tr>                    
                    </tbody>
                    </table>
                </td>
                <td rowspan="2" style="padding-right: 20px; padding-left: 10px; vertical-align: middle;">
                        <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td style="padding: 5px 0 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/84-spartan/spartan6.jpg" width="360" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 10px 20px 0;">
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td width="60%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                    <td width="40%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">SPARTAN-607</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">19</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество сошников</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">32</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Бункер, л</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 по 2885</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                </tr>                                
                            </tbody>
                        </table>
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
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Блок Второй; -->
</div>
</body>