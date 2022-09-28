<!DOCTYPE html>
<html lang="en">
<body>
    
<?php

$t=date("H");
echo "<p> the hour (of the server) is ".$t;
echo ", and will give the following message:</p>";

if($t<"10"){
    echo "have a good morning";
}

elseif($t<"20"){
    echo "have a good day";
}
else{
    echo "have a good night";
}


?>
</body>
</html>