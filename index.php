<?php
function lessThanOrEqualToZero($num){
    return $num <= 0;
}

echo lessThanOrEqualToZero(5);// ➞ false
echo lessThanOrEqualToZero(0);// ➞ true
echo lessThanOrEqualToZero(-2);// ➞ true
