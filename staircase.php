<?php

// Complete the staircase function below.
function staircase($n) {
    for ($i =0;$i<$n;$i++){
        for($j=0;$j<($n-$i)-1;$j++){
            echo" ";
        }
        for($x=0;$x<=$i;$x++){
            echo"#" ;
        }
        echo "\n";
        
    }
}
    
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);

