<?php
	echo $model->header;
?>
<?php
	echo date("H.i j.m.Y", $model->created);
?>
<?php
	echo $model->content;
?>