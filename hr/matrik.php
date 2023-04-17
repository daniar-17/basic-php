<?php
    $awal = 0;
    $akhir = 0;
    $matriksA = array(
        array(10,7,5),
        array(3,19,3),
        array(8,3,5)
    );
    $matriksB = array(
        array(8,-6,2),
        array(13,-9,4),
        array(2,2,20)
    );
    $n = count($matriksA) - 1;
    for ($i = 0; $i < count($matriksA); $i++):
        for ($j = 0; $j < count($matriksA[$i]); $j++):
            if($i == $j){
                $awal = $awal + $matriksA[$i][$j];
            }
            if(($i+$j) == $n){
                $akhir = $akhir + $matriksA[$i][$j];
            }
        endfor;
        echo "\n";
    endfor;
    echo "Nilai Awal : " .$awal. "\n";
    echo "Nilai Akhir : " .$akhir. "\n";
    echo count($matriksA). "\n";
    echo abs($akhir - $awal). "\n";
?>