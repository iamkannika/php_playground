<?php

$arr2 = [[1,2,3],[4,5,6],[7,8,9],[10,11,12]];
// echo(count($arr2));
// echo(count($arr2[0]));
for($i = 0 ;$i<count($arr2); $i++){
    for($j = 0 ; $j<count($arr2[$i]);$j++ ){
        echo $arr2[$i][$j];
        echo " ";
    // echo($arr2[$i]);
    // echo("\n");
    
    }
    echo "\n";
}

?>