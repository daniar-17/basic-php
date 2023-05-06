<?php 
function doSomething(&$arg) { 
     $return = $arg; 
     $arg += 1; 
     Return $return; 
} 

$a = 3; 
$b = doSomething($a); 
echo $a . "," . $b;