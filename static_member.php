<?php
    class Base{
        public static $prop = 'Property';

        function __construct() {
            // echo self::$prop;
            // self::Hello();
        }
        public static function Hello() {
            echo 'Hi';
        }
    }

    // echo Base ::$prop;
    $x = new Base();
    // echo "\n";
    // echo $x::$prop;
    $y = new Base();
    $x::$prop = 'New Prop';
    echo $x::$prop;
    echo "\n";
    echo $y::$prop;
?>