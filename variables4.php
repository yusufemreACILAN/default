<!DOCTYPE html>
<html lang="en">

<body>

<?php
$x=5;
$y=7;

function myTest(){
    $GLOBALS['y']= $GLOBALS['x']+ $GLOBALS['y'];

}

myTest();
echo $y;


?>
    
</body>
</html>