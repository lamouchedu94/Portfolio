<?php
require "header.php"
?> 
    <?php
        
        foreach ($info as $key => $elem) {
            if ($key != "id") {
                
            
            ?>
            <div class="info">
                <p class="infoTitle"><?=$key?> :&#160</p>
                <p><?=$info[$key];?></p>
            </div>

            <?php
            }
        }
    ?>    

    


<?php
require "footer.php"
?>