<?php
//Changing the color of 1st letter of a word
 $name = "Chethan H";
 $name = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $name);
 echo $name;
?>	