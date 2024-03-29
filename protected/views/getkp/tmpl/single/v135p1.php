<?php
if ($data['show_header'] == '1' || !isset($data['show_footer'])):
    Yii::app()->getController()->renderPartial('tmpl/template/print_header', array('data' => $data, 'filial' => $filial, 'template' => $template));
endif;
?>
<div class="table w-800">
<!-- Background grey -->

<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
        <tr>
        <td>
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse;">
                <tr>
                    <td style="padding: 5px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse;">
                            <tr style="background-image: url('http://www.lbr.ru/images/kp/135-tractors/tractors11.jpg'); background-repeat: no-repeat;">
                                <td style="padding: 10px 20px 0 20px; border-radius: 15px;">                                                
                                    <p style="margin: 0; padding: 0; color: white;  font-size: 36px; line-height: normal; text-align: center; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-weight: bolder;">
                                        Энергонасыщенные тракторы
                                    </p>
                                    <p style="margin: 0; padding: 0; color: white; font-size: 36px; line-height: normal; text-align: center; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-weight: bolder;">
                                        Беларус-3522, Беларус-3022
                                    </p>
                                    <p style="margin: 0; padding: 0; color: white; font-size: 36px; line-height: normal; text-align: center; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-weight: bolder;">
                                        и лучшая техника к ним
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
<!-- Блок Первый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
    <tr>
        <td>
            <!-- Внутренности блока: -->
            <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style=" margin: 0; border: 0; border-collapse: collapse; background: white;">
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                            <tr>
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/traktory/mtz/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Тракторы Беларус-3522, Беларус-3022</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/belarus.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                    <img src="http://www.lbr.ru/images/kp/135-tractors/tractors.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
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
                                <td width="378">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                            
                                            <td colspan="2" style="padding: 3px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">
                                                        Использование трактора на почвах различной несущей способности:</span>
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">
                                                        широкий диапазон балластирования с помощью монтажа балласта и заполнения колес жидкостью</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="width: 30px; padding: 10px 10px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Стрелка вправо">
                                            </td>
                                            <td style="padding: 7px 10px 0 0; vertical-align: middle;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; color: #808285; text-align: justify; ">
                                                    <span style="font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; font-style: italic; color: #808285; text-align: center; ">
                                                        возможность установки колес нескольких типоразмеров, в том числе сдваивания колес</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td colspan="2" style="padding: 5px 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; color: black; text-align: justify; ">
                                                    <b>Легкое управление джойстиками и кнопками.</b>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="378">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td style="padding: 5px 0 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/135-tractors/tractors1.jpg" width="370" style="border: 0; float: left;" alt="double-disk">
                                            </td>                                            
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                            <tr valign="top">
                                <td colspan="2" style="padding: 5px 0 0;"> 
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                        <tbody>
                                            <tr>
                                                <td width="30%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                                <td width="35%"style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Беларус-3022</td>
                                                <td width="35%"style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Беларус-3522</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Двигатель</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">BF06M1013FC (Deutz)</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">TCD 2013L 06-4L</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина захвата, м</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,6</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,6</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность, л.с.</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">303</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">355</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Число цилиндров</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочий объем</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,14</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">7,14</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Емкость топливных баков,л</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">500</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">650</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Коробка передач</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">гидромеханическая, ступенчатая</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">гидромеханическая с фрикционными муфтами</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Число передач: вперед/назад</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24/12</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">24/12</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса эксплуатационная, кг</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11 500</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">20 000</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Грузоподъемность гидронавесной системы на оси подвеса, кг</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10000 (на оси шарнирных задних тяг)</td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">ПНУ - 5 000 ЗНУ - 10 000</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Отличительные особенности</td>
                                                <td style="margin: 0; padding: 1px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: justify; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Дизель по выбросам вредных веществ соответствует экологические требования ступени Tier II, 
                                                    кондиционер, комплект для сдваивания задних колес в стандартной комплектации</td>
                                                <td style="margin: 0; padding: 1px 2px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: justify; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Дизель по выбросам вредных веществ соответствует ступени Tier IIIA, 
                                                    Гидронавесная система с мех. управлением, кондиционер, комплект для сдваивания задних колес в стандартной комплектации, переднее навесное устр-во</td>
                                            </tr>
                                            <tr>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td></tr>  
            <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
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
                <!-- Заголовок со ссылкой и логотипом: -->
                <tr><td style="padding: 0 20px 10px 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 3px solid #F58220;">
                            <tr>
                                <td style="padding-bottom: 3px; text-align: justify;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                                        Плуги оборотные навесные от UNIA</a>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr><td style="padding: 0;">
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
                                        <tr>
                                            <td style="padding-bottom: 3px;">
                                                <!-- Заголовок -->
                                                <a href="http://www.lbr.ru/tehnika/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/324-plugi-oborotnye-navesnye-vis/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                    Плуги оборотные навесные VIS</a>
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
                                                            <img src="http://www.lbr.ru/images/kp/135-tractors/tractors5.jpg" width="300" style="border: 0; float: left;" alt="Логотип Expom">
                                                        </td>
                                                    </tr>
                                                    <?php if ($data['product_info5'] && !empty($data['product_info5'])): ?>
                                                        <tr>
                                                            <td width="370px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                                                <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                                                    <?php echo $data['product_info5']; ?>
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

                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                                                                <b>Качественно обработанная поверхность почвы:</b>
                                                            </p>
                                                        </td>
                                                    </tr>  
                                                    <tr valign="top">                                                        
                                                        <td style="padding: 2px 0 0 25px;">

                                                    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                                        отличный оборот пласта
                                                    </li>
                                            </td>
                                        </tr>
                                        <tr valign="top">                                                        
                                            <td style="padding: 2px 0 0 25px;">

                                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                            точная заделка растительных остатков
                                        </li>
                                </td>
                            </tr>  
                            <tr valign="top">                                                        
                                <td style="padding: 2px 0 0 25px;">

                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                низкое сопротивление при вспашке благодаря корпусам (отвалам) плуга
                            </li>
                    </td>
                </tr>
                <tr valign="top">                                                        
                    <td style="padding: 5px 0 0 10px;">

                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                            <b>Надежность работы даже на сложных почвах –2 системы защиты корпуса:</b>
                        </p>
                    </td>
                </tr> 
                <tr valign="top">                                                        
                    <td style="padding: 5px 0 0 10px;">

                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: black; text-align: justify; ">
                            <b>БОЛТОВАЯ ЗАЩИТА</b>
                        </p>
                    </td>
                </tr>
                <tr valign="top">                                                        
                    <td style="padding: 0 0 0 10px;">

                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                            При достижении предельной нагрузки болт разрывается, и корпус уходит назад, пропуская через себя камни, корни деревьев и т.д.
                        </p>
                    </td>
                </tr>  
                <tr valign="top">                                                        
                    <td style="padding: 5px 0 0 10px;">

                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: black; text-align: justify; ">
                            <b>РЕССОРНАЯ ЗАЩИТА (опция)</b>
                        </p>
                    </td>
                </tr>
                <tr valign="top">                                                        
                    <td style="padding: 0 0 0 10px;">

                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                            Автоматизированная защита на базе стальных листовых рессор, благодаря которым становится возможным эффективное отклонение корпуса в случае столкновения лемеха с препятствием 1300 кг и возвращение в рабочее положение после преодоления препятствий.
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
            <tr>
                <td style="padding-bottom: 3px;">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                        <tbody>
                            <tr>
                                <td width="35%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                <td width="13%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XL 7+1</td>
                                <td width="13%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">MX 8+1</td>
                                <td width="13%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">XLS 7+1</td>
                                <td width="13%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">MXS 8+1</td>
                            </tr>
                            <tr>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Масса, кг</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3380</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3600</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3800</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4020</td>
                            </tr>
                            <tr>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Потребность мощности, л.с.</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-310</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-310</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">260-320</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">260-320</td>
                            </tr>
                            <tr>
                                <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Просвет под рамой, см</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">85</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">80</td>
                            </tr>
                            <tr>
                                <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между корпусами, см</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">100</td>
                            </tr>
                            <tr>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                            </tr>
                        </tbody>
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
                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/klassicheskie-tekhnologii-pochvoobrabotki-i-seva/plugi/" style="font-size: 30px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: #F58220;">
                        Техника с широким захватом</a>
                    </a>
                </td>
            </tr>
        </table>
    </td></tr>
