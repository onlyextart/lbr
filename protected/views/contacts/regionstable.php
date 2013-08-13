<style>
.regions_table_wrapper{
    position: fixed;
    background: rgba(255, 255, 255, 0.9);
    padding: 0px;
    width: 1000px;
    top: 10px;
    z-index: 1504;
    left: 50%;
    border-radius: 5px;
    -moz-box-shadow: 0 0px 10px 1px rgba(0,0,0,0.7);
    -webkit-box-shadow: 0 0px 10px 1px rgba(0, 0, 0, 0.7);
    box-shadow: 0 0px 10px 1px rgba(0, 0, 0, 0.7);
    margin: 0;
    margin-left: -500px;
    padding-bottom: 10px;
}
.regions_table_wrapper h4{
    font-size: 18px;
    padding: 5px 0 5px 10px;
    font-weight: bold;
    margin: 0px;
}
.regions_table_wrapper ul{
    list-style: none;
}
.regions_table_wrapper>ul{
    float: left;
    margin: 0 0 0 20px;
    padding: 0;
    width: 230px;
}
.regions_table_wrapper ul li{
    padding-left: 10px;
    height: 20px;
}
.regions_table_wrapper ul li:hover{
    background: rgb(0,184,157);
    border-radius: 3px;
}
.regions_table_wrapper ul li:hover a{
    color:#fff;
}
.regions_table_wrapper ul li a{
    color:#000;
    text-decoration:none;
    font-size: 12px;
    display: block;
    width: 100%;
}
.regions_table_wrapper>ul>li.district_name{
    margin-left: 0;
    padding-left: 0;
    font-size: 14px;
    font-weight: bold;
    height: auto;
}
.regions_table_cover{
    position: fixed;
    width: 100%;
    height: 100%;
    opacity: 0.4;
    background-color: #000;
    z-index: 1500;
    top: 0;
    left: 0;
}
</style>
<div class="regions_table_cover">
    
</div>
<div class="regions_table_wrapper">
    <h4>
        Выберите ваш регион
    </h4>
    <?php 
        $districts = Regions::getDistricts();
        $start = microtime(true);
        foreach( $districts as $districtId=>$districtName ){
            if($districtId==0 || $districtId==1 || $districtId==3 || $districtId==6){
                echo CHtml::openTag('ul');
            }
                echo CHtml::openTag('li', array('class'=>'district_name'));
                    echo $districtName;
                echo CHtml::closeTag('li');
                $regionsD = Yii::app()->db->createCommand("SELECT *,r.name as regionname from regions as r, contacts as c WHERE r.district_id='$districtId' AND r.contact_id=c.id")->queryAll();
                foreach($regionsD as $region){
                    echo CHtml::openTag('li');
                        $linkUrl = 'http://www.'.$region['alias'].'.lbr.ru'.$_POST['requesrUri'];
                        echo CHtml::link($region['regionname'], $linkUrl, array('title'=>$region['regionname']));
                    echo CHtml::closeTag('li');
                }
            if($districtId==0 || $districtId==2 || $districtId==5 || $districtId==7){
                echo CHtml::closeTag('ul');
            }
        }
    ?>
</div>
    

