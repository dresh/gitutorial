<?php
 $file_name = basename($_SERVER['PHP_SELF']);
 $last_mod = filemtime($file_name);
 echo "Last modified on ". date("l, dS, F, Y, h:ia", $last_mod);
 $lines = count(file($file_name));
 echo "<br>$file_name contains $lines lines of code"
?>