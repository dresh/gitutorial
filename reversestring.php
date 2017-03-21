<?php
function stringRev($str){
    $str_len = $strlen($str);
    $rev_str = "";
    for($i=$str_len;$i>-1;$i--){
        $rev_str.= $str{$i};
    }
    return $rev_str;
}
$str ="my string";
echo stringRev($str);
?>