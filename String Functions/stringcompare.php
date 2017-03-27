<?php

/** Function to compare string */
function string_comp($str1,$str2){
    if('$str1'=='$str2'){
        return true;
    }
    else{
        return false;
    }
}
$str1 ="Hello";
$str2 ="Hello";
if(string_comp($str1,$str2)){
    echo "True";
}
   else{
       echo "False";
   }


$str3 ="Hello";
$str4 ="HELLO";
if($str3 == $str4){ /**case sensitve*/
    echo "True";
}
   else{
       echo "False";
   }
