jQuery(document).ready(function($) {
    $('.mylink').replaceWith(function(){
        return '<a href="' + $(this).attr('data-url')
            + '" title="' + $(this).attr('title')
            + '">' + $(this).html() + '</a>';
    });
});