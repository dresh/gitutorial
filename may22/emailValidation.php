<!DOCTYPE html>
<html>
<head>
	<title>email validation</title>
</head>
<body>
<form method="post">
	<input type="text" name="email" placeholder="Enter Email ID">
	<input type="submit" name="submit" value="Check">
</form>
<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
 	    echo "$email is valid";
 	else
 		echo "<span style='color:red;'>$email</span> is not valid";
}
?>
</body>
</html>