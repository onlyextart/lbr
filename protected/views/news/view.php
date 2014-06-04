<?php 
   echo '<h1>' . $data['header'] . '</h1>';
   echo CHtml::openTag('dl', array(
       'class' => 'article-info'
    ));
   echo CHtml::openTag('dd', array(
       'class' => 'create'
    ));
   echo 'Создано ', date('d.m.Y H:i', strtotime($data['date']));
   echo CHtml::closeTag('dd');
   echo CHtml::closeTag('dl');
   echo $data['content'];
   