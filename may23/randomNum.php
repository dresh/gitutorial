<?php
 $n = range(10, 30);
 shuffle($n);
 echo "Random Numbers between 10 and 30 are <br>";
 foreach ($n as $val) {
 	echo $val. " ";
 }
?>