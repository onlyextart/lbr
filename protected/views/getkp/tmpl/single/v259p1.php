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
                border-spacing: 0;
                border-collapse: collapse;
            }
            #wrapper {
                width: 784px;
                margin: 0 auto;
                padding: 0;
                border: 0;
                font-family: Calibri;
                font-size: 9pt;
            }
            .main-content{
                margin: 0 auto; 
                width: auto;
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
                padding: 0px 50px 0px 50px;
            }
            .content p{
                margin:0;
                padding: 0;
            }
           li, #list li{
                display: list-item;
                list-style-type:none;
                /*list-style-image: url(http://www.lbr.ru/images/kp/lbr-list-style2.jpg);*/
                /*margin-left: 15px;*/
            }
        </style>
    </head>
    <body>
        
         <div id="wrapper">
            <div class="main-content">
                  
                <ul class="main-content-row">
                    <li>
                         <a href="http://www.lbr.ru/" title="Сайт ЛБР-агромаркет" style=" text-decoration: none; border: 0;">
                            <div class="content" style="background:url('http://www.lbr.ru/images/kp/default/header_logo_orange.jpg'); height:153px;">
                                <ul class="main-content-row" style="font-size: 9pt;">
                                    <li style=" width: 784px; height:153px; text-align: right;">
                                        <div style="font-size: 15pt;font-style:italic;color:#707070; font-weight:bold;padding:105px 10px 20px 0px;">г. <?php echo $filial['name']; ?></div>
                                    </li>
                                </ul>
                            </div>
                          </a>
                        </li>
                     </ul>
                
                <!--content-->
                <ul class="main-content-row">
                    <li>
                        <div class="content">
                            <div style="margin-top: 40px; font-weight: 900; font-size: 12pt;">
                                <p style="text-align:center;">
                                    <?php echo $data['client'] ?> !
                                </p>
                            </div>
                            <div style="margin-top: 25px; font-size: 12pt;" align="left">
                                Мы подготовили новый выпуск каталога техники.  
                            </div>
                            <div style="margin-top: 15px; font-size: 12pt;" align="left">
                                В каталоге собраны: 
                            </div>
                            <div id="list" style="font-size: 12pt; text-align: left; margin-top: 5px;">
                                <ul style="margin: 0; padding: 0">
                                    <li> - обновленный перечень машин и оборудования для различных отраслей сельского хозяйства; </li>
                                    <li> - технологические циклы «от подготовки поля и до уборки урожая»;  </li>
                                    <li> - раздел "Агрегатирование" с тракторами различной мощности; </li>
                                    <li> - отзывы по эксплуатации техники нашими покупателями;</li>
                                    <li> - а также новые разделы «Запасные части» и «Финансовые программы». </li>
                                </ul>
                            </div>
                            <div style="margin-top: 15px; font-size: 12pt;" align="left">
                                Надеемся, что каталог станет для Вас подспорьем в обновлении и укомплектовании парка машин.  
                            </div>
                            <div style="margin-top: 35px; font-size: 12pt;" align="justify">
                                Приглашаем Вас также посетить нашу площадку с сезонными и постоянными экспозициями техники по адресу:
                            </div>
                            <div style="font-size: 12pt; padding-right: 50px;">
                                <i>
                                   <? echo $filial['address']; ?><br>
                                   т. <? echo $filial['telephone']; ?><br>
                                   <? echo $filial['email']; ?>
                                </i>
                            </div>
                            </div>
                            <div class="content" style="margin-top: 30px;">
                                <ul class="main-content-row">
                                    <li style="">
                                        <img src=<?php echo '"http://www.lbr.ru'.$filial['director_photo'].'"'?> height="146px" alt="Logo" style="border: 0;"/>
                                    </li>
                                    <li style="vertical-align: bottom;">
                                        <div style="margin-left: 31px; font-size: 12pt; position: relative">
                                            <div style="">C уважением, <br/> директор г. <?php echo $filial['name']; ?></div>
                                            <div style="margin-top: 85px; padding-bottom: 12px; margin-bottom: 12px">
                                                <span style="vertical-align: bottom; line-height: 1; float: left; border-bottom: 1px black solid; width: 158px"><pre></pre></span>
                                                <span style="float: right; text-align: right; margin-left: 10px">
                                                    <?php echo $filial['director_surname']." ".$filial['director_name']." ".$filial['director_secondname']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </li>
                    
                </ul>
                <!--footer-->
                <ul class="main-content-row">
                    <li>
                        <div class="content" style="margin-top: 65px;">
                            <ul class="main-content-row" style="font-size: 9pt;">
                                <li style="width:78%; min-width: 200px">
                                    <div style="margin-top: 0px; text-align: left; font-weight: 900">Ваш персональный менеджер <?php echo $managerName ?></div>
                                </li>
                                <li style="">
                                    <div style="text-align: left">
                                     <? echo $managerInfo ?>
                                       
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>

