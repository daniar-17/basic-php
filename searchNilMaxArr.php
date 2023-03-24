<?php 
    $arrNilai = array(10, 2, 14, 23, 12, 34);
    $nilaiMax = 0;
    for($i = 1; $i < count($arrNilai); $i++){
        for($j = 1; $j < $i; $j++){
            if($arrNilai[$i] > $arrNilai[$j]){
                $nilaiMax = $arrNilai[$i];
            }else{
                $nilaiMax = $arrNilai[$j];
            }
        }
    }
    echo "Nilai Max : ".$nilaiMax;
?>