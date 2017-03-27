<?php


function mystrrepat( string $str ,$start, int $length){
    if($start<=$length){
        echo $str;
    }
   mystrrepat($str,$start+1,$length);
}
mystrrepat("hello",1,3);


function stringrepeat($string,$times){
    $s1=str_split($string);
    foreach($s2 as $s1){
        $output.=str_repeat($s2,$times);
    }
    return $output;
}
$str="abc";
echo stingrepeat($str,3);


