$(function(){
    // Add measure
    $('.admin_additional_features_measure #add-measure').on('click', function() {
        var input = $('#tech-label');
        var tLabel = $.trim(input.val());
        input.val('');
        if(tLabel != '') {
            var tId = input.attr('t-id'); // если характеристика уже существует
            var table = $("#all-features");
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
        $('.quick-result-measure').fadeOut(200);
        $(this).remove(); 
        parent.text(newVal);
        parent.parent().removeClass('clicked');
        if(parent.attr('val') != newVal) parent.parent().parent().find('.update-measure').removeClass('hide');
    });
    
   /* press Enter button*/
    $(document).keypress(function(e) {
        if(e.which == 13) {
            var element = $( ".clicked" );
            element.find( "input" ).focusout();
            element.removeClass("clicked");
        }
    });
    
    /* Child product and it's value */
    $('.update-product-child').on('click', function() {
        var params = [];
        var element = $(this).parent();
        element.find('[v-id]').each(function(index){
            params[$(this).attr('v-id')] = $(this).val();
        });
        $.ajax({
            type: 'POST',
            url: '/administrator/mightiness/updateChildProduct',
            dataType: 'json',
            data:{
                id: element.attr('ch-id'),
                params: params,
            },
            success: function(response) {
                var labelTitle = element.prev('h3').html();
                var index = labelTitle.indexOf('</span>')+7;
                labelTitle = labelTitle.substring(0,index);
                element.prev('h3').html(labelTitle+params[0]);
                alertify.success('Дочерний товар "'+params[0]+'"сохранен успешно');
            }
        });
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
    //$('.admin_additional_features_measure table').on('focus', "td input.measure-title, td span.measure-title input", function() {
    $('.admin_additional_features_measure table').on('focus', "td input.measure-title", function() {
        var pos = $(this).position();
        var top = $(this).outerHeight() + pos.top;
        $('.quick-result-measure').css('top', top);
        $('.quick-result-measure').css('left', pos.left);
        parent = $(this).parent();
        parent.addClass('clicked');
        $(this).blur(function(){
            parent.removeClass('clicked');
            $('.quick-result-measure').fadeOut(200);
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
        $.ajax({
            'url': '/administrator/mightiness/searchMeasure/',
            'data': {q: $.trim($(this).val()), ajax: true},
            'success': function(html){$('.quick-result-measure').html(html);}
        });
    });
    $(".quick-result-measure").on('click', 'span', function () {
        //var element = $('.clicked');
        alert($(this).text());
        //element.val($(this).text());
        //element.attr('t-id', $(this).attr('s-id'));
    });
    
    /*$('.admin_additional_features_measure table').on('focus', "td input.measure-title, td input.measure-reduction", function() {
        parent = $(this).parent();
        parent.addClass('clicked');
        $(this).blur(function(){
            parent.removeClass('clicked');
        });
    });*/
});
