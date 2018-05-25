<?php
require 'config.php';
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo "Server Found <br>";
$db = "drupaldb";
//$db_connect = mysqli_select_db($db_handle, $db);
$db_found = mysqli_select_db( $db_handle, $db );
if($db_found)
	echo "Data base found";
else
	echo "Data base not found";
mysqli_close($db_handle);
?>