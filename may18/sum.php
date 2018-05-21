<?php
$sum = 0;
function sum($a, $b){
	$sum = $a + $b;
	return $sum;
}
function pro($a, $b){
	$res = $a * $b;
	return $res;
}
$num1 = 3;
$num2 = 5;
print("sum is ".sum($num1, $num2)); 
print("Product is ".pro($num1, $num2))

?>