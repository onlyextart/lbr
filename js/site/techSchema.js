var techSchema = {
    init : function(){
        $('.tech-menu-wrapper li').on('click', function() {
            $('.tech-menu-wrapper div.tech-img-wrapper.active').removeClass('active');
            $(this).find('div.tech-img-wrapper').addClass('active');
            $('#tech-schema-results').html('<div class="techschema-load">Загрузка <img src="/images/loading-small.gif"></div>');
            techSchema.loadTechSchema($(this).attr('name'));
        });
        
        // print
        /*$('#tech-schema-print').on('click', function() {
            techSchema.printTechSchemaResults();
        });*/
    },
    loadTechSchema : function(id){
        $.ajax({
            type: 'POST',
            url: '/selskohozyaystvennaya-tehnika/techschema/',
            dataType: 'json',
            data:{
                schemaId: id,
            },
            success: function(response) {
                $('#tech-schema-results').html(response.data);
            }
        });
    },
    printTechSchemaResults : function(){
        var WinPrint = window.open('', '', 'letf=0,top=0,toolbar=0,scrollbars=1,status=0');
        WinPrint.document.write('<html><head><title></title><link rel="stylesheet" type="text/css" href="/css/printTechSchema.css"></head><body>');
        WinPrint.document.write($('#tech-schema-results').html());
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
};