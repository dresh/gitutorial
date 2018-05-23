<?php
function sumOf($num){
    if($num == 0)
        return 0;
    else
        return (($num % 10) + sumOf($num / 10));
}
$n = 12345;
$res = sumOf($n);
echo "Sum of digits of $n is ".$res;
?>
