$(document).ready(function(){
    
    var makers = new AjaxMakersDescriptionLoader();
    makers.AddingEventHandlers();
    
    //var sliding = new SlidingBannersImages();
    //sliding.PreparingEvents();
    $('.b_images').each(
        function(){
            new XbannersSlider($(this));
        }
    );
});
function XbannersSlider( $sliderWrapper ){
    var _self = this;
    this.$sliderWrapper = $sliderWrapper;
    this.$imagesContainer = $sliderWrapper.find('.b_images_conteiner');
    this.$fotos = $sliderWrapper.find('section');
    this.numOfPhoto = this.$fotos.length;
    this.activeFoto = 0;
    this.imageWidth = $sliderWrapper.width();
    this.inAnimate=false;
    
    if(_self.numOfPhoto>1){
        _self.$sliderWrapper.append('<div class="scrollLeft"></div>');
        _self.$sliderWrapper.append('<div class="scrollRight"></div>');
        _self.$leftButton = _self.$sliderWrapper.find('.scrollLeft');
        _self.$rightButton = _self.$sliderWrapper.find('.scrollRight');
        _self.$imagesContainer.append(_self.$fotos.eq(0).clone());
        _self.$sliderWrapper.append('<ul class="banner_images_map"></ul>');
        _self.$bannerImagesMap = $sliderWrapper.find('.banner_images_map');
        var bannerImageMapItemWidth = 100/_self.numOfPhoto;
        _self.$fotos.each(
            function(){
                _self.$bannerImagesMap.append('<li style="width:'+bannerImageMapItemWidth+'%"></li>');
            }
        );
        _self.$bannerImagesMapItems = _self.$bannerImagesMap.find('li');
        _self.$bannerImagesMapItems.eq(0).addClass('active');
    }
    else{
        return;
    }
    
    this.doSlide = function(direction){
        if(_self.inAnimate){return;};
        _self.inAnimate=true;
        _self.apeendLoaderGif();
        _self.activeFoto = _self.activeFoto+direction;
        if( _self.activeFoto<0 && direction<0 ){
            _self.activeFoto = _self.numOfPhoto;
            _self.$imagesContainer.css({'left':(_self.imageWidth*_self.activeFoto*(-1))+'px'});
            _self.activeFoto--;
        }
        if( _self.activeFoto===(_self.numOfPhoto+1) && direction>0 ){
            _self.activeFoto = 0;
            _self.$imagesContainer.css({'left':(_self.imageWidth*_self.activeFoto*(-1))+'px'});
            _self.activeFoto++;
        }
        var image = _self.$fotos.eq(_self.activeFoto).find('img');
        var imagePath = image.attr('data-src');
        if(imagePath===image.attr('src')){
            _self.animate();
        }
        else{
            image.attr('src', imagePath);
        }
        _self.$fotos.removeClass('active');
        _self.$fotos.eq(_self.activeFoto).addClass('active');
        image.load(function(){
            _self.animate();
        });
    };
    this.animate = function(){
        this.removeLoaderGif();
        _self.$bannerImagesMapItems.removeClass('active');
        _self.$bannerImagesMapItems.eq((_self.activeFoto%_self.numOfPhoto)).addClass('active');
        _self.$imagesContainer.animate({'left':(_self.imageWidth*_self.activeFoto*(-1))+'px'}, 400, 'swing', function(){_self.inAnimate=false;});
    };
    this.apeendLoaderGif=function(){
        _self.$sliderWrapper.append('<div class="banner_loading_overflow"><img src="/images/loading2.gif"></div>');
    };
    this.removeLoaderGif=function(){
        _self.$sliderWrapper.find('.banner_loading_overflow').remove();
    };
    this.$leftButton.click(function(){_self.doSlide(-1);});
    this.$rightButton.click(function(){_self.doSlide(1);});
}

/*function SlidingBannersImages(){
    
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
}*/