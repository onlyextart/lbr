<?php
	foreach ($models as $one){
	   echo CHtml::link('<h3>'.$one->header.'</h3>', array('view'));
       echo substr($one->content,0,1247); 
       echo '<br />';
       echo CHtml::link('������ �����...', array ('view', 'id'=>$one->id));
       echo '<hr />';
	}
    
?>