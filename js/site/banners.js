$(document).ready(function(){
    
    var makers = new AjaxMakersDescriptionLoader();
    makers.AddingEventHandlers();
    
    var sliding = new SlidingBannersImages();
    sliding.PreparingEvents();
    
})
function SlidingBannersImages(){
    
    var _self = this;
    
    this.Option = {
        container: '.b_images',
        overflowContainer: '.b_images_overflow',
        slidingContainer: '.b_images_conteiner',
        imageWrapper: 'section.b_images_one_image'
    }
    
    this.PreparingEvents = function()
    {
        $(_self.Option.imageWrapper+':first-child').addClass('active');
        $(_self.Option.container).each(function(indx){
            if($(this).find(_self.Option.imageWrapper).length>1)
            {
                if ($(this).find(_self.Option.imageWrapper).length>2){
                    $(this).find(_self.Option.slidingContainer).prepend($(this).find(_self.Option.imageWrapper+':last-child'));
                    $(this).find(_self.Option.slidingContainer).css({'left':'-'+$(this).find(_self.Option.imageWrapper+':last-child').width()+'px'});
                }
                $(this).append('<div class="scrollLeft"></div>');
                $(this).append('<div class="scrollRight"></div>');
            }
            
        })
        $(_self.Option.container).on('click', 'div.scrollRight', function(){
            _self.SlidingImage($(this).parent().find(_self.Option.slidingContainer), 1);
        })
        $(_self.Option.container).on('click', 'div.scrollLeft', function(){
            _self.SlidingImage($(this).parent().find(_self.Option.slidingContainer), -1);
        })
        
    }
    
    this.LoadImage = function(el)
    {
        var img = el.find('img');
        if (img.attr('src')!=img.attr('data-src')){
            img.attr('src', img.attr('data-src'));
            if(img.load(function(){return true;})){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
        
    }
    
    this.SlidingImage = function(el, l)
    {
        var active = el.children(_self.Option.imageWrapper+'.active');
        var indx_active = el.children(_self.Option.imageWrapper).index(el.children(_self.Option.imageWrapper+'.active'));
        var next = el.find(_self.Option.imageWrapper+':eq('+(indx_active+l)+')');
        if (indx_active=='0' && l<0){
            next = el.children(_self.Option.imageWrapper+':last-child');
        }
        if (indx_active==el.find(_self.Option.imageWrapper).length-1 && l>0){
            next = el.children(_self.Option.imageWrapper+':first-child');
        }
        el.children(_self.Option.imageWrapper+'.active').removeClass('active');
        next.addClass('active');
        if(_self.LoadImage(next))
        {
            _self.AnimateSlide(el, l);
        }
    }
    
    this.AnimateSlide = function(el, l)
    {
        if (el.children(_self.Option.imageWrapper).length>2){
            el.animate({'left': '-'+(el.children(_self.Option.imageWrapper).width()+el.children(_self.Option.imageWrapper).width()*l)+'px'}, 400, function(){
                if (l<0){
                    el.prepend(el.children(_self.Option.imageWrapper+':last-child'));
                }else{
                    el.append(el.children(_self.Option.imageWrapper+':first-child'));
                }
                el.css('left', el.children(_self.Option.imageWrapper).width()*'-1');
            });
        }else{
            if (parseInt(el.css('left'))==0){
                el.animate({'left': el.children(_self.Option.imageWrapper).width()*'-1'+'px'}, 600);
            }else{
                el.animate({'left':'0'}, 600);
            }
        }
    }
}