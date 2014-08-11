<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
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
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Сеялка точного высева Great Plains YP-1625AHD</a>
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
                                    <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td colspan="2" style="padding: 10px 0 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/right-orange-arrow.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 10px 10px 0 0; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #999999; ">Высокопроизводительная пропашная дисковая сеялка точного высева YP-1625AHD <span style="color: #F58220;">предназначена для посева кукурузы, 
                                                    подсолнечника и сои в том числе по технологии NO-Till.</span> 
                                                    Уникальная конструкция сеялки объединяет мощную раму с сошниками 25-ой серии, которые отличаются высокой точностью высева и гарантируют равномерную всхожесть и повышение урожайности.
                                                </p>
                                            </td>
                                        </tr>                                                                                     
                                    </table>
                                </td>
                            </tr>                            
                            <tr valign="top">
                                <td colspan="2" style="padding: 10px 0 0; text-align: center;">
                                    <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-1.jpg" width="760" style="border: 0;" alt="double-disk">
                                </td>
                            </tr>
                            
                             <tr valign="top">
                                <td style="padding: 10px 0 0;">
                                    <table width="578" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 15px 0 0; text-align: left;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: left; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; font-style: normal; color: #F58220; ">Качественный и точный посев
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 15px 45px 0 0;">
                                               <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Сеялка оборудована, пластиковым бункерам для удобрений объемом 3500 л и индивидуальными ящиками для семян общим объемом 896л., 
                                                    по 56 литров на каждый сошник. 
                                                    В сеялке YP-1625AHD используется воздух для доставки удобрений из бункера к индивидуальному сошнику. 
                                                    Высевающий аппарат - пневматический, работающий на положительном давлении.
                                               </p>
                                            </td>
                                        </tr>                                                                              
                                    </table>
                                </td>
                                <td>
                                    <table width="178" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0;">
                                               <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-2.jpg" width="128" style="border: 0; float: left;" alt="double-disk">
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
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/',
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
                                                        <td style="padding: 0 5px 5px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bolder; text-align: justify; color: #f58220;">
                                                                Особенности конструкции YP-1625AHD
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 5px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-3.jpg" width="165" style="border: 0;" align="right" alt="double-disk">
                                                                <b>Высокая точность посева.</b> 
                                                                Сошники 25-ой серии отличаются высокой точностью высева, имеют длительный срок службы и их легче обслуживать, чем конкурентные аналоги. 
                                                                Конструкция параллелограммного крепления позволяет сохранять оптимальное рабочее положение сошника на любой поверхности 
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 5px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Точное внесение удобрений.</b> 
                                                                Обеспечение превосходной точности внесения сухих удобрений благодаря запатентованной технологии.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 5px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Стандартный механический привод от контактного зубчатого колеса.</b>
                                                            </li>
                                                        </td>                                                        
                                                    </tr>                                                    
                                                    <tr>
                                                        <td style="padding: 15px 5px 0 0;">
                                                           <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-4.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; font-style: italic; ">
                                                                Привод от контактного колеса
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 5px 0 15px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Обеспечение надежной опоры и отличной проходимости.</b> 
                                                                Благодаря шинам с радиусом 46 дюймов достигается отличная проходимость, сеялка имеет надежную опору и небольшую ширину, что исключает наезд на борозду как при работе с одинарными, так и со сдвоенными рядами.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 15px 0 0;">
                                                           <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-5.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 15px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; font-style: italic; ">
                                                                Колеса: 380/90 R46
                                                            </p>
                                                        </td>                                                        
                                                    </tr>                                                                                               
                                                </table>
                                            </td>
                                            <td>
                                                <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding: 0 0 0 25px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Турбо-диски разрезают пожнивные остатки.</b> 
                                                                Режущие турбо диски диаметром 38 см установлены на каждом сошнике и 50,8см. на внесение удобрений. 
                                                                С легкостью режут растительные остатки. 
                                                                Давление регулируется от 120-225 кг в зависимости от установки пружины.
                                                            </li>
                                                        </td>                                                        
                                                    </tr>                                                
                                                    <tr>
                                                        <td style="padding: 0 0 0 15px;">
                                                           <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-6.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 0 0 0 15px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; font-style: italic; ">
                                                                Турбо-диски
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="padding: 10px 0 0 25px;">
                                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                                <b>Обеспечивает безупречное копирование рельефа</b> 
                                                                50 см вверх и 75 вниз.
                                                            </li>
                                                        </td>                                                        
                                                    </tr> 
                                                    <tr>
                                                        <td style="padding: 0 0 0 15px;">
                                                           <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-7.jpg" width="270" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>
                                                     <tr valign="top">
                                                        <td style="padding: 0 0 0 15px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; font-style: italic; ">
                                                                Плавающая сцепка
                                                            </p>
                                                        </td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 0 0 15px;">
                                                           <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                        <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">YP-1625AHD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70 см.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Кол-во рядов</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">16</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Тип высевающего аппарата</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Пневматический, на пложительном давлении</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12,2 м</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,15 м</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная длина</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12,5 м</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Дорожный просвет</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0.56 м</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,8 м</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость семенных ящиков</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">896 л под семена и 3500 л под мин. удобрения</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ход сошника</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">25 см</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина высева</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0 см - 10 см</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Давление на сошник</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-225 кг (5 положений пружины)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9-10 га/час</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность трактора</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">180- 240 л.с.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>     
                                                     <tr>
                                                        <td style="padding: 5px 0 0 15px;">
                                                           <img src="http://www.lbr.ru/images/kp/141-1625ahd/yp1625-8.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                                        </td>
                                                    </tr>                                                                                                                                          
                                                </table>
                                            </td>
                                        </tr> 
                                    </table>
                                </td></tr>           
                            <!-- Ссылка-кнопка подробнее -->
                            <?php
                            Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                                'link' => 'http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vozdelyvanie-propashnykh-kultur/seyalki-tochnogo-vyseva/',
                                'colspan' => 2,
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
             </td>
                </tr>
</table>
            <!-- Блок Второй; -->
            
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;