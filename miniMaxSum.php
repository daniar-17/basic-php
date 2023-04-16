<?php
    $arr = array(7, 69, 2, 221, 8974);
    $min = 0;
    $max = 0;
    sort($arr); // result arr (1, 3, 5, 7, 9)
    for ($i=0; $i < count($arr) - 1; $i++) { 
        $min += $arr[$i];
    }
    for ($i=1; $i < count($arr); $i++) { 
        $max += $arr[$i];
    }
    echo "\n";
    echo "Min : ".$min."\n";
    echo "Max : ".$max."\n";
?>