$(document).ready(function(){
    var img = new ContactImageSlider();
    img.prepare('.contact-images');
});
function ContactImageSlider(container){
    this.prepare = function(container){
        _self = this;
        var contain = $(container);
        var left = contain.children('.scrollRight');
        var right = contain.children('.scrollLeft');
        contain.find('.c_images_conteiner').xslide(300,1,0);
        left.click(function(){
            contain.find('.c_images_conteiner').xslide(300,-1,400);
        });
        right.click(function(){
            contain.find('.c_images_conteiner').xslide(300,1,400);
        });
    };
};

$.fn.xslide = function(a,l,s) {
  $(this).queue(function () {
    if (l>0){
        a = $(this).children('section:eq(0)').width();
    }else{
        a = $(this).children('section:eq(1)').width();
    }
    var size = $(this).children('section').size();
    var x = '';
    var w = parseInt($(this).css('left'), 10);
    switch (size){
        case 1:
            x = $(this).css({'left':'0'});
        break;
        case 2:
        $(this).animate({'left': w+a*l+'px'},s,function(){
            $(this).children('section').clone().appendTo($(this));
        })
        default:
            x = $(this).animate({'left': w+a*l+'px'},s,function(){
            if (l>0){
                w = $(this).children('section:last').width();
                $(this).children('section:first').before($(this).children('section:last'));
            }else{
                $(this).children('section:last').after($(this).children('section:first'));
                w = $(this).children('section:first').width();
            }
            $(this).css({'left':-w+'px'});
        });
        break;
    }
    $(this).dequeue();
    return x;
  });
}