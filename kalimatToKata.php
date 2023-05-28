<?php
    $sentence = "aku dan ibu pergi ke pasar ibu membeli sapu dan pel aku membeli buku dan pulpen";
    $arrSen = explode(" ",$sentence);
    $arrUni = array_values(array_unique($arrSen));
    $temp = 0;
    for ($i=0; $i < count($arrUni); $i++) { 
        for ($j=0; $j < count($arrSen); $j++) { 
            if($arrUni[$i] == $arrSen[$j]){
                $temp += 1;
            }
        }
        echo $arrUni[$i]." : ".$temp."\n";
        $temp = 0;
    }