<?php

Yii::app()->getController()->renderPartial('tmpl/page/' . $filial['domain'] . '/page2', array('data'=>$data, 'filial'=>$filial, 'template'=>$template));


