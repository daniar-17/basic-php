<?php
    // $name = (string)readline('Inputkan Text : ');
    $name = "Sample Case";
    $vowels = ['a','e','i','o','u'];
    $vowel = array();
    $consonant = array();
    $name = str_replace(' ','', $name);

    for($i = 0; $i < strlen($name); $i++){
        if(in_array(strtolower($name[$i]), $vowels)){
            array_push($vowel, strtolower($name[$i]));
        }else{
            array_push($consonant, strtolower($name[$i]));
        }
    }

    echo "Vowel Characters : ";
    for ($j=0; $j < count($vowel); $j++) { 
        echo $vowel[$j];
    }

    echo "\n";
    echo "Consonant Characters : ";
    for ($k=0; $k < count($consonant); $k++) { 
        echo $consonant[$k];
    }