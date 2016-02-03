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
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr>
                <td style="padding-bottom: 3px; text-align: left;">
                    <!-- Заголовок -->
                <span style="font-size: 21px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black; text-align: center">
                    ПЛУГИ ОБОРОТНЫЕ ПОЛУНАВЕСНЫЕ
                </span>
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
            <img src="http://www.lbr.ru/images/kp/249-alpler/mail-1.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
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

<tr><td style="padding: 10px 20px 0px 20px;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
        <tr valign="top">
        <td style="padding: 10px 10px 0px 20px;">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: justify; color:#868685;font-style: italic;">
                Плуги оборотные полунавесные «YADP» (ALPLER (Альплер) производят вспашку на любых
                типах почв без свальных гребней и развальных борозд. Имеют право- и левооборотные
                корпуса.<br>
                В результате применения уникальной технологии повышения прочности рабочие органы
                обладают длительным сроком службы.
            </p> 
        </td>
        </tr>
    </table>
</td>
</tr>

<tr><td style="padding: 20px 20px 10px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#81882e" align="center" style="border: 0; border-collapse: collapse; background: #81882e;">
        <tr valign="top">
        <td style="padding: 10px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                СНИЖЕНА НАГРУЗКА НА НАВЕСКУ ТРАКТОРА БЛАГОДАРЯ ПОЛУНАВЕСНОЙ ВЕРСИИ
            </p>
        </td>
        </tr>
    </table>
</td>
</tr>

<tr><td style="padding: 0px 20px 0px 20px;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
        <tr valign="top">
        <td width="400" style="padding: 0px 10px 10px 0px;"> 
            <img src="http://www.lbr.ru/images/kp/249-alpler/mail-2.png" width="390" style="border: 0; float: left;" alt="Картинки не отображаются">
        </td>
        <td width="40" style="padding: 0px 5px 0px 0px;" valign="top">
            <img src="http://www.lbr.ru/images/kp/249-alpler/arrow.png" width="35" style="border: 0; float: left;" alt="Картинки не отображаются">
        </td>
        <td width="320" style="padding: 0px 10px 10px 10px;" valign="top"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: left; color:#868685; ">
                ПЛУГИ ТОЧНО УДЕРЖИВАЮТ ГЛУБИНУ
                ВСПАШКИ ПРИ НИЗКОМ ДАВЛЕНИИ НА
                ГРУНТ<br><br>
        <span style="font-size: 14px; color:black; font-weight: normal;">благодаря опорно-транспортному колесу
            большого диаметра.</span>
        </p>
</td>
</tr>
</table>
</td>
</tr>

<tr><td style="padding: 10px 20px 0px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
        <tr valign="top">
        <td style="padding: 0px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: normal; text-align: center; color:black; ">
                Масса плуга по его раме распределена таким образом, что линия тяги трактора находится в
                плоскости главного вектора сил сопротивления почвы, что обеспечивает<br>
        <span style="font-size: 16px;color:#81882e; font-weight: bold;">ОПТИМАЛЬНОЕ АГРЕГАТИРОВАНИЕ ПЛУГА С ТРАКТОРОМ БЕЗ ПРОБУКСОВКИ ЕГО КОЛЕС.</span>
    </p>
</td>
</tr>
</table>
</td>
</tr>

<tr><td style="padding: 10px 20px 10px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#868786" align="center" style="border: 0; border-collapse: collapse; background: #868786;">
        <tr valign="top">
        <td style="padding: 10px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                При этом достигается наиболее рациональное и эффективное использование технических
                возможностей трактора.
            </p>
        </td>
    </tr>
</table>
</td>
</tr>

<tr><td style="padding: 0px 20px 0px 20px;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
        <tr valign="top">
        <td width="40" style="padding: 0px 5px 0px 0px;" valign="top">
            <img src="http://www.lbr.ru/images/kp/249-alpler/arrow.png" width="35" style="border: 0; float: left;" alt="Картинки не отображаются">
        </td>
        <td width="340" style="padding: 0px 10px 10px 10px;text-align:left;" valign="top" > 
            <table width="320" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td colspan="2">
                    <p style="margin: 0; padding:0px 0px 10px 0px; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: left; color:#868685; ">
                        КАЧЕСТВЕННАЯ ОБРАБОТКА ПОВЕРХНОСТИ
                        ПОЧВЫ:
                    </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="10" valign="middle">
                    <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="10" style="border: 0; float: left;" alt="Картинки не отображаются">
                </td>
                <td width="310" style="padding: 0px 0px 0px 7px">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                        отличный оборот пласта
                    </p>
                </td> 
                </tr>
                <tr valign="top">
                <td width="10" valign="middle">
                    <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="10" style="border: 0; float: left;" alt="Картинки не отображаются">
                </td>
                <td width="310" style="padding: 0px 0px 0px 7px">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                        точная заделка растительных остатков
                    </p>
                </td> 
                </tr>
                <tr valign="top">
                <td width="10" valign="middle">
                    <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="10" style="border: 0; float: left;" alt="Картинки не отображаются">
                </td>
                <td width="310" style="padding: 0px 0px 0px 7px">
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                        низкое сопротивление при вспашке
                    </p>
                </td> 
                </tr>
            </table>
        </td>
        <td width="380" style="padding: 0px 10px 10px 0px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                <img src="http://www.lbr.ru/images/kp/249-alpler/mail-3.png" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
            </p>
        </td>
    </tr>
</table>
</td>
</tr>

<tr><td style="padding: 0px 20px 10px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
        <tr valign="top">
        <td style="padding: 0px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; text-align: center;font-size: 15px;color:#81882e; font-weight: bold;">ЛЕМЕХА ПЛУГОВ ИЗГОТАВЛИВАЮТ СО СМЕННЫМИ ДОЛОТАМИ. СРЕДНИЙ СРОК СЛУЖБЫ - 4 ГОДА.</p>
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

        <tr><td style="padding: 0px 20px 0px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="380" style="padding: 0px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/fon.png" width="380" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                <td width="380" style="padding: 10px 0px 10px 10px; background:#81882e;" valign="top" bgcolor="#81882e"> 
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                        ДЛЯ ДОСТИЖЕНИЯ ЧИСТОЙ БОРОЗДЫ!
                    </p>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        
        <tr><td style="padding: 10px 20px 10px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="760" style="padding: 0px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/mail-4.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
            </tr>
        </table>
        </td>
        </tr>
        
       
<tr><td style="padding: 10px 20px 10px 20px;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
        <tr valign="top">
        <td width="270" style="padding: 0px 25px 0px 25px;" valign="top" align="center">
            <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="12" style="border: 0; float: left;padding-right: 5px;padding-top: 3px;" align="left" alt="Картинки не отображаются">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                Каждый корпус оборудован
                <b>углоснимом</b>, который
                выполняет ту же роль, что и
                предплужник, но срезает
                только угол земельного
                пласта.
            </p>
        </td>
        <td width="265" style="padding: 0px 15px 0px 0px;" valign="top">
            <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="12" style="border: 0; float: left; padding-right: 5px;padding-top: 3px;" align="left" alt="Картинки не отображаются">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                Трехточечная регулировка
                рабочей ширины в серийной
                комплектации.
            </p>
        </td>
        <td width="225" style="padding: 0px 15px 0px 0px;" valign="top">
            <img src="http://www.lbr.ru/images/kp/249-alpler/marker.png" width="12" style="border: 0; float: left; padding-right: 5px;padding-top: 3px;" align="left" alt="Картинки не отображаются">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: left; color:black; ">
                <b>Дисковый нож</b> в серийной
                комплектации - отвечает за
                чистую вспашку. Точный
                проход дискового ножа
                способствует полному обороту
                пласта и тщательной заделки
                растительных остатков.
            </p>
        </td>
        
        </tr>
    </table>
</td>
</tr>

<tr><td style="padding: 20px 20px 10px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#81882e" align="center" style="border: 0; border-collapse: collapse; background: #81882e;">
        <tr valign="top">
        <td style="padding: 10px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                НАДЕЖНАЯ ТЕХНИКА С 2 СИСТЕМАМИ ЗАЩИТЫ
            </p>
        </td>
        </tr>
    </table>
</td>
</tr>

<tr><td style="padding: 10px 20px 10px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="760" style="padding: 0px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/mail-5.png" width="760" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
            </tr>
        </table>
        </td>
        </tr>
        
<tr><td style="padding: 20px 20px 10px 20px;" >
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#81882e" align="center" style="border: 0; border-collapse: collapse; background: #81882e;">
        <tr valign="top">
        <td style="padding: 10px 10px 10px 10px;"> 
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                ПЛУГ МОЖНО МОДЕЛИРОВАТЬ ПОД ВАШИ УСЛОВИЯ!
            </p>
        </td>
        </tr>
    </table>
</td>
</tr>

<tr><td style="padding: 10px 20px 10px 20px;">
    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: #FFFFFF;">
        <tr valign="top">
        <td width="170" style="padding: 0px 10px 0px 0px;" valign="middle">
            <img src="http://www.lbr.ru/images/kp/249-alpler/mail-6.png" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
        </td>
        <td width="280" style="padding: 10px 10px 10px 10px; background:#e6de94;" valign="top" bgcolor="#e6de94">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; color:black; font-style:italic; ">
                <b>ЕСЛИ ПОЧВА ГЛИНИСТАЯ -
                КОМПЛЕКТУЕМ АЖУРНЫМИ
                (ПОЛОСОВЫМИ) ОТВАЛАМИ</b><br>
                хорошее измельчение
                почвы и выборка борозды.
                Качественная запашка
                стерни, весьма
                универсальный в
                использовании.
            </p>
        </td>
        <td width="150" style="padding: 0px 10px 0px 10px;" valign="top">
            <img src="http://www.lbr.ru/images/kp/249-alpler/mail-7.png" width="120" style="border: 0; float: left;" alt="Картинки не отображаются">
        </td>
        <td width="240" style="padding: 10px 10px 10px 10px; background:#e6de94;" valign="top" bgcolor="#e6de94">
            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: normal; text-align: center; font-style:italic; color:black; ">
                <b>ЕСЛИ НУЖНО ЗАДЕЛАТЬ
                СТЕРНИ, СОЛОМУ,
                СОРНЯКИ - КОМПЛЕКТУЕМ
                ПРЕДПЛУЖНИКАМИ</b><br>
                для среза верхнего слоя
                пласта почвы и
                сбрасывания его в
                перевернутом положении
                на дно борозды
            </p>
        </td>
        </tr>
    </table>
</td>
</tr>

</table>
<!-- Внутренности блока; -->
</td>
</tr>
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
        <tr><td style="padding: 20px 20px 10px 20px;" >
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#81882e" align="center" style="border: 0; border-collapse: collapse; background: #81882e;">
                <tr valign="top">
                <td style="padding: 10px 10px 10px 10px;"> 
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                        ОСОБЕННОСТИ ПЛУГА «YADP» (ALPLER):
                    </p>
                </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr><td style="padding: 10px 20px 10px 20px;">
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="white" align="center" style="border: 0; border-collapse: collapse; background: white;">
                <tr valign="top">
                <td width="20" style="padding: 0px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/1.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 0px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685; ">
                         Отсутствие «пустых» проездов трактора
                         по краям поля.
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding: 5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/2.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif;font-size: 16px; font-weight: bold; text-align:left ;color:#868685;  ">
                         Механическая (стандартная) регулировка
                         на три положения или гидравлическая
                         регулировка рабочей ширины на
                         множество разнообразных величин с
                         рабочего места на тракторе (опция).
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding: 5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/3.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685; ">
                         В рабочее/транспортное положение –
                         займет меньше 1 минуты!
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding: 5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/4.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685; ">
                         Механическая защита корпусов на
                         срезных болтах.
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding: 5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/5.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685;  ">
                         Своя настройка плуга + Свой тип корпуса
                         + Дополнительный аксессуары = под
                         каждый тип почвы и условие работы
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding:5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/6.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685; ">
                         Рама с фланцами для присоединения
                         дополнительного корпуса, если
                         требуется.
                     </p>
                </td>
                </tr>
                <tr valign="top">
                <td width="20" style="padding: 5px 0px 0px 0px;"> 
                   <img src="http://www.lbr.ru/images/kp/249-alpler/7.png" width="20" style="border: 0; float: left;" alt="Картинки не отображаются">
                 </td>
                 <td width="740" style="padding: 5px 0px 0px 10px;" valign="middle">
                     <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align:left ;color:#868685; ">
                         Высококачественная стальная рамная
                         конструкция коробчатого сечения:
                         140x140х14 мм.
                     </p>
                </td>
                </tr>
            </table>
        </td>
   </tr>
   
   <tr><td style="padding: 20px 20px 0px 20px;" >
            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#81882e" align="center" style="border: 0; border-collapse: collapse; background: #81882e;">
                <tr valign="top">
                <td style="padding: 10px 10px 10px 10px;"> 
                    <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 16px; font-weight: bold; text-align: center; color:white; ">
                        ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ:
                    </p>
                </td>
                </tr>
            </table>
        </td>
    </tr>
        
        <tr valign="top">
        <td style="padding: 10px 20px 0;">
            <table width="600" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="center" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                <tbody>
                    <tr>
                    <td width="36%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  text-align: left; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black;">Модель</td>
                    <td width="22%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">YADP 06</td>
                    <td width="22%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">YADP 07</td>
                    <td width="22%" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">YADP 08</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; border: 1px solid white;  background-color: #b1b2b3;background-clip: padding-box; color:black;">Кол-во корпусов, шт.</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">6</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">7</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">8</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  text-align: left; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black;">Требуемая мощность, л.с.</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">170-190</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">180-220</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">210-250</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; border: 1px solid white;  background-color: #b1b2b3;background-clip: padding-box; color:black;">Высота рамы, см.</td>
                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">75</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  text-align: left; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black;">Межкорпусное расстояние, см.</td>
                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">90</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; border: 1px solid white;  background-color: #b1b2b3;background-clip: padding-box; color:black;">Ширина захвата корпуса, см.</td>
                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">35-40-45</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px;  text-align: left; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black;">Глубина обработки, см.</td>
                    <td colspan="3" style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #d9dada;background-clip: padding-box; color:black;">40</td>
                    </tr>
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: left; border: 1px solid white;  background-color: #b1b2b3;background-clip: padding-box; color:black;">Вес, кг.</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">3150</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">3460</td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; text-align: center;  border: 1px solid white;background-color: #b1b2b3;background-clip: padding-box; color:black;">3760</td>
                    </tr>
                    
                    <tr>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: normal; text-align: left; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black; background-clip: padding-box;">Цена с НДС<span style="color:#cc3333; font-size:12px;">*</span></td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black; background-clip: padding-box;"><?php echo $data['price1']; ?></td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center;border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black; background-clip: padding-box;"><?php echo $data['price2']; ?></td>
                    <td style="margin: 0; padding: 3px 7px; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; text-align: center; border: 1px solid white; background-color: #d9dada;background-clip: padding-box; color:black; background-clip: padding-box;"><?php echo $data['price3']; ?></td>
                    </tr>
                </tbody>
            </table>
        </td>
        </tr>
        <tr valign="top">
        <td style="padding: 5px 20px 0px 100px;">
            <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
            </p> 
        </td>
        </tr>

    </table>
    <!-- Внутренности блока; -->
</td>
</tr>
 <tr valign="top">
                    <td style="padding: 0px 20px 0;">
                        <?php
                        if($data['show_footer']=='1' || !isset($data['show_footer'])):
                            Yii::app()->getController()->renderPartial('tmpl/template/print_footer', array('data' => $data, 'filial' => $filial, 'template' => $template));
                        endif;
                        ?>
                    </td>
                </tr>
</table>
<!-- Блок Третий; -->

</div>
</body>
</html>   

