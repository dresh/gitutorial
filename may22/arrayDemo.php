<?php
 $x = array("1"=>"ABC", "2"=>"EFG", "3"=>"CDE", "4"=>"GHI", "5"=>"IJK");
 asort($x);
 echo "Array listed on ascending order of values <br>";
 foreach ($x as $arr_key => $arr_value) {
 	echo "Key: ".$arr_key." and value: ".$arr_value."<br>";
 }
 $x = array("1"=>"ABC", "2"=>"EFG", "3"=>"CDE", "4"=>"GHI", "5"=>"IJK");
ksort($x);
echo "<br>Array listed on ascending order of keys <br>";
foreach ($x as $arr_key => $arr_value) {
 	echo "Key: ".$arr_key." and value: ".$arr_value."<br>";
 }
 $x = array("1"=>"ABC", "2"=>"EFG", "3"=>"CDE", "4"=>"GHI", "5"=>"IJK");
 arsort($x);
 echo "<br>Array listed on descending order of values <br>";
 foreach ($x as $arr_key => $arr_value) {
 	echo "Key: ".$arr_key." and value: ".$arr_value."<br>";
 }
 $x = array("1"=>"ABC", "2"=>"EFG", "3"=>"CDE", "4"=>"GHI", "5"=>"IJK");
 krsort($x);
echo "<br>Array listed on descending order of keys <br>";
foreach ($x as $arr_key => $arr_value) {
 	echo "Key: ".$arr_key." and value: ".$arr_value."<br>";
 }
?>