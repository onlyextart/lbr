<?php
/*'template'=>array(
                            'image'=>true,
                            'radioButton'=>'Логотип производителя',
                        ),*/
$imgId=rand();
?>
<div class="uploaded_file_wrapper">
    <?php if( isset( $_POST['template']['deleteButton'] ) ): ?>
        <img class="delete_image" id="image_id_<?php echo $imgId ?>" src="/images/closeIcon.png">
    <?php endif; ?>
    <?php if( isset( $_POST['template']['image'] ) ): ?>
        <img class="uploaded_file" src="/<?php echo $this->fileName ?>">
    <?php endif; ?>
    <?php if( isset($_POST['template']['radioButton']) ): ?>
        <?php if( isset($_POST['template']['radioButtonLabel'])): ?>
        <label for="<?php echo Translite::rusencode($_POST['template']['radioButtonLabel']); ?>">
            <?php echo $_POST['template']['radioButtonLabel'] ?>
        <?php endif; ?>
        <input id="<?php echo Translite::rusencode($_POST['template']['radioButtonLabel']); ?>" type="radio" value="<?php echo $this->fileName ?>" name="<?php echo $_POST['template']['radioButtonName'] ?>">
        <?php if( isset($_POST['template']['radioButtonLabel'])): ?>
        </label>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php if( isset( $_POST['template']['deleteButton'] ) ): ?>
<script>
    $(function() {
        var deleteImageButton = $('#image_id_<?php echo $imgId ?>');
        if(deleteImageButton.length > 0){
            var imageWrapper = deleteImageButton.closest('.uploaded_file_wrapper');
            var image = imageWrapper.find('.uploaded_file');
            var imagePath = image.attr('src');
            deleteImageButton.click(function(){
                $.ajax(
                    '/administrator/fileuploader/delete/',
                    {
                        data:{'path':imagePath},
                        type:'POST'
                    }
                ).done(function( data ){
                        if( data=='true' ){
                            imageWrapper.remove();
                        }
                });
            });
        }
    });
</script>
<?php endif; ?>
