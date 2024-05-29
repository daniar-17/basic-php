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
	echo json_encode($arrGanjil)."\n";
	echo "=======================\n";

	echo "Bil Prima : ";
	for ($a=1; $a <= 10; $a++) { 
		$x = 0;
		for ($b=1; $b <= 10; $b++) { 
			if ($a % $b == 0) {
				$x++;	
			};
		}
		if ($x == 2) {
			echo "$a, ";
		};
	}
?>