<tr><td style="padding: 0;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
            <tr>
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/shirokozakhvatnye-seyalki/268-pnevmaticheskie-seyalki-nta3510/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Пневматическая сеялка Great Plains NTA-3510</a>
                    </a>
                </td>
                <td style="padding-bottom: 3px;">
                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                </td>
            </tr>
        </table>
    </td></tr> 
<tr><td style="padding: 5px 20px 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
            <tr>
                <td>
                    <img src="http://www.lbr.ru/images/kp/135-tractors/tractors6.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                </td>
            </tr>
            <?php if ($data['product_info6'] && !empty($data['product_info6'])): ?>
                                <tr>
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info6']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
        </table>
    </td></tr>
<tr><td style="padding: 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

            <tr valign="top">
                <td style="padding: 10px 0 0;">
                    <table width="270" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0;">

                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                                    <b>4 операции за один проход:</b>
                                </p>
                            </td>
                        </tr>  
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0 15px;">

                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                            Разрезание растительных остатков
                        </li>
                </td>
            </tr> 
            <tr valign="top">                                                        
                <td style="padding: 5px 0 0 15px;">

            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                Рыхление почвы
            </li>
    </td>
</tr> 
<tr valign="top">                                                        
    <td style="padding: 5px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Посев
</li>
</td>
</tr>  
<tr valign="top">                                                        
    <td style="padding: 5px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Эффективное прикатывание
