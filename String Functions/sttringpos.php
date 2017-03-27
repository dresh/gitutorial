<?php


function string_pos($str1,$str2){
    if(strlen($str1)>strlen($str2)){
        $finds=array();
        while($find = strpos($str1,$str2)){
            array_push( $finds, $find);
                 $finds=substr($str2,0, $find);
        }
     }
              return $finds;
 }
              
  $str1="how are u?";
  $str2 ="are";
              echo string_pos($str1,$str2);
?>


