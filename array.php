<?php

    $intAwal = (int)readline('Awalan : ');
    $intAkhir = (int)readline('Akhir : ');

    $arrNilaiGanjil = array();
    $arrNilaiGenap = array();

    echo "Hitung Ganjil Genap \n";

    for($a = $intAwal; $a <= $intAkhir; $a++){
        if($a % 2 == 0){
            array_push($arrNilaiGenap, $a);
        }else{
            array_push($arrNilaiGanjil, $a);
        }
    }

    echo "Ganjil - ". count($arrNilaiGanjil) . " : ";
    for($x = 0; $x < count($arrNilaiGanjil); $x++){
        echo $arrNilaiGanjil[$x] .", ";
    }

    echo "\n";

    echo "Genap - ". count($arrNilaiGenap) . " : ";
    for($x = 0; $x < count($arrNilaiGenap); $x++){
        echo $arrNilaiGenap[$x] .", ";
    }

?>