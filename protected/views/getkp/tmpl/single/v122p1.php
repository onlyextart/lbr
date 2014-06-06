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
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                            <td style="padding: 0 10px 3px 20px; text-align: left;" align="left">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-logo.jpg" width="300" style="border: 0; float: left;" alt="Логотип Dieci">
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <p style="font-size: 14px; text-align: center; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        ПРЕИМУЩЕСТВА ТЕЛЕСКОПИЧЕСКОГО ПОГРУЗЧИКА
                                    </p>
                                    <p style="margin: 0; font-size: 35px; text-align: center; font-weight: bolder; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        DIECI AGRI STAR 37.7
                                    </p>
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
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                    <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center; padding: 10px 0 0;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci1.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="700" style="padding: 20px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci2.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci3.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci4.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci5.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td></tr>
                                           
                    
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci6.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci7.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci8.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci9.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td></tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Третий; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Четвертый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci10.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci11.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci12.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci13.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci14.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr> 
                        </table>
                    </td></tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Четвертый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Пятый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="760" style="padding: 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci15.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="760" style="padding: 10px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-proizvod.jpg" width="760" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>  
                            <tr valign="top">
                                <td width="700" style="padding: 0 40px; text-align: center;">
                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">                                                   
                                        Dieci - узкоспециализированная компания по производству телескопических погрузчиков, которая первой в Европе начала производство погрузчиков в 1982 году. 
                                        На сегодняшний день компания имеет самый большой модельный ряд в мире, который составляет 110 погрузчиков. 
                                        Для изготовления своих погрузчиков, Dieci использует комплектующие только мировых производителей - лидеров в своей сфере, таких как <b>Bosch, Danfos, Dana Spycer, Iveco, Perkins, Sauer Bibus.</b>
                                    
                                    </p>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td width="760" style="padding: 5px 0 0 20px; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/122-dieci/dieci16.jpg" width="740" style="border: 0;" alt="Изображения не отображаются">
                                </td>
                            </tr>                           
                        </table>
                    </td></tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Пятый; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Шестой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-komfort.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Самая большая дверь среди аналогичной продукции обеспечивает легкий доступ к водительскому месту. 
                                                   Внутри салона все служит для облегчения работы оператора. 
                                                   Благодаря подлокотнику на правой панели, позволяющему уменьшить напряжение руки, достигается наилучший доступ к джойстику. 
                                                   Звуконепроницаемость, регулируемый по высоте и глубине руль, электрический стеклоподъемник, проемы для вещей позволяют работать в условиях полного комфорта. 
                                                   Оптимальное распределение вентиляционных решеток повышают эффективность системы охлаждения и кондиционирования воздуха, обеспечивая хорошее распространение воздуха внутри салона и позволяя избежать проблем с перегревом и задымлением. 
                                                   Открываемая крыша, устанавливаемая серийно на всех моделях, обеспечивает наилучшее вентилирование во время движения.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci17.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-obzor.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Запатентованная кабина позволяет обеспечить 360 градусный обзор благодаря яйцеобразной форме кабины и приподнятому сиденью. 
                                                   Также имеется 2 зеркала заднего вида, которые не оставляют по бокам «мертвых зон».                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci18.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                                         
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px; max-height: 876px;">
                                    <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                          <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-design.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Запатентованная кабина позволяет обеспечить 360 градусный обзор благодаря яйцеобразной форме кабины и приподнятому сиденью. 
                                                   Также имеется 2 зеркала заднего вида, которые не оставляют по бокам «мертвых зон».                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci19.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-security.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Для обеспечения максимальной безопасности все модели машины оборудованы электронной системой, позволяющей держать под постоянным контролем нагрузку на вилы или на другое оборудование во время работы. 
                                                   Ограничитель нагрузки обеспечивает гибкое и точное управление как серийным, так и специальным оборудованием.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci20.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-price.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   <b>Завод Dieci - самый современный и роботизированный завод</b> по производству телескопических погрузчиков во всем мире! 
                                                   Благодаря максимальной роботизации удалось снизить затраты по производству погрузчиков, а значит и стоимость самих погрузчиков!                                                                                                     
                                                </p>
                                            </td>
                                        </tr> 
                                    </table>                                    
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
<!-- Блок Шестой; -->
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Седьмой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-lbr.jpg" width="720" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Компания ЛБР является официальным дилером телескопических погрузчиков с 2006 года! 
                                                   За все годы компания продала более 400 шт. погрузчиков по всей России. 
                                                   С 2012 года ЛБР является эксклюзивным дилером сельскохозяйственных погрузчиков. 
                                                   Компания имеет 23 филиала по всей России, что позволяет делиться опытом по сервисному обслуживанию между филиалами.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci21.jpg" width="720" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                        </table>
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="max-height: 876px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-spare.jpg" width="370" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   Каждый филиал ЛБР имеет свой склад комплектов для проведения ТО, а также основных з/ч. 
                                                   На нашем логистическом центре в Смоленске хранится з/ч и узлов в сборе для погрузчиков на сумму свыше 20 млн руб, 
                                                   что позволяет поставлять з/ч к вышедшему из строя погрузчику в кратчайшие сроки.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci22.jpg" width="350" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                                  
                                </table>
                                </td>
                                <td width="380" style="padding-left: 10px; max-height: 876px;">
                                    <table width="360" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                          <tr valign="top">                                            
                                            <td style="padding: 15px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci-servise.jpg" width="330" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 10px 0 30px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                   На каждом филиале находятся инженеры, прошедшие обучение на заводе Dieci и получившие там аттестацию. 
                                                   Это гарантирует проведение ТО и ремонтных работ в кратчайшие сроки.                                                                                                     
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td colspan="2" style="padding: 20px 10px 0 30px;">
                                                <img src="http://www.lbr.ru/images/kp/122-dieci/dieci23.jpg" width="320" style="border: 0; float: left;"  alt="Картинки не отображаются">
                                            </td>
                                        </tr> 
                                        
                                    </table>                                    
                                </td>
                            </tr>                        
                        </table>
                    </td></tr>
                    </td></tr>
                                           
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
<!-- Блок Седьмой -->
</div>
</body>
</html>