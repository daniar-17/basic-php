<?php
    $n = 12;
    $temp_i = 0;
    $temp_j = 0;
    for ($i=1; $i < $n - 2 ; $i++) { 
        for ($j=1; $j < $n; $j++) { 
            $temp_i += $i;
            echo $temp_i." ";
        }
        $temp_i = 0;
        echo "\n";
    }