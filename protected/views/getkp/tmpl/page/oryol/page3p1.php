<?php
    $info = explode('<br>', $data['user_info']);
    $managerName = $info[0];
    unset($info[0]);
    $managerInfo = implode("<br>", $info);
?>

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
                margin: 0 auto;
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
                list-style-image: url(http://www.lbr.ru/images/kp/lbr-list-style2.jpg);
                margin-left: 15px;
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
                    <li style="width: 776px; background-color: #f29313;">
                        <div class="content" style="margin-top: 29px; margin-bottom: 5px; padding-right: 0px;">
                            <div style="text-align:left; margin-bottom:0px">
                                <img src="http://www.lbr.ru/images/kp/lbr-logo-white.jpg" width="230px" alt="Logo" style="border: 0;"/>
                            </div>
                            <div style="text-align:right;font-size: 11pt; color:white; padding-right: 0px;"><?php echo date("d.m.Y")?></div>
                        </div>
                    </li>
                    <li style="width: 70px; background-color: #f29313;"></li>
                </ul>
                <!--content-->
                <ul class="main-content-row">
                    <li style="width: 776px">
                        <div class="content">
                            <div style="font-weight: 900; margin-top: 38px; margin-bottom: 37px; font-size: 12pt;">
                                <?php echo $data['client'] ?> !
                            </div>
                            <div style="margin-top: 41px; font-size: 12pt;" align="justify">
                                Благодарим Вас за сотрудничество с нами в 2014 году. Мы высоко ценим сложившиеся
                                между нами деловые и дружеские отношения и уверены, что они сохранятся и в будущем.
                            </div>
                            <div style="margin-top: 30px; font-size: 12pt;" align="justify">
                                Мы расширили ассортимент продаваемой техники и рады Вам представить наш новый
                                каталог на 2015 год.
                            </div>
                            <div style="margin-top: 27px; font-size: 12pt; color:#f29313; text-transform: uppercase; font-style: italic; font-weight: bold;" align="justify">
                                В ДАННОМ КАТАЛОГЕ СОБРАНЫ:
                            </div>
                            <div id="list" style="font-size: 12pt; text-align: left; margin-top: 5px;">
                                <ul style="margin: 0; padding: 0">
                                    <li> машины и агрегаты для различных отраслей сельского хозяйства;</li>
                                    <li> технологические циклы «от подготовки поля и до уборки урожая»; </li>
                                    <li> подбор техники под имеющийся в хозяйстве трактор;</li>
                                    <li> отзывы по эксплуатации техники нашими покупателями.</li>
                                </ul>
                            </div>
                            <div style="margin-top: 34px; font-size: 12pt;" align="justify">
                                В ближайшее время наш специалист свяжется с Вами, чтобы обсудить варианты нашего
                                будущего сотрудничества и ответить на все Ваши вопросы.
                            </div>
                            <div style="margin-top: 50px; font-size: 12pt;" align="justify">
                                Приглашаем Вас также посетить нашу площадку с сезонными и постоянными
                                экспозициями техники по адресу:
                            </div>
                            <div style="margin-top: 10px; font-size: 12pt">
                                <i>
                                   Орловская обл., Орловский р-н,<br/>
                                   пос. Куликовский, ул. Придорожная, д. 1<br/>
                                   (гос-ца "Аккерман"), <br/>
                                   т. 8 910 306 50 50<br/>
                                   orel@lbr.ru
                                </i>
                            </div>
                            <div style="margin-top: 31px; font-size: 12pt;" align="justify">
                                Наших постоянных клиентов всегда ждут готовые комплексные решения по технике,
                                запасным частям и сервисному обслуживанию и выгодные ценовые предложения.
                            </div>
                        </div>
                        
                        <div class="content" style="margin-top: 61px; margin-bottom: 77px;">
                            <ul class="main-content-row">
                                <li style="">
                                    <img src="http://www.lbr.ru/images/kp/lbr-photo-oryol.jpg" height="146px" alt="Logo" style="border: 0;"/>
                                </li>
                                <li style="vertical-align: bottom;">
                                    <div style="margin-left: 31px; font-size: 12pt; position: relative">
                                        <div style="">C уважением, <br/> директор Орловского АгроМаркета ЛБР</div>
                                        <div style="margin-top: 65px; padding-bottom: 12px; margin-bottom: 12px">
                                            <span style="vertical-align: bottom; line-height: 1; float: left; border-bottom: 1px black solid; width: 158px"><pre></pre></span>
                                            <span style="float: right; text-align: right; margin-left: 10px">
                                                Овсянников О.Н.
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 70px; vertical-align: bottom; background-color: #f29313;">
                        <div style="text-align: right;">
                            <img src="http://www.lbr.ru/images/kp/lbr-side-new.jpg"  width="40px" alt="Logo" style="border: 0;"/>
                        </div>
                            
                    </li>
                    
                </ul>
                <!--footer-->
                <ul class="main-content-row">
                    <li style="width: 776px">
                        <div class="content" style="margin-bottom: 46px">
                            <ul class="main-content-row" style="font-size: 9pt;">
                                <li style="width:78%; min-width: 200px">
                                    <div style="margin-top: 30px; text-align: left; font-weight: 900">Ваш персональный менеджер <?php echo $managerName ?></div>
                                </li>
                                <li style="">
                                    <div style="text-align: left">
                                       <? echo $managerInfo ?>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 70px; background-color: #f29313;"></li>
                </ul>
            </div>
        </div>
    </body>
</html>

