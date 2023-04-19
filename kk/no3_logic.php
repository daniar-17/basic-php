<?php 
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;
    $n = 7;

    //tampilkan 1 angka awal
    echo "$angka_sekarang";

    for ($i = 0; $i < $n - 1; $i++) {
        // hitung angka yang akan ditampilkan
        $output = $angka_sekarang + $angka_sebelumnya;
        echo " $output";

        //siapkan angka untuk perhitungan berikutnya
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
    }