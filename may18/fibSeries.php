<?php
 $num = 10;
 $a = 0;
 $b = 1;
 $c = 0;
 
 for($i = 1	; $i <= $num; $i++){
 	$c = $a + $b;
 	$a = $b;
 	$b = $c;
 	echo $b." ";
 }

?>