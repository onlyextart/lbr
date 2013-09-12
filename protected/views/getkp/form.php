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
            <div><input name="temp_id" value="2" type="text"></div>
            <div><textarea name="header" type="text">header</textarea></div>
            <div><input name="price1" value="price1" type="text"></div>
            <div><input name="price2" value="price2" type="text"></div>
            <div><input name="price3" value="price3" type="text"></div>
            <div><input name="client" value="client" type="text"></div>
            <div><input name="user" value="user" type="text"></div>
            <div><textarea name="user_info" type="text">user info</textarea></div>
            <div><input name="filial" value="filial" type="text"></div>
            <div><textarea name="filial_bottom" type="text"> filial bottom</textarea></div>
            <div><input name="print" value="true" type="text"></div>
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
        input[type='text']{
            width: 100%;
            padding: 4px 8px;
        }
    </style>
</html>
