$(document).ready(function(){
    var makers = new AjaxMakersDescriptionLoader();
    makers.AddingEventHandlers();
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
    this.loadedImage = [true];
    this.loadedImage[this.numOfPhoto] = [true];
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
        if(_self.loadedImage[_self.activeFoto] === undefined ){
            _self.apeendLoaderGif();
            var image = _self.$fotos.eq(_self.activeFoto).find('img');
            var imagePath = image.attr('data-src');
            image.attr('src', imagePath);
            _self.loadedImage[_self.activeFoto]=true;
            image.load(function(){
                _self.removeLoaderGif();
                _self.animate();
            });
        }
        else{
            _self.animate();
            _self.loadedImage[_self.activeFoto]=true;
        }
    };
    this.animate = function(){
        _self.$bannerImagesMapItems.removeClass('active');
        _self.$bannerImagesMapItems.eq((_self.activeFoto%_self.numOfPhoto)).addClass('active');
        _self.$imagesContainer.animate({'left':(_self.imageWidth*_self.activeFoto*(-1))+'px'}, 300, 'linear', function(){_self.inAnimate=false;});
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
