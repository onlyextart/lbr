/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){

   /*--- Tech cikl arrows----*/
   $('.tech-cikl-wrapper .tech-cikl .up').on('click', function() {
       var element = $(this).parent();
       var root = element.parent();
       var neighbor = element.prev(); //next();
       if(neighbor.length){
           var temp = element.attr('pos');
           element.attr('pos', neighbor.attr('pos'));
           neighbor.attr('pos', temp);
           
           $( element ).insertBefore( neighbor );
       }
   });
   $('.tech-cikl-wrapper .tech-cikl .down').on('click', function() {
       var element = $(this).parent();
       var root = element.parent();
       var neighbor = element.next();
       if(neighbor.length){
           var temp = element.attr('pos');
           element.attr('pos', neighbor.attr('pos'));
           neighbor.attr('pos', temp);
           
           $( element ).insertAfter( neighbor );
       }
   });
   
   $('.save-tech-cikl').on('click', function() {
        var params = [];
        var list = $(this).parent().next();
        var stageId = '';
        list.find('li').each(function(index){
            params[$(this).attr('prod-id')] = $(this).attr('pos');
            stageId = $(this).attr('stage-id');
        });
        var jsonString = JSON.stringify(params);
        $.ajax({
            type: "POST",
            url: "/administrator/tehcikl/update/",
            data: {
                data : jsonString,
                stageId : stageId,
            }, 
            cache: false,
            success: function() {
                alertify.success('Сохранение прошло успешно');
            }
        });
    });
    
});
