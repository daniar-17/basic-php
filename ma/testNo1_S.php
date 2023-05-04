<?php
$input = 6;
$indexR1 = 1;
$indexR2 = 2;
$str_number = "123456789";
for($i=0;$i<$input;$i++){
    $str_number_rpl ="";
    for($j=0;$j<strlen($str_number);$j++)
    {
        if($indexR1 == $j){
            $str_number_rpl .="*";
        }else if($indexR2 == $j){
            $str_number_rpl .="*";
        }else{
            $str_number_rpl .= substr($str_number,$j,1);
        }
    }
    $indexR1++;
    $indexR2++;
    echo $str_number_rpl ."\n";
}
?>