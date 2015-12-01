<?php
/*
 * $menuModel модель меню
 */
if($menuModel->isNewRecord){
    if( isset($_GET['rootId']) ){
        $rootModel = MenuItems::model()->findByPk($_GET['rootId']);
        if( $rootModel !== null){
            $pageHeader = 'Добавить новый пункт меню в "'.$rootModel->name.'"';
        }
        else{
            $pageHeader = 'Добавить новый пункт меню';
        }
    }
}
else{
    $pageHeader = 'Редактирование пункта меню "'.$menuModel->name.'"';
}
?>
<h2>
    <?php echo 111 ?>
</h2>