</li>
</td>
</tr>                                                                                                                                                                                                     
</table>
</td>
<td>
    <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
        <tr valign="top">                                                        
            <td style="padding: 5px 0 0 0;">
                <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                    <tbody>
                        <tr>
                            <td width="65%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                            <td colspan="2" width="35%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">NTA-3510</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Междурядье, см.</td>
                            <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">19; 25</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding:1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество сошников, шт.</td>
                            <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">55; 40</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина высева, см</td>
                            <td colspan="2" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">0-9</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина захвата, м</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,7</td>
                        </tr>  
                        <tr>
                            <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Объем бункеров, л</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12 333</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">от 300</td>
                        </tr>                                                      
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/kultivatory-predposevnye/314-kultivatory-great-plains/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Культиватор предпосевной Great Plains серии FCF</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/logo-great-plains-new.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                <tr><td style="padding: 5px 20px 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom: 0px;">
                                    <img src="http://www.lbr.ru/images/kp/135-tractors/tractors7.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                            <?php if ($data['product_info7'] && !empty($data['product_info7'])): ?>
                                <tr>
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info7']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="270" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 5px 0 0;">

                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                                                    <b>4 операции за один проход:</b>
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr valign="top">                                                        
                                            <td style="padding: 2px 0 0 15px;">

                                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                            Качественно выравнивает поверхность вне зависимости от рельефа поля и рыхлит почву на глубину до 15 см
                                        </li>
                                </td>
                            </tr> 
                            <tr valign="top">                                                        
                                <td style="padding: 2px 0 0 15px;">

                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                Борется с сорняками
                            </li>
                    </td>
                </tr> 
                <tr valign="top">                                                        
                    <td style="padding: 2px 0 0 15px;">

                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                    Подготавливает семенное ложе к посеву
                </li>
        </td>
    </tr>  
    <tr valign="top">                                                        
        <td style="padding: 2px 0 0 15px;">

    <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
        Создает мелкокомковатую структуру почвы. Закрывает влагу
    </li>
</td>
</tr>                                                                                                                                                                                                     
</table>
</td>
<td>
    <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
        <tr valign="top">                                                        
            <td style="padding: 5px 0 0 0;">
                <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                    <tbody>
                        <tr>
                            <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                            <td width="25%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8336FCF</td>
                            <td width="25%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8539FCF</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина обработки, мах, см</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество стоек</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">61</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Стрельчатая лапа, шириной 25,4 см</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">61</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                        </tr>  
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-280</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-330</td>
                        </tr>                                                                                                             
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
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
<tr><td style="padding: 15px 0 0;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
            <tr>
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/borony-pruzhinnye/307-tyazhelye-zubovye-borony-summers-superharrow-plus/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Тяжелая зубовая борона Summers Superharrow Plus</a>
                    </a>
                </td>
                <td style="padding-bottom: 3px;">
                    <img src="http://www.lbr.ru/images/makers/summers-logo-big.jpg" height="30" style="border: 0; float: right;" alt="Логотип Unia">
                </td>
            </tr>
        </table>
    </td></tr> 
