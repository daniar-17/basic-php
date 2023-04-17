<?php
    $high = 0;
    $arr = array(4,6,3,7,3,7);
    sort($arr);
    $temp = $arr[count($arr)-1];
    for ($i = count($arr) - 1; $i >= 0; $i--) { 
        if($temp == $arr[$i]){
            echo $arr[$i]."\n";
            $high++;
        }
    }
    echo $high;
?>