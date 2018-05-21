<?php
function fib($a){
   if($a<=1)
   	return $a;
   return fib($a-1) + fib($a-2);
}

$n=10;
echo $n." fibonacci is ".fib($n);
?>