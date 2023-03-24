<?php
$nilai = (int)readline('Nilai N : ');
$tBagi = ($nilai / 2) + 0.5;
if ($nilai % 2 == 0) {
    echo "Harus Bilangan Ganjil !";
} else {
    $rows = $tBagi; // number of rows for the diamond pattern
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows - $i - 1; $j++) {
            echo "O"; // print spaces to create left side of the diamond
        }
        for ($j = 0; $j < 2 * $i + 1; $j++) {
            echo "*"; // print asterisks to create the middle of the diamond
        }
        for ($j = 0; $j < $rows - $i - 1; $j++) {
            echo "O"; // print spaces to create left side of the diamond
        }
        echo "\n";
    }

    for ($i = $rows - 2; $i >= 0; $i--) {
        for ($j = 0; $j < $rows - $i - 1; $j++) {
            echo "O"; // print spaces to create left side of the diamond
        }
        for ($j = 0; $j < 2 * $i + 1; $j++) {
            echo "*"; // print asterisks to create the middle of the diamond
        }
        for ($j = 0; $j < $rows - $i - 1; $j++) {
            echo "O"; // print spaces to create left side of the diamond
        }
        echo "\n"; // move to the next line
    }
}
