<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <title></title>
    </head>
    <body>
        <div id="wrapper">  
            
            
            <div class="one-page body-page">
                <div class="content-page">
                    <div style="width: 100%; height: 20px;"></div>
                        <div class="one-item">
                        
                                            
                        
                            
                            <div class="body-content">
                            <div class="width-100">
                                 
                                    
                                    <span style="font-family:FuturisC, Calibri, sans-serif; ; font-size: 16px; line-height: 20px;">                                    
                                    FuturisC, Calibri, ФутурисЦ, Калибри<br />
                                    </span> 
                                    <span style="font-family:FuturisC, sans-serif; ; font-size: 16px; line-height: 20px;">                                    
                                    FuturisC, ФутурисЦ <br />
                                    </span> 
                                    
                                    <span class="text" style="font-family:FuturisXC, Calibri, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     FuturisXC, Calibri, ФутурисИскЦ, Калибри<br />
                                    </span> 
                                    <span class="text" style="font-family:FuturisXC, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     FuturisXC, ФутурисИскЦ<br /> 
                                    </span> 
                                    <span class="text" style="font-family:Calibri, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Calibri, Калибри<br />
                                    </span> 
                                    <span class="text" style="font-size: 20px; font-weight: bolder; line-height: 20px;">                                    
                                     <br />Новые которые хотим применять.<br /><br /> 
                                      </span> 
                                    <span class="text" style="font-family: Arial Black, Gadget, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Arial Black, Gadget, Эриал Блэк, Гаджет<br />
                                      </span> 
                                     <span class="text" style="font-family: Trebuchet MS, Helvetica, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Trebuchet MS, Helvetica, Требушет МС, Хельветика<br />
                                    </span> 
                                    <span class="text" style="font-family: Arial Black, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Arial Black, Эриал Блэк<br />
                                      </span> <span class="text" style="font-family:Gadget, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Gadget, Гаджет<br />
                                      </span> 
                                      <span class="text" style="font-family: Trebuchet MS, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Trebuchet MS, Требушет МС<br />
                                    </span> <span class="text" style="font-family: Helvetica, sans-serif; font-size: 16px; line-height: 20px;">                                    
                                     Helvetica, Хельветика<br />
                                    </span> 
                                </div>                                
                               
                               
                            
                           
                            
                    </div>
                </div>   
            </div>
            </div>
            
                
                <div class="content-page">
                    <div style="width: 100%; height: 20px;"></div>
                                            
                    <div class="footer">
                        <div class="info-block" style="padding-bottom: 10px;">
                            <span>
                                Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера.
                            </span>
                        </div>
                        <div class="filial">
                            <span>Ждем Вас в филиале ЛБР-АгроМаркет (<b><? echo $filial['name']; ?></b>)!</span>
                            <span><? echo $filial['work_time']; ?></span>
                            <span><? echo $filial['address']; ?></span>
                            <span><? echo $filial['telephone']; ?></span>
                        </div>
                        <div class="user">
                            <span>Ваш персональный менеджер:</span>
                            <span>
                                <? echo $data['user_info']; ?>
                            </span>
                        </div>
                    </div>
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
        font-family: FuturisC, Calibri, sans-serif;
    }
    
    .one-page{width: 800px; background: white; position: relative; border-radius: 20px; max-height: 1200px; margin:0; padding: 0; border: 0; box-shadow: 0 0 10px 5px rgb(200,200,200);}
    
    .head-first-page{margin-bottom: 20px; background: url('http://www.lbr.ru/images/kp/grynt.jpg') white no-repeat 25px 90px;}
    .content-page{padding: 20px 20px 0;}
    .first-header-text{clear: both; display: block; text-transform: uppercase; color: rgb(211, 35, 42); text-align: justify; font-size: 26px; padding: 0; margin:0 20px; font-family: FuturisXC, Calibri, sans-serif;}
    .two-header-text{clear: both; display: block; text-transform: uppercase; color: rgb(99, 99, 99); text-align: justify; font-size: 22px; padding: 0; margin:0 20px; font-family: FuturisXC, Calibri, sans-serif;}
    .second-header-text{display: block; text-align: right; color: rgb(211, 35, 42);  text-transform: uppercase; font-size: 38px; font-family: FuturisXC, Calibri, sans-serif;}
    .flag{position: absolute; left: 20px; bottom: 20px;}
    .header-1{display: block; color: black; background: none !important; font-size: 16px; font-weight: bold; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    .header-2{display: block; color: #6e7071; background: none !important; font-size: 16px; font-weight: normal; font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline: none;}
    
    .body-page{margin-top: 20px;}
    .body-first-page .content-page{padding:0 20px 20px;}
    .head-content{border-bottom: 1px solid black; margin-bottom: 3px;}
    .head-content .h-2{font-family: FuturisXC, Calibri, sans-serif; margin-top: 15px; font-size: 20px; text-transform: uppercase;}
    .head-content .logo-maker{text-align: right; margin-top: 4px;}
    .body-content .h-4{display: block; font-family: FuturisXC, Calibri, sans-serif; color:rgb(211, 35, 42); margin-top: 8px; font-size: 21px;}
    .head-content-grey{border-bottom: 3px solid rgb(211, 35, 42); margin-bottom: 10px; padding: 5px 0 10px;}
    .head-content-grey .h-2{ color: #B8BDBC; font-family: FuturisXC, Calibri, sans-serif; margin-top: 8px; font-size: 25px; text-transform: uppercase;}
    .body-page .content-page{padding: 0 20px 10px;}
    .one-item{position: relative; margin-bottom: 0px;}
    .one-item:last-child{margin-bottom: 0}
    .one-page:after, .head-content-grey:after, .dieci-header:after, .one-item:after, .head-content:after, .content-page:after, #header:after, .wrapper:after{content:''; clear: both; display: block;}
    
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
    .text{display: block; text-align: justify; font-family: FuturisC, Calibri, sans-serif; font-size: 14px; color: #222222; line-height: 16px;}
    .text-red{display: block; font-family: FuturisXC, Calibri, sans-serif; color:rgb(211, 35, 42); margin-top: 8px; margin: 20px; font-size: 21px; text-align: center;}
    .dieci-orange{background: rgb(245,130,32); color: white; font-family: FuturisXC, Calibri, sans-serif; font-size: 24px; text-align: center; margin-top: 10px; padding: 5px 0;}
    .dieci-header{ padding: 10px;}
    .dieci-header-orange{width: 80%; text-align: left; font-family: FuturisXC, Calibri, sans-serif; text-transform: uppercase; font-size: 28px; display: block; border-radius: 20px; padding: 10px 20px; background: rgb(245,130,32); color: white;}
    .span-align-left{display: block; text-align: left;}
    .span-align-right{display: block; text-align: right;}
    .dieci-black-header{font-family: FuturisXC, Calibri, sans-serif; font-size: 21px; color: black; text-transform: uppercase; text-align: center}
    .dieci-orange-text-header{padding-right: 10px; font-family: FuturisXC, Calibri, sans-serif; font-size: 56px; color: rgb(245,130,32); text-transform: uppercase; text-align: right}
    .tect_dlg{float: right; margin-top: 25px; margin-right: 20px;}
    .span-red-left{ clear: both; display: block; text-transform: uppercase; background: white; text-align: left; font-size: 18px; padding: 15px 0 0; font-family: FuturisXC,Calibri,sans-serif;}
    .span-red-center{ clear: both; display: block;  background: white; color: rgb(211, 35, 42); text-transform: uppercase; text-align: center; font-size: 30px; padding: 5px 0; font-family: FuturisXC,Calibri,sans-serif;}
    
    .left-10, .left-20, .left-30, .left-40, .left-50, .left-60, .left-70, .left-80, .left-90, .left-75, .left-65, .left-85, .left-45
    {
        float: left;
    }
    .right-10,.right-20,.right-30,.right-40,.right-50,.right-60,.right-70,.right-80,.right-90, .right-25, .right-45, .right-35, .right-15, .right-55
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
    .right-45, .left-45{width: 45%;}
    .left-65{width: 65%}
    .right-55{width: 55%;}
    .right-35{width: 35%;}
    .left-85{width: 85%;}
    .right-15{width: 15%;}
    table
    {
        font-size: 14px;
    }
    table, td, tr
    {
        border: 1px solid grey !important;
    }
    td span
    {
        display: block;
        padding: 4px 6px;
    }
    
    table tr td
    {
        text-align: center;
    }
    table tr td:first-child
    {
        text-align: left;
    }
    .tech-bold
    {
        display: block;
        font-weight: bold;
        padding: 7px 0;
    }
    .bold-up
    {
        display: block;
        font-family: FuturisXC, Calibri, sans-serif;
        font-size: 15px;
        color: black;
        text-transform: uppercase;
        padding: 15px 0 7px;
    }
    .list
    {
        display: block;
        padding-left: 15px;
        line-height: 22px;
    }
</style>