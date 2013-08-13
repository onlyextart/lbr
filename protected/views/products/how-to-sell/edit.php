<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "div#editable",
    inline: true,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<form action="" method="post" >
    <div id="editable" style="position: relative;">
        <? echo $data[0]->content; ?>
    </div>
    <input type="submit" name="submit" value="Сохранить" style=" color: #fff;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
    background-color: #60b044;
    background-image: -moz-linear-gradient(#8add6d, #60b044);
    background-image: -webkit-linear-gradient(#8add6d, #60b044);
    background-image: linear-gradient(#8add6d, #60b044);
    background-repeat: repeat-x;
    border: 1px solid #5ca941;"/>
</form>
<div class="image_loader">
<b>Загрузчик изображений:</b>
<?
$this->Widget('ext.fileuploaderWidget.FileuploaderWidget', array(
        'template'=>array(
            'image',
        ),
        'uploadCallback'=>'
            function( $newUploadedFileWrapper ){
                $newUploadedFileWrapper.draggable({
                    revert: true,
                    appendTo: "body"
                });
                $("#editable").droppable({
                    activeClass: "ui-state-hover",
                    hoverClass: "ui-state-active",
                    drop: function( event, ui ) {
                        $(this).append(ui.draggable.find("img").clone().removeClass("uploaded_file"));
                    },
                });
            }'
    )
);
?>
</div>
<style>
    .image_loader
    {
        border-top: 2px groove rgb(201, 201, 201);
        margin-top: 20px;
        padding: 5px;
    }
    #file-field
    {
        border: 0;
        box-shadow: none;
    }
</style>