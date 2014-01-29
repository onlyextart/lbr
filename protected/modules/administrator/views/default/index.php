<div class="yandex-info">
    <label>Статистика Yandex за сегодня</label>
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
    .yandex-info label{
        font-size: 14px;
        font-weight: bold;
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