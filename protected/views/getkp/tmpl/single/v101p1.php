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
                                <td style="padding-bottom: 3px;">
                                    <!-- Заголовок -->
                                    <a href="http://www.lbr.ru/tehnika/kormozagotovka/obmotchiki-rulonov/379-obmotchiki-rulonov-savanna-evolution/" style="font-size: 18px; font-weight: 800; font-family: 'Arial Black', Arial; text-decoration: none; color: black;">
                                        Обмотчик рулонов Savanna Evolution
                                    </a>
                                </td>
                                <td style="padding-bottom: 3px; text-align: right;" align="right">
                                    <img src="http://www.lbr.ru/images/kp/default/logo-machinery.png" height="30" style="border: 0; float: right;" alt="Логотип Unia">
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
                                        <img src="http://www.lbr.ru/images/kp/101-savana/print-1.png" width="760" style="border: 0; float: left;" alt="Изображения не отображаются">
                                        <div class="orange-plash">120-140 рулонов в час при 50% экономии материала!</div>
                                        
                                        <?php if($data['product_info1'] && !empty($data['product_info1'])): ?>
                                            <div class="img-fin-block" style="right: 0; bottom: 80px; max-width: 500px;">
                                                <?php echo $data['product_info1']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr valign="top">
                                            <td width="40" style="padding: 10px 0;">
                                                <img src="http://www.lbr.ru/images/kp/default/mail-right-arrow-list.jpg" width="28" height="30" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                            <td style="padding: 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 15px; font-weight: bold; color: #808285; font-style: italic; ">
                                                    Обмотчики Savanna Evolution предназначены для автоматической укладки рулонов и тюков «торец в торец» с последующей их обмоткой в длинный рукав.
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
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Последовательная  и  бережная  схема  обмотки  рулонов для сохранения качества корма:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Для упаковки рулоны загружаются друг за другом на погрузочную  площадку  обмотчика,  затем  обмотчик подвигает рулоны, плотно прижимает их друг к другу и обматывает. Обмотка прекращается автоматически и  продолжается  после  загрузки  следующего  рулона. Конструкция обмотчика с плавным переходом позволяет исключить излом рукава при соприкосновении с почвой.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <img src="http://www.lbr.ru/images/kp/101-savana/mail-2.png" width="370" style="border: 0; float: left;" alt="Изображения не отображаются">
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </td>
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Обмотка рулонов в рукав - более эффективная система заготовки кормов по сравнению с обмоткой каждого рулона индивидуально:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Благодаря  высокой  производительности  обмотчики рулонов  Savanna  Evolution  отлично  подходят  для  ис-пользования  в  крупных  животноводческих  хозяйствах и холдингах в качестве альтернативы силосной яме для заготовки высококачественных кормов.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <table width="370" cellspacing="0" cellpadding="0" border='1' bgcolor="#FFFFFF" align="center" style="border: 1px solid black; border-collapse: collapse; background: white; text-align: center;">
                                                    <tr style="border: 1px solid black;">
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #d1d3d4;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; font-weight: 800; color: black; ">
                                                                Обмотка отдельных рулонов
                                                            </p>
                                                        </td>
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #fcbc86;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; font-weight: 800; color: black; ">
                                                                Обмотка в рукав
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 1px solid black;">
                                                        <td colspan="2" style="border: 1px solid black; padding: 2px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-style: italic; text-align: center; color: black; ">
                                                                Производительность
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 1px solid black;">
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #e6e7e8;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; font-weight: 800; color: black; ">
                                                                20-30 рулонов в час (1 рулон за 2 минуты)
                                                            </p>
                                                        </td>
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #fee2c9;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; font-weight: 800; color: black; ">
                                                                120-140 рулонов в час (1 рулон за 25 сек)
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 1px solid black;">
                                                        <td colspan="2" style="border: 1px solid black; padding: 2px 0;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-style: italic; text-align: center; color: black; ">
                                                                Упаковочный материал
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 1px solid black;">
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #e6e7e8;">
                                                        </td>
                                                        <td style="border: 1px solid black; padding: 3px 0; width: 50%; background: #fee2c9;">
                                                            <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: center; color: black; ">
                                                                <b>Экономия 50%</b> по сравнению с индиви- дуальной обмоткой
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; font-weight: bold; color: #f58220; ">
                                                    Долговременная сохранность кормов:
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Упакованные  корма  в  рукав  сохраняют  свои  питатель-ные  свойства  длительное  время.  Пленка  плотно  облегает рулоны, препятствуя проникновению света и влаги, что предотвращает порчу корма. Рулоны хранятся даже после  начала  выемки  из  общего  рукава.  Частично  открытый тюк, следующий сразу за изъятым, может храниться без снижения качества корма в течение 2-3 дней в теплый период и не менее одной недели в холодный период. 
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
                            <tr valign="top">
                                <td width="380">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="2" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">
                                                        Обмотка пленкой в плотный качественный рулон:
                                                    </span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Все  модели  обмотчиков  Savanna  Evolution  оснащены двумя  высококачественными  натяжными  роликами  с постоянным 55%-ным натяжением пленки.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding: 10px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">
                                                        1 катушка пленки на 50 рулонов!
                                                    </span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td colspan="2" style="padding: 5px 0 5px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Конструкция обмотчика включает вращающийся обруч, который наматывает пленку в несколько слоев из двух катушек стрейч-пленки шириной 75 или 50 см. Одну катушку пленки (75 см х 1500 м) можно использовать для упаковки в среднем 50 рулонов (1,2 м х 1,2 м).
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" style="padding: 5px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">
                                                        Простота  эксплуатации,  не  требующая  значительных затрат и навыков:
                                                    </span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 15px 0px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Обмотчики рулонов оборудованы самообслуживаемой гидравликой, которая работает от автономного бензинового двигателя Subaru с ручным стартером (13,5 л.с).
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr valign="top">
                                            <td style="padding: 5px 15px 0px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 0px;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    Транспортировка  обмотчика  производится  прицеплением.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="380" style="padding-left: 10px;">
                                    <table width="370" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="right" style="border: 0; border-collapse: collapse; background: white;">
                                        <tr>
                                            <td colspan="3" style="padding: 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    <span style="font-weight: bold; color: #f58220;">
                                                        Подбор модели под ваши требования и бюджет.
                                                    </span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="padding: 5px 0 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black;">
                                                    Обмотчики Savanna Evolution доступны в двух версиях: ручной (механической) и автоматической.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 5px 15px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 5px 10px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Модель с механическим управлением</b> – в  работе требуется  участие  оператора,  процессом  обмотки он  управляет  с  помощью блока  гидравлического распределителя.
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/101-savana/mail-3.png" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td style="padding: 0px 15px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    •
                                                </p>
                                            </td>
                                            <td style="padding: 0px 10px 10px 0;">
                                                <p style="margin: 0; padding: 0; font-family: 'Trebuchet MS', sans-serif; font-size: 14px; text-align: justify; color: black; ">
                                                    <b>Модель с автоматическим  управлением</b> позволяет   запускать, останавливать  или  направлять  работу  обмотчика  при  помощи  пульта управления  из  кабины трактора!  Все  процессы контролируются  при  помощи  электронного  блока и фотодатчиков.
                                                </p>
                                            </td>
                                            <td style="padding: 5px 0 10px;">
                                                <img src="http://www.lbr.ru/images/kp/101-savana/mail-4.png" width="150" style="border: 0; float: left;" alt="Картинки не отображаются">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td></tr>
                    <tr>
                        <td style="padding: 0 20px;">
                            <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" border="1" bordercolor="#808285" align="right" style="border-collapse: collapse; background: white; border-left: 1px solid grey; border-top: 1px solid grey; border-color:  #808285;">
                                <tbody>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">Модель</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7500-230</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">7500-А-230MRC</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: bold; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey; background: #d1d3d4;">8400-230</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Рабочая длина, м </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,72</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Длина для перевозки, м </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,16</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,16</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">5,16</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Высота, м </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,86</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Ширина, м </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,62</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">2,86</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Вес, кг </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 250</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 250</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">1 350</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Диаметр упаковываемого рулона, см </td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 145</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 145</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">до 180</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Мощность двигателя, л.с.</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="3">13,5</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Управление обмотчиком</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;"> механическое</td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: center; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;" colspan="2">автоматическое, пультом из кабины трактора</td>
                                    </tr>
                                    <tr>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 12px; font-weight: normal; text-align: left; color: black; border-right: 1px solid grey; border-bottom: 1px solid grey;">Цена с НДС<span style="color:#cc3333; font-size:10px;">*</span></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price1']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price2']; ?></td>
                                        <td style="margin: 0; padding: 2px 6px; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; font-weight: bold; text-align: center; color: #DD2A1B; border-right: 1px solid grey; border-bottom: 1px solid grey;"><?php echo $data['price3']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr valign="top">
                    <td style="padding: 5px 20px 0px 20px;">
                        <p style="margin:0; color:#cc3333; font-weight: bold; font-family: 'Trebuchet MS', sans-serif; font-size: 10px; text-align: left;">
                            * цена сформирована по состоянию на <?php echo date("d.m.Y") ?>
                        </p> 
                    </td>
            </tr>
                    <tr><td style="padding: 0 20px;">
                        <table width="760" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="left" style="border: 0; border-collapse: collapse; background: white;">
                            <tr valign="top">
                                <td width="380" style="text-align: left; padding-top: 10px;">
                                    <img src="http://www.lbr.ru/images/kp/101-savana/mail-6.png" width="370" style="border: 0; float: left;" alt="Картинки не отображаются">
                                </td>
                                <td width="380" style="text-align: right; padding-top: 0px;">
                                    <img src="http://www.lbr.ru/images/kp/101-savana/mail-5.png" width="380" style="border: 0; float: right;" alt="Картинки не отображаются">
                                </td>
                            </tr>
                        </table>
                    </td></tr>
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
            <!-- Внутренности блока; -->
        </td>
    </tr>
</table>
</div>
<!-- Блок Второй; -->
</body>