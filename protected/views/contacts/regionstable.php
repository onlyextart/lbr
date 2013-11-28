<style>
    #overlay {
        background-color: #000000;
        left: 0;
        top: 0;
        opacity: 0.4;
        filter:progid:DXImageTransform.Microsoft.Alpha(opacity=40); 
        -moz-opacity: 0.4;
        -khtml-opacity: 0.4;
        position: absolute;
        width: 100%;
        z-index: 1503;
    }

    .regions_table_wrapper{
        background: none repeat scroll 0 0;
        background-color: #fff;
        background-color: rgba(255, 255, 255, 0.9);
        *background-color: #fff;
        filter: progid:DXImageTransform.Microsoft.Alpha(opacity=90);  
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=90)";  
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.7);
        display: block;
        left: 50%;
        margin: 0 0 0 -500px;
        padding: 0;
        position: fixed;
        top: 10px;
        width: 1000px;
        z-index: 1504;
        font-size: 12px;
        line-height: 20px;
    }
    .regions_table_wrapper ul{
        float: left;
        list-style: none outside none;
        margin: 0 10px;
        padding: 0 0 5px;
        width: 230px;
        line-height: 20px;
    }
    .regions_table_wrapper li a{
        color: #000;
        display: block;
        min-width: 220px;
        padding: 0 10px;
        text-decoration: none;
        border-radius: 5px;
        float: left;
        height: 21px;
        padding: 0 10px;
    }
    .regions_table_wrapper li:hover a{
        color: #fff;
        background-color: #00A68D;
        padding-right: 0;
    }
    .regions_table_wrapper h4{
        border-radius: 5px 5px 0 0;
        font-size: 18px;
        font-weight: bold;
        margin: 0;
        padding: 5px 0 15px 10px;
    }
    .regions_table_wrapper .district_name{
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    .region{
        float:right;
    }

    .region p{
        font-size: 12px;
        color:black;
        margin: 0;
        padding: 0;
        font-weight: bold;
    }
    .region p a{
        font-weight: bold;
        color:#00ba9e;
        text-decoration: none;
    }
    .region .region-select{
        width: 250px;
        height: 22px;
        margin-top: 7px;
    }
    .region p span{
        font-weight: bold;
    }
    .contact-top-span{
        float: right;
        margin-right: 40px;
        margin-left: 10px;
    }
    .region .region-select p{
        float: left;
    }
    .region .region-select .region-select-now{
        padding: 1px 10px;
        padding-right: 25px;
        border-radius: 3px;
        position: relative;
        min-width: 158px;
        margin-left: 5px;
        cursor:pointer;
         background: #008873;
             background: -moz-linear-gradient(top, #00ba9e, #008873);
             background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00ba9e), color-stop(100%,#008873));
             background: -webkit-linear-gradient(top, #00ba9e, #008873);
             background: -o-linear-gradient(top, #00ba9e, #008873);
             background: -ms-linear-gradient(top, #00ba9e, #008873);
             background: linear-gradient(top, #00ba9e, #008873);
        
        z-index: 1501;
        float: left;
    }
    .region .region-select .region-select-now p{
        color:#008873;
        font-size: 12px;
        text-transform: uppercase;
        padding: 0;
        margin: 0;
        border-bottom: 1px dashed #008873;
    }
    .region .region-select .region-select-now span.strelka{
        background-image: url('http://new.lbr.ru/images/strelka.jpg');
        background-repeat: no-repeat;
        background-position: center;
        width: 12px;
        height: 8px;
        position: absolute;
        top: 5px;
        right: 10px;
    }
    .region .region-select .region-select-list{
        display: none;   
        display: block;
        position: fixed;
        background: white;
        background: rgba(255, 255, 255, 0.9);
        padding: 0px;
        width: 1000px;
        top:10px;
        z-index: 1504;
        left:50%;
        border-radius: 5px;
        -moz-box-shadow: 0 0px 10px 1px rgba(0,0,0,0.7);
        -webkit-box-shadow: 0 0px 10px 1px rgba(0, 0, 0, 0.7);
        box-shadow: 0 0px 10px 1px rgba(0, 0, 0, 0.7);
        margin: 0;
        margin-left: -500px;

    }
    .region .region-select .region-select-list .okrug{
        padding: 0;
    }
    .region .region-select .region-select-list .label-h4{
        margin: 0;
        font-size: 18px;
        border-radius: 5px 5px 0 0px;
        padding: 5px 0 5px 10px;
        font-weight: bold;
    }
    .region .region-select .region-select-list .subokrug{
        list-style: none;
        float: left;
        width: 230px;
        padding: 0;
        margin: 0 10px;
    }
    .region .region-select .region-select-list li.district{
        margin: 0 0 5px;
        border: 0;
    }
    .region .region-select .region-select-list li.district .label-h5{
        padding: 0;
        margin: 0;
        font-size: 14px;
        font-weight: bold;
    }
    .region .region-select .region-select-list .subokrug li.district ul.okrug{
        list-style: none;
    }
    .region .region-select .region-select-list .subokrug li.district ul.okrug li{
        font-size: 12px;
        line-height: 20px;
        padding: 0;
        cursor:pointer;
        border-radius:3px;

    }
    .region .region-select .region-select-list .subokrug li.district ul.okrug li:hover, #regionus ul li:hover{
        background: rgb(0,184,157);
    }
    .region .region-select .region-select-list .subokrug li.district ul.okrug li:hover a{
        color:white;
    }
    .region .region-select .region-select-list li a{
        color:black;
        text-decoration: none;
        display: block;
        min-width: 220px;
        padding:0 10px;
    }
    .region .region-select .region-select-list li.region-select-list-all{
        position: absolute;
        bottom: 10px;
        right: 20px;
        color:blue;
    }
    .region .region-select .region-select-list li.region-select-list-all:hover{
        background: none;
        text-decoration: underline;
    }

    #modalDiv{
        position: absolute;
        top:150px;
        left:50%;
        background: white;
        z-index: 5001; 
        width: 900px;
        margin-left: -450px;
        border-radius: 5px;

    }
    #regionus {
        padding: 20px;
        margin: 0;
    }
    #regionus ul{
        list-style: none; 
        padding: 0;
        margin: 0;
    }
    #regionus ul li{
        float:left;
        width: 250px;
        margin: 0 10px;
        padding: 2px 5px;
        border-radius: 3px;

        cursor: pointer;
    }
    #region-span-contact{
            font-size: 12px;
            color: grey;
        font-weight: normal;
    }
    #contact-href{
        background: #14AAAA;
        background: -moz-linear-gradient(top, #14AAAA, #008C8C);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#14AAAA), color-stop(100%,#008C8C));
        background: -webkit-linear-gradient(top, #14AAAA, #008C8C);
        background: -o-linear-gradient(top, #14AAAA, #008C8C);
        background: -ms-linear-gradient(top, #14AAAA, #008C8C);
        background: linear-gradient(top, #14AAAA, #008C8C);
        padding: 0px 10px;
        color: white;
        font-weight: bold;
        font-size: 11px;
        border-radius: 3px;

        text-transform: uppercase;
        cursor: pointer;
    }
</style>

<?php $host = Yii::app()->params['host']; ?>

<div class="regions_table_wrapper">
    <h4>
        Выберите ваш регион
    </h4>
    <?php
    $districts = Regions::getDistricts();
    $start = microtime(true);
    foreach ($districts as $districtId => $districtName) {
        if ($districtId == 0 || $districtId == 1 || $districtId == 3 || $districtId == 6) {
            echo CHtml::openTag('ul');
        }
        echo CHtml::openTag('li', array('class' => 'district_name', 'id'=>$districtId));
        echo $districtName;
        echo CHtml::closeTag('li');

        $regionsD = Yii::app()->db->createCommand("SELECT *, r.id as regionid, r.contact_id, r.name as regionname from regions as r, contacts as c WHERE r.district_id='$districtId' AND r.contact_id=c.id ORDER BY r.name ASC")->queryAll();
        foreach ($regionsD as $region) {
            echo CHtml::openTag('li');
            $linkUrl = 'http://www.' . $region['alias'] . '.lbr.ru' . $_POST['requesrUri'];
            echo CHtml::link($region['regionname'], $linkUrl, array('title' => $region['regionname'], 'id' => $region['regionid'], 'contact' => $region['contact_id']));
            echo CHtml::closeTag('li');
        }
        if ($districtId == 0 || $districtId == 2 || $districtId == 5 || $districtId == 7) {
            echo CHtml::closeTag('ul');
        }
    }
    ?>
</div>
