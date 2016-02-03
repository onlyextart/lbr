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
                <td width="660" style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/757-navesnye-zagonnye-plugi-svetlogradagromash/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Загонные навесные плуги серии ПНР
                    </a>
                </td>
                <td width="100" style="padding-bottom: 3px; text-align: right;" align="right">
                    <img src="http://www.lbr.ru/images/makers/svetloagromash_text.jpg" width="70" style="border: 0; float: right;" alt="Логотип Светлоградагромаш">
                </td>
                </tr>
            </table>
        </td></tr>
        <!-- Заголовок со ссылкой и логотипом; -->
        <!-- Контент первого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding-top: 20px;">
                    <img src="http://www.lbr.ru/images/kp/223-pnr3/1.jpg" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
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
                <tr>
                <td>
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding: 10px 0px 0px 0px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; text-align: justify ">
                                Плуги серии ПНР от 3 до 5 корпусов под трактора МТЗ мощностью от 80 до 150 л.с. предназначены
                                для отвальной обработки всех типов почв, не засоренных камнями, плитняком и другими препятствиями 
                                с удельным сопротивлением 0,09 МПа (0,9 кг/см²) и твердостью до 4,0 МПа (40 кг/см²).
                            </p>
                        </td>
                        </tr>
                    </table>
                </td>
                </tr>                        
            </table>
        </td></tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 15px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Усиленная рама.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Рама 120х120 изготовлена из профильной трубы из конструкционной стали повышенной прочности
                        (марка стали 09г2с). Толщина стенки увеличена до 10мм.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
            
                <td style="padding: 15px 0px 0px 20px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Дополнительные преимущества.
                    </p>
                </td>
                </tr>
            
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Возможность установки дополнительного корпуса : система «+»<br>
                        Регулируемая ширина захвата для лучшей адаптации к рабочим условиям.<br>
                        Защита срезной болт<br>
                        Высокая изогнутая стойка.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
      
                <td style="padding: 15px 0px 0px 20px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Долгая жизнь деталей.
                    </p>
                </td>
                
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Все детали производятся из конструкционной стали повышенной прочности (марка 65г) и проходят 3
                        этапа обработки:<br>
                        термическая закалка – <b>лучшая износостойкость</b><br>
                        нормализация – <b>металл не крошится</b><br>
                        плазменная наплавка борсосодержащими термосплавными порошками – <b>металл не стирается</b>,
                        присутствует <b>эффект самозатачивания лемеха</b>.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 15px 0px 0px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; text-transform:uppercase;">
                        Качественная вспашка на глубину 30 см.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding: 5px 0px 10px 0px;">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black; text-align: justify;">
                        Полувинтовой отвал обеспечивает полный оборот пласта и 100% заделку пожнивных остатков.
                    </p>
                </td>
                </tr>
            </table>
        </td>
        </tr>


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

                <tr>
                <td style="padding: 15px 0px 0px 10px;" align="center">
                    <img src="http://www.lbr.ru/images/kp/223-pnr3/2.jpg" width="750" style="border: 0;" alt="Изображения не отображаются">
                </td>
                </tr>
                <tr>
                <td>
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding: 10px 0px 0px 0px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; color: black;">
                                <b>Технические характеристики:</b>
                            </p>
                        </td>
                        </tr>
                    </table>
                </td>
                </tr>

                <tr><td style="padding: 10px 0px 10px 0px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                        <tbody>
                            <tr>
                            <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background-color: #d1d3d4; background-clip: padding-box;">Модель</td>
                            <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #d1d3d4;background-clip: padding-box;">ПНР-3х45</td>
                            <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #d1d3d4;background-clip: padding-box;">ПНР-(3+1)х45</td>
                            <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #d1d3d4;background-clip: padding-box;">ПНР-4х45</td>
                            <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background-color: #d1d3d4;background-clip: padding-box;">ПНР-(4+1)х45</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Производительность, га/ч</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1,7</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,1</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество рабочих органов</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рама</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120х120х10</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120х120х10</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120х120х10</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">120х120х10</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">68</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">68</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">68</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">68</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Регулировка рабочей ширины</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35-40-45</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35-40-45</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35-40-45</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">35-40-45</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Агрегатируется с тракторами</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">МТЗ-80, 82, 1025</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">МТЗ-1221</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">МТЗ-1221</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">МТЗ-1523, 2022</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса машины, кг</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">730</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">897</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">875</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1030</td>
                            </tr>
                            <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td></tr>   
                <tr valign="top">
                <td style="padding: 5px 20px 0px 0px;">
                    <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                        * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                    </p> 
                </td>
                </tr>
            </table>
        </td></tr>   
        
    </table>
    <!-- Внутренности блока; -->
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
</tr>
</table>
<!-- Блок Второй; -->
</div>
</body>
</html>