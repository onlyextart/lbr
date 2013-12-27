<div style="float:left; width:100%;">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="500">
        <param name="movie" value="/images/map1000px.swf">
        <param name="bgcolor" value="#ffffff">
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="/images/map1000px.swf" width="1000" height="500">
                    <!--<![endif]-->
                    <!--[if !IE]>-->
                    <param name="wmode" value="opaque">
            </object>
    <!--<![endif]-->
    </object>
</div>
<ul class="contacts_list clearfix">
<?php 
$districts = Regions::getDistricts();
asort($districts);
foreach( $districts as $districtId=>$districtName ){
    $regions = Regions::model()->findAll(array(
            'condition'=>'published=:published AND district_id=:district_id',
            'params'=>array(
                ':published'=>'1',
                ':district_id'=>$districtId
            ),
            'group'=>'contact_id'
        )
    );
    $districtNameFirstWord = strstr($districtName, ' ', true);
    echo CHtml::openTag('li', array('class'=>'district_name'));
        echo'<span>'.$districtNameFirstWord.'</span>'.str_replace($districtNameFirstWord, '', $districtName);
    echo CHtml::closeTag('li');
    echo '<li><ul>';
    $emptySpace = (4-(count($regions)%4))%4;
    $filialFotos = array();
    foreach($regions as $region){
        echo CHtml::openTag('li', array('class'=>'filial_caption'));
            //echo CHtml::link($region->contact->name, 'http://www.'.$region->contact->alias.'.lbr.ru/company/contacts/'.$region->contact->alias.'/');
            echo CHtml::link($region->contact->name, '/company/contacts/'.$region->contact->alias.'/');
            echo $region->contact->address.'<br>';
            echo 'Телефоны:'.$region->contact->telephone.'<br>';
            echo $region->contact->email.'<br>';
            if($emptySpace>0){
                $filialFotos[] = $region->contact->images;
            }
            $emptySpace--;
        echo CHtml::closeTag('li');
    }
    foreach($filialFotos as $filialFoto){
        echo CHtml::openTag('li', array('class'=>'filial_caption'));
            echo '<img src="http://www.lbr.ru/'.$filialFoto.'">';
        echo CHtml::closeTag('li');
    }
    echo '</ul></li>';
}
?>
</ul>

