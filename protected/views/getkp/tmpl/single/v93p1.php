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
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/press-podborshchiki/668-press-podborshchiki-columbia/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пресс-подборщик рулонный Колумбия Р10
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/kp/93-kolambia/wolagri-logo.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia.jpg" width="760" height="330" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                                                    Пресс-подборщики Колумбия Р10 предназначены для подбора и прессования в рулоны скошенной травяной массы независимо от ее влажности с обвязкой рулонов шпагатом.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Заготовка одной универсальной машиной всех видов кормов - упаковка как сухого, так и влажного продукта:
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
                                                    сенаж из любых однолетних и многолетних трав, в том числе просовых культур,
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
                                                    сено,
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
                                                    солома,
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
                                                    лен на паклю.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Высокая плотность прессования травяной массы независимо от ее влажности.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Классическая конструкция закрытой прессовальной камеры постоянного объёма отличается возможностью работы при высоких давлениях, достигая хорошего соотношения объем-вес рулона. 
                                                    В закрытой камере происходит идеальное вращение скошенных культур, удерживается травяная масса, включая листья. 
                                                    На выходе получаем рулоны идеальной ровной формы, которая не нарушается при транспортировке и складировании. 
                                                    Полученные рулоны можно хранить на протяжении длительного времени.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <!-- Ссылка-кнопка подробнее -->
                                        
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia1.jpg" width="247" height="125" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                </td>
                                <td style="padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia2.jpg" width="247" height="125" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                </td>
                                <td style="padding: 10px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia3.jpg" width="247" height="125" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Масса рулона до 200 кг
                                                </p>
                                </td>
                                <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Масса рулона до 350 кг
                                                </p>
                                </td>
                                <td style="padding: 0 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Масса рулона до 650 кг
                                                </p>
                                </td>
                            </tr>
                        </table>
                            </td>
                            </tr>
                            <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Подготовка качественных рулонов сенажа для их дальнейшей упаковки в пленку.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                   Равномерная подача продукта в камеру прессования и высокая плотность позволяют получить идеальный результат при заготовке сенажа. 
                                                   Даже при неблагоприятной погоде пресс-подборщики Колумбия помогают гарантированно заготовить и сохранить первоклассный травяной корм без применения консервантов.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia4.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                
                                            </td>
                                        </tr>
                                        
                                        <!-- Ссылка-кнопка подробнее -->
                                        
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
                 <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Тщательный подбор травяной массы без потерь. 
                                                    Работа в различных условиях: на ровной почве или на полях с сильным уклоном.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Выбор укладчика под ваши условия эксплуатации: гребенной или роторный.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Подборщик шириной 162 см в комплектации с гребенным укладчиком</b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia5.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Укладчик с возвратно-поступательным механизмом обеспечивает оптимальную и деликатную подачу продукта. 
                                                    Подача продукта не затрудняется даже при работе на сложных полях и при работе с “тяжелым” продуктом.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Гребенной укладчик отлично справляется с сеном из бобовых культур даже в коротком и рассыпчатом виде. 
                                                    Эта система сводит к минимуму потерю листвы, которая содержит большую часть питательных веществ.
                                                </p>
                                            </td>
                                        </tr>                                         
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 10px 0 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Подборщик шириной 193 см в комплектации с роторным укладчиком</b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia7.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Роторный укладчик, благодаря большому количеству пальцев (9 рядов) двух разных размеров гарантирует постоянную и однородную подачу продукта в камеру прессования в пользу формирования однородного и высокоплотного рулона.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Высокая производительность в работе – </span>
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">40 РУЛОНОВ В ЧАС!</span>
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">ОДИН РУЛОН ЗА 1,5 МИНУТЫ.</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top"> 
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia6.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">Удобство эксплуатации пресс-подборщика и сокращение времени на отдельные операции:</span>
                                                </p>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 0 0 5px;">
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                <tr>
                                                    <td style="padding: 0 5px 5px;">
                                                        <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia8.jpg" width="180" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                    </td>
                                                    <td style="padding: 0 0 5px 5px;">
                                                        <p style="width: 175px; margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                        • <b>Рычаг управления с тремя функциями:</b> 
                                                        открытие-закрытие бункера, 
                                                        поднятие-опускание подборщика, увязка.
                                                        </p>
                                                
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0 5px 5px;">
                                                        <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia9.jpg" width="180" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                    </td>
                                                    <td style="padding: 0 0 5px 5px;">
                                                        <p style="width: 175px; margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                        • <b>Толкатель рулонов:</b> отталкивает готовый рулон во время разгрузки от радиуса закрытия бункера во избежание дополнительных маневров с трактором, 
                                                        что сокращает время выгрузки рулона.
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
                    <tr>
                        <td style="padding: 10px 20px 0;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                <span style="font-weight: bold; color: #f58220;">Тщательный подбор травяной массы без потерь. 
                                    Простой и быстрый обматывающий механизм.</span>
                            </p>
                        </td>
                    </tr>
                    <tr valign="top"> 
                        <td style="padding: 10px 20px 0;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                Все настройки, связанные с увязчиком, выполняются просто и удобно из кабины трактора. 
                                    Можно выбирать количество оборотов увязки. 
                                        Система увязки находится в передней части машины, всегда в поле зрения оператора и на уровне головы для легкого обзора.
                            </p>
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                            Регулирование хода увязки производится при помощи ременного вариатора, управляемого маховиком, установленным на боковой части машины. 
                            Бобины со шпагатом устанавливаются в отделении для вяжущего материала двумя парами в один ряд.
                            </p>
                        </td>
                    </tr>
                    <tr valign="top"> 
                        <td style="padding: 10px 20px 0;">
                            <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia10.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                    </tr>                              
                    
                    <!-- Ссылка-кнопка подробнее -->
                    
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</div>
<!-- Блок Второй; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                 
                    
                    
                    <tr valign="top"> 
                        <td style="padding: 0 20px 0;">
                            <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia11.jpg" width="760" height="340px" style="border: 0; float: left;" alt="Картинки не отображаются">
                        </td>
                    </tr>                              
                    
                    <tr><td style="padding: 10px 20px 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Колумбия Р10 Парма</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Колумбия Р10 Рио</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр рулона, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина рулона, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина подборщика, см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">162</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">193</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Система подачи</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">укладчик с возвратно-поступающим движением</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">роторный укладчик</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Габариты (длина-ширина-высота), см</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">340x224x185</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">350x243x208</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Камера прессования</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">цепочно-планчатая фиксированная камера</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">цепочно-планчатая фиксированная камера</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1890</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2140</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:10px; font-weight: bold;">*</span></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </td></tr>
            <tr valign="top">
            <td style="padding: 5px 20px 0px 20px;">
                <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                    * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                </p> 
            </td>
            </tr>
                    <tr valign="top"> 
                        <td style="padding: 0 20px 0;">
                            <img src="http://www.lbr.ru/images/kp/93-kolambia/kolambia12.jpg" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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
</div>
</body>