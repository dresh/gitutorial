<?php
function search($n, $arr){
	$flag = 0;
	$arrSize = sizeof($arr);
	for($i=0; $i<=$arrSize; $i++)
		if($n == $arr[$i]){
			$flag = 1;
			break;
		}
	if($flag == 1)
		echo "$n found at position ". ++$i;
	else
		echo "$n is not found in the list";
}

$arr = array(23, 9, 15, 67, 89, 3, 10, 5);
search(10, $arr);
?>