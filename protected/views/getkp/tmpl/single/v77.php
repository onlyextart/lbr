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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/245-diskovye-seyalki-single-disk/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пневматическая сеялка Amity Single Disc
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/amity-for-site.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/77-single-disk/amity.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <tr><td style="padding: 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Максимальное сокращение времени на посев
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Скорость посева до 15-16 км/ч (при равномерной укладке - средняя производительности 200 га в сутки).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Даже если посев происходит при наличии очень влажных пожнивных остатков проблем не возникает. 
                                                    Single Disc смещает пожнивные остатки и не затаскивает их в посевное ложе. 
                                                    Исключает забивания стерни в борозду и обеспечивает открытие борозды.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Благодаря возможности изменения давления открывающих дисков на грунт из кабины трактора не требуется ручная настройка открывающих дисков, что дает возможность в процессе контролировать работу сеялки в изменяющихся полевых условиях.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity1.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                       
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Качественный посев
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Конструкция сеялки предотвращает уплотнение стенок семенного ложа.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Оставляет 15–сантиметровую темную полосу для облегчения прогрева почвы.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Дозатор максимально бережно обращается с семенным материалом
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity2.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Простая конструкция - простой уход за сеялкой
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Наименьшее количество движущихся частей
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Простое ежедневное обслуживание (по две прессмасленки на ходовой тандем каждые 25 часов)
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; ">
                                                   • 
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Ежегодная смазка подшипников на всех дисках и ступицах прикатывающих колес
                                                </p>
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
                                    'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/668-press-podborshchiki-columbia/',
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
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Универсальность сеялки</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Превосходно подходит для мелких зерновых культур, рапса, сои даже с большим количеством пожнивных остатков.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity3.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                       <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Точная подача любого гранулированного удобрения</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Дозатор выполняет точную подачу любого гранулированного удобрения, при этом не требует обслуживания.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">    
                                        <td colspan="2" style="padding: 10px 0 0;">
                        <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12,2</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункера, л</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9 865</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье смежные диски (между рядами), см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">15 (23)</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Скорость работы, км/ч</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10-15</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 330 л.с.</td>
                                </tr>                               
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                </tr>                                
                            </tbody>
                        </table>
                    </td>
                       </tr>             
                        <tr valign="top">
                            <td colspan="2" style="padding: 5px 0px 0px 0px;">
                                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                </p> 
                            </td>
                        </tr>
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity6.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        
                                    </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity4.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>                                        
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Долговечный бункер-дозатор</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Сделан из нержавеющей стали, не подвергается коррозии.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity5.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Критерии климата:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Посев в сухих условиях, при увлажненной почве, неравномерном выпадении осадков.
                                                </p>
                                            </td>
                                        </tr>     
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Критерии поля:</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Большие площади, каменистость, неравномерность рельефа (впадины, холмы), большое количество пожнивных остатков (даже при сильной увлажненности).
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/77-single-disk/amity7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                                    'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/668-press-podborshchiki-columbia/',
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