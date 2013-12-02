<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title></title>
        <style>
            body{
                color: #000;
                background-color: #fff;
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                cellspacing: 0;
                cellpadding: 0;
                border-collapse: 0;
            }
            #wrapper {
                width: 846px;
                margin: 0 auto;
                padding: 0;
                border: 0;
                font-family: Calibri;
                font-size: 9pt;
            }
            .main-content{
                width: auto;
                margin: 0;
                padding: 0;
                display: table;
            }
            .main-content-row{
                display: table-row;
            }
            .main-content li{
                display: table-cell;
            }
            .content{
                padding-left: 75px;
                padding-right: 47px;
            }
            .sidebar{
                padding-left: 29px;
                padding-right: 27px;
                font-size: 8pt;
                margin-top: 180px;
            }
            .lable{
                height: 135px;
                width: 51px;
                margin: 0;
                padding: 0;
                font-weight: 900;
                position: relative;
            }
            .turn {
                padding: 0;
                margin: 0;
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg); 
                -webkit-transform: rotate(-90deg);
                /*-moz-transform-origin: 100% 0%;
                -webkit-transform-origin: 100% 0%;*/
                transform-origin: right bottom;
                text-align: center;
                color: #fff;
                background-color: #f49924;
                height: 34px;
                width: 100px;
                position: absolute;
                left: -50px;
                font-size: 12pt;
            }
            
           #list li{
                display: list-item;
                list-style-image: url(http://git-lbr.ru/images/kp/lbr-list-style.jpg);
                margin-left: 75px;
            }
            
            .event-header{
                padding: 3px 0;
                margin: 16px 0 0 0;
                background-color: #fff;
                text-align: center;
            }
            
            .event-content{
                margin-top: 9px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div class="main-content">
                <!--header-->
                <ul class="main-content-row">
                    <li style="width: 588px">
                        <div class="content" style="margin-top: 89px; margin-bottom: 12px">
                            <div style="text-align:left; margin-bottom: 25px">
                                <img src="http://git-lbr.ru/images/kp/lbr-logo.jpg" width="178px" alt="Logo" style="border: 0;"/>
                            </div>
                            <div style="text-align:right"><?php echo date("d.m.Y")?></div>
                        </div>
                    </li>
                    <li style="width: 207px; background-color: #efefef;"></li>
                    <li style="width: 51px"></li>
                </ul>
                <!--content-->
                <ul class="main-content-row">
                    <li style="width: 588px">
                        <div class="content">
                            <div style="font-weight: 900; margin-top: 38px; margin-bottom: 37px; font-size: 12pt;">
                                Уважаемый <?php echo $data['client'] ?> !
                            </div>
                            <div style="margin-top: 41px; font-size: 12pt;" align="justify">
                                Благодарим Вас за сотрудничество в 2013 году. Искренне верим, 
                                что подводя предварительные итоги года, он былл плодотворным и успешным. 
                                Мы также надеемся и в дальнейшем быть полезными для Вас в Вашем нелегком труде.
                            </div>
                            <div style="margin-top: 31px; font-size: 12pt;" align="justify">
                                Вручаем Вам наш новый каталог на 2014 год, который был дополнен последними 
                                новинками производителей техники. Техника была подобрана с учетом условий эксплуатации 
                                в различных регионах РФ.
                            </div>
                            <div style="margin-top: 42px; font-size: 9pt">
                                <div style="font-weight: 900; margin-bottom: 19px">Мы всегда рады Вам на площадке и в офисе нашего АгроМаркета</div>
                                <i>
                                   г. Ставрополь, <br/>
                                   ул. Северный обход, д.4<br/>
                                   т. 8 928 010 52 35<br/>
                                   stavropol@lbr.ru
                                </i>
                            </div>
                        </div>
                        <div style="margin:55px 47px 15px 0; font-size: 9pt; padding-left: 75px; color: #fff; background-color:#979695">На наших площадках Вы сможете</div>
                        <div id="list" style="font-size: 9pt; text-align: left">
                            <ul style="margin: 0; padding: 0">
                                <li> посмотреть новые и популярные модели техники; </li>
                                <li> получить развернутую консультацию специалистов при подборе техники и запчастей; </li>
                                <li> получить консультацию по возможностям сервисного обслуживания; </li>
                                <li> подобрать оптимальные условия приобретения; </li>
                                <li> получить специальные сезонные предложения. </li>
                            </ul>
                        </div>
                        <div class="content" style="margin-top: 71px; margin-bottom: 97px;">
                            <ul class="main-content-row">
                                <li style="">
                                    <img src="http://git-lbr.ru/images/kp/lbr-photo-stavropol.jpg" height="146px" alt="Logo" style="border: 0;"/>
                                </li>
                                <li style="vertical-align: bottom;">
                                    <div style="margin-left: 31px; font-size: 9pt; position: relative">
                                        <div style="">C уважением, <br/> директор Ставропольского АгроМаркета ЛБР</div>
                                        <div style="margin-top: 65px; padding-bottom: 12px; margin-bottom: 12px">
                                            <span style="vertical-align: bottom; line-height: 1; float: left; border-bottom: 1px black solid; width: 158px"><pre></pre></span>
                                            <span style="float: right; text-align: right; margin-left: 10px">
                                                Бухалов А.С.
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 207px; vertical-align: top; background-color: #efefef;">
                        <div class="sidebar">
                            <div style="font-weight: 900; padding-bottom: 15px">Наши выставки и экспозиции на площадке АгроМаркета:</div>
                            <div class="event-header">01.07.2014 - 31.08.2014</div>
                            <div class="event-content">
                                Передовые технологии классического сева <br/><span style="font-size: 7pt">(расширенная экспозиция сеялок, посевных агрегатов, посевных комбинаций)</span><br/> на площадке Агромаркета
                            </div> 
                            <div class="event-header">01.08.2014 - 30.09.2014</div>
                            <div class="event-content">
                                Все для зяблевой обработки почвы <br/><span style="font-size: 7pt">(плуги, бороны, культиваторы, глубокорыхлители)</span><br/> на площадке Агромаркета
                            </div>
                            <div class="event-header">01.02.2015 - 30.04.2015</div>
                            <div class="event-content">
                                Расширенная экспозиция по технике для возделывания овощей (посадка)
                            </div>
                            <div class="event-header">01.07.2015 - 30.09.2015</div>
                            <div class="event-content">
                                Расширенная экспозиция по технике для возделывания овощей (уборка)
                            </div> 
                            <div class="event-header">01.04.2016 - 30.06.2016</div>
                            <div class="event-content">
                                Расширенная экспозиция по технологии заготовки кормов
                            </div> 
                        </div>
                    </li>
                    <li style="width: 51px; vertical-align: bottom">
                        <div style="text-align: right;">
                            <img src="http://git-lbr.ru/images/kp/lbr-side.jpg" height="92px" width="34px" alt="Logo" style="border: 0;"/>
                        </div>
                    </li>
                </ul>
                <!--footer-->
                <ul class="main-content-row">
                    <li style="width: 588px">
                        <div class="content" style="margin-bottom: 46px">
                            <ul class="main-content-row" style="font-size: 9pt;">
                                <li>
                                   <span style="margin-top: 30px; text-align: left; font-weight: 900">
                                        Ваш персональный менеджер <? echo $data['user_info']; ?>
                                   </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 207px; background-color: #efefef;"></li>
                    <li style="width: 51px"></li>
                </ul>
            </div>
        </div>
    </body>
</html>