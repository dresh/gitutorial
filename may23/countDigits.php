<?php
function countOfdigits($num1){
  if($num1 == 0)
      return 0;
  else
      return (1 + countOfdigits($num1 / 10));
}
$num = 1;
$res = countOfdigits($num);
echo $num. " contains ".$res. " digits"
?>