<?php
    //Input Param
    $n = 8;
    $family = "2 3 4 4 2 1 3 4";
    
    //Process
    $family = str_replace(' ','',$family);
    $temp_i = 0;
    for($i = 0; $i < strlen($family); $i++){
        $temp_i += $family[$i];
    }

    //Generate Value
    $val = $temp_i / 4;
    $val = ceil($val);

    if(strlen($family) == $n){
        echo "Minimum bus required is : ".$val;
    }else{
        echo "Input must be equal with count of family";
    }