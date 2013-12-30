<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($data);
if(!empty($data)){
    foreach ($data as $li)
    {
        $text = $li['name'];
        if (isset($li['header']))
        {
            $text = $li['header'];
        }
        echo '<li><a href="'.CategoryUrlRule::getUrl($li['id']).'/">'.$text.'</a></li>';
    }
}