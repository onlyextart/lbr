<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<div class="table w-800">
    <!-- Шапка -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 10px 20px 0px 20px;">
                            <img src="http://www.lbr.ru/images/kp/148-etr/header.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                        </td>
                    </tr>                                
                </table>
            </td>
        </tr>
    </table>                
    <!-- Блок Первый: -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <!-- Внутренности блока: -->
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <!-- Заголовок со ссылкой и логотипом: -->
                    <tr><td style="padding: 0 20px 10px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                                <tr>
                                    <td style="padding-bottom: 3px; text-align: justify;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                            Плуги</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/323-plugi-oborotnye-navesnye-ibis/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Плуги оборотные навесные Ibis</a>
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Заголовок со ссылкой и логотипом; -->
                    <!-- Контент первого блока: -->                
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td style="padding: 10px 0 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0;">
                                                    <img src="http://www.lbr.ru/images/kp/148-etr/etr.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <tr>
                                                    <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info1']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 5px 0;">
                                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                        <tbody>
                                                            <tr>
                                                                <td width="46%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">M 2+1</td>
                                                                <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L 3+1</td>
                                                                <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L 4+1</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">700</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1030</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1190</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вид защиты</td>
                                                                <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">болтовая</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70-90</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-110</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110-140</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>                                                                                                                           
                                        </table>
                                    </td>
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 10px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                                        <b>Подберем плуг под любую марку и мощность трактора:</b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 25px;">            
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                                70-110 л.с. – 3 корпуса (2+1)
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                                90-150 л.с. – 4 корпуса (3+1)
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                                110-180 л.с. – 5 корпусов (4+1)
                                            </li>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; font-style: italic; ">
                                            Плуг отлично подходит и под тракторы отечественного производства: адаптированная гидравлика и небольшой вес орудия.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                            <b>Высокое качество обработки почвы</b>: стабильный оборот пласта, точная заделка растительных остатков, уменьшенное сопротивление при вспашке.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                            <b>Специально под ваш тип почвы:</b> 4 серии плугов и 3 системы защиты.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                            <b>Экономия ГСМ при вспашке</b> – за счет отсутствия «пустых» проездов трактора по краям поля (оборотная конструкция плуга).
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                            <b>Подбор комплектации под ваши условия эксплуатации:</b> ажурные отвалы, комплект предплужников, резиновое опорно-транспортное колесо, прикатывающий каток Terra.
                                        </p>
                                    </td>
                                </tr>


                            </table>                               
                        </td>
                    </tr> 
                </table>
            </td></tr> 

        <tr><td colspan="2" style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                    <tr>
                        <td style="padding-bottom: 3px;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/324-plugi-oborotnye-navesnye-vis/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Плуги оборотные полунавесные VIS</a>
                            </a>
                        </td>
                        <td style="padding-bottom: 3px;">
                            <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                        </td>
                    </tr>
                </table>
            </td></tr> 
        <tr><td colspan="2" style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                    <tr valign="top">
                        <td style="padding: 10px 0 0;">
                            <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0;">
                                        <img src="http://www.lbr.ru/images/kp/148-etr/etr-1.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                    </td>
                                </tr>
                                <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>                                                                                                                           
                            </table>
                        </td>
                        <td>
                            <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 10px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; line-height: 12pt">
                                            <b>Подбор серии плуга под требуемые условия работы и площади:</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 0px 0 0 25px;">            
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify;line-height: 12pt ">
                                    плуги от 4 до 9 корпусов.
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify;line-height: 12pt ">
                                    серия L – 120-180 л.с.
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify;line-height: 12pt ">
                                    серия XL и MX – 180-300 л.с.
                                </li>
                        </td>
                    </tr>

                    
                    <tr valign="top">                                                        
                        <td style="padding: 2px 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; line-height: 12pt ">
                                <b>Качественно обработанная поверхность почвы:</b> отличный оборот пласта, точная заделка растительных остатков, низкое сопротивление при вспашке благодаря корпусам (отвалам) плуга
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 2px 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; line-height: 12pt">
                                Мощная надежная рама из сплошной трубы повышенной прочности <b>позволяет монтировать до 9 корпусов, обеспечивает стабильность плуга во время работы.</b>
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding:2px 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; line-height: 12pt">
                                <b>Надежность работы даже на сложных почвах – 2 системы защиты корпуса:</b> болтовая и рессорная.
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
                <td style="padding: 0;">
                    <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0 0;">
                                <table width="550" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Vis L 4+1</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Vis L 5+1</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Vis XL 7+1</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Vis MX 8+1</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 410</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 665</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3 380</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3 600</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вид защиты</td>
                                            <td colspan="4" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">болтовая</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                        </tr>  
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-160</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-180</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-310</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-310</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="padding: 0px 0 0 10px;">
                                <table width="200" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 10px;">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; color: black; text-align: justify; ">
                                                <b>Подбор комплектации под ваши условия эксплуатации:</b> ажурные отвалы, комплект предплужников, переднее опорное колесо (для агрегатирования с тракторами К 700 и Т 150).
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
</table>
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
                    <tr><td style="padding: 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr><td style="padding: 0;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                            <tr>
                                                <td style="padding-bottom: 3px;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/322-plugi-polunavesnye-oborotnye-hektor/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        Полунавесной оборотный плуг Hektor</a>
                                                    </a>
                                                </td>
                                                <td style="padding-bottom: 3px;">
                                                    <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                </td>
                                            </tr>
                                        </table>
                                    </td></tr> 
                                <tr><td style="padding: 0 20px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                            <tr valign="top">
                                                <td style="padding: 10px 0 0;">
                                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <img src="http://www.lbr.ru/images/kp/148-etr/etr-2.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                            </td>
                                                        </tr>
                                                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                            <tr>
                                                                <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                                        <?php echo $data['product_info1']; ?>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 10px 0 0 0;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Точное управление плугом в процессе работы по глубине пахоты</b> благодаря полунавесному колесу большого диаметра (диаметром 980 мм и 500 мм шириной) при низком давлении на грунт.
                                                                </p>
                                                            </td>
                                                        </tr>                                                                                                                                                                
                                                    </table>
                                                </td>
                                                <td>
                                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 10px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Надежная рама</b> – сечение 150х150 мм с толщиной стенки 12 мм!
                                                                </p>
                                                            </td>
                                                        </tr>  
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 10px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Простая и плавная регулировка плуга</b> - механическая изменение ширины захвата (4 ступени).
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 0 0 0 10px;">
                                                                <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="46%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Hektor <br>1000, 6</td>
                                                                            <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Hektor <br>1000, 8</td>
                                                                            <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Hektor <br>1000, 9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3070</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3610</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3880</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество корпусов</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6 (5+1)</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8 (7+1)</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9 (8+1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата на корпус, см</td>
                                                                            <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">36/40/44/48</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота рамы, см</td>
                                                                            <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">76/82</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">180</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">240</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">270</td>
                                                                        </tr>                    
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>                                          
                                                    </table>                               
                                                </td>
                                            </tr> 
                                        </table>
                                    </td></tr> 
                                <tr><td style="padding: 0;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                            <tr>
                                                <td style="padding-bottom: 3px;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/321-plugi-polunavesnye-oborotnye-vn-plus-herkules/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        Полунавесной оборотный плуг Herkules</a>
                                                    </a>
                                                </td>
                                                <td style="padding-bottom: 3px;">
                                                    <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                </td>
                                            </tr>
                                        </table>
                                    </td></tr> 
                                <tr><td style="padding: 0 20px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">
                                                <td style="padding: 10px 0 0;">
                                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <img src="http://www.lbr.ru/images/kp/148-etr/etr-3.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                            </td>
                                                        </tr>
                                                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                            <tr>
                                                                <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                                        <?php echo $data['product_info1']; ?>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 10px 0 0 0;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Мощная рама</b> – сечение 150х250 мм с толщиной стенки 12 мм!
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 2px 0 0 0;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Точное копирование поверхности поля даже при сложном рельефе.</b>
                                                                </p>
                                                            </td>
                                                        </tr>                                                                                                                                                                
                                                    </table>
                                                </td>
                                                <td>
                                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 10px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Исполнение плуга «ПО ПОЛЮ» («on land»):</b>
                                                                </p>
                                                            </td>
                                                        </tr>  
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 0 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    В исполнении «ПО ПОЛЮ» опорное колесо двигается перед плугом в борозде. 
                                                                    Таким образом, достигается оптимальный контроль глубины, исключается опрокидывание агрегата через продольную ось. 
                                                                    Надежная полностью гидравлическая регулировка качения для более легкого оборота плуга.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 0 0 0 10px;">
                                                                <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="70%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td width="30%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Herkules, 9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество корпусов</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Шаг корпусов, см</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота рамы, см</td>
                                                                            <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">82, плуги ST- 78</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата на корпус, см</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">36/40/44/48</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280</td>
                                                                        </tr>                    
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>                                          
                                                    </table>                               
                                                </td>
                                            </tr> 
                                        </table>
                                    </td></tr>
                                <tr><td style="padding: 10px 20px 10px 20px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                                            <tr>
                                                <td style="padding-bottom: 3px; text-align: justify;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                                        СЕЯЛКИ</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>


                                <tr><td colspan="2" style="padding: 0 20px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                            <tr>
                                                <td style="padding-bottom: 3px;">
                                                    <!-- Заголовок -->
                                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                        Зерновые сеялки Polonez/Mazur</a>
                                                    </a>
                                                </td>
                                                <td style="padding-bottom: 3px;">
                                                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                                </td>
                                            </tr>
                                        </table>
                                    </td></tr> 
                                <tr><td colspan="2" style="padding: 0 20px;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                            <tr valign="top">
                                                <td style="padding: 10px 0 0;">
                                                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <img src="http://www.lbr.ru/images/kp/148-etr/etr-4.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                            </td>
                                                        </tr>
                                                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                            <tr>
                                                                <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                                        <?php echo $data['product_info1']; ?>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>                                                                                                                           
                                                    </table>
                                                </td>
                                                <td>
                                                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Универсальны в применении</b>
                                                                </p>
                                                            </td>
                                                        </tr>

                                                        <tr valign="top">                                                        
                                                            <td style="padding: 0 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    Высеваемые культуры: пшеница, ячмень, рожь, овес, горох, бобовые, кукуруза на силос, клевер, люцерна, прочие травы.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Посев в любых условиях, как в сухую, так и во влажную почву</b>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Точный и равномерный посев</b> благодаря катушечному дозирующему механизму и бесступенчатой коробке передач.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Стабильно выдержанная глубина сева по всей ширине захвата и от начала до конца сева.</b>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Подбор комплектации под вашу технологию и условия посевной:</b> комплект прикатки, комплект Polonez/Mazur Dublo – ЗЕРНО+УДОБРЕНИЯ, 
                                                                    комплект «Травник» – ЗЕРНО+ТРАВА, специальная тележка (для агрегатирования сеялки в ПОЛУНАВЕСНОМ ВАРИАНТЕ с тракторами мощностью от 80 л.с.).
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 10px;">                                                
                                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                                    <b>Также сеялки комбинируются в посевные комплексы "сеялка Polonez/Mazur+ культиватор Atlas/Ares".</b>
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
                                                <td style="padding: 0;">
                                                    <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
                                                        <tr valign="top">                                                        
                                                            <td style="padding: 5px 0 0 0;">
                                                                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="32%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                            <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Polonez 4/780 D</td>
                                                                            <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Polonez Dublo 4/1000</td>
                                                                            <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Mazur 6/1100 D</td>
                                                                            <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Mazur Dublo 6/1100 D</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов (сошников)</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">31</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">47</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина междурядья, см</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем бункера, дм<sup>3</sup></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">780</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1000 (семена+удобрения)</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1100</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1100 (семена+ удобрения)</td>
                                                                        </tr>  
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                                                            <td colspan="2" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-120 (со спец. тележкой – от 80)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price14']; ?></td>
                                                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price15']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>            
                                                        </tr>                               
                                                    </table>                               
                                                </td>
                                            </tr> 
                                        </table>
                                    </td></tr> 
                                <!-- Заголовок со ссылкой и логотипом; -->
                                <!-- Контент первого блока: -->                


                            </table>
                        </td>
                    </tr>

                </table>
            </td></tr>
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
                    <!-- Заголовок со ссылкой и логотипом: -->

                    <tr><td style="padding: 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/330-pnevmaticheskie-seyalki-master-drill/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Пневматическая сеялка MasterDrill</a>
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                    </td>
                                </tr>
                            </table>
                        </td></tr> 
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td style="padding: 10px 0 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0;">
                                                    <img src="http://www.lbr.ru/images/kp/148-etr/etr-5.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <tr>
                                                    <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info1']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>                                                                                                                                                                            
                                        </table>
                                    </td>
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 10px;">                                                
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <b>Посев даже в тяжелых условиях</b> благодаря двухдисковым сошникам из нержавеющей стали (2-х сторонняя опора с подшипником в очень компактном корпусе).
                                                    </p>
                                                </td>
                                            </tr>  
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 10px;">                                                
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <b>Точнейший посев любого посевного материала.</b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 25px;">                                                
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                центральная и индивидуальная регулировка давления сошников;
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                уплотняющий каток за каждым сошником.
                                            </li>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 10px;"> 
                                        <img src="http://www.lbr.ru/images/kp/148-etr/etr-8.jpg" align="right" width="70" style="border: 0;" alt="Логотип Expom">

                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <b>Система центрального дозирования с помощью ячейкового дозатора</b> позволяет проводить посев строго с установленными нормами высева, не теряя драгоценный посевной материал.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 0px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            Рабочая скорость до 12 км/час!
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 0 0 0 10px;">
                                        <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                            <tbody>
                                                <tr>
                                                    <td width="70%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                    <td width="30%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">D600</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов (сошников)</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">48</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость семенного ящика, дм<sup>3</sup></td>
                                                    <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 500</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                                </tr>                                       
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price16']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>                                          
                            </table>                               
                        </td>
                    </tr> 
                </table>
            </td></tr> 

        <tr><td style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                    <tr>
                        <td style="padding-bottom: 3px;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/331-zernovye-seyalki-super-drill/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Механическая сеялка SuperDrill</a>
                            </a>
                        </td>
                        <td style="padding-bottom: 3px;">
                            <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Заголовок со ссылкой и логотипом; -->
        <!-- Контент первого блока: -->                
        <tr><td style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                    <tr valign="top">
                        <td style="padding: 10px 0 0;">
                            <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0;">
                                        <img src="http://www.lbr.ru/images/kp/148-etr/etr-6.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                    </td>
                                </tr>
                                <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 5px 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                            <tbody>
                                                <tr>
                                                    <td width="46%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                    <td width="18%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">D 400*</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">33</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость семенного ящика, дм<sup>3</sup></td>
                                                    <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">870</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 80</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price17']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 0;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; color: black; text-align: justify; ">
                                            *Уточняйте варианты комплектации данной сеялки.
                                        </p>
                                    </td>
                                </tr>                                                                                                                           
                            </table>
                        </td>
                        <td>
                            <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 10px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <b>Посев без забивания высевающих сошников.</b>
                                        </p>
                                    </td>
                                </tr>                                        
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                            В конструкции высевающего аппарата использованы двухдисковые сошники (диаметр 300 мм) с надежной подшипниковой опорой. 
                                            Скребки, расположенные с обеих сторон, и крышка с верхней стороны позволяют предотвратить забивание.
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            Сквозная рама, бункер для посевного материала не выполняет несущей функции, что <b>сохраняет его от перегрузок, перегибов, деформации после нагрузки.</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <b>Экономичный посев благодаря функциональному бункеру:</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 25px;">                                                
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    Бункером достаточной вместимости - 870 дм<sup>3</sup>.
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    Ворошильный валик в бункере, серийные клинья для максимального использования мелкозернистого посевного материала.
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    Облегченная загрузка благодаря балкам для мешков в бункере.
                                </li>
                        </td>
                    </tr> 
                </table>                               
            </td>
        </tr> 
    </table>
</td></tr>
<tr><td style="padding: 0 20px 10px 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
            <tr>
                <td style="padding-bottom: 3px; text-align: justify;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                        КУЛЬТИВАТОРЫ И БОРОНЫ</a>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr><td colspan="2" style="padding: 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
            <tr>
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/336-kultivatory-atlas/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Предпосевной культиватор Atlas</a>
                    </a>
                </td>
                <td style="padding-bottom: 3px;">
                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                </td>
            </tr>
        </table>
    </td></tr> 
<tr><td colspan="2" style="padding: 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

            <tr valign="top">
                <td style="padding: 10px 0 0;">
                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding: 0;">
                                <img src="http://www.lbr.ru/images/kp/148-etr/etr-7.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                            </td>
                        </tr>
                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                            <tr>
                                <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                        <?php echo $data['product_info1']; ?>
                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?>                                                                                                                           
                    </table>
                </td>
                <td>
                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">                                                        
                            <td colspan="2" style="padding: 5px 0 0 10px;">
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    <b>Интенсивная качественная почвообработка за один проход:</b>
                                </p>
                            </td>
                        </tr>
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0 25px;">            
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            разрыхление следов колес трактора,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            выравнивание неровностей почвы,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            измельчение крупных комков,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            рыхление и подрезание,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            выравнивание разрыхленной почвы,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            измельчение и уплотнение,
                        </li>
                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                            финишное выравнивание.
                        </li>

                </td>
                <td style="padding: 5px 0 0 10px;">
                    <img src="http://www.lbr.ru/images/kp/148-etr/etr-9.jpg" width="50" style="border: 0; float: left;" alt="Логотип Expom">
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
                <td style="padding: 0;">
                    <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0 0;">
                                <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="30%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 4,0</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 6,0</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 8,0</td>
                                            <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 10,0</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2 050</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4 400</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5 300</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5 900</td>
                                        </tr>                        
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество зубьев, шт.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">16</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">32</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">40</td>
                                        </tr>  
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/ч</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,8-4,4</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,2-6,6</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,6-8,8</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3-9,0</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-120</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">170-220</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">200-230</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-260</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price18']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price19']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price20']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price21']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="padding: 0px 0 0 10px;">
                                <table width="250" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 10px;" colspan="2">                                                
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; line-height: 11pt;">
                                                <b>Подбор зубьев под ваши условия работы:</b>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 0 0 0 10px;">
                                            <img src="http://www.lbr.ru/images/kp/148-etr/etr-10.jpg" align="right" width="50" style="border: 0;" alt="Логотип Expom">

                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; line-height: 11pt; ">
                                                <b>Зубья SX</b> – для работы на легких и среднетяжелых почвах
                                            </p>
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; line-height: 11pt;">
                                                <b>Зубья SZ</b> – усиленная основа зубьев для работы в более тяжелых условиях, на каменистых почвах.
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

