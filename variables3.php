<!DOCTYPE html>
<html lang="en">
<body>

<?php
$x=5;
$y=10;

function yourtest(){
    global $x,$y;
    $y= $x+$y;
}
yourtest();
echo $y;



?>



</body>
</html>