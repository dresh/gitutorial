<?php

$str ="Hello php";
echo $str;

$str1 ='Single quoted string is php';
$str2 ='We
can store in multiple
lines';
$str3 ='Using "qouted" sring in single qouted';
$str4 ='using \'qoute\' and \\blacklash';

echo "$str1<br/>$str2 <br/>$str3 <br/>$str4";
$str5 =strtolower($str);
echo "<br/>$str5";
$str6 =strtoupper($str);
echo "<br/>$str6";

$str7 =ucfirst($str4);
echo "<br/>$str7";

$str8 =strrev($str);
echo "<br/> $str8";

$str9 =strlen($str);
echo "<br/> $str9";

