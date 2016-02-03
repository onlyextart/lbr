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
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;" width="660">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/dorabotka-i-khranenie-zerna/mobilnye-zernosushilki/635-mobilnye-zernosushilki-mecmar/" target="_blank" style="font-size: 20px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                       Мобильные зерносушилки Mecmar
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right" width="100">
                                    <img src="http://www.lbr.ru/images/kp/179-mecmar/mecmar.jpg" width="100" style="border: 0; float: right;" alt="Логотип Mecmar">
                                </td>
                            </tr>
                        </table>
                    </td></tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-top: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:0px 20px 0px 20px;">
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
                                            <td width="25" style="padding:5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td width="253" valign="middle" style="padding:5px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify;">
                                                    Сушка любых культур
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="25" style="padding:5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td width="253" valign="middle" style="padding:5px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; ">
                                                    Монтаж от 2 до 4 дней
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="25" style="padding:5px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="25" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td width="253" valign="middle" style="padding:5px 0px 0px 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; color: #999999; text-align: justify; ">
                                                    Легкость в обслуживании
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding:15px 0px 0px 0px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Самое бережное отношение к зерну.
                                                </p>

                                            </td>
                                        </tr> 
                                        
                                        <tr>
                                            <td colspan="2" style="padding:5px 0px 0px 0px;">
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    Шнек с переменным шагом обеспечивает одинаковую 
                                                    нагрузку на зерно и исключает его травмирование. 
                                                    В процессе циркуляции зерно движется все
                                                    время по одному вертикальному шнеку. Также в
                                                    стандартную комплектацию входит комплект
                                                    лепестковой защиты камеры нагрева сушилки,
                                                    который предотвращает попадание продукта в
                                                    камеру нагрева. Так в зерносушилках Мекмар
                                                    достигается равномерность прогревания, сушки и
                                                    исключается повреждение зерна.
                                                </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-2.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                       

                                    </table>
                                </td>
                                <!--Вторая колонка-->
                                <td>
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td style="padding: 0px 0px 3px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr>
                                                        <td style="padding:5px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                                Самый широкий модельный ряд.
                                                            </p>
                                                        </td>
                                                    </tr> 
                                        
                                                    <tr>
                                                        <td style="padding:5px 0px 10px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                Зерносушилку можно подобрать, как для малого
                                                                хозяйства, так и для крупного агропромышленного
                                                                комплекса. В зависимости от модели зерносушилки
                                                                Mecmar могут высушить в сутки до 570 тонн в сутки.
                                                            </p>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:10px 0px 0px 0px;">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                                Легкая и быстрая загрузка.
                                                            </p>
                                                        </td>
                                                    </tr> 
                                        
                                                    <tr>
                                                        <td style="padding:5px 0px 10px 0px;">
                                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                                Загрузочный лоток МЕКМАР имеет длину в 3 раза
                                                                больше, чем у конкурентов. Загрузку можно произво-
                                                                дить даже из обычных самосвалов и ковшовых
                                                                погрузчиков, без применения расширителей и
                                                                накопительных емкостей.
                                                            </p>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 25px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-3.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
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
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px 20px 0px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td colspan="2" style="padding:5px 0px 0px 0px;">
                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                        Главное – БЕЗОПАСНОСТЬ!
                                    </p>
                                </td>
                            </tr> 

                            <tr>
                              <td colspan="2" style="padding:5px 0px 10px 0px;">
                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                    Камера сгорания МЕКМАР выполнена из огнеупорной нержавеющей стали и имеет повышенную пожаробезо-
                                    пасность. Камера спроектирована так, что бы можно было производить сушку без применения теплообменника. 
                                    Длина и форма камеры рассчитана таким образом, что бы в ней происходило полное сгорание топлива, а
                                    пламя не соприкасалось с продуктами сушки.
                                </p>

                              </td>
                            </tr>
                            
                            <tr valign="top">
                                <td colspan="2" style="padding:10px 0px 0px 0px;">
                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                        3 варианта привода агрегата:
                                    </p>
                                </td>
                            </tr> 

                            <tr>
                              <td colspan="2" style="padding:5px 0px 10px 0px;">
                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                    Привод только от ВОМ трактора, привод от электросети и ВОМ трактора, привод только от электросети. По
                                    типу применяемого топлива можно выбрать горелку на газу или на жидком топливе.
                                </p>

                              </td>
                            </tr>
                                
                            <tr valign="top">
                                <td>
                                    <!-- Первая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-4.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 0px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-5.jpg" width="378" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td valign="top">
                                    <!-- Вторая колонка-->
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                        <td style="padding:10px 0px 0px 20px;">
                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                Долговечность
                                                и надежность в работе.
                                            </p>
                                        </td>
                                        </tr> 

                                        <tr>
                                        <td style="padding:5px 0px 10px 20px;">
                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                Корпус сушильной камеры изготовлен из перфориро-
                                                ванной нержавеющей стали, а все крепежные
                                                элементы обработаны специальным антикоррозион-
                                                ным составом и обладают высокой прочностью. Срок
                                                службы зерносушилок составляет не менее 15 лет. В
                                                течении этого времени ремонту подлежат только
                                                расходные элементы, такие как ремни и подшипники.
                                            </p>

                                        </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-6.jpg" width="358" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                       <tr>
                                            <td style="padding:10px 0px 0px 20px;">
                                                <table width="358" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">  
                                                    <tr>
                                                        <td width="80" style="padding: 0px 0px 0px 0px;">
                                                            <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-7.jpg" width="80" style="border: 0; float: right;" alt="Изображения не отображаются">
                                                        </td>
                                                        <td width="278" style="padding:0px 0px 0px 20px;" valign="middle">
                                                            <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: left; ">
                                                                Итальянское качество,
                                                                проверенное более 400 раз
                                                            </p>
                                                        </td>
                                                    </tr>
                                                 </table>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td style="padding:5px 0px 0px 20px;">
                                            <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                Mecmar (МЕКМАР) – лидер по продажам мобильных
                                                зерносушилок как в Европе (Италия и Англия), так и
                                                на территории стран СНГ. На сегодняшний день на
                                                территории России, Беларуси и Украины работают
                                                более 400 мобильных сушилок МЕКМАР.
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
<tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
</table>

