function OUploader(url, uploadCallback) {
    var fileInput = $('#file-field');
    // Событие при добавлении файлов в форму
    fileInput.bind({
        change: function() {
            $.each(this.files, function(i, file) {  
                upload(file);
            });
        }
    });

    function upload(files) {

        // Сначала мы отправим пустой запрос на сервер. 
        // Это связано с тем, что иногда Safari некорректно обрабатывает
        // первый файл.

        $.get(url);

        var http = new XMLHttpRequest(); // Создаем объект XHR, через который далее скинем файлы на сервер.

        // Процесс загрузки
        if (http.upload && http.upload.addEventListener) {

            http.upload.addEventListener( // Создаем обработчик события в процессе загрузки.
                'progress',
                function(e) {
                    if (e.lengthComputable) {
                        // e.loaded — сколько байтов загружено.
                        // e.total — общее количество байтов загружаемых файлов.
                        // Кто не понял — можно сделать прогресс-бар :-)
                    }
                },
                false
            );

            http.onreadystatechange = function () {
                // Действия после загрузки файлов
                if (this.readyState == 4) { // Считываем только 4 результат, так как их 4 штуки и полная инфа о загрузке находится
                    if(this.status == 200) { // Если все прошло гладко
                        // Действия после успешной загрузки.
                        // Например, так
                        // var result = $.parseJSON(this.response);
                        // можно получить ответ с сервера после загрузки.
                        
                        
                        /*var uploadedImage = $(this.responseText);
                        uploadedImage.draggable({ 
                            //appendTo: "body",
                            //helper: "clone"
                            revert: true
                        });

                        imgList.append(uploadedImage);*/
                        var responseText = $(this.responseText);
                        uploadCallback(responseText);

                    } 
                    else {
                        console.log('error');
                        // Сообщаем об ошибке загрузки либо предпринимаем меры.
                    }
                }
            };

            http.upload.addEventListener(
                'load',
                function(e) {
                    // Событие после которого также можно сообщить о загрузке файлов.
                    // Но ответа с сервера уже не будет.
                    // Можно удалить.
            });

            http.upload.addEventListener(
                'error',
                function(e) {
                // Паникуем, если возникла ошибка!
            });
        }

        var form = new FormData(); // Создаем объект формы.
        form.append('path', '/'); // Определяем корневой путь.
        form.append('Filedata', files); // Прикрепляем к форме все загружаемые файлы.
        http.open('POST', url); // Открываем коннект до сервера.
        http.send(form); // И отправляем форму, в которой наши файлы. Через XHR.
    }

}