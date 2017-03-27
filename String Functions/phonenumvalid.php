<?php

$phonenum ="9898901111";
if(!empty($phonenum)&& is_numeric($phonenum)){
    if(preg_match('/^\d{10}$/',$phonenum)){
        $len = strlen($phonenum);
        if($len == 10){
        $phonenum ='+91'.$phonenum;
        echo "$phonenum is valid";
        }
    }
    else{
        echo "$phonenum is invalid";
    }
}
else{
    echo "provide correct num";
}
