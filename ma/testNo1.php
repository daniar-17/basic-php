<?php 
    $n = 6;
    for ($i=1; $i <= $n ; $i++) { 
        for ($j=1; $j < 10; $j++) {
            if($j == ($i + 1)){
                echo "*";
            }else if($j == ($i + 2)){
                echo "*";
            }else{
                echo $j."";
            }
        }
        echo "\n";
    }