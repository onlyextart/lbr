<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<!-- Первый блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/330-pnevmaticheskie-seyalki-master-drill/" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Пневматическая сеялка MasterDrill
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/makers/VN-logo-big.jpg" width="190" height="35" style="border: 0; float: right;" alt="Логотип Great Plains">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
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

                <tr>
                    <td style="padding: 15px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding-left:5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; font-style: italic; ">
                                                    Пневматическая сеялка MasterDrill предназначена для посева зерновых культур, гороха, сои, рапса, трав по классической технологии почвообра-ботки, т.е. с использованием предвари-тельно перед посевом другой поч-вообрабатывающей техники (плугов, дисковых борон, культиваторов).
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Посев даже в тяжелых условияx
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 5px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                    <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-2.jpg" width="100" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                    Двухдисковые сошники из нержавеющей стали (2-х сторонняя опора с подшипником в очень компактном корпусе) позволяют сеялке качественно выполнять посев в любых условиях, в том числе и при работе с мульчей, и на липких почвах без забивания. Машина не проседает и не оставляет следов на полях благодаря установленным большим шинам на колесах сеялки.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-3.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>


                                    </table>
                                
                            
                        
                    </td>
                    <!--Вторая колонка-->
                    <td>
                        <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-left: 20px;">
                                    <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                        Точнейший посев любого посевного материала
                                    </p>  
                                </td>                                            
                            </tr>

                            <tr>
                                <td>
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <td style="width: 20px; padding: 5px 0px 0px 20px; vertical-align: top;">
                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                        </td>
                                        <td style="padding: 5px 10px 10px 0px; vertical-align: top;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> центральная и индивидуальная регулировка давле-ния сошников;</span>
                                            </p>
                                        </td>  
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-left: 20px;">
                                    <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-4.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:15px 0px 0px 0px;">
                                    <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="width: 20px; padding: 5px 0px 0px 20px; vertical-align: top;">
                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                            </td>
                                            <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                    <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-5.jpg" width="150" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; color: black; "> уплотняющий каток за каждым сошником – четко ведет сошник на заданную глубину, прикатывает, улуч-шая контакт семени с почвой.</span>
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
        </td>
    </tr>


    <!-- Ссылка-кнопка подробнее -->
    <?php
    Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
        'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/330-pnevmaticheskie-seyalki-master-drill/',
        'colspan' => false,
        'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
            )
    );
    ?>

</table>



</td>
</tr>



<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>
<!-- Первый блок -->


