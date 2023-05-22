<?php
    $nums = array(8, 4, 3, 6, 12, 5, 2);
    $target = 13;
    for ($i=0; $i < count($nums); $i++) { 
        for ($j=0; $j < count($nums); $j++) { 
            if($nums[$i] + $nums[$j] == $target){
                echo "Sesuai Target, ".$nums[$i]." + ".$nums[$j]." = ".$target;
                return false;
            }
        }
    }