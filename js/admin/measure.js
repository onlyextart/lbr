$(document).ready(function(){
    // Add measure
    $('.admin_additional_features_measure #add-measure').on('click', function() {
        var tLabel = $.trim($('#tech-label').val());
        $('#tech-label').val('');
        if(tLabel != '') {
            //var tId = $('#tech-label').attr('t-id'); // если характеристика уже существует
            var element = '<tr tch-id="111">'+
                '<td>' + tLabel + '</td>' +
                '<td><input type="text" m-id="111" value="666" class="measure-title"/></td>' +
                '<td><input type="text" value="666" class="measure-reduction"/></td>' +
                '<td><span class="update-measure"></span></td>' +
                '<td><span class="del-measure"></span></td>' +
            '</tr>';
            $("#all-features").append(element);
        }
    });
    // Delete measure
    $('.admin_additional_features_measure .del-measure').on('click', function() {
        //console.log(555);
        var element = $(this).parent().parent();
        $.ajax({
            type: 'POST',
            url: '/administrator/mightiness/delMeasure',
            dataType: 'json',
            data:{
                id: element.attr('tch-id'),
            },
            success: function(response) {
                element.remove();
        }});
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
        $(this).remove(); 
        parent.text(newVal);
        parent.parent().removeClass('clicked');
        parent.parent().parent().find('.update-measure').removeClass('hide');
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
})