</table>
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


                    <tr><td colspan="2" style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/kultivatory-sternevye/338-kultivatory-kos/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Культиватор стерневой KOS</a>
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                    </td>
                                </tr>
                            </table>
                        </td></tr> 
                    <tr><td colspan="2" style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                                <tr valign="top">
                                    <td style="padding: 10px 0 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0;">
                                                    <img src="http://www.lbr.ru/images/kp/148-etr/etr-11.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <tr>
                                                    <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info1']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>                                                                                                                           
                                        </table>
                                    </td>
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 10px;">
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <b>Выполнение основных агрономических операций за один проход агрегата:</b>
                                                    </p>
                                                </td>
                                            </tr>                                        
                                            <tr valign="top">                                                        
                                                <td style="padding: 5px 0 0 25px;">                                                
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                интенсивное крошение пласта
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                подрезка сорняков
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                измельчение растительных остатков
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                заделка их в почву
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                дробление комков
                                            </li>
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                выравнивание и уплотнение поверхности под углом друг к другу
                                            </li>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <b>Крепкие мощные зубья для лущения стерни на глубину до 20 см.</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <b>Работа даже при влажной почве без забивания органов агрегата.</b>
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
                        <td style="padding: 0;">
                            <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 0;">
                                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                            <tbody>
                                                <tr>
                                                    <td width="32%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,0 В</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">3,7 В</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">5,4 ВH</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">6,0 ВH</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,0</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,7</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,4</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,0</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">915</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1215</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1780</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1900</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество зубцов, шт.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">14</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">14</td>
                                                </tr>  
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-140</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-160</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-200</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-200</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price22']; ?></td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price23']; ?></td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price24']; ?></td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price25']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>            
                                </tr>                               
                            </table>                               
                        </td>
                    </tr> 
                </table>
            </td></tr> 
        <tr><td style="padding: 0;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                    <tr>
                        <td style="padding-bottom: 3px; padding-top: 5px;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/borony-diskovye-i-diskatory/325-diskovye-borony-ares/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Дисковая борона Ares</a>
                            </a>
                        </td>
                        <td style="padding-bottom: 3px;">
                            <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                        </td>
                    </tr>
                </table>
            </td></tr> 
        <tr><td style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td style="padding: 10px 0 0;">
                            <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0;">
                                        <img src="http://www.lbr.ru/images/kp/148-etr/etr-12.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                    </td>
                                </tr>
                                <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 0;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: center; ">
                                            <b>Универсальность применения:</b>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 5px 0 0 15px;">                                                
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    предпосевная обработка после вспашки,
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    предпосевная обработка после чизельных плугов,
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    первая обработка после уборки подсолнечника и кукурузы,
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    первая обработка после уборки рапса,
                                </li>
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    провоцирование прорастания сорняков.
                                </li>
                        </td>
                    </tr>                                                                                                                                                                
                </table>
            </td>
            <td>
                <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">                                                        
                        <td style="padding: 10px 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Подбор секций дисков для ваших условий обработки почвы:</b>
                            </p>
                        </td>
                    </tr>  
                    <tr valign="top">                                                        
                        <td style="padding: 0 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Диски TL</b> – диам. 460 мм, глубина обработки 6-8 см
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 0 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Диски TXL</b> – диам. 560 мм, глубина обработки 8-10 см
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 0 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>«Волнообразный» диск</b> – диам. 560 мм, для лущения стерни на глубину до 12 см.
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 0 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Диски TVibro</b> – диам. 510 и 560 мм, расположены на S-образной стойке, позволяющей диску отклоняться в 3-х плоскостях.
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 0 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Полное копирование рельефа и работа без забивания</b> – каждый диск агрегата расположен на отдельной стойке, стойка имеет индивидуальный подвес с защитными резиновыми элементами.
                            </p>
                        </td>
                    </tr>
                    <tr valign="top">                                                        
                        <td style="padding: 10px 0 0 10px;">
                            <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td width="55%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                        <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">TL 3,0</td>
                                        <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">TL 4,0</td>
                                        <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">TXL 4,0</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">850</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1250</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1700</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рядов/дисков, шт.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2/24</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2/32</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2/32</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80-100</td>
                                        <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110-130</td>
                                        <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-150</td>
                                    </tr>                                      
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price26']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price27']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price28']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>                                          
                </table>                               
            </td>
        </tr> 
    </table>
