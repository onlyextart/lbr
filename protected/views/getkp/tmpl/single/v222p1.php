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
    
        <!-- Заголовок со ссылкой и логотипом; -->
        <!-- Контент первого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding-top: 0px;">
                    <a href="http://www.lbr.ru/selskohozyaystvennaya-tehnika/type/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/" >
                        <img src="http://www.lbr.ru/images/kp/222-vegetables/header.png " width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                    </a>
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
                <tr valign="top" >
                    <td style="padding:10px 0px 5px 0px;" colspan="2">
                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/bunker-pps-20-60/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                            Пункт приемно–сортировочный ППС 20-60<br>
                            (аналог Grimme RH 20-60)
                        </a>
                    </td>
                </tr>
                <tr valign="top">
                    <td  colspan="2">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; text-align:justify; ">
                            Для приема картофеля, лука репчатого и столовых корнеплодов от самосвальных транспортных
                            средств с задней выгрузкой, частичного отделения почвы, отделения мелкой и (или) семенной
                            фракции и загрузки клубней в контейнеры или подачи на загрузочные конвейеры.
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Профиль вальцов предотвращает залипание камней между
                                                витками и бережное обращение с продуктом (частая проблема 
                                                стальных спиральных вальцов).<br>
                                                Материал вальцов износостойкий и долговечный.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 7px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Производительность, т</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 50</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Вместимость пункта, м. куб</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">16,0</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество вальцов сепаратора, шт.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">14</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество фракций, ед.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3/4</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-1.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
                        </tr>
           


                </table>

                </td>
            </tr>
             
            <tr><td style="padding:25px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="500" style="padding:0;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:0px 0px 5px 0px;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/763-konvejer-naklonnyj-kn-650/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Конвейер наклонный КН-650<br>
                                                (аналог Grimme S 300)
                                            </a>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td  style="padding:10px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                Для загрузки в хранилища картофеля и овощей,
                                                а также для загрузки в транспортные средства
                                                или в контейнеры.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Длина ленты</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">5800+760 мм</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина ленты</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">650 мм</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-2.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                     </td></tr>
           


            </table>

            </td>
            </tr>
            
            
             <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td colspan="2" style="padding:10px 0px 5px 0px;">
                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/762-skuter-podborshhik-skp-40/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                            Скутер-подборщик картофеля (крот) CКП-40<br>
                            (аналог Grimme T40)
                        </a>
                    </td>
                </tr>
                <tr valign="top">
                    <td colspan="2">
                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285;text-align:justify; ">
                            Для забора картофеля, лука, моркови, свеклы, капусты и т.д. и транспортировки его по телескопическому конвейеру 
                            к следующему конвейеру линии или в тару для упаковки.
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                <td width="500" style="padding: 5px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; color: black; ">
                                                • Поворот в любом направлении благодаря опорной
                                                вращающейся платформе;<br>
                                                • Очень легкий доступ к машине;<br>
                                                • Беспрепятственное перемещение овощей
                                                к следующему транспортировочному конвейеру - место
                                                приемки овощей на скутере находится в центре над
                                                вращающейся платформой.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="70%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип машины</td>
                                                    <td width="30%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Самоходный</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Произв-ть за 1 час
                                                        основного времени, т</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">не менее 40</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Площадь захвата, м кв.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">130</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса скутера, кг, не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1200</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-3.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент первого блока; -->
          </table>
        <!-- Блок Первый; -->
        </td>
    </tr>
</table>

</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
    
