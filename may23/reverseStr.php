<?php
function rev($str){
  $n = strlen($str);
  if($n == 1)
  	 return $str;
  else{
  	$n--;
    return rev(substr($str, 1, $n)) . substr($str, 0, 1) ;
  }
}

$str = "Bengaluru";
echo rev($str);
?>