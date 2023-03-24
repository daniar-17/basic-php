<?php
    $dateNow = date('dmY');
    $lastData = '19032023024';
    $lastDate = substr($lastData, 0, 8);
    $lastNilai = substr($lastData, 8, 3);
    $resultKode = "";
    if($dateNow == $lastDate){
        echo "Tanggal Sama \n";
        $resultKode = dateSame($lastNilai, $dateNow);
        echo $resultKode."\n";
    }else{
        echo "Tanggal Beda \n";
        $resultKode = dateNotSame($dateNow);
        echo $resultKode."\n";
    }

    function dateSame($kode, $dateNow)
    {
    	$addNol = '';
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "00";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "0";
    	}
    	$kodeBaru = $dateNow.$addNol.$incrementKode;
    	return $kodeBaru;
    }

    function dateNotSame($dateNow)
    {
    	$addNol = '001';
    	$kodeBaru = $dateNow.$addNol;
    	return $kodeBaru;
    }

    echo $lastDate." - ".$dateNow." - ".$lastNilai;
?>