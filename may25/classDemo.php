<?php
 /**
  * 
  */
 class Demo
 {
 	
 	function __construct()
 	{
 		# code...
 		echo "Inside constructor";
 	}
 	function a(){
 		echo "Inside function";
 	}
 }
 $class_demo = new Demo;
 echo "<br>";
 $class_demo -> a();
?>