<!-- Блок Второй: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
<tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент второго блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td colspan="2" style="padding:10px 0px 5px 0px;">
                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/konveyer-teleskopicheskiy-kt-40/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                            Конвейер телескопический КТ-40 (аналог Grimme TC 80-16)<br>
                            Конвейер телескопический КТ-40 (9 метров)
                        </a>
                    </td>
                </tr>
                
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td colspan="2">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285; ">
                                                Транспортировка + подача картофеля и овощей
                                                на телескопический загрузчик + загрузка контейнеры.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 2px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Компоновка конвейера телескопического обеспечивает
                                                рациональное использование производственной площади и
                                                удобство работы погрузочных и транспортных средств при
                                                транспортировке овощей и распределении их в нужном
                                                направлении.<br>
                                                Управление конвейером осуществляется оператором с
                                                пульта управления.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип машины</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Передвижной</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час основного времени, т</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">не менее 40</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина ленты, мм, не менее</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">650</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена КТ-40 с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price4']; ?></td>
                                                </tr>   
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена КТ-40 (9 метров) с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price5']; ?></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-4.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
                </tr>
           


                </table>

                </td>
            </tr>
           
 
            <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="500" style="padding: 0;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td colspan="2" style="padding:0px 0px 5px 0px;">
                                <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/zagruzchik-teleskopicheskiy-zt-40/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                    Загрузчик телескопический ЗТ-40<br>
                                    (аналог Grimme SL125)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    
                                    <tr valign="top">
                                        <td  style="padding:5px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #808285;text-align:justify; ">
                                                Для загрузки в хранилища картофеля и овощей, а также
                                                для загрузки продукции в транспортные средства или в
                                                контейнеры.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Компоновка загрузчика телескопического и его составных
                                                частей обеспечивает рациональное использование производственной площади 
                                                и удобство работы при загрузке
                                                продукции и распределении ее в нужном направлении.
                                                Управление загрузчиком осуществляется оператором с
                                                пульта управления.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип машины</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Самопередвижной</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час основного времени, т</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 40</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина ленты, мм, не менее</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">650</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price6']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-5.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


            </table>

            </td>
            </tr>
            
            
             <tr><td style="padding: 35px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td colspan="2" style="padding:0;">
                        <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                            Устройство заполнения контейнеров<br>
                            и биг-бегов УНБ-2 (с подающим транспортером)
                        </span>
                    </td>
                </tr>
               
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Для заполнения мешков (биг-бег) или автоматического
                                                наполнения контейнеров овощами.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; text-decoration: underline; font-weight: bold;">
                                                Устройство оборудовано:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                - автоматическим переключением с мешка на мешок<br>
                                                - гасителем падения управляемого датчиком<br>
                                                - легко вписывается в технологические линии
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Высота загрузки, мм</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1900</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Длина конвейера загрузочного, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3795</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час
                                                        основного времени, т</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 25,0</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price7']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-6.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент второго блока; -->
           </table>
        <!-- Блок Второй; -->
        </td>
    </tr>
</table>
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок третий: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
<tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент третьего блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:10px 0px 5px 0px;">
                                            <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Накопительный бункер<br>
                                                для картофеля и овощей БНК-15
                                            </span>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td style="padding:15px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; font-weight: bold; color: #808285; ">
                                                Для предварительного накопления картофеля и овощей с целью обеспечения максимальной загрузки
                                                линии и используется для повышения или снижения ее
                                                производительности.
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 10px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Вместимость, м куб., не менее</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">15</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса, кг, не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3200</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество транспортеров, шт.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price8']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-7.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


                </table>

                </td>
            </tr>
             
            <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="500" style="">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td colspan="2" style="padding:0px 0px 5px 0px;">
                                <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/761-oprokidyvatel-kontejnerov-ok-1/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                    Опрокидыватель контейнеров ОК-1
                                </a>
                            </td>
                        </tr>
                        <tr valign="top">
                        <td colspan="2" style="padding:5px 0px 5px 0px;">
                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; font-weight: bold; color: #808285; ">
                                Выгрузка содержимого контейнеров с продукцией в бункеры – накопители, приемные бункера,
                                конвейера наклонные, контейнера или другую тару. ОК-1 поднимает контейнеры с габаритной шириной 
                                до 1600 мм (регулируется) и массой до 1200кг.
                            </p>
                        </td>
                    </tr>
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    
                                    <tr>
                                        <td style="padding: 5px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Габаритные размеры (длина/ширина/высота), мм</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2280/2480/1950 (3500)</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Грузоподъемность:</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Угол поворота град.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">140</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса (вес), кг</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">650</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Высота выгрузки , мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1100</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Погрузочная высота, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">100</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 30</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Габариты контейнеров, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1600х1200х1200<br>
                                                        1200х800х800</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price9']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           
                      </tr>   
                    </table>
                    </td>
             <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-8.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td></tr>
           


            </table>

            </td>
            </tr>
            
            
             <tr><td style="padding:35px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                    <td colspan="2" style="">
                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/766-konvejer-priemno-zagruzochnyj-kp-700/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                            Конвейеры приемно-загрузочные КП-700<br>
                            Конвейеры приемно-загрузочные КП-1000<br>
                            с ворохоочистителем и отводящим
                            транспортером для мусора
                        </a>
                    </td>
                </tr>
               
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Конвейер устанавливается перед:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                1. Оборудованием для сухой очистки<br>
                                                2. Установки моечной.<br>
                                                3. Роликовым инспеционным столом.<br>
                                                4. Установкой калибровочной и другим оборудованием.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;background-clip: padding-box; background-color: #eeeeee;">Модель</td>
                                                    <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee; ">КП-700</td>
                                                    <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee;">КП-1000</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Ширина ленты, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">700</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1000</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Вес, кг</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">450</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">600</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 10</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 10</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price10']; ?></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price11']; ?></td>
                                                </tr>  
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           
                      </tr>   
                    </table>
                    </td>
             <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-9.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент третьего блока; -->
          </table>
        <!-- Блок Третий; -->
        </td>
    </tr>
