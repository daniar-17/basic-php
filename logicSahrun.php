<?php
    $name = "Sahrun01";
    $tempNilai = "";
    $tempName;
    for ($i = strlen($name) - 1; $i >= 0; $i--) {
        if (is_numeric($name[$i])) {
            $tempNilai = $tempNilai.$name[$i];
        }else{
            break;
        }
    }
    for ($i=0; $i < strlen($name) - strlen($tempNilai); $i++) { 
        echo $name[$i];
    }
    if(empty($tempNilai)){
        echo "1";
    }else{
        echo strrev($tempNilai) + 1;
    }