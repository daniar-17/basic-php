<?php
    $nilai = 68;
    echo "Check Value and Conversition \n";
    echo "-----------------------------\n";

    if($nilai >= 90){
        echo $nilai," [A] : Exellent";
    }else if($nilai >= 80 && $nilai <= 89){
        echo $nilai," [B] : Exellent";
    }else if($nilai >= 70 && $nilai <= 79){
        echo $nilai," [C]: Good Job";
    }else if($nilai >= 65 && $nilai <= 69){
        echo $nilai," [D]: You must study Harder!";
    }else if($nilai >= 55 && $nilai <= 64){
        echo $nilai," [E]: You must study Harder!";
    }else if ($nilai <= 54) {
        echo $nilai," [F]: Failed";
    }