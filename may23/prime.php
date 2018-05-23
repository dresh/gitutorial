<?php
function isPrime($n, $i = 2)
{
    if ($i == $n / 2 + 1)
        return true;
    if ($n % $i == 0)
        return false;
    return isPrime($n, $i + 1);
}

$n = 7;
    if (!isPrime($n))
        echo "Prime number";
    else
        echo "Not prime";

?>
