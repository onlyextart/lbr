<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="/getkp/add/" method="post">
            <div><span>Add:</span><input name="add" value="0" type="text"></div>
            <div><span>ID:</span><input name="temp_id" value="2" type="text"></div>
            <div><span>Header:</span><textarea name="header" type="text">Приветствие для Василия И.И.</textarea></div>
            <div><span>Finance_block:</span><input name="finance_block" value="0" type="text"></div>
            <div><span>Finance text:</span><input name="finance_block_text" type="text"></div>
            <div><span>Price count:</span><input name="price_count" value="5" type="text"></div>
            <div><span>Price 1:</span><input name="price1" value="1 234 567 RUR" type="text"></div>
            <div><span>Price 2:</span><input name="price2" value="8 910 111 RUR" type="text"></div>
            <div><span>Price 3:</span><input name="price3" value="2 131 141 RUR" type="text"></div>
            <div><span>Price 4:</span><input name="price4" value="5 161 718 RUR" type="text"></div>
            <div><span>Price 5:</span><input name="price5" value="1 920 212 RUR" type="text"></div>
            <div><span>Product Info 1</span><input name="product_info1" value="ТЕСТ, ТЕСТ, ТЕСТ" type="text"></div>
            <div><span>Product Info 2</span><input name="product_info2" value="" type="text"></div>
            <div><span>Product Info 3</span><input name="product_info3" value="ТЕСТ, ТЕСТ, ТЕСТ" type="text"></div>
            <div><span>Product Info 4</span><input name="product_info4" value="" type="text"></div>
            <div><span>Product Info 5</span><input name="product_info5" value="ТЕСТ, ТЕСТ, ТЕСТ" type="text"></div>
            <div><span>Client:</span><input name="client" value="Василий И.И" type="text"></div>
            <div><span>Login:</span><input name="login" value="vasiliyan" type="text"></div>
            <div><span>User info:</span><textarea name="user_info" type="text">Жориков Иван Васильевич<br>Скайп: jora<br>Мыло: jora@lbr.ru</textarea></div>
            <div><span>Filial:</span><input name="filial" value="BRN" type="text"></div>
            <div><span>Filial bottom:</span><textarea name="filial_bottom" type="text"> filial bottom</textarea></div>
            <div><span>Print:</span><input name="print" value="1" type="text"></div>            
            <div><input type="submit"></div>
        </form>
        <?php
        
        ?>
    </body>
    <style>
        form{
            margin: 1em;
            padding: 1em 2em;
            box-shadow: 0 0 5px rgb(200,200,200);
            width: 500px;
            border-radius: 3px;
        }
        div{
            margin: .5em 0;
        }
        div:after
        {
            content: '';
            clear: both;
            display: block;
        }
        span
        {
            display: block;
            width: 20%;
            float: left;
            text-align: right;
            padding-right: 10px;
        }
        input[type='text']{
            width: 74%;
            padding: 4px 8px;
        }
    </style>
</html>
