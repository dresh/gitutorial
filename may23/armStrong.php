<?php
 function arm($num){
    if($num == 0)
    	return 0;
    return (($num % 10) * ($num % 10) * ($num % 10)) + arm($num / 10);
 }
$num = 370;
$res = arm($num);
if($num == $res)
	echo "$num is armstrong number";
else
	echo "$num is not armstrong number";
?>