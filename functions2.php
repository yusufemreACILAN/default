<?php declare(strick_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    
    function setHight(int $minHeight=50){
        echo "the height is:$minHeight <br>";
    }
    
    setHight(350);
    setHight();
    setHight(130);
    setHight(17);
    
    ?>

    
</body>
</html>