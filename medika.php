<?php

    $n = 35;
    for ($i=1; $i <= $n; $i++) { 
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "LiraMedika \n";
        }elseif($i % 3 == 0){
            echo "Lira \n";
        }elseif($i % 5 == 0){
            echo "Medika \n";
        }else{
            echo $i."\n";
        }
    }