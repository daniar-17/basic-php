<?php
    $nilai = 8;
    echo "Check Number Negative, Positive, Zero, Odd and Even \n";
    echo "----------------------------------------------------\n";

    if($nilai < 0){
        echo $nilai," is Number Negative \n";
    }

    if($nilai > 0){
        echo $nilai," is Number Positive \n";
    }

    if($nilai == 0){
        echo $nilai," is Number Zero \n";
    }

    if($nilai % 2 == 0 && $nilai > 0){
        echo $nilai," is Number Even \n";
    }

    if($nilai % 2 == 1 && $nilai > 0){
        echo $nilai," is Number Odd \n";
    }