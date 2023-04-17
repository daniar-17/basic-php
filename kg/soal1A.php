<?php
$nilai = (int)readline('Awalan : ');
$arrPrimo = array();
$arrFibo = array();
$arrDetik = array();
$angka_sebelumnya = 0;
$angka_sekarang = 1;

$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

//Detik
echo "Detik : ";
for ($detik = 1; $detik <= $nilai; $detik++) {
    echo $detik . ", ";
}
echo "\n";

//Bilangan Prima
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

$primes = generatePrimes($nilai); // menghasilkan bilangan prima
$arrPrimo = $primes;

for ($z = 0; $z < count($arrPrimo); $z++) {
    echo $arrPrimo[$z] . ", ";
}
echo "\n";

//Bilangan Fibonacci
echo "Fibonacci : ";
for ($f = 0; $f < $nilai; $f++) {
    // hitung angka yang akan ditampilkan
    $output = $angka_sekarang + $angka_sebelumnya;
    echo "$output, ";

    //siapkan angka untuk perhitungan berikutnya
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
}
