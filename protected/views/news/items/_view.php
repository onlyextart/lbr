<?php
        echo '<li>';
        echo CHtml::link('<h3>'.$data->header.'</h3>', array ('view', 'id'=>$data->id));
        echo $data->newsRegions[0]->description;
        echo $data->date;
        echo '</li>';
