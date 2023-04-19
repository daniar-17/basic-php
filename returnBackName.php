<?php 
    // $name = "Daniar";
    $name = (string)readline('Inputkan Nama : ');
    for($i = strlen($name) - 1; $i >= 0; $i--){
        echo $name[$i]."-";
    }
?>