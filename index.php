<?php
function reverse($str){
    if(strlen($str) == 0 || strlen($str) == 1){
        return $str;
    }
    return reverse(substr($str, 1)) . $str[0];
}

echo reverse("hello") . "\n";
echo reverse("world"). "\n";
echo reverse("a"). "\n";
echo reverse(""). "\n";
