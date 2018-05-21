<?php
$num = 6;
$fact=1;
$n1 = $num;
while($num>0){
  $fact *= $num;
  $num--;
}
echo "Factorial of $n1 is $fact";
?>