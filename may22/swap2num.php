<?php
$a = 120;
$b = 500;
function swap($x, $y){
	$x=$x+$y;
	$y=$x-$y;
	$x=$x-$y;
	echo "After swap 1st num is $x and 2nd num is $y";
}
echo "Before swap 1st num is $a and 2nd num is $b <br>";
swap($a, $b);
?>