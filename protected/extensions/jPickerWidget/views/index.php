<?php
/* @var $this JPickerWidget*/
?>
<script type="text/javascript">        
    $(document).ready(
        function()
        {
            //jPicker([settings, [commitCallback, [liveCallback, [cancelCallback]]]])
            $('#<?php echo $this->inputID ?>').jPicker(<?php echo $this->settings ?>, <?php echo $this->commitCallback ?>, <?php echo $this->liveCallback ?>, <?php echo $this->cancelCallback ?>);
        });
</script>