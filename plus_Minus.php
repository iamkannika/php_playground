<?php

// Complete the plusMinus function below.
function plusMinus($arr) {

    $count_positive = 0;
    $count_nagative = 0;
    $count_zero=0;
    $n_arr = count($arr);
    for ($i = 0; $i < $n_arr; $i++){
        if($arr[$i]>0) $count_positive = $count_positive+1;
        elseif($arr[$i]<0) $count_nagative = $count_nagative+1;
        else $count_zero = $count_zero+1;
    }
    // $w = ($count_positive+$count_nagative+$count_zero);
    $x =$count_positive/$n_arr;
    $y =$count_nagative/$n_arr;
    $z =$count_zero/$n_arr;
     printf ("%f",$x);
     echo("\n");
     printf ("%f",$y);
     echo("\n");
     printf ("%f",$z);
     echo("\n");

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