<tr><td style="padding: 5px 20px 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
            <tr>
                <td style="padding-bottom: 0px;">
                    <img src="http://www.lbr.ru/images/kp/135-tractors/tractors8.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                </td>
            </tr>
            <?php if ($data['product_info8'] && !empty($data['product_info8'])): ?>
                                <tr>
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info8']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
        </table>
    </td></tr>
<tr><td style="padding: 0 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

            <tr valign="top">
                <td style="padding: 0;">
                    <table width="270" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">                                                        
                            <td style="padding: 5px 0 0;">

                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                                    <b>6 операций за один проход:</b>
                                </p>
                            </td>
                        </tr>  
                        <tr valign="top">                                                        
                            <td style="padding: 2px 0 0 15px;">

                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                            Подготовка почвы к посеву. Выравнивание поверхности поля.
                        </li>
                </td>
            </tr> 
            <tr valign="top">                                                        
                <td style="padding: 2px 0 0 15px;">

            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                Подготовка семяложа
            </li>
    </td>
</tr> 
<tr valign="top">                                                        
    <td style="padding: 2px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Провоцирование сорняков на прорастание, уничтожение проросших сорняков
</li>
</td>
</tr>  
<tr valign="top">                                                        
    <td style="padding: 2px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Закрытие влаги
</li>
</td>
</tr>  
<tr valign="top">                                                        
    <td style="padding: 2px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Заделка удобрений и пестицидов
</li>
</td>
</tr>  
<tr valign="top">                                                        
    <td style="padding: 2px 0 0 15px;">

<li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
    Распределение пожнивных остатков.
</li>
</td>
</tr>                                                                                                                                                                                                     
</table>
</td>
<td>
    <table width="448" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
        <tr valign="top">                                                        
            <td style="padding: 5px 0 0 0;">
                <table width="478" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                    <tbody>
                        <tr>
                            <td width="50%" style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                            <td width="25%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8336FCF</td>
                            <td width="25%"style="margin: 0; padding: 2px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8539FCF</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Глубина обработки, мах, см</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">18</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">12</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество стоек</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">61</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Стрельчатая лапа, шириной 25,4 см</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">61</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">70</td>
                        </tr>  
                        <tr>
                            <td style="margin: 0; padding: 2px 0 0 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">220-280</td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-330</td>
                        </tr>                                                                                                             
                        <tr>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                            <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
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
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>

</table>
</td>
</tr>
</table>
</div>
<!-- Блок Третий; -->
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок Четвертый: -->
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
                                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/borony-diskovye/306-borona-diskovaya-summers-diamond-disk/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Дисковая борона Summers Diamond Disc</a>
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px;">
                                    <img src="http://www.lbr.ru/images/makers/summers-logo-big.jpg" height="20" style="border: 0; float: right;" alt="Логотип Unia">
                                </td>
                            </tr>
                        </table>
                    </td></tr> 
                <tr><td style="padding: 3px 20px 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                            <tr>
                                <td style="padding-bottom:0px;">
                                    <img src="http://www.lbr.ru/images/kp/135-tractors/tractors9.jpg" width="760" style="border: 0; float: left;" alt="Логотип Expom">
                                </td>
                            </tr>
                            <?php if ($data['product_info9'] && !empty($data['product_info9'])): ?>
                                <tr>
                                    <td style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                        <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                            <?php echo $data['product_info9']; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </td></tr>
                <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">

                            <tr valign="top">
                                <td style="padding: 0;">
                                    <table width="150" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">                                                        
                                            <td style="padding: 5px 0 0;">

                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px;  color: #F58220; text-align: justify; ">
                                                    <b>3 операции за один проход:</b>
                                                </p>
                                            </td>
                                        </tr>  
                                        <tr valign="top">                                                        
                                            <td style="padding: 2px 0 0 15px;">

                                        <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                            Глубокая заделка растительных ос-татков
                                        </li>
                                </td>
                            </tr> 
                            <tr valign="top">                                                        
                                <td style="padding: 2px 0 0 15px;">

                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                                Рыхление даже на каменистой почве
                            </li>
                    </td>
                </tr> 
                <tr valign="top">                                                        
                    <td style="padding: 2px 0 0 15px;">

                <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  color: black; text-align: justify; ">
                    Выравнивание рельефа и подго-товка почвы к посеву
                </li>
        </td>
    </tr>  

