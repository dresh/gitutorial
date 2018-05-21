<?php
 $num = 407;
 $sum = 0;
 $rem = 0;
 $temp = $num;
 while($num>0){
    $rem = $num%10;
    $sum = $sum + ($rem * $rem * $rem);
    $num/=10;
 }
 if($sum == $temp)
 	echo "$temp is Armstrong number";
 else
 	echo "$temp is not armstrong number"
?>