</table>
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок четвертый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
<tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент четвертого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430" style="padding: 15px 0px 0 0px;">
                    <table width="430" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:10px 0px 5px 0px;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/760-mashina-ochistki-ovoshhej-msok-5/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Машина для сухой очистки МСОК-5
                                            </a>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td style="padding:10px 0px 5px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; font-weight: normal; color: black; ">
                                                Сухая очистка (более щадящей, чем мойка) от земли,
                                                чернозема, грязи, песка, глины. МОСК-5 подготавливает к
                                                продаже: <b>картофель, морковь, свекла, а также лука от
                                                отшелушивающейся кожуры</b>.
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 15px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип машины</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Передвижная</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час времени, т/ч, не менее</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 8</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество вальцов, шт.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">16</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Максимальный диаметр щетки, мм, не менее</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">136</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price12']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="330" style="padding: 0;" valign="bottom">
                                <table width="330" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-10.jpg" width="330" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
                   


                </table>

                </td>
            </tr>
             
            <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430" style="">
                    <table width="430" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr valign="top">
                            <td colspan="2" style="padding:0px 0px 5px 0px;">
                                <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/745-moechnaja-mashina-umk-10/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                    Моечная машина барабанного типа УМК-10
                                </a>
                            </td>
                        </tr>
                        
                    </tr>
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                    <td style="padding:0px 0px 5px 0px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; font-weight: bold; color: #808285; ">
                                            Овощи моются в барабане, который вращается
                                            в емкости с водой.
                                        </p>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Уровень воды в УМК-10 регулируется. Водяной центробежный насос 
                                                омывает продукт сильными струями воды через
                                                систему форсунок. Так же имеется система форсунок для
                                                ополаскивания помытых овощей.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 5px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Производительность, т/ч<br>
                                                        - картофель<br>
                                                        - морковь, свекла</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 10<br>
                                                        до 5</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Высота загрузки, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1500</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Объем барабана, м куб.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price13']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
            <td width="330" style="padding: 0;" valign="bottom">
                                <table width="330" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-11.jpg" width="330" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


            </table>

            </td>
            </tr>
            
            
             <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                <tr valign="top">
                <td width="430" >
                    <table width="430" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                    <td style="padding:10px 0px 5px 0px;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/764-sortirovochnyj-pereborochnyj-stol-spr/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Стол переборочный СПР-10<br>
                                            (роликовый, инспекционный)<br>
                                            Стол переборочный СПР-10<br>
                                            с транспортером для удаления мусора
                                        </a>
                                    </td>
                                </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                Для проведения ручной инспекции овощей (картофель,
                                                лук, морковь, свекла).
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Качественные овощи перемещаются далее по линии по
                                                переработки овощей или отводятся для упаковки в сетки,
                                                мешки, пакеты. В зону сортировки овощи подаются автоматически 
                                                с помощью вращающихся роликов. Сортировочный
                                                переборочный стол установлен на <b>колёсных опорах</b>
                                                (мобильный).
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 10px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип машины
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Передвижной
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час
                                                        основного времени, т</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 10</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса стола, кг, не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">300</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена СПР-10 с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price14']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена СПР-10 (с транспортером) с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price15']; ?></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           
                      </tr>   
                    </table>
                    </td>
                     <td width="330" style="padding: 0;" valign="bottom">
                                <table width="330" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-12.jpg" width="330" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент четвертого блока; -->
           </table>
        <!-- Блок Четвертый; -->
        </td>
    </tr>
