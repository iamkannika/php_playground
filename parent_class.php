<?php
    class BaseClass{
        public $prop = 'property';
        public function method(){
            echo self::class . ': METHOD!' . "\n";
        }
    }

    class Subclass extends Baseclass {
        public function method(){
            echo $this->prop . "\n";
            // $this->method();
            echo parent::method() . "\n";  
            echo self::class . ': METHOD!' . "\n";
        }
    }

    $x = new Subclass();
    $x->method();
?>