<!-- Второй блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" bgcolor="#ffffff" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td bgcolor="#FFFFFF" style="padding: 0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <!--Первая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 5px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Экономичная дозированная выдача семян
                                                </p>  
                                            </td>                                            
                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="padding-top: 10px;" width="218">
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                                                                <span style="font-weight:bold;">Система центрального дози-рования с помощью ячейкового дозатора</span> позво-ляет проводить посев строго с установленными нормами высева, не теряя драгоценный посевной материал.  
                                                            </p> 
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                                                                При необходимости подачи малого количества посевного материала, например рапса или трав, устройство просто переключается.  
                                                            </p>
                                                            <p style="margin: 0; padding: 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                                                                Для высева мелкозернистого материала (например, рапса), устанавливается прилагаемая серийная щетка для рапса.   
                                                            </p>
                                                        </td>
                                                        <td style="padding:10px 0px 5px 15px;">
                                                            <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-6.jpg" width="160" style="border: 0;" alt="Изображения не отображаются">                                                           
                                                            <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-7.jpg" width="160" style="border: 0;" alt="Изображения не отображаются">
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>

                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 10px 0px 0px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Быстрый посев и другие сопутствующие операции
                                                </p>  
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td style="padding:5px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="width: 20px; padding: 5px 0px 0px 0px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td  width="358"style="padding: 5px 10px 0 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                Рабочая скорость до 12 км/час!                                                       
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 20px; padding: 5px 0px 0px 0px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td width="358" style="padding: 5px 10px 0 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                Отсутствие лишних остановок на дозагрузку по сравнению с маленькими сеялками – объем бункера 1500 дм<sup>3</sup>.                                                       
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 20px; padding: 5px 0px 0px 0px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td width="358" style="padding: 5px 10px 0 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                Удобная крышка бункера – откидывается вся целиком, что облегчает процесс заполнения. Плотное закрытие крышки предотвращает проникновение к посевному материалу воды и пыли.                                                       
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 20px; padding: 5px 0px 0px 0px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td width="358" style="padding: 5px 10px 0 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                При необходимости быстрое опорожнение бункера от остатка семян через серийный сливной патрубок и сливную заслонку на дозаторе.                                                      
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 10px 0px 5px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Простоя и удобная разметка по полю в процессе по-сева благодаря наличию дискового следоуказателя.
                                                </p>  
                                            </td> 
                                        </tr>

                                        <tr valign="bottom">
                                            <td>
                                                <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-8.jpg" width="378" style="border: 0;" alt="Изображения не отображаются">  
                                            </td> 
                                        </tr>
                                    </table>
                                </td>

                                <!--Вторая колонка-->
                                <td style="vertical-align: bottom;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 5px 0px 0px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Возможность агрегатирования с самыми ходовыми тракторами небольшой мощности.
                                                </p>  
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td style="padding:5px 0px 0px 0px;">
                                                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="width: 20px; padding: 5px 0px 0px 20px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td style="padding: 5px 10px 0 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                Навесная конструкция сеялки.                                                       
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20px; padding: 5px 0px 0px 20px; vertical-align: top;">
                                                            <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: black; ">•</span>
                                                        </td>
                                                        <td style="padding: 5px 10px 10px 0; vertical-align: top;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                Уменьшенное подъемное усилие благодаря удачному расположению центра тяжести в сеялке.                                                      
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 15px 0px 0px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #F58220; text-align: justify;">
                                                    Удобство транспортировки сеялки по дорогам и на переездах.
                                                </p>  
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 5px 0px 10px 20px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; color: black; text-align: justify;">
                                                    Сеялка оснащена приспособлением для продольной транспортировки по дорогам общего пользования
                                                </p>  
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td style="padding:5px 0px 20px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-9.jpg" width="358" style="border: 0;" alt="Изображения не отображаются">  
                                            </td> 
                                        </tr>

                                        <tr valign="top">
                                            <td style="padding: 15px 0px 0px 20px;">
                                                <table width="358" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0px" align="center" style="border: solid black 1px; border-collapse: collapse;">
                                                    <tr bgcolor="#eeeeee">
                                                        <td width="278" align="left" style="border: solid black 1px; padding-left: 5px; font-family: 'Trebuchet MS', sans-serif; font-size:13px;"><strong> Модель</strong></td>
                                                        <td width="100" align="center" style="border: solid black 1px; padding-left: 5px; font-family: 'Trebuchet MS', sans-serif; font-size:13px;"><strong> D600</strong></td>             
                                                    </tr>
                                                    <tr>
                                                        <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">Рабочая ширина, м</td>
                                                        <td width="100" align="center" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> 6</td>             
                                                    </tr>
                                                    <tr>
                                                        <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> Количество рядов (сошников)</td>
                                                        <td width="100" align="center" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">48</td>             
                                                    </tr>
                                                    <tr>
                                                        <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">Производительность, га/час</td>
                                                        <td width="100" align="center" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">5,1</td>             
                                                    </tr>
                                                    <tr>
                                                        <td width="278" align="left" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> Емкость семенного ящика, дм<sup>3</sup></td>
                                                        <td width="100" align="center" style="border: solid black 1px; padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">1 500</td>             
                                                    </tr>
                                                    <tr>
                                                        <td width="278" align="left" style="border: solid black 1px;padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;"> Требуемая мощность трактора, л.с.</td>
                                                        <td width="100" align="center" style="border: solid black 1px;padding-left: 5px;font-family: 'Trebuchet MS', sans-serif; font-size:13px;">120</td>             
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="border: solid black 1px; padding-left: 5px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;">Цена с НДС, руб.</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                                        <td align="center" style="border: solid black 1px; padding-left: 5px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 13px;"><?php echo $data['price1']; ?></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                        <td style="padding: 5px 0px 21px 20px;">
                                            <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                                * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                                            </p> 
                                        </td>
                                    </tr>

                                        <tr valign="bottom">
                                            <td style="padding:21px 0px 0px 20px; vertical-align: bottom;">
                                                <img src="http://www.lbr.ru/images/kp/139-masterdrill/mail-10.jpg" width="358" style="border: 0;" alt="Изображения не отображаются">  
                                            </td> 
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/zernovye-seyalki/330-pnevmaticheskie-seyalki-master-drill/',
                    'colspan' => false,
                    'style' => 'text-align: right; padding-top: 10px; padding-right: 13px;'
                        )
                );
                ?>
            </table></td></tr>
    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>   
