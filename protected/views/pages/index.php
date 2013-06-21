<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="static">
    <h1><? echo $data->name;?></h1>
    <div class="staticContent">
        <?
            echo($data->pagesRegions[0]->content);
        ?>
    </div>
</div>
<? // var_dump($data); ?>