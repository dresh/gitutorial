<?php
$ip_add = 0;
 if(!empty($_SERVER['HTTP_CLIENT_IP'])){
 	$ip_add = $_SERVER['HTTP_CLIENT_IP'];
 }
 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 	$ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'];
 }
 else 
 	$ip_add = $_SERVER['REMOTE_ADDR'];
 echo "IP Address is : $ip_add";

 // Browser info
 echo "<br><br>Your User agent is : ". $_SERVER[HTTP_USER_AGENT];

 //file name
 $filename = basename($_SERVER['PHP_SELF']);
echo "<br><br>Current file name is " . $filename ;

//http or https.?
if(!empty(_SERVER['HTTPS']))
	echo "<br><br> https is enabled";
else
	echo "<br><br> http is enabled";

//URL 
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "<br><br> URL: $url";

//Current user
echo "<br><br>Current User is " .get_current_user();
?>