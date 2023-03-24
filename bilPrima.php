<?php

$arrPrimo = array();
$angka = 15;
$hasil = true;
for ($i = 2; $i <= $angka / 2; $i++) {
    if ($angka % $i == 0) {
        $hasil = false;
    }
}
echo $hasil ? $angka . ' Termasuk bilangan prima' : $angka . ' Bukan bilangan prima';

// Bilangan Prima Dari 1 - 100
echo "\n\n";
echo "Bilangan Prima 1 - 100 \n";
for ($i = 1; $i <= 100; $i++) {
    $a = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $a++;
        }
    }
    if ($a == 2) {
        echo $i . ", ";
    }
}
echo "\n";

//Bilangan Prima Jika Ingin Menampilakn 4 Biangan
echo "Prima Pangkat : ";
function isPrime($number)
{
    if ($number == 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function generatePrimes($count)
{
    $primes = array();
    $number = 2;
    while (count($primes) < $count) {
        if (isPrime($number)) {
            $primes[] = ($number * $number);
        }
        $number++;
    }
    return $primes;
}

$primes = generatePrimes(5); // menghasilkan bilangan prima
$arrPrimo = $primes;

for ($z = 0; $z < count($arrPrimo); $z++) {
    echo $arrPrimo[$z] . ", ";
}
echo "\n";
