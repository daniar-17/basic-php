<?php

    $string = 'April 15, 2003'; 
    $pattern = '/(\w+) (\d+), (\d+)/i'; 
    $replacement = '$3 ${1}1'; 
    echo preg_replace($pattern, $replacement, $string);