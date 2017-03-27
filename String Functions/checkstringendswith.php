<?php

/** Function to check string ends with */
function stringEnds($str1,$str2){
    foreach((array)$str2 as $s){
        if((string)$s===substr($str1,-strlen($s))){
            return true;
        }
      }
    return false;
}
$string ="Php handles all functions php";
if(stringEnds($string,"php")){
    echo "True";
}
else{
    echo"false";
}


