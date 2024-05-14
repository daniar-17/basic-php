<?php
  $ganjil = "";
  $genap = "";
  $arrGanjil = array();
	for ($i = 0; $i < 10; $i++){
	  if ($i % 2 == 0){
	    $genap = "$genap $i";
	  }else{
	    $ganjil = "$ganjil $i";
	    array_push($arrGanjil, $i);
	  }
	}
	echo "Ganjil : ".$ganjil."\n";
	echo "Genap : ".$genap."\n";
	echo json_encode($arrGanjil);
?>