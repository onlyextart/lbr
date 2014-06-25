var techSchema = {
    init : function(){
        var activeView = parseInt(sessionStorage.getItem('techSchemaActiveView'));
        if(!isNaN(activeView)) $('.tech-schema-ico-wrapper img[view='+activeView+']').addClass('active');
        else $('.tech-schema-ico-wrapper img[view=1]').addClass('active');

        $('.tech-schema-ico-wrapper img').click(function(){
            if(!$(this).hasClass('disabled')){
                var view = $(this).attr('view');
                sessionStorage.setItem('techSchemaActiveView', view);
                $('.tech-schema-ico-wrapper img.active').removeClass('active');    
                $(this).addClass('active');
                if($('#tech-schema-results').html() != '')techSchema.loadTechSchema();
            }
        });

        $('#load-tech-schema').on('click', function() {
            techSchema.loadTechSchema();
        });
        $('#tech-schema-print').on('click', function() {
            techSchema.printTechSchemaResults();
        });
    },
    loadTechSchema : function(){
        var schemaIds = [];
        var nodes = $('input[name^=chk_group]');
        
        $('.tech-schema-ico-wrapper img').each(function(){
            $(this).addClass('disabled');
        });
        
        for (var i = 0, n; n = nodes[i]; i++) {
            if (n.checked == true) {
                name = n.name;
                index = name.indexOf(']'); 
                id = name.substring(10, index); 
                schemaIds.push(id);
            }
        }
        if(schemaIds.length > 0) {
            var activeView = parseInt(sessionStorage.getItem('techSchemaActiveView'));
            if(isNaN(activeView)) activeView = 1;
            
            $.ajax({
                type: 'POST',
                url: '/selskohozyaystvennaya-tehnika/techschema/',
                dataType: 'json',
                data:{
                    view: activeView,
                    schemaIds: schemaIds,
                },
                success: function(response) {
                    $('#tech-schema-results').html(response.data);
                    if(response.data == '') $('.tech-schema-print').css('display','none');
                    else $('.tech-schema-print').css('display','block');
                    
                    $('.tech-schema-ico-wrapper img').each(function(){
                        $(this).removeClass('disabled');
                    });
                }
            });
        } else {
            $('.tech-schema-print').css('display','none');
            $('#tech-schema-results').html('');
        }
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