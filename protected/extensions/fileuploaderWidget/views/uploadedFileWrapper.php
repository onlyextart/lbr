<div class="uploaded_file_wrapper<?php if( $blankWrapper )echo'_blank'?>">
    <?php 
    // Загруженный файл (тег <img>)
    if( isset( $this->template['image'] ) ){
        echo CHtml::openTag('div', array(
            'class'=>'image_wrapper'
        ));
        $this->template['image']['htmlOptions']['class'] .= "";
        $this->template['image']['htmlOptions']['class'] = str_replace(
            ' uploaded_file',
            '',
            $this->template['image']['htmlOptions']['class']
        ).' uploaded_file';
        echo CHtml::image(
            $imagePath,  
            'uploadedImage', 
            $this->template['image']['htmlOptions']
        );
        echo CHtml::closeTag('div');
    }

    // Кнопка для удаления файла
    if( isset( $this->template['deleteButton'] ) ){
        $this->template['deleteButton']['htmlOptions']['class'] .='';
        $this->template['deleteButton']['htmlOptions']['class'] = str_replace(
            ' delete_image',
            '',
            $this->template['deleteButton']['htmlOptions']['class']
        ).' delete_image';
        echo CHtml::image(
            $this->deleteImgPath,  
            'deleteFileButton', 
            $this->template['deleteButton']['htmlOptions']
        );  
    }
    
    //radioButton под загруженным изображением
    if( isset($this->template['radioButton']) ){
        if( !isset($this->template['radioButton']['nameAttr']) ){
            $this->template['radioButton']['nameAttr']='UploadedImage[]';
        }
        $this->template['radioButton']['htmlOptions']['value']=$imagePath;
        
        echo CHtml::openTag('label');
        echo $this->template['radioButton']['label'];
        echo CHtml::radioButton( 
                $this->template['radioButton']['nameAttr'], 
                ( $imageParams['radioButton']=='checked' ), 
                $this->template['radioButton']['htmlOptions'] 
            );
        echo CHtml::openTag('label');
    }
    //Скрытое поле содержащее путь к изображению
    if( isset($this->template['hiddenField']) ){
        if( !isset($this->template['hiddenField']['nameAttr']) ){
            $this->template['hiddenField']['nameAttr']='ImagePath[]';
        }
        //$this->template['hiddenField']['htmlOptions']['value']=$imagePath;
        //var_dump();
        echo CHtml::hiddenField( 
            $this->template['hiddenField']['nameAttr'],
            $imagePath,    
            $this->template['hiddenField']['htmlOptions'] 
        );
    }
    ?>
</div>