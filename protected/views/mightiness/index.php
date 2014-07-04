<h1>По мощности трактора</h1>
<?php $this->widget('ext.mightinessWidget.MightinessWidget'); ?>
<div id="mightiness-results"></div>

<?php
//echo CHtml::link('Добавить в базу значения', '/mightiness/addValues/', array('class'=>'btn-admin'));
/*
if(!empty($data)) {
    if(Yii::app()->session->get("mightinessView") == 3){
        echo '<ul class="mightinessTable mightinessTableText">';
        foreach($data as $key => $value) {
            if(!empty($data[$key])){
                foreach($value as $product) {
                    $label = $product['parentName'];
                    if($product['parentName'] != $product['name']) $label = $product['parentName'].' (модель '.$product['name'].')';
                    echo '<li><a href='.$product['path'].'>'.$label.'</a></li>';
                }
            }
        }
        echo '</ul>';
    } else if(Yii::app()->session->get("mightinessView") == 2) {
        echo '<table class="mightinessTable mightinessTableShort"><tbody>';
        foreach($data as $key => $value) {
            if(!empty($data[$key])) {
                foreach($value as $product) {
                    $label = $product['parentName'];
                    if($product['parentName'] != $product['name']) $label = $product['parentName'].' (модель '.$product['name'].')';
                    echo '<tr>'.
                            '<td>' .
                                '<img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/>'.
                            '</td>' .
                            '<td><a href='.$product['path'].'>'.$label.'</a></td>' .
                        '</tr>'
                    ;
                }
            }
        }
        echo '</tbody></table>';
    } else {
        echo '<table class="mightinessTable mightinessTableFullView"><tbody>';
        foreach($data as $key => $value) {
            if(!empty($data[$key])){
                echo '<tr><th colspan="3">'.mb_strtoupper($key, 'UTF-8').'</th></tr>';
                foreach($value as $product) {
                    //$product['id'] - id родителя
                    $label = $product['parentName'];
                    if($product['parentName'] != $product['name']) $label = $product['parentName'].' (модель '.$product['name'].')';
                    echo '<tr>'.
                            '<td>' .
                                '<div><a href='.$product['path'].'>'.$label.'</a></div><div><img alt="Изображение товара" src="'.Yii::app()->getBaseUrl(true).$product['img'].'"/></div>'.
                            '</td>' .
                            '<td class="description">1111</td>' .
                            '<td><img alt="Логотип фирмы" src="'.Yii::app()->getBaseUrl(true).$product['logo'].'"/></td>' .
                        '</tr>'
                    ;
                }
            }
        }
        echo '</tbody></table>';
    }
} else echo 'Нет товаров с выбранной мощностью';
*/
    