<!-- Второй блок -->

<!-- Третий блок -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr><td style="padding-top: 15px;"><img src="http://www.lbr.ru/images/kp/default/mail-top-line.jpg" width="800" height="10" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
    <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                <tr><td style="padding:0px 20px 0px 20px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td style="padding:5px 0px 0px 0px;">
                                    <p style="margin:0; color:#999999; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 18px; font-weight: bold;text-align: justify; ">
                                        Рабочий цикл зерносушилки
                                    </p>
                                </td>
                            </tr> 
                            <tr valign="top">
                                <td style="padding:5px 0px 0px 0px;">
                                    <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                        Мобильные зерносушилки Mecmar работают в циклическом режиме.
                                    </p>
                                </td>
                            </tr> 

                            <tr>
                              <td style="padding:5px 0px 0px 0px;">
                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                    Рабочий цикл начинается с загрузки через загрузочный шнек. Далее зерносушилка переходит к циклу сушки,
                                    который может занять от 1 до 3 часов в зависимости от влажности сырья. В процессе сушки в горелочном блоке
                                    сохраняется оптимальная температура, благодаря горелке, которая автоматически поддерживает выбранную
                                    температуру воздуха, который продувается через зерно. По завершению цикла сушки, горелка автоматически
                                    отключается, вентилятор по-прежнему остается включенным и продолжает продувать зерно холодным
                                    воздухом (цикл охлаждения - приблизительно 1 час). При достижении зерном необходимой температуры, или
                                    раньше, если это допустимо, зерно выгружается через разгрузочные желоба. Разгрузка всего объема занимает 
                                    20-30 минут, может осуществляться, как на одну, так и на две стороны одновременно.
                                </p>

                              </td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0px 0px 0px;">
                                    <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-8.jpg" width="760" style="border: 0; float: right;" alt="Изображения не отображаются">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0px 0px 0px;">
                                     <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="215" rowspan="3" valign="middle" style="padding:0px 0px 0px 0px;">
                                                <p style="margin:0; color:#999999; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 34px; font-weight: bold;text-align: justify; line-height: 34px;">
                                                    Самые полезные опции:
                                                </p>
                                            </td>
                                            <td width="150" style="padding:0px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-9.jpg" width="140" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="395" style="padding:0px 0px 0px 10px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Привод от электросети
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    • надёжный электродвигатель<br>
                                                    • современная панель управления<br>
                                                    • эксклюзивная рама для крепления механизмов
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="150" style="padding:10px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-10.jpg" width="140" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="395" style="padding:10px 0px 0px 10px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Крыша и система аспирации
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    • удаление примесей и их сбор в циклон<br>
                                                    • уменьшит себестоимость сушки зерна<br>
                                                    • снижает пожароопасность
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="150" style="padding:10px 0px 0px 10px;">
                                                <img src="http://www.lbr.ru/images/kp/179-mecmar/mail-11.jpg" width="140" style="border: 0; float: right;" alt="Изображения не отображаются">
                                            </td>
                                            <td width="395" style="padding:10px 0px 0px 10px;">
                                                <p style="margin:0; color:#F58220; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                                    Газовые горелки
                                                </p>
                                                <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:normal;text-align: justify; ">
                                                    • высокое качество от известного производителя<br>
                                                    • низкая себестоимость газа<br>
                                                    • легкость в обслуживании
                                                </p>
                                            </td>
                                        </tr>
                                     </table>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td style="padding:10px 0px 0px 0px;">
                                    <p style="margin:0; color:black; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;text-align: justify; ">
                                        Технические характеристики:
                                    </p>
                                </td>
                            </tr> 
                            
                            <tr valign="top">
                                <td  style="padding:10px 0px 0px 0px;">
                    
                                    <!--Таблица с данными-->
                                    <table width="760" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="4px" align="center" style="border: solid black 1px; border-collapse: collapse; background-clip:padding-box;">
                                        <tr>
                                            <td width="40%" align="left" style="border: solid black 1px; padding-left:2px; background-clip:padding-box; background-color: #eeeeee;" ><strong> <span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Модель</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>9/87 F</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>13/119 Т</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>20/153 Т</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>25/210 Т2</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>34/ 255 Т</span></strong></td>
                                            <td width="10%" align="center" style="border: solid black 1px; background-clip:padding-box; background-color: #eeeeee;"><strong><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Mecmar <br>55/397 F</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Емкость камеры сушки, куб.м.</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">12</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">17</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">27</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">34</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">42,5</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">74</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Емкость камеры сушки, т</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">9</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">13</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">20</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">25</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">34</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Топливо</span></td>
                                            <td align="center" colspan="6" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">ДТ/ПТ</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Требуемая мощность электродвигателя, кВт</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">30</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">37</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">55</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">75</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">45+55</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;font-weight: bold;">Производительность - с 20% до 15%, куб.м./сутки</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">125</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">167</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">218</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">284</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">357</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">529</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;font-weight: bold;">Время загрузки / разгрузки, ч</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,15/0,15</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,22/0,22</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,3/0,3</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,43/0,43</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,35/0,35</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">0,61/0,61</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;font-weight: bold;">Расход топлива, л/т/%</span></td>
                                            <td align="center" colspan="6" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">Дт 1,0</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px;padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;font-weight: bold;">Требуемая мощность ВОМа трактора, л.с.</span></td>
                                            <td align="center" colspan="2" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">50-70</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">70-75</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">75-85</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">85-105</span></td>
                                            <td align="center" style="border: solid black 1px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;">электро-двигатель</span></td>
                                        </tr> 
                                        <tr>
                                            <td align="left" style="border: solid black 1px; padding-left:2px;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold;">Цена с НДС</span><span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price1']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price2']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price3']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price4']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price5']; ?></span></td>
                                            <td align="center" style="border: solid black 1px; color: #DD2A1B;"><span style="font-family:'Trebuchet MS', sans-serif; font-size: 12px;"><?php echo $data['price6']; ?></span></td>
                                         </tr>
                                    </table>
                               </td></tr>
                               <tr valign="top">
                                   <td style="padding:0px 0px 0px 0px;">
                                        <p style="margin:0; color:#cc3333; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                                            * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                                        </p> 
                                  </td>
                             </tr>
                    </table>
                 </td></tr>   
                    
                    
                    
                    
                <!-- Ссылка-кнопка подробнее -->
                <?php
                Yii::app()->getController()->renderPartial('tmpl/template/mail_more_button', array(
                    'link' => 'http://www.lbr.ru/tehnika/dorabotka-i-khranenie-zerna/mobilnye-zernosushilki/635-mobilnye-zernosushilki-mecmar/',
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
<?php
if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/mail_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>





