<?php
 require 'config.php';
 $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
 	$db = "drupaldb";
 	$db_found = mysqli_select_db($db_handle, $db);
    if($db_found){
        $sql = "SELECT * FROM registration_data";
        $q_res = mysqli_query($db_handle, $sql);
        echo "EID ENAME MID <br>";
        while ($field = mysqli_fetch_assoc($q_res)) {
        	echo $field['first_name'] ." ";
        	echo $field['second_name']." ";
        	echo $field['email']." ";
        	echo $field['contact_num']." ";
        	echo $field['password']" ";
        	echo "<br>";
        }
    }
    else
    	echo "Database doesnot exists";
 mysqli_close($db_handle);
 ?>


