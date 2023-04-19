<?php
    $start = 1;
    $finish = 7;
    
    $valF = randomNumber($start, $finish);
    echo "Nilai Randaom : ".$valF;

    function randomNumber($start, $finish)
    {
        $val = rand($start, $finish);
        return $val;
    }