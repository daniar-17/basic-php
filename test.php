<?php

$n = 9;
$string = 'April 15, 2003'; 
$pattern = '/(\w+) (\d+), (\d+)/i'; 
$replacement = '$3 ${1}1'; 
echo preg_replace($pattern, $replacement, $string);
echo "\n";

for ($i=1; $i <= $n; $i++) { 
    for ($j=1; $j <= $i; $j++) { 
        echo $j * 2, " ";
    }
    echo "\n";
}