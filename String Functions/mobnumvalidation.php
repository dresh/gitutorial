<?php

function mobilenumvalid($num){
    if(is_numeric($num)){
        return true;
    }
       else{
           return false;
           echo "num is not valid";
       }
       $len = strlen($num);
       if($len == 11){
           if($num[0] == '0'){
               return "+91".substr($num,1);
           }
           else{
               return $num;
           }
       }
           elseif($len== 10){
             
               return "+91".$num;
           }
           
       
           else{
               return false;
           }
}     
               
$num =8787876533;
       mobilenumvalid($num);
//$pattern = '/^(((\+|00){1}91(\s|\-){0,1})?([0-9]{0,6}(\s|\-){0,1})?)?([0-9]{8,10})$/';
if(preg_match('/^(((\+|00){1}91(\s|\-){0,1})?([0-9]{0,6}(\s|\-){0,1})?)?([0-9]{8,10})$/',$num)){
    echo "valid mobnum";
}
   else{
       echo "not valid";
   }


