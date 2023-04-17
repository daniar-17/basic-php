<?php
$jam = 0;
$menit = 0;
$detik = 0;

echo "Masukan Waktu Awal : \n";
$awalJam = (int)readline('Jam : ');
$awalMenit = (int)readline('Menit : ');
$awalDetik = (int)readline('Detik : ');
$awalAll = 0;
echo "\n";

echo "Masukan Waktu Akhir : \n";
$akhirJam = (int)readline('Jam : ');
$akhirMenit = (int)readline('Menit : ');
$akhirDetik = (int)readline('Detik : ');
$akhirAll = 0;
$keseluruhan = 0;
echo "\n";

$awalAll = $awalDetik + ($awalMenit * 60) + ($awalJam * (60 * 60));
echo "Detik awal semua : " . $awalAll . "\n";

$akhirAll = $akhirDetik + ($akhirMenit * 60) + ($akhirJam * (60 * 60));
echo "Detik akhir semua : " . $akhirAll . "\n";

$keseluruhan = $akhirAll - $awalAll;
echo "Detik semua : " . $keseluruhan . "\n";

$jam = floor($keseluruhan / 3600);
$menit = floor(($keseluruhan / 60) % 60);
$detik = $keseluruhan % 60;
echo "\n";

echo "Durasi Waktu : \n";
echo "Jam : " . $jam . "\n";
echo "Menit : " . $menit . "\n";
echo "Detik : " . $detik . "\n";
