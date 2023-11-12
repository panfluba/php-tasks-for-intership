<?php
function lessThanOrEqualToZero($num){
    if($num <= 0){
        return true;
    }
    else return false;
}

echo lessThanOrEqualToZero(5);// ➞ false
echo lessThanOrEqualToZero(0);// ➞ true
echo lessThanOrEqualToZero(-2);// ➞ true