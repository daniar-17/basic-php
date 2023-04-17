<?php
    $arr = array(1, 1, 0, -1, -1);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $n = count($arr);
    for ($i=0; $i < count($arr); $i++) { 
        if($arr[$i] > 0){
            $positive = $positive + 1;
        }elseif($arr[$i] < 0){
            $negative = $negative + 1;
        }elseif($arr[$i] == 0){
            $zero = $zero + 1;
        }
    }
    echo number_format($positive/$n, 6)."\n";
    echo number_format($negative/$n, 6)."\n";
    echo number_format($zero/$n, 6)."\n";
?>