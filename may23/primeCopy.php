<?php
function isPrime($n, $i = 2)
{
    if ($n <= 2)
        return ($n == 2) ? true : false;
    if ($n % $i == 0)
        return false;
    if ($i * $i > $n)
        return true;
    return isPrime($n, $i + 1);
}

$n = 17;
    if (isPrime($n))
        echo "$n is prime number";
    else
        echo "$n is not prime";

?>
