<div class="<?php echo $cf_messages; ?>" role="alert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    
    <?php

        // Errors und success messages
    
        if(isset($cf_daten_messages)){

            echo $cf_daten_messages;

        }
    
    ?>

</div>