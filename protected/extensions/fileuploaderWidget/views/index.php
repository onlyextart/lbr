<?php
/**
 * После загрузки страницы блок '.uploaded_file_wrapper_blank' 
 * будет скопирован в переменную и удален со страницы. После загрузки изображения 
 * блок будет клонирован, обработан (будет вставлен путь загруженного изображения в 
 * аттрибут src элемента '.uploadedImage') и вставлен в '#img_list' 
 */
?>
<div>
    <input type="file" name="file" id="file-field" multiple="true" />
</div>
<script>
    $(function(){
        oUploader = new OUploader(
            {
                uploadUrl:'<?php echo $this->url ?>',
                deleteUrl:'<?php echo $this->deleteUrl ?>',
                uploadCallback:<?php echo $this->uploadCallback ?>, 
                postParams:<?php echo $postParams ?>
            }
        );
    })
</script>
<div id="img_list">
    <?php 
        $this->render('uploadedFileWrapper', array(
            'imagePath'=>$this->imagePathPlaceholder,
            'blankWrapper'=>true,
        )); 
        if(is_array( $this->previouslyUploadedFiles ) && count( $this->previouslyUploadedFiles )>0){
            foreach( $this->previouslyUploadedFiles as $previouslyUploadedFilePath=>$previouslyUploadedFileParams ){
                $this->render('uploadedFileWrapper', array(
                    'imagePath'=>$previouslyUploadedFilePath,
                    'blankWrapper'=>false,
                    'imageParams'=>$previouslyUploadedFileParams,
                ));
            }
        }
    ?>
</div>