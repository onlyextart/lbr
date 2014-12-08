<div class="contact-additional-info">
    <a class="view_all_contacts" href="<?php echo Yii::app()->getBaseUrl(true).'/company/contacts/#list_filials'?>">Посмотреть все контакты<!--img alt="Посмотреть все контакты" title="Посмотреть все контакты" src="/images/bottom-arrow.png" /--></a>
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
<a name="list_filials"></a>
<?php
$districts = Regions::getDistricts();
$regionsArray = $districtNameArray = array();
asort($districts);
foreach($districts as $districtId=>$districtName) {
    $regions = Regions::model()->findAll(array(
            'order'=>'name ASC',
            'condition'=>'published=:published AND district_id=:district_id',
            'params'=>array(                
                ':published'=>'1',
                ':district_id'=>$districtId
            ),
            'group'=>'contact_id',
        )
    );
    $count = 0;
    foreach($regions as $region) {
       if($districtId==$region->contact->okrug_id) {
           $count++;
       }
    }
    $regionsArray[$districtId] = $count;
    $districtNameArray[$districtId] = $districtName;
}

arsort($regionsArray);

foreach($regionsArray as $districtId => $itemCount) {
    $regions = Regions::model()->findAll(array(
            'order'=>'name ASC',
            'condition'=>'published=:published AND district_id=:district_id',
            'params'=>array(                
                ':published'=>'1',
                ':district_id'=>$districtId
            ),
            'group'=>'contact_id',
        )
    );
    
    $districtName = $districtNameArray[$districtId];
    $districtNameFirstWord = strstr($districtName, ' ', true);

    if($itemCount == 1) echo '<div class="region-group region-one"><div class="region-group-name">'.$districtNameFirstWord.str_replace($districtNameFirstWord, '', $districtName).'</div>';
    else echo '<div class="region-group"><div class="region-group-name">'.$districtNameFirstWord.str_replace($districtNameFirstWord, '', $districtName).'</div>';

    $emptySpace = (4-(count($regions)%4))%4;
    $filialFotos = array();
    $criteria = new CDbCriteria();
    $criteria->order = 'name ASC';
    
    foreach($regions as $region) {
        if($districtId==$region->contact->okrug_id) {  
            echo '<div class="contact-item">';
            echo '<div class="city-name">'.CHtml::link($region->contact->name, '/company/contacts/'.$region->contact->alias.'/').'</div>';
            echo '<div class="contact-image"><img src="'.Yii::app()->getBaseUrl(true).'/images/ContactsImages/'.$region->contact->alias.'/main.jpg" /></div>';
            echo '<div class="contact-info" itemscope="address" itemtype="http://schema.org/LocalBusiness">'.
                    '<meta itemprop="url" content="www.lbr.ru" />'.
                    '<meta itemprop="name" content="ЛБР-АгроМаркет" />'.
                    '<time itemprop="openingHours" datetime="Mo-Su 08:00-17:00" /></time>'.
                    '<div itemprop="description">'.
                        '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">'.
                           '<meta itemprop="addressCountry" content="Россия" />'.
                           '<div><b>Адрес: </b>'.$region->contact->address.'</div>'.
                        '</div>'.
                    '</div>'.
                    '<div><b>Телефоны: </b>'.$region->contact->telephone.'</div>'.
                    '<div itemprop="email"><b>Email: </b>'.$region->contact->email.'</div>'.
                  '</div>';
            echo '</div>';
        }
    }
    echo '</div>';
}
?>
</ul>

