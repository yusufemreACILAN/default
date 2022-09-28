<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    
    class car{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color=$color;
            $this->model=$model;
        }
        public function message(){
            return "my car is a" .$this->color . " " .$this->model . "!";

        }
    }
    $mycar=new car("black","volvo");
    echo $mycar-> message();
    echo "<br>";
    $mycar=new car("red","toyota");
    echo $mycar-> message();
    
    ?>
    
</body>
</html>