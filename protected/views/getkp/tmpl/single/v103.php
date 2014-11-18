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
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/360-tyukovoj-press-podborshchik-z-511/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пресс-подборщик тюковый Z-511
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/famarol-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/103-z511/103-z511.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Тюковый пресс-подборщик Z-511 предназначен для сбора сена и соломы и прессования их в прямоугольные тюки с обвязкой шпагатом. 
                                                    Сегодня существует достаточное количество желающих приобретать сено именно в прямоугольных тюках, например, конюшни приобретают тюки на подстилку животным.
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
                                            <td colspan="2" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Прямоугольные тюки – качественно спрессованный продукт; удобство хранения и использования.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   В прямоугольных тюках происходит меньшее осыпание сена при прессовании и хранении. 
                                                   Хранить тюки таки формы гораздо удобнее: их можно уложить рядами, и они займут меньше места.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 10px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                    <td style="padding: 5px 10px 0 0;">
                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                            <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">Практически все наши покупатели используют Z-511 
                                                            в том числе и для заготовки удобных компактных тюков для поддержки личных подсобных хозяйств своих работников. 
                                                            В отличие от рулонов, масса которых более 200 кг, небольшие тюки весом от 5 кг удобно переносить и складировать вручную. 
                                                        </p>
                                                        </td>
                                                        <td style="padding: 5px 0 0 0; vertical-align: middle; text-align: right;">
                                                            <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-1.jpg" width="150" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                                        </td>
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    25 000 тюков в сезон без простоев!
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Подача материала в пресс-камеру тюкового прессподборщика осуществляется червячным валом и толкателем. 
                                                   Конструкция пресс-камеры подборщика обеспечивает отсутствие заклиниваний в процессе работы даже при максимальной подаче материала на входе. 
                                                   Материал не собирается в углах и не вываливается обратно.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Тюковый пресс-подборщик Z-511 может работать на высоких скоростях без потерь продукта.
                                                </p>
                                            </td>
                                        </tr> 
                                </table>
                                </td>
                                <td width="380" style="padding: 0 0 0 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        
                                       <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Формирование нужного вам тюка простой регулировкой:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Длина тюка регулируется бесступенчато от 0,3 до 1,3 м. 
                                                   Такие небольшие тюки удобно транспортировать на место хранения с поля.
                                                </li>
                                            </td>
                                        </tr> 
                                         <tr valign="top">                                            
                                            <td style="padding: 5px 10px 0 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Также бесступенчато регулируется и плотность прессования.
                                                </li>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2" style="padding: 15px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Высокие показатели работы обвязывающего механизма
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Вязальный аппарат RASSPE (Германия)</b> легко регулируется и не требует больших затрат времени на обслуживание. 
                                                   Муфта валика обвязки обеспечивает равномерную работу прессующего поршня и игл обвязки.
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-2.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
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
                                    'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/360-tyukovoj-press-podborshchik-z-511/',
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
                                <td width="380" style="max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Адаптация подборщика под любой валок:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-3.jpg" width="210" style="border: 0;" align="right" alt="Картинки не отображаются">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">
                                                   
                                                   <b>Подборщик DEUTZ FAHR (Германия)</b> легко справляется с высоким валком соломы, 
                                                   равно как и с тонким покосом сена. 
                                                   Большой диаметр подборщика с изогнутыми особым образом пальцами препятствует захватыванию инородных предметов и камней, а входной гребень обеспечивает бесперебойную и равномерную подачу подбираемого материала. 
                                                </p>
                                            </td>
                                        </tr>
                                       <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-4.jpg" width="165" style="border: 0;" align="right" alt="Картинки не отображаются">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; font-weight: bold; color: #f58220;">Подборщик дополнительно оборудован сгребающей звездочкой,</span> установленной на его правой боковой стороне. 
                                                   Звездочка направляет на подборщик широко раскинутый покос, обеспечивая чистый подбор материала. 
                                                 
                                                </p>
                                            </td>
                                        </tr>
                                      
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Идеален в комбинации с маломощными тракторами – требуемая мощность трактора от 30 л.с.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">
                                                   По сравнению с аналогичными прессами Z-511 имеет более легкую конструкцию, которая идеально подходит для работы на влажных и песчаных землях. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Точный учет выполняемой работы
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black">
                                                   Пресс-подборщик <b>оборудован счетчиком</b> готовых тюков с возможностью сброса показанный. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Z-511</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1330</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подбора, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">185</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина пресс-камеры, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">46</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота пресс-камеры, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">36</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина тюков, см</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">30-130</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
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
                                        
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-7.jpg" width="380" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                                                       
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px; max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                          <tr>
                                            <td colspan="2" style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; text-align: justify; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Удобная и аккуратная разгрузка тюков:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 0 0 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Из пресс-камеры тюкового пресс-подборщика Z-511 тюк поступает на лоток соскальзывания, который предназначен для укладки тюков на поле. 
                                                   Срок хранения тюка соломы под открытым небом без потери кондиции может достигать двух лет за счет высокой плотности его прессования.
                                                </li>
                                            </td>
                                        </tr>
                                       <tr valign="top">                                            
                                            <td style="padding: 5px 0 0 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   При необходимости можно снять одну из половинок лотка, и тогда тюки будут сваливаться на бок.
                                                </li>
                                                
                                            </td>
                                        </tr>
                                        <tr valign="top">                                            
                                            <td style="padding: 5px 0 15px 15px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify;">
                                                
                                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Опционально возможна установка системы направляющих, которая позволяет грузить тюки в прицеп. 
                                                   Прицеп агрегатируется непосредственно с прессподборщиком с помощью сцепной петли, расположенной на системе направляющих.
                                                </li>
                                            </td>
                                        </tr>                                        
                                         
                                         <tr>
                                            <td colspan="2" style="padding: 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-5.jpg" width="370" height="160" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                       <tr>
                                            <td colspan="2" style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-6.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                      <tr>
                                            <td colspan="2" style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/103-z511/103-z511-8.jpg" width="370" style="border: 0; float: right;"  alt="Картинки не отображаются">
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
                                    'link' => 'http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/360-tyukovoj-press-podborshchik-z-511/',
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