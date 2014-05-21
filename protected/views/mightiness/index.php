<?php $this->widget('ext.mightinessWidget.MightinessWidget'); ?>
<h1>По мощности трактора</h1>
<?php
    foreach($data as $key => $value) {
        if(!empty($data[$key])){
            echo '<div>'.$key.'<div>';
            foreach($value as $product){
                echo '<a href='.$product['path'].'>'.$product['name'].'</a> (id = '.$product['id'].')', '</br>';
            }
        }
    }
    

