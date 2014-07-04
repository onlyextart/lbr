$(function(){
    // Add measure
    $('.admin_additional_features_measure #add-measure').on('click', function() {
        var input = $('#tech-label');
        var tLabel = $.trim(input.val());
        input.val('');
        if(tLabel != '') {
            var table = $("#all-features");
            var tId = input.attr('t-id'); 
            if(!table.has('[tch-id='+tId+']').length) {// если характеристика уже существует
                var element = '<tr tch-id="' + tId + '">'+
                    '<td>' + tLabel + '</td>' +
                    '<td><input type="text" m-id="" class="measure-title"/></td>' +
                    '<td><input type="text" class="measure-reduction"/></td>' +
                    '<td><span class="update-measure"></span></td>' +
                    '<td><span class="del-measure"></span></td>' +
                '</tr>';

                if(tLabel.toLowerCase() == 'Требуемая мощность'.toLowerCase() || tLabel.toLowerCase() == 'Собственная мощность'.toLowerCase()) {
                    element = '<tr tch-id="' + tId + '">'+
                        '<td>' + tLabel + '</td>' +
                        '<td><span class="measure-title" m-id="">Лошадиные силы</span></td>' +
                        '<td><span class="measure-reduction">л.с.</span></td>' +
                        '<td><span class="update-measure"></span></td>' +
                        '<td><span class="del-measure"></span></td>' +
                    '</tr>';
                }

                if(!table.has( "th" ).length) {
                    table.removeClass('hide');
                    table.append(
                        '<tr>'+
                            '<th>Название технической характеристики</th>'+
                            '<th>Полное название единицы измерения</th>'+
                            '<th>Сокращенное название единицы измерения</th>'+
                            '<th>Обновить</th>'+
                            '<th>Удалить</th>'+
                        '</tr>'
                    );
                }
                table.append(element);
            } else alert('Характеристика "'+tLabel+'" (id = '+tId+') уже была добавлена');
        }
    });
    
    // Edit measure
    $(".admin_additional_features_measure table").on('dblclick', 'span:not(.update-measure, .del-measure)', function () {     
        $(this).parent().addClass("clicked");
        var origValue = $(this).text();
        $(this).attr('val', origValue);
        $(this).text("");
        $('<input>', {
            type: 'text',
            value: origValue,
        }).appendTo(this).focus();
    });
    $(".admin_additional_features_measure table").on('focusout', 'span > input', function () {
        var newVal = $.trim($(this).val());
        var parent = $(this).parent();
        if (newVal == '') newVal = parent.attr('val');
        $('.quick-result-measure').fadeOut(200).promise().done(function(){
            parent.parent().removeClass('clicked');    
        });
        $(this).remove(); 
        parent.text(newVal);
        
        if(parent.attr('val') != newVal) parent.parent().parent().find('.update-measure').removeClass('hide');
    });
    
   /* press Enter button*/
    $(document).keypress(function(e) {
        if(e.which == 13) {
            var element = $( ".clicked" );
            element.find( "input" ).focusout();
            //element.removeClass("clicked");
        }
    });
    
    /* Quick search for technical characteristic */
    $('#tech-label').focus(function() {
        $('#tech-label').blur(function(){
            $('.quick-result').fadeOut(200);
        });
        $('.quick-result').fadeIn(200);
        $.ajax({
            'url': '/administrator/mightiness/search/',
            'data': {q: $.trim($(this).val()), ajax: true},
            'success': function(html){$('.quick-result').html(html);}
        });
    });
    
    $('#tech-label').keyup(function() {
        $('.quick-result').fadeIn(200); 
        $(this).attr('t-id', ''); 
        $.ajax({
            'url': '/administrator/mightiness/search/',
            'data': {q: $.trim($(this).val()), ajax: true},
            'success': function(html){$('.quick-result').html(html);}
        });
    });
    
    $(".quick-result").on('click', 'span', function () {
        var element = $('#tech-label');
        element.val($(this).text());
        element.attr('t-id', $(this).attr('s-id'));
    });
    /* Quick search for measure */
    $('.admin_additional_features_measure table').on('focus', "td input.measure-title, td span.measure-title input", function() {
        var pos = $(this).position();
        var top = $(this).outerHeight() + pos.top;
        $('.quick-result-measure').css('top', top);
        $('.quick-result-measure').css('left', pos.left);
        parent = $(this).parent();
        parent.addClass('clicked');
        $(this).blur(function() {
            $('.quick-result-measure').fadeOut(200).promise().done(function(){
                parent.removeClass('clicked');
            });
        });
        
        $('.quick-result-measure').fadeIn(200);
        $.ajax({
            'url': '/administrator/mightiness/searchMeasure/',
            'data': {q: $.trim($(this).val()), ajax: true},
            'success': function(html){$('.quick-result-measure').html(html);}
        });
    });
    $('.admin_additional_features_measure table').on('keyup', "td input.measure-title, td span.measure-title input", function() {
        $('.quick-result-measure').fadeIn(200); 
        $(this).attr('m-id', '');
        $.ajax({
            'url': '/administrator/mightiness/searchMeasure/',
            'data': {q: $.trim($(this).val()), ajax: true},
            'success': function(html){$('.quick-result-measure').html(html);}
        });
    });
    $(".quick-result-measure").on('click', 'span', function () {
        var str = $(this).text();
        var lastIndex = str.lastIndexOf("(");
        var measureText = str.substring(0, lastIndex);
        var reduction = str.substring(lastIndex+1, str.length - 1);
        var element = $('td.clicked');
        if(element.has('input').length == 0) {
            element = element.find('span');
            element.attr('m-id',$(this).attr('s-id'));
            element.text(measureText);
            var root = element.parent().parent();
            root.find('.measure-reduction').text(reduction);
            root.find('.update-measure').removeClass('hide');
        } else {
            element = element.find('input');
            element.attr('m-id',$(this).attr('s-id'));
            element.val(measureText);
            element.parent().parent().find('.measure-reduction').val(reduction);
        }
    });
    /* ----- delete Product Child and it's values ---- */
    $('.del-product-child').on('click', function() {
        var params = [];
        var element = $(this).parent();
        element.find('[v-id]').each(function(index){
            params[$(this).attr('v-id')] = $(this).val();
        });
        $.ajax({
            type: 'POST',
            url: '/administrator/mightiness/deleteChildProduct',
            dataType: 'json',
            data:{
                id: element.attr('ch-id'),
            },
            success: function(response) {
                element.prev().remove();
                element.remove();
                alertify.success('Дочерний товар "'+params[0]+'" удален');
            }
        });
    });
});
