<?php 

function printLove() {
    echo "\n \n";
    echo "Hai hai ibu perikuhh.. \n \n";
    $love = [
        "*  *****  *****   *          *",
        "*  *****  *****   *          *",
        "*   **********    *          *",
        "*    ********     *          *",
        "*     ******      *          *",
        "*      ****       *          *",
        "*       **        ************",
    ];

    foreach ($love as $line) {
        echo $line . "\n";
    }

    echo "\n";
    echo "Denayu Dwiningsih is my fav person aku minta maaf yahh. \n";
    echo "\n \n";
}

// Panggil fungsi untuk mencetak pola "LOVE"
printLove();

?>