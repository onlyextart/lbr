<style>
    .info_block {
        float: left;
        font: 12px Arial, 'Trebuchet MS', sans-serif;
        margin: 10px 0 20px 0;
    }
    #news_header {
        background: url("../images/heading.png") no-repeat;
        height: 25px;
        width: 333px;
        padding: 0 20px;
        width: 100%;
        margin-left: 20px;
    }
    #news_header a {
        font: bold 14px/25px "Trebuchet MS",Arial,Helvetica,sans-serif;
        color: white;
        text-align: left;
        text-transform: uppercase;
        text-decoration: none;
    }
    
    .news {
        float: left;
        width: 23%;
        margin: 10px 0 0 20px;
    }
    .news_date {
        color: #FE6700;
        display: block;
    }
    .wrapper:after {
content: '';
display: block;
clear: both;
}
    
</style>
<div class="info_block">
<div id="news_header">
<a href="http://www.lbr.ru/company/events/">Новости ЛБР-АГРОМАРКЕТ</a> 
</div>

<?php
    
	foreach ($eventModels as $recent){?>
	   <div class="news">
       <span class="news_date"><?=$recent->date?></span>
           <a href="http://www.lbr.ru"><?php 
           echo $recent->header;
           //echo $recent->newsRegions[0]->description;
           ?> </a>
       </div>
<?

    }
    
?>
</div>