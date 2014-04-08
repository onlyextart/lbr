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
                                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/prikatyvayushchie-katki/657-prikatyvayushchie-katki-expom/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">Прикатывающие прицепные катки Jacek и Maximus <span style="font-size: 12px; color: #2518B4; font-weight: normal;">(подробнее...)</span></a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/kp/default/mail-expom-logo.jpg" width="23" height="27" style="border: 0; float: left;" alt="Логотип Expom">
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
                                    <img src="http://www.lbr.ru/images/kp/expom-61/mail-1.jpg" width="760" height="415" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                            <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
                            <tr>
                                <td style="background: rgba(204, 51, 51, 0.8); padding: 5px 15px;">
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
                            <tr>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; border-right: 2px solid #808285;">
                                        <tr valign="top">
                                            <td>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                    Почему лучше приобрести простую сеялку и прикатывающий каток, а не дорогую сеялку?
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td>
                                                <table width="378" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 5px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="width: 333px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; ">Универсальные   недорогие   простые   сеялки   с загортачами</span>
                                                                – посев без проблем на любой почве, как сухой, так и влажной, липкой, 
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; font-style: italic; color: #808285; ">НО без прикатки.</span>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td style="width: 30px; padding: 10px 5px 0 0;">
                                                            <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                                        </td>
                                                        <td style="width: 333px; padding: 10px 10px 0 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: black; text-align: justify; ">
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; font-style: italic; color: black; ">Более  дорогие  сеялки  с  прикатывающими колесами </span>
                                                                – посев  по  сухой  почве,  за  счет  прикатывания за сошником создается лучший контакт семян с почвой, что в свою очередь сокращает период всходов,
                                                                <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; font-style: italic; color: #808285; ">НО  при  севе  весной  и  осенью  на  влажной почве рабочие органы сеялок чаще всего залипают.</span>
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
                                            <td style="width: 60px; padding-right: 5px;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-big.jpg" width="60" height="140" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td> 
                                            <td style="width: 315px;">
                                                <!-- Маленький блок с закруглениями:-->
                                                <table width="315" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                                    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-small-top-line.jpg" width="315" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td>
                                                            <table width="315" cellspacing="0" cellpadding="0" bgcolor="#EEEEEE" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #EEEEEE;">
                                                                <tr>
                                                                    <td style="padding: 5px 0px 5px 20px;">
                                                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: normal; color: black; text-align: justify;">
                                                                            <b>Готовое решение</b> для прикатки после  простых  сеялок  с    загортачами для ускорения всходов – <b>использование прикатывающих катков JACEK И MAXIMUS.</b>
                                                                        </p>
                                                                    </td>
                                                                    <td style="padding: 0px 20px;">
                                                                        <img src="http://www.lbr.ru/images/kp/default/mail-exclamation-mark-orange.jpg" width="29" height="90" style="border: 0; float: left;" alt="Картинки не отображаются">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-small-bot-line.jpg" width="315" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                                </table>
                                                <!-- Маленький блок с закруглениями;-->
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
                                                    Применяйте как весной, так и осенью:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    • рабочие  органы <b>Cambridge</b>  –  универсальные,  как для  предпосевной,  так  и  для  послепосевной  обработки.
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    • рабочие  органы <b>Crosskill</b>  –  для  дробления  глыб  и комков на полях.
                                                </p>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    БОНУСНОЕ ПРИМЕНЕНИЕ: 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    катки  можно  успешно  применять  при  послеуборочной обработке  для  ускорения  процесса  гниения  соломы  и пожнивных остатков, а также для провоцирования прорастания рассыпанных семян, в том числе сорняков.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Под любые площади и трактор: 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    модели с шириной захвата от 4 до 12 метров.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 30px 10px 0 0px;">
                                                <img src="http://www.lbr.ru/images/kp/expom-61/mail-3.jpg" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="padding: 10px 0; width: 380px;">
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 0px 0px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Батарея   шпорных   колец   Crosskill   (Cambridge) –
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    остаются чистыми и не забиваются после прикатки. 
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 0px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Плавная   и   стабильная   прикатка   с   возможностью работы на больших скоростях 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    (большой вес катка, универсальная подвеска).
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 15px 0px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Долгий срок службы – 
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    шведская  сталь,  износостойкая  порошковая  покраска, долговечность рамы и рабочих органов.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 0px 0 10px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Удобство в работе:
                                                </p>
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: justify; color: black; ">
                                                    Гидравлическое   складывания   для   транспортировки. Управление из кабины трактора.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="380" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 10px 0px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/expom-61/mail-2.jpg" width="370" height="141" style="border: 0; float: left;" alt="Картинки не отображаются">
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
                <tr>
                    <td style="padding: 5px 20px 10px;">
                        <p style="margin:0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">Прикатывающие катки Jacek и Maximus</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 230px; background: #d1d3d4;">Модель</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Jacek 1706</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Jacek 1707</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Jacek 1709</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Jacek 1717</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Jacek 1726</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Maximus, 9м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Maximus, 12м</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,2</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,2</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр диска Cambridge, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">500</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">500</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">500</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">530</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">530</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">
                                        530
                                    </td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр диска Crosskill, мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">510</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">95</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">117</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">151</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">63</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">177</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">191</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">247</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2270</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2630</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3180</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2340</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4150</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5570</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6860</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">86</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">99</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">125</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">99</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-160</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">140-160</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">160-200</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС, руб.</td>
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
                    <td style="padding: 15px 20px 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                            <tbody>
                                <tr>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Cambridge ∅500 мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Cambridge ∅530 мм</td>
                                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Crosskill ∅510 мм</td>
                                </tr>
                                <tr>
                                    <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-4.jpg" width="245" height="112" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                    <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-5.jpg" width="245" height="112" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                    <td style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-6.jpg" width="245" height="112" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
                <tr valign="bottom">
                    <td style="padding: 15px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td>
                                    <p style="margin: 0; padding: 0; font-size: 12px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">Схема обработки почвы, показывающая необходимость применения прикатывающих катков</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="365">
                                    <!-- Маленький блок с закруглениями:-->
                                    <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-top-line-grey-370.jpg" width="365" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                        <tr>
                                            <td>
                                                <table width="365" height="610" cellspacing="0" cellpadding="0" bgcolor="#e6e7e8" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #e6e7e8;">
                                                    <tr>
                                                        <td style="padding-bottom: 10px;">
                                                            <table width="365" cellspacing="0" cellpadding="0" bgcolor="#e6e7e8" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #e6e7e8;">
                                                                <tr valign="top">
                                                                    <td style="padding: 10px 5px 0 20px; width: 70px;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-7.jpg" width="70" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                                                    <td style="padding: 10px 20px 0 5px;">
                                                                        <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">ОСНОВНАЯ И ИНТЕНСИВНАЯ ОБРАБОТКА ПОЧВЫ</p>
                                                                        <p style="margin: 0; padding: 0; font-size: 13px; font-weight: normal; font-family: 'Trebuchet MS', sans-serif; text-decoration: none; color: black;">(плуги, культиваторы, лущильники, дисковые бороны и другие орудия)</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr><td style="margin: 0; padding: 0; text-align: center;"><img src="http://www.lbr.ru/images/kp/default/arrow-bot-grey.jpg" width="70" height="31" style="border: 0;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td style="padding: 5px 20px 15px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Интенсивное крошение</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Нарушение естественного сложения горизонта</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Разрушение внутренних капилляров почвы</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Образование  пустот  и  увеличение  объема  пор в почве</p>
                                                        </td>
                                                    </tr>
                                                    <tr><td style="margin: 0; padding: 0; text-align: center;"><img src="http://www.lbr.ru/images/kp/default/arrow-bot-grey.jpg" width="70" height="31" style="border: 0;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td>
                                                            <table width="365" cellspacing="0" cellpadding="0" bgcolor="#e6e7e8" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #e6e7e8;">
                                                                <tr>
                                                                    <td style="padding: 10px 5px 0 20px; width: 100px;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-8.jpg" width="100" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                                                    <td style="padding: 10px 20px 0 5px;">
                                                                        <p style="margin: 0; padding: 0; text-align: left; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">ВОССТАНОВЛЕНИЕ СТРУКТУРЫ ПОЧВЫ</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 20px 15px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Значительное время</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Достаточное увлажнение</p>
                                                        </td>
                                                    </tr>
                                                    <tr><td style="margin: 0; padding: 0; text-align: center;"><img src="http://www.lbr.ru/images/kp/default/arrow-bot-grey.jpg" width="70" height="31" style="border: 0;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td>
                                                            <table width="365" cellspacing="0" cellpadding="0" bgcolor="#e6e7e8" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #e6e7e8;">
                                                                <tr>
                                                                    <td style="padding: 10px 5px 0 20px; width: 70px;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-9.jpg" width="70" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                                                    <td style="padding: 10px 20px 0 5px;">
                                                                        <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; text-align: left; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">РЕЗУЛЬТАТ</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 20px 12px;">
                                                            <p style="margin: 0; padding: 0; font-size: 15px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Ухудшение   процесса   вегетации сельскохозяйственных культур</p>
                                                            <p style="margin: 0; padding: 0; font-size: 15px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Снижение урожайности</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line-grey-370.jpg" width="365" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                    </table>
                                    <!-- Маленький блок с закруглениями;-->
                                </td>
                                <td width="30">
                                    <table width="30" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr><td style="padding-top: 80px;"><img src="http://www.lbr.ru/images/kp/default/arrow-right-orange-normal.jpg" width="30" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                    </table>
                                </td>
                                <td width="365">
                                    <!-- Маленький блок с закруглениями:-->
                                    <table width="365" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-top-line-pink-370.jpg" width="365" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                        <tr>
                                            <td>
                                                <table width="365" height="610" cellspacing="0" cellpadding="0" bgcolor="#fee2c9" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fee2c9;">
                                                    <tr>
                                                        <td style="padding-bottom: 10px;">
                                                            <table width="365" cellspacing="0" cellpadding="0" bgcolor="#fee2c9" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fee2c9;">
                                                                <tr valign="top">
                                                                    <td style="padding: 10px 5px 0 20px; width: 70px;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-10.jpg" width="70" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                                                    <td style="padding: 10px 20px 0 5px;">
                                                                        <p style="margin: 0; padding: 0; font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220; line-height: 20pt;">ОБРАБОТКА ПРИКАТЫВАЮЩИМИ КАТКАМИ</p>
                                                                        <p style="margin: 0; padding: 0; font-size: 13px; font-weight: normal; font-family: 'Trebuchet MS', sans-serif; text-decoration: none; color: black;">СРАЗУ ПОСЛЕ ВСПАШКИ, РЫХЛЕНИЯ, ПОСЕВА СЕЯЛКАМИ БЕЗ ПРИКАТКИ</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr><td style="margin: 0; padding: 0; text-align: center;"><img src="http://www.lbr.ru/images/kp/default/arrow-bot-orange.jpg" width="70" height="31" style="border: 0;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td style="padding: 5px 20px;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Формирование   мелкокомковатой   структуры, выравнивание поля, разрушения глыб</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Восстановление сети капиллярных каналов</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Подток влаги к верхнему слою</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Активизация  действия  почвенных  микроорганизмов, которые перерабатывают пожнивные и растительные остатки</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Улучшение контакта семени с почвой</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Уменьшение эрозии почвы</p>
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; ">•  Вдавливание камней на каменистых почвах</p>
                                                        </td>
                                                    </tr>
                                                    <tr><td style="margin: 0; padding: 0; text-align: center;"><img src="http://www.lbr.ru/images/kp/default/arrow-bot-orange.jpg" width="70" height="31" style="border: 0;" alt="Картинки не отображаются"></td></tr>
                                                    <tr>
                                                        <td>
                                                            <table width="365" cellspacing="0" cellpadding="0" bgcolor="#fee2c9" valign="top" align="top" style="border: 0; border-collapse: collapse; background: #fee2c9;">
                                                                <tr>
                                                                    <td style="padding: 10px 5px 0 20px; width: 70px;"><img src="http://www.lbr.ru/images/kp/expom-61/mail-11.jpg" width="70" style="border: 0; float: left;" alt="Картинки не отображаются"></td>
                                                                    <td style="padding: 10px 20px 0 5px;">
                                                                        <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; text-align: left; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">РЕЗУЛЬТАТ</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 20px;">
                                                            <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Дружные и равномерные всходы</p>
                                                            <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Подавление сорной растительности</p>
                                                            <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Экономия времени и ГСМ на дополнительные  проходы  другой  техникой</p>
                                                            <p style="margin: 0; padding: 0; font-size: 14px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">•  Рост урожайности на 10-15%</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr><td><img src="http://www.lbr.ru/images/kp/default/mail-bot-line-pink-370.jpg" width="365" style="border: 0; float: left;" alt="Картинки не отображаются"></td></tr>
                                    </table>
                                    <!-- Маленький блок с закруглениями;-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
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