</table>
</td>
<td>
    <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white; float: right;">
        <tr valign="top">                                                        
            <td style="padding: 5px 0 0 0;">
                <table width="598" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                    <tbody>
                        <tr>
                            <td width="30%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                            <td width="15%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9928</td>
                            <td width="15%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9932</td>
                            <td width="15%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9938</td>
                            <td width="15%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">9K9944</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая ширина, м</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8,53</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">9,91</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,7</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">13,6</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная ширина, м</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,7</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">6,7</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная высота, м</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">3,3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">4,9</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,8</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Транспортная длина, м</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,3</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,3</td>
                        </tr>  
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Предполагаемый вес, т</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">8,8</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">10,4</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">11,5</td>
                        </tr>                                                                                                             
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество дисков, шт.</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">66</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">78</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">94</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальное давление на диск, кг</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">121</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">112</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">110</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">104</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность трактора, л.с.</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">280-330</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">330-420</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">380-480</td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">450-600</td>
                        </tr>
                        <tr>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price14']; ?></td>
                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price15']; ?></td>
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
<tr><td style="padding: 5px 20px 0px 20px;">
        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white; border-bottom: 2px solid black;">
            <tr>
                <td style="padding-bottom: 3px;">
                    <!-- Заголовок -->
                    <a href="http://www.lbr.ru/tehnika/shirokozakhvatnye-tekhnologii-pochvoobrabotki-i-seva/chizeli-i-glubokorykhliteli/315-glubokorykhliteli-great-plains-serii-1300/" style="font-size: 22px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                        Глубокорыхлитель Great Plains серии SS</a>
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

            <tr valign="top">
                <td style="padding: 3px 0 0;">
                    <table width="250" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td style="padding: 0;">
                                <img src="http://www.lbr.ru/images/kp/135-tractors/tractors10.jpg" width="250"  style="border: 0; float: left;" alt="Логотип Expom">
                            </td>
                        </tr>
                        <?php if ($data['product_info10'] && !empty($data['product_info10'])): ?>
                            <tr>
                                <td width="250px" style="background: rgb(204, 51, 51); padding: 5px 15px;">
                                    <p style="margin: 0; color: white; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold;">
                                        <?php echo $data['product_info10']; ?>
                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?>                                                                                                      
                    </table>
                </td>
                <td>
                    <table width="498" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">                                                        
                            <td style="padding: 0px 0 5px 10px;">
                                <table width="518" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" valign="top" align="top" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 25px;">
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px;  color: black; text-align: justify; ">
                                                Снижение уплотнения почвы
                                            </li>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 25px;">
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px;  color: black; text-align: justify; ">
                                                Проникновение влаги на максимальную глубину
                                            </li>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 25px;">
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px;  color: black; text-align: justify; ">
                                                Питание почвы
                                            </li>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 25px;">
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px;  color: black; text-align: justify; ">
                                                Сохранение защитного поверхностного слоя
                                            </li>
                                        </td>
                                    </tr>
                                    <tr valign="top">                                                        
                                        <td style="padding: 0px 0 0 25px;">
                                            <li style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px;  color: black; text-align: justify; ">
                                                Общее оздоровление почвы
                                            </li>
                                        </td>
                                    </tr>
                        
                        <tr>
                            <td style="padding: 2px 0 0;">
                                <table width="498" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                    <tbody>
                                        <tr>
                                            <td width="85%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px; background: #d1d3d4;">Модель</td>
                                            <td width="15%"style="margin: 0; padding: 1px 0; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">SS 1300</td>
                                         
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Количество стоек, шт.</td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес, кг</td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1438</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Расстояние между стойками, см</td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">76</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Максимальная рабочая глубина, см</td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">45,7</td>
                                        </tr>
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Требуемая мощность, л.с., в зависимости от влажности, глубины и состояния почвы</td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">250-380</td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 11px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                            <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price16']; ?></td>
                                            
                                        </tr>
                                    </tbody>
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
</td></tr>
            
<!-- Заголовок со ссылкой и логотипом; -->
<!-- Контент первого блока: -->                
        <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                           * цена сформирована по состоянию на <?php echo date("d.m.Y")?>
                        </p> 
                    </td>
                </tr>
</table>
</td>
</tr>
<tr valign="top">
            <td style="padding: 0px 20px 0;">
                <?php
                if ($data['show_footer'] == '1' || !isset($data['show_footer'])):
                    Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                endif;
                ?>
            </td>
        </tr> 
</table>
<!-- Блок Четвертый; -->

</div>
</body>
</html>
