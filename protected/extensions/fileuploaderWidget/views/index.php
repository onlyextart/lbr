<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div>
    <input type="file" name="file" id="file-field" multiple="true" />
</div>
<script>
    $(function(){
        OUploader('<?php echo $this->url ?>' <?php if($this->uploadCallback!==null){ 
                                                        echo ', '.$this->uploadCallback;
                                                    }
                                                    else{
                                                        echo ', function(){}';
                                                    }?>, <?php echo $postParams ?>);
    })
</script>