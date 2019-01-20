<?php
    class Base{
        public $x = 1;
        public function __construct(){
            echo "from constructor";
        }
        public function increase($n){
            $this-> x +=$n;
        }
    }

    $obj1 = new Base();
    //echo $obj1->x;
    $obj2 = new Base();
    //echo $obj2->x;
    $obj1->increase(1);
    echo $obj1->x;
    echo $obj2->x;
    
?>