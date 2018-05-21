<?php
$a = 13;
$s = 0;
for($i=2; $i<20/2; $i++){
	if($a%$i == 0)
		$s++;
}
if($s != 0)
 echo "$a is not a prime number";
else
 echo "$a is a prime number";  
?>
