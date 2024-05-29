<?php 
    $arr = [1, 2, 2, 3, 5, 6, 7, 8, 3];
    $target = 9;
    $search = array_keys($arr, $target);
    if ($search) {
        echo json_encode($search);
    }else{
        echo "[-1, -1]";
    }
?>