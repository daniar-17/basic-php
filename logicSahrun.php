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
    
    // $words = preg_replace('/[0-9]+/', '', $name);
    // $int_var = preg_replace('/[^0-9]/', '', $name);
    // $val = strlen($name);
    // $checkVal = $name[$val -1];
    // if(empty($checkVal)) {
    //     echo $name."1";
    // }else{
    //     $words = preg_replace('/[0-9]+/', '', $name);
    //     $int_var = preg_replace('/[^0-9]/', '', $name);  
    //     if(empty($int_var)){
    //         echo $name."1";
    //     }else{
    //         echo $words.($int_var + 1);
    //     }
    // }
    
