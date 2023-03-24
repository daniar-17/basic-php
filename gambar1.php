<?php 
//Buat
// *
// **
// ****
    $nilai = 3;
    for ($i=0; $i < $nilai; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "\n";
    }
    for ($i = $nilai; $i >= 0; $i--) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "\n";
    }
