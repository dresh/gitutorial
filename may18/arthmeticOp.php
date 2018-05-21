<?php
$sum = 0;
function sum($a, $b){
	$sum = $a + $b;
	return $sum;
}
function pro($a, $b){
	return ($a * $b);
}
function div($a, $b){
	return (round(($a / $b),2));
}
function diff($a, $b){
     return ($a-$b);	
}

$num1 = 8;
$num2 = 9;

print("Sum is ".sum($num1, $num2));
echo "<br>"; 
print("Difference is ".diff($num1, $num2));
echo "<br>";
print("Product is ".pro($num1, $num2));
echo "<br>";
print("Division of ".$num1. " and " .$num2. " is ".div($num1, $num2));
?>