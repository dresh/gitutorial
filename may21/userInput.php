<!DOCTYPE html>
<html>
<head>
	<title>User Name</title>
</head>
<body>
  <form method="post">
  	<input type="text" name="uname" placeholder="Enter your name">
  	<input type="submit" name="submit" value="Submit">
  </form>
  <?php
    $name = $_POST['uname'];
    echo "Hi, $name welcome to this page..!";
  ?>
</body>
</html>