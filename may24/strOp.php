<?php
 $city = "Bengaluru"; 
 echo "ASCII value of 1st character $city is ".ord($city); // display ASCII value of 1st character
 $n = 70;
 echo "<br>$n ASCII character is ". chr($n);
 $city1 = "Mysuru";
 echo "<br>$city and $city1 contains ".similar_text($city, $city1, $perc). " simmiliar characters and that's $perc %";
 $word = "A BC DEF";
 echo "<br>". str_word_count($word);
?>