</table>
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок пятый: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
 <tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент пятого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr><td style="padding:0px;" colspan="2">
                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                        <td style="padding-bottom: 3px;">
                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/sortirovshchiki-krukowiak/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                Сортировщики для картофеля и лука<br>
                                (округлой формы) M-647 Пр-во Krukowiak (Польша)
                            </a>
                        </td>
                        <td style="padding-bottom: 3px; text-align: right;" align="right">
                            <img src="http://www.lbr.ru/images/makers/Krukowiak-logo-big.jpg" width="35" style="border: 0; float: right;" alt="Логотип">
                        </td>
                        </tr>
                    </table>
                </td></tr>
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    
                                    <tr valign="top">
                                        <td style="padding:0px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; font-weight: normal; color: black; ">
                                                • Предназначен для сортировки картофеля и лука округлой
                                                формы.<br>
                                                • 3 сортируемых фракции.<br>
                                                • Сита изготовлены из полимерных материалов,
                                                для минимизации повреждения картофеля
                                                в процессе сортировки.<br>
                                                • Приемный транспортер для удобства загрузки картофеля
                                                на сортировку.<br>
                                                • Наличие селекционного стола позволяет отбраковать
                                                некачественный картофель вручную.<br>
                                                • Четыре мешкодержателя идут
                                                в стандартной комплектации.
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 10px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;background-clip: padding-box; background-color: #eeeeee;">Модель</td>
                                                    <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee; ">M-647 MINI</td>
                                                    <td width="25%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee;">M-647</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса, кг</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">600</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">950</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество фракций</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">4-6</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Размеры сит, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">35-40-45</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">10 съемных сит</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price16']; ?></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price17']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           
                      </tr>   
                    </table>
                    </td>
                     <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-13.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
                   


                </table>

                </td>
            </tr>
            
            <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="500" >
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:0px 0px 5px 0px;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/sortirovshik-mk-900/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Машина калибровочная (сетчатая)<br>
                                                МК-900
                                            </a>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                    <td style="padding:5px 0px 0px 0px;">
                                        <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; font-weight: bold; color: #808285; ">
                                            Для автоматической сортировки овощной продукции по
                                            размерам от 1 до 4 фракций (по заявке заказчика).
                                        </p>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Минимальный размер овощей – <b>20 мм</b>, максимальный до
                                                <b>120 мм</b>. Скорость работы ленты, вибрационных роликов
                                                регулируется на усмотрение заказчика (производительность). 
                                                Отсортированный продукт попадает в специальную
                                                тару или на отводящие транспортеры.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0 5px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Производительность, т/ч</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">10-15</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса машины, кг, не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">820</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Скорость ленты, м/мин</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">15-30</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price18']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                           
                      </tr>   
                    </table>
                    </td>
                     <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-14.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


            </table>

            </td>
            </tr>
           
            
             <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                <tr valign="top">
                <td width="500" >
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                    <td style="padding:0px 0px 5px 0px;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/sortirovshik-rk-1100/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Установка Калибровочная<br>
                                            (радиальная) РК-1100
                                        </a>
                                    </td>
                                </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                Отличительной чертой Радиального калибратора
                                                является его универсальность. Калибровка происходит
                                                за счет зазора между валами. Зазор регулируется
                                                на усмотрение заказчика.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                При калибровке продукт делится на 3 фракции: крупный,
                                                средний, мелкий. Во время движения расстояние между
                                                роликами увеличивается, продукт проваливается на
                                                ленточный транспортер (либо высыпается по встроенным
                                                желобам).
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="70%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Производительность, т/ч
                                                    <td width="30%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">до 10
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Потребляемая мощность установки, кВт</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">4,8</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество отводящих транспортеров</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">3</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price19']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-15.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент пятого блока; -->
          </table>
        <!-- Блок Пятый; -->
        </td>
    </tr>
