<?php
function power($base, $power){
	if($power == 0) 
		return 1;
	return $base * power($base, $power-1);
}
$num1 = 10;
$num2 = 3;
$result = power($num1, $num2);
echo "$num1 to the power of $num2 is $result";
?>