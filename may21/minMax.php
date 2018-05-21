<?php
 $numarr = array(20, 9, 10, 7, 67, 145, 89, 5, 765, 8);
 function min1($arr){
 	$min = $arr[0];
 	for($i=1; $i<sizeof($arr); $i++)
 		if($min > $arr[$i])
 			$min = $arr[$i];
 	return $min;
 }
 function max1($arr){
 	$max = $arr[0];
 	for($i=1; $i<sizeof($arr); $i++)
 		if($max < $arr[$i])
 			$max = $arr[$i];
    return $max;
 }

 echo "Smallest number is ". min1($numarr) . "<br>";
 echo "Largest number is ". max1($numarr) . "<br>";
?>