</table>
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок шестой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
<tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент шестого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="500" style="padding: 15px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:0px 0px 5px 0px;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/mashyna-dla-zataryvaniya-ovoshey-mzk-2/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Машина для затаривания<br>
                                                корнеплодов МЗК-2
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                Затаривание овощей – картофеля, морковь, лук, свекла
                                                в сетку или мешок.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td style="padding:5px 0px 0px 0px;">
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align:justify; font-weight: normal; color: black; ">
                                                Два оператора параллельно производят заполнение сеток
                                                закрепленных в направляющих лотках при помощи 
                                                подающего транспортера срабатывающего от нажатия педали-пускателя.
                                            </p>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="padding: 10px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="70%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Тип
                                                    <td width="30%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Стационарный
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Масса, кг, не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">250</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Вместимость бункера, м куб., не более</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1,5</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1,4-7,0</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество обслуживающего персонала,чел.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество ленточных конвейеров, шт.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price20']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" valign="bottom" style="padding: 0;" >
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-16.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
                   


                </table>

                </td>
            </tr>
            
            <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top" >
                            <td  style="padding:25px 0px 5px 0px;" colspan="2">
                                <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                    Станция компьютерная весовая КВС-12 с подающим<br>
                                    транспортером
                                </span>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td  style="padding:0px 0px 5px 0px;"  colspan="2">
                                <img src="http://www.lbr.ru/images/kp/222-vegetables/text.jpg" width="760" style="border: 0; float: right;"  alt="Картинки не отображаются">
                            </td>
                        </tr>
                <tr valign="top">
                <td width="500" style="padding: 0px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                   <tr>
                                        <td style="padding: 0px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                КВС-12 может комплектоваться автоматической мешкозашивочной упаковочной машиной МАУС-25.<br>
                                                В зависимости от установленного параметра взвешивания,
                                                открывает только те ячейки, значения которых максимально
                                                близко к заданному. В итоге погрешность взвешивания
                                                редко превышает 1%.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0 2px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Тип</td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Стационарный</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Пределы взвешивания, кг</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2,5-25</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Точность взвешивания, %</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">0,2-1,5</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность за 1 час
                                                        основного времени, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">0,8-8,0</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Высота загрузки, мм</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">550</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество лотков (ячеек), шт.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">12</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Количество обслуживающего
                                                        персонала, чел.</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">1 (оператор)</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price21']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-17.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


            </table>

            </td>
            </tr>
            
            
             <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                
                <tr valign="top">
                <td width="500" style="padding: 35px 0px 0 0px;">
                    <table width="500" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                    <td style="padding:0px 0px 5px 0px;">
                                        <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/vesoupakovshik-vsp-50/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                            Автоматизированный
                                            фасовочный комплекс ВСП-50 +
                                            МАУС-25
                                        </a>
                                    </td>
                                </tr>
                                    <tr>
                                        <td style="padding: 5px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                Комбинация весоупаковщика ВСП-50 с зашивочной
                                                машиной МАУС-25 автоматически взвешивает корнеплоды 
                                                с последующей упаковкой и зашивкой продукта в
                                                сетки.
                                            </p>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="padding: 5px 0 3px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="490" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;">Швейная машина
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Двух ниточная,
                                                        Fisch bein F 100</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Весовой контролер</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">CAS FT – 13</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Нанесение рекламной информации</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Есть</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Предел взвешивания, кг</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">2,5-25</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС <br>(произ-ть 8 т/час)<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price22']; ?></td>
                                                </tr>  
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС <br>(произ-ть 12 т/час)<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price23']; ?></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="260" style="padding: 0;" valign="bottom">
                                <table width="260" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-18.jpg" width="260" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент шестого блока; -->
            </table>
        <!-- Блок Шестой; -->
        </td>
    </tr>
