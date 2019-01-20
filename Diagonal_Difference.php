<?php
    $arr = [[1,2,3,4],[4,3,2,1],[1,2,3,4],[4,3,2,1]];
    $a = 0;
    $b = 0;
    for($i = 0 ;$i<count($arr); $i++)
    {
        for($j = 0 ; $j<count($arr[$i]);$j++ ){

            if($i==$j)
                $a += $arr[$i][$j];
            //  echo $a ;
            //  echo " ";
            
            if( ($i+$j) == count($arr)-1 ) 
                $b += $arr[$i][$j];
                echo $b;
                echo " ";  
        }
        echo abs($a - $b);
    }
?>