</td></tr>
<!-- Заголовок со ссылкой и логотипом; -->
<!-- Контент первого блока: -->                
<tr><td style="padding: 0 20px 10px 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
            <tr>
                <td style="padding-bottom: 3px; text-align: justify;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vnesenie-udobrenij/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                        ВНЕСЕНИЕ МИНЕРАЛЬНЫХ УДОБРЕНИЙ</a>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr><td style="padding: 0;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
            <tr>
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vnesenie-udobrenij/pritsepnye-razbrasyvateli-mineralnykh-udobrenij/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Прицепные разбрасыватели удобрений RCW</a>
                    </a>
                </td>
                <td style="padding-bottom: 3px;">
                    <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                </td>
            </tr>
        </table>
    </td></tr> 
<tr><td style="padding: 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
            <tr valign="top">
                <td style="padding: 10px 0 0;">
                    <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding: 0;">
                                <img src="http://www.lbr.ru/images/kp/148-etr/etr-13.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                            </td>
                        </tr>
                        <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                            <tr>
                                <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                        <?php echo $data['product_info1']; ?>
                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <tr valign="top">                                                        
                            <td style="padding: 10px 0 0 0;">                                                
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    <span style="color: #F58220;"><b>УНИВЕРСАЛЬНЫЙ СОЛДАТ</b></span>: предпосевная подготовка и подкормка по всходам.
                                </p>
                            </td>
                        </tr>
                        <tr valign="top">                                                        
                            <td style="padding: 10px 0 0;">                                                
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    Минералка, доломит, известь, сухие дефекаты, костная мука и т.д.
                                </p>                                                            
                            </td>
                        </tr>                                                                                                                                                                
                    </table>
                </td>
                <td>
                    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">                                                        
                            <td style="padding: 10px 0 0 10px;">                                                
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    Благодаря широким колесам обеспечивается <b>хорошее соприкосновение с почвой и постоянный привод подающего транспортёра.</b>
                                </p>
                            </td>
                        </tr>  
                        <tr valign="top">                                                        
                            <td style="padding: 0 0 0 10px;">                                                
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    <b>Бережная подача гранул к разбрасывающим органам без их повреждений или разрушений</b> с помощью ленточного транспорта (в отличии от планчатого).
                                </p>
                            </td>
                        </tr>
                        <tr valign="top">                                                        
                            <td style="padding: 0 0 0 10px;">                                                
                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    <b>Точное внесение</b> – дозирующий аппарат позволяет оптимально подобрать норму внесения удобрений.
                                </p>
                            </td>
                        </tr>
                        <tr valign="top">                                                        
                            <td style="padding: 0 0 0 10px;">
                                <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="56%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                            <td width="22%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">RCW 5500</td>
                                            <td width="22%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">RCW 10 000</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вместимость кузова, л</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5 500</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10 000</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м<br /> - известь<br /> - гранулированные удобрения</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><br />8 -16<br />2-36</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><br />8 -16<br />2-36</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120</td>
                                        </tr>                              
                                        <tr>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price29']; ?></td>
                                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price30']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>                                          
                    </table>                               
                </td>
            </tr> 
        </table>
    </td></tr>
