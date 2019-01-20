<?php

function b($x) {
    return $x - 1;
}

function a($x ,$y){
    return $x + $y;
}


// a(1,2);
$var = a(1,2);
b($var);
//echo $var;
echo b($var);
// a(10,40);
?>