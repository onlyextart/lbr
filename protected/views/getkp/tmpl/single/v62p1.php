<?php
if($data['show_header']=='1'  || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
 ?>
<!-- Блок Первый: -->
<div class="table w-800">
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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/323-plugi-oborotnye-navesnye-ibis/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">Плуг оборотный навесной Ibis</a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/unia-logo.jpg" width="23" height="27" style="border: 0; float: left;" alt="Логотип Unia">
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
                                    <div class="img-wrapper">
                                        <img src="http://www.lbr.ru/images/kp/ibis-62/ibis.jpg" width="760" style="height: 370px; border: 0; float: left;" alt="Логотип Unia">
                                        <div class="orange-plash">1500 шт. на полях РФ – результат экономичности, простоты и надежности!</div>
                                        
                                        <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
                                            <div class="img-fin-block" style="right: 0; bottom: 80px; max-width: 500px;">
                                                <?php echo $data['product_info1']; ?>
                                            </div>
                                        <?php endif; ?>
                                        
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                             <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; text-align: justify; ">
                                                    Плуги Ibis предназначены для безотвальной вспашки на любых типах почвы. В результате работы плуга происходит выравнивание обрабатываемых полей, что позволяет в дальнейшем применять менее интенсивную последующую обработку другой техникой.
                                                </p>
                                            </td>
                                        </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Подберем плуг под любую марку и мощность трактора:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                    <td style="width: 161px; padding: 17px 0 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; ">70-110 л.с. 
                                                            </p>
                                                        </td>
                                                        <td style="width: 41px; padding: 10px 40px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="width: 161px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; ">3 корпуса (2+1)
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; text-align: center;">90-150 л.с. 
                                                            </p>
                                                        </td>
                                                        <td style="width: 30px; padding: 10px 40px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="width: 160px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; text-align: center; ">4 корпуса (3+1)
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td style="width: 333px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; ">110-180 л.с.
                                                            </p>
                                                        </td>
                                                        <td style="width: 30px; padding: 10px 40px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="width: 333px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; text-align: center; ">5 корпусов (4+1)
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                    <td colspan="3" style="width: 333px; padding: 17px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    Плуг отлично подходит и под тракторы отечественного производства: адаптированная гидравлика и небольшой вес орудия.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr> 
                                            <td style="padding: 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis2.jpg" width="340" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding-right: 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                   Высокое качество обработки почвы:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    стабильный оборот пласта, точная заделка растительных остатков, уменьшенное сопротивление при вспашке – все благодаря <strong>универсальному корпусу MX.</strong> <br />
                                                    В данном корпусе снижены боковые силы, воздействующие на корпус при вспашке, и снижены силы трения за счет изменения угла наклона лемеха и отвала, центр тяжести корпуса был смещен на 90 мм от вертикальной оси.
                                                </p>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Будьте спокойны за раму вашего плуга 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    (трактор не «порвет» раму при работе)<br />
                                                    Легкая, но прочная конструкция рамы:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    • шведская сталь.
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    • профиль:  <p style="margin: 0 0 0 70px; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
	                                                                серия М – 100х100 мм,<br />
                                                                    серия L и XL – 120х120 мм,<br />
                                                                    серия XXL – 140х140 мм.
                                                                </p>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>  
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                <table width="150" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 0px 5px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis3.jpg" width="150px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="220" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Специально под ваш тип почвы:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <strong>4 СЕРИИ ПЛУГОВ:</strong><br />
                                                    • <strong>M</strong> – для супер легких почв<br />
                                                    • <strong>L</strong> – для легких почв<br />
                                                    • <strong>XL</strong> – для среднетяжелых почв<br />
                                                    • <strong>XXL</strong> – для тяжелых каменистых почв 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    <br /><strong>3 СИСТЕМЫ ЗАЩИТЫ:</strong><br />
                                                    • <strong>Защита срезным болтом</strong> – для легких, среднетяжелых, не очень каменистых почв;<br />
                                                    • <strong>Рессорная система защиты</strong> – для тяжелых каменистых почв;<br />
                                                    • <strong>Гидравлическая система защиты</strong> – универсальная система защиты. <br />
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
</div>
<!-- Блок Первый; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<!-- Блок Второй: -->
<div class="table w-800">
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Контент второго блока: -->               
                    
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; ">
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                  Экономия ГСМ при вспашке
                                                </span>
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    – за счет отсутствия «пустых» проездов трактора по краям поля (оборотная конструкция плуга).
                                                </span>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                  <br />Экономия времени в работе:
                                                </p>
                                                <span style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    • прост в агрегатировании<br />
                                                    • быстрая настройка на требуемую ширину захвата корпуса
                                                </span>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                  <br />Цена российская – качество импортное. Реальный баланс цены и качества.
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    Экономия в стоимости (цена плуга и комплекта расходников) в сравнении с другими импортными аналогами – до 20%.
                                                </p>                                                
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr> 
                                            <td style="padding: 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis4.jpg" width="340" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="padding-right: 10px; text-align: center; ">                                                
                                                <span style="font-weight: bolder;">Для обычных условий работы (в стандарте):</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans- serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• КОМПЛЕКТ УГЛОСНИМОВ – выполняет роль предплужников, но срезает только угол пласта во время движения его по отвалу;
                                                </p>
                                            </td>
                                           <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis5.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• РЕЗИНОВОЕ ОПОРНОЕ КОЛЕСО – для регулировки глубины работы;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis6.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• ДИСКОВЫЙ НОЖ – для выравнивания последней борозды;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis7.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding-right: 10px; text-align: justify; vertical-align:middle ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• ЗАЩИТА СРЕЗНЫМ БОЛТОМ – защита для легких, среднетяжелых, не очень каменистых почв при помощи специальных болтов предохранителей.
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis8.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 10px 0 10px; text-align: justify; ">                                                
                                                <span style="font-weight: bolder;">Для улучшенной работы в специфических условиях (опции):</span>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; text-align: justify; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans- serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• АЖУРНЫЕ (ПОЛОСОВЫЕ ОТВАЛЫ) – готовое решение для липких почв, хорошо измельчает почву;
                                                </p>
                                            </td>
                                           <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis9.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">
                                                  • КОМПЛЕКТ ПРЕДПЛУЖНИКОВ – 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  предназначены для эффективной заделки стерни, соломы, травы, сорняков и т.п.;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis10.jpg" height="147px" style="display: block; margin-left: 35px; border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; text-align: justify; vertical-align:middle; ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• РЕССОРНАЯ СИСТЕМА ЗАЩИТЫ – предназначена для работы на тяжелых, каменистых почвах;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis11.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; text-align: justify; vertical-align:middle ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• ГИДРАВЛИЧЕСКАЯ СИСТЕМА ЗАЩИТЫ – универсальная система защиты для любых условий, есть возможность регулировки усилия для срабатывания защиты;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis12.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; text-align: justify; vertical-align:middle ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• РЕЗИНОВОЕ ОПОРНО-ТРАНСПОРТНОЕ КОЛЕСО – для транспортировки плуга;
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis13.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 10px; text-align: justify; vertical-align:middle ">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                  <br />• ПРИКАТЫВАЮЩИЙ КАТОК TERRA – предназначен для лучшей подготовки почвы к посеву путем одновременной прикатки во время основной вспашки.
                                                </p>
                                            </td>
                                            <td style="padding: 10px 10px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/ibis-62/ibis14.jpg" width="160px" style="border: 0; float: left;" alt="Ibis">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <!-- Контент второго блока; -->
            </table>
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</div>
<!-- Блок Второй; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<!-- Блок Третий: -->
<div class="table w-800">
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
               <tr>
                    <td style="padding: 0 20px;">                    
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 230px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">M 2+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L 3+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L 4+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XL 3+</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XL 3+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 4+</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL 4+1</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">700</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1030</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1190</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1210</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1360</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1370</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1520</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">75</td>
                                </tr>
                                <tr>
                                    <td colspan="8" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">
                                        болтовая
                                    </td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70-90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-110</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110-140</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-110</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-150</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-180</td>
                                </tr>   
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                </tr>  
                            </tbody>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 230px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L S  3+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">L S 4+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XL S 3+</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XL S 3+1</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL S 4+</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XXL S 4+1</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1230</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1440</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1330</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1540</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1550</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1760</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">72</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                </tr>
                                <tr>
                                    <td colspan="8" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">
                                        рессорная
                                    </td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">90-110</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120-150</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100-120</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110-130</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">130-160</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">150-200</td>
                                </tr>   
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.<span style="color:#cc3333; font-size:12px;">*</span></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                                </tr>  
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
                <tr valign="bottom">
                    <td style="padding: 5px 20px;">
                                    <div class="img-wrapper">
                                        <img src="http://www.lbr.ru/images/kp/ibis-62/ibis15.jpg" width="760" style="border: 0; float: left;" alt="Логотип Unia">                                        
                                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            if($data['show_footer']=='1' || !isset($data['print_footer'])):
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
<!-- Блок Третий; -->

<!-- Закрывающий тег ОБЯЗАТЕЛЬНЫЙ -->
</body>
</html>