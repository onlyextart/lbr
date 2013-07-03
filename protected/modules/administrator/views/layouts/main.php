<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <title>Administrator panel</title>
    </head>
    <body>
        <header>
            <div class="menu">
                <a target="_blank" href="/" class="logo-link">ЛБР-агромаркет</a>
            <?
            $menu = Yii::app()->params['menuadmin'];
            echo returnMenu($menu);
            
            if(!Yii::app()->user->isGuest){
            ?>
                <a href="/users/logout/" class="admin-logout">Выход</a>
            <?
            }
            ?>
            </div>
        </header>
        <div class="wrapper">
            <?php echo $content; ?>
        </div>
        <footer></footer>
    </body>
</html>
<? 
function returnMenu($arr){
    $menu = '<ul class="nav">';
    foreach ($arr as $key=>$link){
        if (is_array($link)){
            $menu .= '<li class="item parent"><span>'.$key.'</span>'.returnMenu($link).'</li>';
        }else{
            $menu .= '<li class="item"><a href="'.$link.'">'.$key.'</a></li>';
        }
    }
    $menu .= '</ul>';
    return $menu;
  }



?>