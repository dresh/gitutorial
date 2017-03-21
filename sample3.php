<?php

$namelist=array("hi"=>"11","pia"=>"12","ram"=>"13");
print_r(array_change_key_case($namelist,CASE_UPPER));
print_r(array_chunk($namelist,2));
?>