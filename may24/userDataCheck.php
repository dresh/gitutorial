<!DOCTYPE html>
<html>
<head>
	<title>security</title>
	<?php
      if($_POST['submit'])
	    $str = $_POST['uname'];
      $str = htmlspecialchars($str);
      echo "$str";
?>
</head>
<body>
<form method ='post'> 
      <input type='text' name='uname' placeholder='Write a string here'><br>
	      <input type='submit' value='Submit' name='submit'> 
</form>
</body>
</html>



