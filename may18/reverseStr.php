<?php
  $restr = "";
  function reverse($str){
  	for($i=strlen($str)-1; $i>=0; $i--){
  		$restr.=$str[$i];
  	}
  	return $restr;
  }

  $strEx = "smart commerce";
  echo (reverse($strEx));
?>