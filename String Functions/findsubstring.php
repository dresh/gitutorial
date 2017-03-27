<?php

function mysubstr( string $str, int $start , int $length){
    if($start<=$length){
        echo $str[$start];
    }
    mysubstr($str,$start+1,$length);
}
mysubstr("hello",1,3);




