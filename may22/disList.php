<?php
 $colors = array('Green', 'Red', 'Blue', 'White', 'Black');
 sort($colors);
 echo "Given color list is <br> <ol>";
 foreach ($colors as $color) {
 	echo "<li>$color</li>";
 }
 echo "</ol>";

?>