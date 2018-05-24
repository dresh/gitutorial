<!DOCTYPE html>
<html>
<head>
	<title>File operations</title>
    <?php
      if(isset($_POST['submit'])){
      	$str = $_POST['str'];
      	$str = htmlspecialchars($str);
      	$filename = "filewrite.txt";
      	if(file_exists($filename))
      		echo "File Exist";
      	$handle = fopen($filename, "a+")or die("<br> can't open file");
      	fwrite($handle, $str);
      	fclose($handle);
      	echo "Content added to the file";

      }
    ?>
</head>
<body>
 <form method="post">
 	<input type="text" name="str" placeholder="Write content to add in to the file"><br>
 	<input type="submit" name="submit" value="Add to fle">
 </form>
</body>
</html>	