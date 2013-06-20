<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($data);
foreach ($data as $li)
{
    $text = $li['name'];
    if (isset($li['header']))
    {
        $text = $li['header'];
    }
    echo '<li><a href="'.$li['id'].'">'.$text.'</a></li>';
}
//echo '<a href="#">'.$data.'</a>';
//echo '<li>'.$data.$data.'</li>';
//echo '<li>'.$data.'wsekfhesle</li>';
//echo '<li>'.$data.'114124124</li>';
?>