</table>
</td>
</tr>
</table>
</div>
<!-- Блок Четвертый; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    <!-- Блок Пятый; -->
    <table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
            <td>
                <!-- Внутренности блока: -->
                <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                    <tr><td style="padding: 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/navesnye-razbrasyvateli-mineralnykh-udobrenij/431-razbrasyvateli-mineralnykh-udobrenij-navesnye-mx/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Навесные разбрасыватели удобрений MX</a>
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/makers/unia-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                    </td>
                                </tr>
                            </table>
                        </td></tr> 
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td style="padding: 10px 0 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0;">
                                                    <img src="http://www.lbr.ru/images/kp/148-etr/etr-14.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <tr>
                                                    <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info1']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>


                                        </table>
                                    </td>
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 10px;">                                                
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <b>«Неубиваемые» тарелки</b> – разбрасывающие диски и лопатки выполнены из высококачественной нержавеющей стали.
                                                    </p>
                                                </td>
                                            </tr>  
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 10px;">                                                
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <b>Целые гранулы – максимальная эффективность внесения.</b> Оптимальная скорость вращения разбрасывающих дисков, изменяемый угол лопаток и совершенная конструкция кузова обеспечивают бережное обращение с гранулами и предохраняют их от разрушения.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 10px;">
                                                    <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                        <tbody>
                                                            <tr>
                                                                <td width="55%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                                <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">МХ 950Н</td>
                                                                <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">МХ 1200Н</td>
                                                                <td width="15%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">МХ 1600Н</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость бункера, л</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">950</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1200</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1600</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                                                <td colspan="3" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10 -24</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота загрузки, м</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,06</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,06</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,36</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                                <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                                                <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                                                <td style="margin: 0; padding: 2px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                                            </tr>                                      
                                                            <tr>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price31']; ?></td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price32']; ?></td>
                                                                <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price33']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>                                          
                                        </table>                               
                                    </td>
                                </tr> 
                            </table>
                        </td></tr>
                    <!-- Заголовок со ссылкой и логотипом; -->
                    <!-- Контент первого блока: -->                
                    <tr><td style="padding: 0 20px 10px 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                                <tr>
                                    <td style="padding-bottom: 3px; text-align: justify;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vnesenie-udobrenij/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                            ВНЕСЕНИЕ ОРГАНИЧЕСКИХ УДОБРЕНИЙ</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td style="padding: 0;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                <tr>
                                    <td style="padding-bottom: 3px;">
                                        <!-- Заголовок -->
                                        <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/vnesenie-udobrenij/pritsepnye-razbrasyvateli-mineralnykh-udobrenij/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Разбрасыватели органики PTU (универсальные) от 5 до 22 т</a>
                                        </a>
                                    </td>
                                    <td style="padding-bottom: 3px;">
                                        <img src="http://www.lbr.ru/images/makers/lmr-azene-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                    </td>
                                </tr>
                            </table>
                        </td></tr> 
                    <tr><td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">
                                    <td style="padding: 10px 0 0;">
                                        <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr>
                                                <td style="padding: 0;">
                                                    <img src="http://www.lbr.ru/images/kp/148-etr/etr-15.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                </td>
                                            </tr>
                                            <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                                <tr>
                                                    <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                            <?php echo $data['product_info1']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>

                                        </table>
                                    </td>
                                    <td>
                                        <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 10px;">                                                
                                                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                        <span style="color: #F58220;"><b>3 в 1:</b></span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr valign="top">                                                        
                                                <td style="padding: 10px 0 0 25px;">                                                
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                внесение органики;
                                            </li>  
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                перевозка зеленой массы;
                                            </li> 
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                                внесение извести, доломита, дефеката.
                                            </li>                                                           
                                    </td>
                                </tr>    
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">
                                        <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                            <tbody>
                                                <tr>
                                                    <td width="49%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">PTU 6.0/14S</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">PTU 14S</td>
                                                    <td width="17%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">PTU 20S</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность, т</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">14</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина разбрасывания, м</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12-14</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12-14</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12-14</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-135</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">190-220</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-300</td>
                                                </tr>                              
                                                <tr>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price34']; ?></td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price35']; ?></td>
                                                    <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price36']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>                                          
                            </table>                               
                        </td>
                    </tr> 
                </table>
            </td></tr>
        <tr><td style="padding: 0;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                    <tr>
                        <td style="padding-bottom: 3px;">
                            <!-- Заголовок -->
                            <a href="http://www.lbr.ru/tehnika/vnesenie-udobrenij/bochki-dlya-vneseniya-zhidkikh-organicheskikh-udobrenij/436-bochki-dlya-vneseniya-zhidkikh-udobrenij-meprozet/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Бочка PITON 100 для жидкой органики и воды</a>
                            </a>
                        </td>
                        <td style="padding-bottom: 3px;">
                            <img src="http://www.lbr.ru/images/makers/pithon.JPG" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                        </td>
                    </tr>
                </table>
            </td></tr> 
        <tr><td style="padding: 0 20px;">
                <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                    <tr valign="top">
                        <td style="padding: 10px 0 0;">
                            <table width="300" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr>
                                    <td style="padding: 0;">
                                        <img src="http://www.lbr.ru/images/kp/148-etr/etr-16.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                    </td>
                                </tr>
                                <?php if ($data['product_info1'] && !empty($data['product_info1'])): ?>
                                    <tr>
                                        <td width="300px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                            <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                <?php echo $data['product_info1']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                            </table>
                        </td>
                        <td>
                            <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 10px;">                                                
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                            <span style="color: #F58220;"><b>100 БЕД ОДИН ОТВЕТ!</b></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">                                                        
                                    <td style="padding: 10px 0 0 25px;">                                                
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    вывоз и внесение органических удобрений на поля;
                                </li>  
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    подвоз воды в летние лагеря;
                                </li> 
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    подвоз воды для заправки опрыскивателей;
                                </li> 
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    пожарные ёмкости в период уборки и засухи;
                                </li>  
                                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                    всасывание жидких отходов из лагун и колодцев с глубины до 6 метров.
                                </li>                                                                                                                      
                        </td>
                    </tr>   
                    <tr valign="top">                                                        
                        <td style="padding: 5px 0 0 10px;">                                                
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify; ">
                                <b>Всего 4,5 минуты – время наполнения и разгрузки.</b>
                            </p>                                                                                                                                                                                  
                        </td>
                    </tr>    
                    <tr valign="top">                                                        
                        <td style="padding: 5px 0 0 10px;">
                            <table width="440" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>

                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость, л</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10 000</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина/ширина/высота, мм</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7 500/2 550/2 900</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                    </tr>                              
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price37']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>                                          
                </table>                               
            </td>
        </tr> 
    </table>
</td></tr>
<tr valign="top">
    <td colspan="2" style="padding: 0px 20px 0;">
        <?php
        if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
        endif;
        ?>
    </td>
</tr>                     
</table>
</td>
</tr>
</table>
<!-- Блок Пятый -->
</div>
</body>
</html>
