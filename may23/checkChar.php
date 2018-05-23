<?php
  function checkLower($str){
  	$n = strlen($str);
  	for($i = 0; $i < $n; $i++){
  		if(ord($str[$i]) >= ord("A") && ord($str[$i]) <= ord("Z"))
  			return "$str may contains upper case also";
  		else
  			return "$str contains only lower case";
  	}
  }

  echo checkLower("mysuru") . "<br>";
  echo checkLower("Mangalore"). "<br>";
  echo checkLower("mumbai");
?>
