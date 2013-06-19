function OUploader( params ) {
    var _self = this;
    this.$fileInput = $('#file-field');
    this.uploadUrl = params.uploadUrl;
    this.uploadCallback = params.uploadCallback;
    this.postParams = params.postParams;
    this.uploadedImageManager = new UploadedImageManager( params );
    
    // Событие при добавлении файлов в форму
    _self.$fileInput.bind({
        change: function() {
            $.each(this.files, function(i, file) {  
                _self.upload(file);
            });
        }
    });
    
    this.upload = function(file) {
        // Сначала мы отправим пустой запрос на сервер. 
        // Это связано с тем, что иногда Safari некорректно обрабатывает
        // первый файл.
        $.get(_self.uploadUrl);

        var http = new XMLHttpRequest(); // Создаем объект XHR, через который далее скинем файлы на сервер.

        // Процесс загрузки
        if (http.upload && http.upload.addEventListener) {

            http.upload.addEventListener( // Создаем обработчик события в процессе загрузки.
                'progress',
                function(e) {
                    if (e.lengthComputable) {
                        // e.loaded — сколько байтов загружено.
                        // e.total — общее количество байтов загружаемых файлов.
                    }
                },
                false
            );

            http.onreadystatechange = function () {
                // Действия после загрузки файлов
                if (this.readyState == 4) {
                    if(this.status == 200) {
                        // Действия после успешной загрузки.
                        var responseJSON = $.parseJSON( this.responseText );
                        var $newUploadedFileWrapper = _self.uploadedImageManager.appendImage( responseJSON.path );
                        if(typeof _self.uploadCallback == 'function'){
                            _self.uploadCallback( $newUploadedFileWrapper );
                        }
                    } 
                    else {
                        document.write(this.responseText)
                        console.log('error');
                        // Сообщаем об ошибке загрузки либо предпринимаем меры.
                    }
                }
            };

            http.upload.addEventListener(
                'error',
                function(e) {
                // Паникуем, если возникла ошибка!
            });
        }

        var form = new FormData(); // Создаем объект формы.
        form.append('path', '/'); // Определяем корневой путь.
        form.append('Filedata', file); // Прикрепляем к форме загружаемй файл.
        //Прикрепляем POST параметры
        for( var param in _self.postParams ){
            form.append( param, _self.postParams[param]);
        }
        http.open('POST', _self.uploadUrl); // Открываем коннект до сервера.
        http.send(form); // И отправляем форму, c файлjv. Через XHR.
    }
}

function UploadedImageManager( params ){
    var _self = this;
    this.params = params;
    this.$uploadedFileWrapper = $('.uploaded_file_wrapper_blank').clone();
    this.$imgList = $('#img_list');
    this.imagePathPlaceholder = this.$uploadedFileWrapper.find('.uploaded_file').attr('src');
    
    $(function(){
        $('.uploaded_file_wrapper_blank').remove();
        $(document).on('click', '#img_list .delete_image', _self.deleteImage);
    });
    
    this.appendImage = function( imagePath ){
        var $newUploadedFileWrapper = _self.$uploadedFileWrapper.clone();
        $newUploadedFileWrapper.attr('class', 'uploaded_file_wrapper');
        $newUploadedFileWrapper.find('.uploaded_file').attr('src', imagePath);
        $newUploadedFileWrapper.find('*[value="'+_self.imagePathPlaceholder+'"]').attr('value', function(i, val) {
            return imagePath;
        })
        $newUploadedFileWrapper.find('*[src="'+_self.imagePathPlaceholder+'"]').attr('src', function(i, val) {
            return imagePath;
        })
        _self.$imgList.append( $newUploadedFileWrapper );
        return( $newUploadedFileWrapper );
    }
    
    this.deleteImage = function(){
        var $imageWrapper = $(this).closest('.uploaded_file_wrapper');
        var imagePath = $imageWrapper.find('.uploaded_file').attr('src');
        $.ajax({
            url:_self.params.deleteUrl,
            type: 'POST',
            data:{path:imagePath},
            success:function(data){
               var response = $.parseJSON( data );
               if(response.removeWrapper == "true"){
                   $imageWrapper.remove() 
               }
               else{
                   console.log('error:\n\r'+data);
               }
            }
        });
    }
}
