$(document).ready(function(){
    $('.product_tab_button li').click(function(){
        if($(this).hasClass('active_tab'))
            return;
        var active = $('.product_tab_button li.active_tab');
        var _self = $(this);
        active.removeClass('active_tab');
        $('#'+active.attr('id')+'_content').fadeOut(200, function(){
            $(this).removeClass('active_tab');
            $('#'+_self.attr('id')+'_content').fadeIn(300, function(){$(this).addClass('active_tab')});
        })
        _self.addClass('active_tab');
        if($(this).attr('id')=='media'){
            Galleria.loadTheme('/js/galleria/themes/classic/galleria.classic.min.js');
            Galleria.run('#gallery', {
                thumbCrop: "height",
                height: 600,
                _toggleInfo: false,
                debug: false,
                extend: function() {
                    this.bind('image', function(e) {
                        $('#gallery .galleria-info-text').animate({'padding':'12px '+(22+parseInt(e.imageTarget.style.left))+'px'}, 100)
                    });
                }
            });
        }
    })
})