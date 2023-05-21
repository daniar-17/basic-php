<?php
    //Soal 1
    $name = "SeLamAT PAGi semua halOo";
    echo "Soal 1 \n";
    echo "Format Judul : ".ucwords(strtolower($name))."\n";
    echo "Format Biasa : ".ucfirst(strtolower($name))."\n \n";

    //Soal 2
    echo "Soal 2 \n";
    $val = "aaabbdcccaaaaaccddde";
    $counter = 0;
    $d = 1;
    for ($i=0; $i < strlen($val); $i++) {
        if(strlen($val) - 1 == $i){
            $d = 0;
        }
        $counter += 1;
        if ($val[$i] != $val[$i+$d]) {
            echo $val[$i]." : ".$counter;
            echo "\n";
            $counter = 0;
        }
        if(strlen($val)-1 == $i){
            echo $val[$i]." : ".$counter;
        }
    }