</table>
</div>
<div class="page-break"></div>
<div class="after-page-break"></div>
<div class="table w-800">
<!-- Блок седьмой: -->
<table width="800" bgcolor="#eeeeee" cellspacing="0" cellpadding="0" align="center" style="border: 0; border-collapse: collapse;">
<tr>
<td>
    <table width="800" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
       
        <!-- Контент седьмого блока: -->
        <tr><td style="padding: 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430" style="padding: 15px 0px 0 0px;">
                    <table width="430" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:0px 0px 5px 0px;">
                                            <a href="http://www.lbr.ru/tehnika/ovoshchi-i-kartofel/skladskaya-obrabotka-sortirovka-khranenie/765-konvejer-peregruzochnyj-kkp-600/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Конвейер перегрузочный<br>
                                                передвижной КПП-600
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                Для приема картофеля или других корнеклубнеплодов
                                                и равномерной, непрерывной подачи их далее по
                                                технологическому циклу.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 15px 0 7px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; font-weight: bold;">
                                                Технические характеристики:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                                <tr>
                                                    <td width="40%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; width: 220px;background-clip: padding-box; background-color: #eeeeee;">Наименование модели</td>
                                                    <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee; ">КПП-600</td>
                                                    <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee;">КПП-600-01</td>
                                                    <td width="20%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;background-clip: padding-box; background-color: #eeeeee;">КПП-600-02</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Производительность
                                                        за 1 час рабочего
                                                        времени, т/ч</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">10</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">8</td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">8</td>
                                                </tr>
                                                <tr>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price24']; ?></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price25']; ?></td>
                                                    <td style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price26']; ?></td>
                                                
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="330" style="padding: 0;" valign="bottom">
                                <table width="330" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-19.jpg" width="330" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
                   


                </table>

                </td>
            </tr>
            
            <tr><td style="padding: 35px 20px 0 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="430">
                    <table width="430" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                        
                        <tr>
                            <td valign="bottom" style="padding: 0px 10px 0 0px;">
                                <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr valign="top">
                                        <td style="padding:0px 0px 5px 0px;">
                                            <span style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                                Паллетоукладчик ПАЛ
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight:bold; text-align: justify; color: #808285;; ">
                                                ПАЛ специально был разработан для автоматического
                                                укладывания сетки на паллету.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                <b>Конструкционные особенности:</b><br>
                                                • Благодаря своим небольшим размерам эту модель можно
                                                легко и быстро установить в различных помещениях
                                                производственной компании.<br>
                                                • Устройство для подъема мешков полностью встроено в
                                                машину.<br>
                                                • Центрирующие клапаны установлены в захват манипулятора.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 0 0 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Все это гарантирует нахождение мешков точно по центру в
                                                захвате манипулятора.<br>
                                                <b>Как результат такой работы аккуратное складирование
                                                продукции.</b>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0 20px 0;" >
                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: justify; color: black; ">
                                                Данная модель подходит для всех паллет размером:<br>
                                                - До 1600 x 1200 мм
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="420" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                               <tr>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; ">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                                                    <td width="50%" style="margin: 0; padding: 1px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price27']; ?></td>
                                                </tr>   
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            
                      </tr>   
                    </table>
                    </td>
                    <td width="330" style="padding: 0;" valign="bottom">
                                <table width="330" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                    <tr>
                                        <td style="padding: 0px 0px 0px 0px;">
                                            <img src="http://www.lbr.ru/images/kp/222-vegetables/mail-20.jpg" width="330" style="border: 0; float: right;"  alt="Картинки не отображаются">
                                        </td>
                                    </tr>               
                                </table>
                            </td>
            </tr>
           


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
            <!-- Контент седьмого блока; -->
            </table>
        <!-- Блок Седьмой; -->
        </td>
    </tr>
     <tr valign="top">
                    <td  style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
</table>
</div>
</body>
</html>