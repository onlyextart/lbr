<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" style="min-height: 100%">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <BASE href="v8config://eeaf5085-e783-4a57-9a05-1357ae55da33/mdobject/ide1ffff40-2647-407a-9655-20eb4c0de2b3/8eb4fad1-1fa6-403e-970f-2c12dbb43e23">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <META name=GENERATOR content="MSHTML 9.00.8112.16526">
    <title><? echo $template->title; ?></title>
</head>
<body>
<?php
$test = $data;

if(!empty($test)):?>
<div class="wrapper">
    <h1><?php echo $test['title']; ?></h1>
    <h3><?php echo $test['epigraph']; ?></h3>
    <?php if(!empty($test['wrapper'])): ?>
    <div class="w-wrapper">
        <?php for($i = 0; $i<=count($test['wrapper']); $i++): ?>
        <div class='w-w-header'>
            <?php echo $test['wrapper'][$i]['header'];?>
        </div>
            <?php 
            if (isset($test['wrapper'][$i]['content']['collum']) && !empty($test['wrapper'][$i]['content']['collum']))
                echo getCollum ($test['wrapper'][$i]['content']['collum']);
            if (isset($test['wrapper'][$i]['content']['row']) && !empty($test['wrapper'][$i]['content']['row']))
                echo getRow ($test['wrapper'][$i]['content']['row']);
            ?>
        <?php endfor;?>
    </div>
    <?php endif; ?>
</div>
<?php
endif;

function getRow($array){
    $return = '<table class="row-table">';
    for($i = 1; $i<=count($array); $i++){
        $return .= '<tr>';
            $return .= '<td class="t-r-date">';
                $return .= '<span>'.$array[$i]['date'].'</span>';
            $return .= '</td>';
            $return .= '<td class="t-r-header">';
                $return .= '<span>'.$array[$i]['caption'].'</span>';
            $return .= '</td>';
        $return .= '</tr>';
        $return .= '<tr>';
            $return .= '<td class="t-r-image">';
                $return .= $array[$i]['image'];
            $return .= '</td>';
            $return .= '<td class="t-r-text">';
                $return .= $array[$i]['text'];
            $return .= '</td>';
        $return .= '</tr>';
    }
    $return .= '</table>';
    return $return;
}
function getCollum($array){
    $return = '<table class="collum-table">';
    for($i = 1; $i<=count($array); $i++){
        $return .= '<tr>';
        $c = count($array[$i]);
        if($c<=0)
            continue;
        $tdclass = floor(100/$c);
        for($k = 1; $k<=$c; $k++)
        {
            $return .= '<td class="width-'.$tdclass.'">';
                $return .= '<div class="t-c-header"><span class="t-c-date">'.$array[$i][$k]['date'].'<span class="white">__</span>|</span> '.$array[$i][$k]['caption'].'</div>';
                $return .= '<div class="t-c-image">'.$array[$i][$k]['image'].'</div>';
                $return .= '<div class="t-c-text">'.$array[$i][$k]['text'].'</div>';
            $return .= '</td>';
        }
        $return .= '</tr>';
    }
    $return .= '</table>';
    return $return;
}
?>
<style>
    body, html
    {
        margin: 0;
        padding: 0;
        font-family: Calibri;
    }
    .code
    {
        width: 50%;
        float: left;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .code h1
    {
        padding: 5px 15px;
        margin: 0;
        font-size: 16px;
        background: #ef7f1a;
    }
    .code > div
    {
        height: 300px;
        margin: 0;
        padding: 0;
        width: 100%;
        overflow: scroll;
    }
    .code > div > pre
    {
        padding: 0 2%;
    }
    
    /*-------paper-style---------*/
    table, tr, td, th
    {
        padding: 0;
        margin: 0;
        border: 0;
    }
    .wrapper 
    {
        background: rgb(255,251,239);
        padding: 20px 30px;
    }
    .wrapper h1
    {
        font-family: Impact;
        color: #ef7f1a;
        text-align: center;
        font-size: 50px;
        margin: 0px 0 0 0;
    }
    .wrapper h3
    {
        font-family: Calibri;
        color: rgb(43,42,41);
        text-align: center;
        font-size: 16px;
    }
    .wrapper .w-wrapper .w-w-header
    {
        background: #ef7f1a;
        color: white;
        font-family: Impact;
        font-size: 32px;
        padding: 0 25px;
        line-height: 44px;
    }
    .wrapper .collum-table
    {
        
    }
    .white
    {
        color: rgb(255,251,239);
    }
    .wrapper .collum-table .t-c-header
    {
        font-family: Calibri;
        font-size: 15px;
        color: rgb(43, 42, 41);
        font-weight: 900;
        margin-top: 15px;
    }
    .wrapper .collum-table .t-c-header .t-c-date
    {
        color: rgb(157,158,159);
        margin-right: 10px;
        padding-right: 10px;
        border-right: 2px solid rgb(43, 42, 41);
    }
    .wrapper .collum-table .t-c-image
    {
        margin: 10px 0;
    }
    .wrapper .collum-table .t-c-image
    {
        width: 95%;
    }
    .wrapper .collum-table .t-c-text
    {
        width: 95%;
        color: rgb(91,91,91);
        text-align: justify;
    }
    .wrapper .row-table
    {
        margin-top: 15px;
    }
    .wrapper .row-table .t-r-date
    {
        width: 15%;
        font-family: Calibri;
        font-size: 13.5px;
        color: rgb(43, 42, 41);
        font-weight: 900;
        color: rgb(157,158,159);
        padding-right: 10px;
        border-right: 2px solid rgb(43, 42, 41);
    }
    .wrapper .row-table .t-r-image
    {
        
    }
    .wrapper .row-table .t-r-header
    {
        font-family: Calibri;
        font-size: 13.5px;
        color: rgb(43, 42, 41);
        font-weight: 900;
        padding-left: 15px;
    }
    .wrapper .row-table .t-r-text
    {
        padding: 10px 15px 15px 0px;
        color: rgb(91,91,91);
        text-align: justify;
    }
    
</style>
</body>
</html>