<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div>
    <input type="file" name="file" id="file-field" multiple="true" />
</div>
<div id="img-list"></div>
<script>
    $(function(){
        OUploader('<?php echo $this->url ?>', <?php echo $this->uploadCallback ?> );
    })
</script>