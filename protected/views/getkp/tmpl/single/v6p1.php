<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="left-75 header-text">
                   
                    <span class="header-2"><? echo $data['header']; ?> </span></div>
                <div class="right-20">
                    <img src="http://www.lbr.ru/images/kp/logo.jpg" alt="Logo" style="border: 0;"/>
                </div>
            </div>
            <div class="one-page head-first-page">
                <div class="content-page">
                    <span class="first-header-text">МТЗ</span>
                    <span class="second-header-text">в овощном хозяйстве<br>на подсобных работах!</span>
                    <span class="orange-text-right">Для тракторов мощностью 120 л.с.</span>
                </div>
                <div style="text-align: justify;">
                <?php
	$finance_block = $data['finance_block'];
        if ($finance_block=='1')
        {
            $this->renderPartial('finance_zont', array('finance_block_text'=>$data['finance_block_text']));
        }
?>
                </div>
            </div>
            <div class="one-page body-first-page">
                <div class="content-page">
                    <div class="head-content">
                        <div class="h-2 left-75"><span>Трактор Беларус 1221</span></div>
                        <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/belarus-logo.jpg" border="0" /></div>
                    </div>
                    <div class="body-content">
                        <div class="width-100 image">
                            <img src="http://www.lbr.ru/images/kp/mtz-1.jpg" style="width:100%" border="0" />
                        </div>
                        <div class="width-100">
                            <table style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid; position: absolute; right: 0; top: 260px;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1" width="380">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td align="left" width="60%"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">&nbsp;Модель</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">«Беларус-1221.2»</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Двигатель</span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">Д-260.2</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Мощность, кВт (л.с.) </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">96 (130)</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Число передач: вперед/назад </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">16/8</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Грузоподъемность гидронавесной системы на оси подвеса, кг </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">4300</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price1']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span style="font-size: 18px;">Комплекты колес низкого давления<br>и для работы в междурядье</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/traktor-logo.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-2.jpg" style="width: 100%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span style="font-size: 18px;">Погрузчик навесной ТУР</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/traktor-logo-2.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-50 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-3.jpg" border="0" />
                            </div>
                            <div class="right-50">
                                <span class="text" style="line-height: 23px;">
                                    • Итальянская гидравлика и фурнитура
                                    <br>• Трансформация «трактор-погрузчик-трактор» за 20 минут!
                                    <br>• 10 лет на рынке России! Ежегодный объем продаж до 500 шт. Уже 3 500 довольных клиентов в 55 регионах России!
                                    <br>• Срок службы 10-15 лет.
                                </span>
                                <table width="380" cellspacing="0" cellpadding="0" align="left" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="50%" align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">&nbsp;Модель</span></td>
                                        <td width="25%" align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">ТУР-16</span></td>
                                        <td width="25%" align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">ТУР-17</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="70%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Грузоподъемность, кг</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; "> 1 700</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">2 350</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                        <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price2']; ?></span></td>
                                        <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price3']; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="width-100 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-4.jpg" style="width: 100%" />
                            </div>
                        </div>
                    </div>
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span>Универсальный прицеп Баркас</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/traktor-logo-2.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-50 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-5.jpg" border="0" />
                                <span class="h-4" style="font-size:13px;">НАДЁЖНОСТЬ – 100% ИТАЛЬЯНСКАЯ КОМПЛЕКТАЦИЯ</span>
                                <span class="text" style="margin-top: 0; font-family:FuturisXC, sans-serif;">Высота погрузки всего 1,13 метра!</span>
                                <span class="h-4" style="font-size:13px;">ПРИВЛЕКАТЕЛЬНАЯ ЦЕНА. ВСЕГДА В НАЛИЧИИ! –</span>
                                <span class="text" style="margin-top: 0; padding-right: 10px; font-family:FuturisXC, sans-serif;">на 10% дешевле импортных аналогов, идеальное соотношение цена-качество.</span>
                            </div>
                            <div class="right-50">
                                <span class="text" style="font-family:FuturisXC, sans-serif; font-size: 16px;">                                    
                                    Баркас – герметичность, надёжность, устойчивость к коррозии и отсутствие потерь при перевозках груза.
                                </span>
                                <table style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1" width="380">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td align="left" width="60%"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">&nbsp;Модель</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">Баркас 10</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Грузоподъемность, кг </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">8000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Размер платформы, м </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">4,41х2,11х0,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Габаритные размеры, мм<br>&nbsp;- длина<br>&nbsp;- ширина</span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; "><br>6058<br>2320</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Высота платформы, мм </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">1200</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Высота с одним ярусом бортов, мм </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">1800</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Высота с двумя ярусами бортов, мм </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">2400</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Гидравлическая разгрузка  </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">трехсторонняя</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price4']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span>Универсальный прицеп Баркас XL</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/traktor-logo-2.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-50 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-6.jpg" border="0" height="200px" />
                            </div>
                            <div class="right-50">
                                <span class="text" style="line-height: 16px;">
                                    • <b>Увеличенная платформа.</b>
                                    <br>• Повороты, развороты без проблем в узких местах
                                    <br>• <b>100% итальянских комплектующих:</b> надежная итальянская гидравлика и тормозная система.
                                </span>
                                <table style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;" align="left" bgcolor="#FFFFFF" border="1" cellpadding="0" cellspacing="0" height="1" width="380">
                                    <tbody>
                                        <tr bgcolor="#d1d3d4">
                                            <td align="left" width="60%"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">&nbsp;Модель</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">Баркас XL</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Грузоподъёмность, кг</span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">10 000</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Масса , кг </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">1 260</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Размер платформы, м </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">5 Х2,4 х 0,6</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="60%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Шины, сдвоенные </span></td>
                                            <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">215.15R17,5</span></td>
                                        </tr>
                                        <tr>
                                            <td align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                            <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price5']; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-break"></div>
            <div class="after-page-break"></div>
            <div class="one-page body-page">
                <div class="content-page">
                    <div class="one-item">
                        <div class="head-content">
                            <div class="h-2 left-75"><span>Самосвальные полуприцепы LMR</span></div>
                            <div class="logo-maker right-25"><img src="http://www.lbr.ru/images/kp/lmr-logo.jpg" border="0" /></div>
                        </div>
                        <div class="body-content">
                            <div class="left-70 image">
                                <img src="http://www.lbr.ru/images/kp/mtz-7.jpg" border="0" />
                                <span class="text" style="width: 90%">
                                    <b>Богатая базовая комплектация:</b><br>
                                    • один ярус надставных бортов в базовой комплектации;
                                    <br>• боковая стабилизация кузова (гидромеханическая) – безопасность при работе на неровных поверхностях;
                                    <br>• реактивные тяги (предотвращают повреждение осей при боковых ударах);
                                    <br>• только новые шины низкого давления в базовой комплектации;
                                    <br>• две поворотные оси в версии тридем – сокращается радиус разворота и нагрузка на кузов;
                                    <br>• гидравлический задний борт с автоматической блокировкой при закрытии, блокировка гидропривода поднятия кузова;
                                    <br>• лестница.
                                </span>
                            </div>
                            <div class="right-30">
                                <div class="image">
                                    <img src="http://www.lbr.ru/images/kp/mtz-8.jpg" style="width: 100%;" border="0" />
                                </div>
                                <span class="text">
                                    <b>Безопасная погрузка и разгрузка овощей, опционально устанавливается комплект овощник (гаситель падения в кузов и козырёк разгрузки на борт).</b>
                                </span>
                            </div>
                            <div class="width-100">
                                <table width="500" cellspacing="0" cellpadding="0" align="left" border="1" height="1" bgcolor="#FFFFFF"  style="border-collapse: collapse; height: 1px; border-bottom: 1px black solid;">
                                    <tr bgcolor="#d1d3d4">
                                        <td width="50%" align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">&nbsp;Модель</span></td>
                                        <td width="25%" align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">LMR 10</span></td>
                                        <td width="25%" align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 13px;">LMR 14</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="70%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Грузоподъемность, т</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">10</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">14</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="70%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Объем кузова с двумя ярусами надставных бортов, куб. м</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">20</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">22</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="70%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Собственная масса, кг </span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">2850</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">3900</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="70%"><span style="font-family: sans-serif; font-size: 12px; ">&nbsp;Скорость транспортировки, км/ч </span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">30</span></td>
                                        <td align="center"><span style="font-family: sans-serif; font-size: 12px; ">30</span></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);">&nbsp;Цена руб с НДС</span></td>
                                        <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price6']; ?></span></td>
                                        <td align="center"><span style="font-family:FuturisXC, sans-serif; font-size: 15px; color: rgb(211,35,42);"><? echo $data['price7']; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="info-block" style="padding-bottom: 10px;">
                            <span>
                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                            </span>
                        </div>
                        <div class="filial">
                            <span>Ждем Вас в филиале ЛБР-АгроМаркет (<b>Барнаул</b>)!</span>
                            <span>Время работы: 8.00-17.00</span>
                            <span>Адрес филиала: 656067 Барнаул, ул. Попова, 216</span>
                            <span>Телефоны: +7 (3852) 60-17-33, +7(3852)29-9870, 29-9871, 29-9872, 29-9873</span>
                        </div>
                        <div class="user">
                            <span>Ваш персональный менеджер:</span>
                            <span>Есин Роман
                                <br>Тел.: 8(495) 980-97-64
                                <br>Моб.: 8(985) 771-84-59
                                <br>E-mail: esin@lbr.ru
                                <br>Skype: lbr-esin
                                <br>www.lbr.ru
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
<style>
/*    @font-face {
        font-family: FuturisC;  Имя шрифта 
        src: url(http://www.lbr.ru/images/kp/FuturisC.otf);  Путь к файлу со шрифтом 
    }
    @font-face {
        font-family: FuturisXC;  Имя шрифта 
        src: url(http://www.lbr.ru/images/kp/FuturisXC.otf);  Путь к файлу со шрифтом 
    }*/
    .after-page-break{display: block;}
    .after-page-break:after
    {
        content: '- - - - - - - - - - - - - - - - - - - - Разрыв страницы - - - - - - - - - - - - - - - - - - - -';
        display: block;
        text-align: center;
        color: grey;
        margin-top: 20px;
    }
    @media print
    {
      .page-break  { display:block; page-break-before:always; }
      #wrapper .after-page-break{width: 800px; height: 8px; display: block; color: white;}
      .after-page-break:after
      {
          content: '';
          display: none;
      }
    }
    .image img{width: 95%;}
    #wrapper
    {
        width: 820px;
        margin: 0 auto;
        padding: 0;
        border: 0;
        font-family: FuturisC, sans-serif;
    }
    
    .one-page{width: 800px; background: white; position: relative; border-radius: 20px; max-height: 1200px; margin:0; padding: 0; border: 0; box-shadow: 0 0 10px 5px rgb(200,200,200);}
    
    .head-first-page{margin-bottom: 20px; padding-bottom: 20px; text-align: right;  background: url('http://www.lbr.ru/images/kp/bg_mtz.jpg') white no-repeat 25px 110px;}
    .content-page{padding: 20px 20px 0;}
    .first-header-text{display: block; text-transform: uppercase; background: rgb(211, 35, 42); color: white; text-align: center; font-size: 72px; padding: 0; font-family: FuturisXC, sans-serif;}
    .second-header-text{display: block; text-align: right; color: rgb(211, 35, 42);  text-transform: uppercase; font-size: 42px; font-family: FuturisXC, sans-serif; margin-bottom: 15px; margin-top: 5px}
    .flag{position: absolute; left: 20px; bottom: 20px;}
    .header-1{display: block; color: black; background: none !important; font-size: 16px; font-weight: bold; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    .header-2{display: block; color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    
    .body-page{margin-top: 20px;}
    .body-first-page .content-page{padding:0 20px 20px;}
    .head-content{border-bottom: 1px solid black; margin-bottom: 3px; position: relative;}
    .head-content .h-2{font-family: FuturisXC, sans-serif; margin-top: 8px; font-size: 20px; text-transform: uppercase;}
    .head-content .logo-maker{text-align: right; margin-top: 4px;}
    .body-content{position: relative;}
    .body-content .h-4{display: block; font-family: FuturisXC, sans-serif; color:rgb(211, 35, 42); margin-top: 8px; font-size: 21px;}
    .orange-text-right{margin-top: 15px; font-family: FuturisXC, sans-serif; font-size: 27px; padding:3px 5px; text-transform: uppercase; padding: 5px 10px; background: rgb(245,130,32); color: white; text-align: right;}
    
    .body-page .content-page{padding: 0 20px 10px;}
    .one-item{position: relative; margin-bottom: 30px;}
    .one-item:last-child{margin-bottom: 0}
    .one-page:after, .one-item:after, .head-content:after, .content-page:after, #header:after, .wrapper:after{content:''; clear: both; display: block;}
 
    .footer{border-top: 1px solid grey; padding-top: 20px;}
    .footer .user{margin-top: 10px;}
    .footer .user span
    {
        display: block;
    }
    .footer .filial span
    {
        display: block;
    }
    .footer .filial span:first-child, .footer .user span:first-child
    {
        margin-bottom: 4px;
        font-weight: bold;
    }
    .text{display: block; text-align: justify; font-family: FuturisC, sans-serif; font-size: 14px; color: #222222; margin: 10px 0; line-height: 18px;}
    .left-10, .left-20, .left-30, .left-40, .left-50, .left-60, .left-70, .left-80, .left-90, .left-75
    {
        float: left;
    }
    .right-10,.right-20,.right-30,.right-40,.right-50,.right-60,.right-70,.right-80,.right-90, .right-25, .right-45
    {
        float: right;
    }
    .left-10,.right-10{width:10%;}
    .left-20,.right-20{width:20%;}
    .left-30,.right-30{width:30%;}
    .left-40,.right-40{width:40%;}
    .left-50,.right-50{width:50%;}
    .left-60,.right-60{width:60%;}
    .left-70,.right-70{width:70%;}
    .left-80,.right-80{width:80%;}
    .left-90,.right-90{width:90%;}
    .width-100{width: 100%; clear: both; float: none;}
    .left-75{width: 75%}
    .right-25{width: 25%}
    .right-45{width: 45%;}
    table, td, tr
    {
        border: 1px solid grey !important;
    }
    b
    {
        font-family: FuturisXC, sans-serif;
    }
</style>