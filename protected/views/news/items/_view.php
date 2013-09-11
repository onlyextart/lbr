<<<<<<< HEAD
<?php
var_dump($data->id);
?>
=======

<?php
	
	   echo CHtml::link('<h3>'.$data->header.'</h3>', array ('view', 'id'=>$data->id));
       echo $data->newsRegions->description;
       echo $data->date; 
       
	
?>
>>>>>>> faad49c... Kp generated
