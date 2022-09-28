<!DOCTYPE html>
<html lang="en">
<body>
    
    <?php
        $txt="hello world";
        $x=5;
        $y=10.5;
        /////////////////////////////////////////////


        function myTest() {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function iss: $x</p>";
        } 
        myTest();
        
        echo "<p>Variable x outside function is: $x</p>";
        
    ?>
    


</body>
</html>