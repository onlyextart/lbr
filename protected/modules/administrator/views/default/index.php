<div class="yandex-info">
    <label><span class="yandex-logo">Yandex</span> cтатистика за сегодня</label>
    <div id="show">
        <span class="label">Просмотры:</span>
        <span class="count"><img src="/images/loading.gif"/></span>
    </div>
    <div id="visit">
        <span class="label">Визиты:</span>
        <span class="count"><img src="/images/loading.gif"/></span>
    </div>
    <div id="unique">
        <span class="label">Уникальные посетители:</span>
        <span class="count"><img src="/images/loading.gif"/></span>
    </div>
</div>
<style>
    .yandex-info{
        width: 300px;
        overflow: hidden;
        box-shadow: 0px 0px 3px rgb(192, 192, 192);
        border-radius: 2px;
        background: rgb(238, 238, 238);
    }
    .yandex-info label{
        color: rgb(119, 119, 119);
        text-decoration: none;
        text-shadow: 0px 1px 0px white;
        font-weight: bold;
        display: block;
        margin: 0;
        padding: 0 1em;
        background: url("/images/bg_menu_admin.png") #f3f3f3 repeat-x top left;
        line-height: 33px;
        border-bottom: 1px solid rgb(65, 131, 196);
    }
    .yandex-info .label{
        /*color: rgb(65, 131, 196);*/
        text-decoration: none;
        padding: .5em 1em;
        display: block;
        border-bottom: 1px solid rgb(222, 222, 222);
    }
    .yandex-info > div
    {
        position: relative;
    }
    .yandex-info .count{
        position: absolute;
        top: 7px;
        right: 7px;
    }
    .yandex-info label .yandex-logo
    {
        color: rgb(0, 0, 0);
    }
    .yandex-info label:first-letter
    {
        color: red;
    }
</style>
<script>
    $(document).ready(function(){
        $.getJSON('http://bs.yandex.ru/informer/13203052/json?callback=?', function(data) {
            if (data) {
                $('#show .count').html(data.pageviews[0]);
                $('#visit .count').html(data.visits[0]);
                $('#unique .count').html(data.uniques[0]);
            }
        });   
    });
     
</script>