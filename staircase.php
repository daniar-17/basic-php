<?php 
    $n = 7;
    for ($i=$n; $i > 0; $i--) { 
        for ($j=0; $j < $n; $j++) { 
            if($j < $i-1){
                echo " ";
            }else{
                echo "#";
            }
        }
        echo "\n";
    }
?>