 <!DOCTYPE html>
<html>
<head>
	<title>leap year</title>
</head>
<body>
<form method="post">
	<input type="text" name="year" placeholder="Enter year">
	<input type="submit" name="submit" value="Submit">
</form>
<?php
 if(isset($_POST['submit'])){
 	$year = $_POST['year'];
 	if(!is_numeric($year)){
 		echo "Enter a valid year";
 		return;
 	}
 	if(($year%4 == 0) and ($year%100 != 0) or ($year%400 == 0))
 		echo "$year is leap year";
 	else
 		echo "$year is not a leap year";
 }
?>
</body>
</html>