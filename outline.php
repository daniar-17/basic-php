<?php
    $nilai = "14.725.394";
    $nilaiUp = str_replace(".","",$nilai);
    for ($i=0; $i < strlen($nilaiUp); $i++) { 
        for ($j=0; $j < strlen($nilaiUp); $j++) { 
            if($i == $j){
                echo $nilaiUp[$j];
            }else if($j > $i){
                echo "0";
            }
        }
        echo "\n";
    }
