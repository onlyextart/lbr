<?php echo $form->hiddenField( $imageModel , "[$imageNum]path", array('class'=>'imagePath imageFeature') ); ?>
<div class="row">
    <?php echo $form->labelEx( $imageModel , "description"); ?>
    <?php echo $form->textarea( $imageModel , "[$imageNum]description", array('class'=>'imageDescription imageFeature') ); ?>
</div>
<div class="row">
    <?php echo $form->labelEx( $imageModel , "alt", array('class'=>'imageAlt') ); ?>
    <?php echo $form->textField( $imageModel , "[$imageNum]alt", array('class'=>'imageAlt imageFeature') ); ?>
</div>
<div class="row">
    <?php echo $form->labelEx( $imageModel , "title", array('class'=>'imageTitle') ); ?>
    <?php echo $form->textField( $imageModel , "[$imageNum]title", array('class'=>'imageTitle imageFeature') ); ?>
</div>
