<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
$str = "madam";
$status = check_palindrome($str);
if($status)
  echo "$str is Palindrome";
else
	echo "$str is not a palindrome";
?>