$(document).ready(function(){
    var makers = new AjaxMakersDescriptionLoader();
    makers.AddingEventHandlers();
    $('.b_images').each(
        function(){
            new XbannersSlider($(this));
        }
    );
});