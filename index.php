<?php
function lessThanOrEqualToZero($num){
    if($num <= 0){
        return "true\n";
    }
    else return "false\n";
}

echo lessThanOrEqualToZero(5);// ➞ false
echo lessThanOrEqualToZero(0);// ➞ true
echo lessThanOrEqualToZero(-2);// ➞ true