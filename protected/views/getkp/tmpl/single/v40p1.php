<?php

Yii::app()->getController()->renderPartial('tmpl/page/' . $filial['domain'] . '/page1', array('data'=>$data, 'filial'=>$filial, 'template'=>$template));

