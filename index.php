<?php
function hurdleJump($arr, $height){

    if(empty($arr)){
        return "true";
    }

    if(max($arr) > $height){
        return "false";
    }
    else return 'true';
}

echo hurdleJump([1, 2, 3, 4, 5], 5); // ➞ true
echo hurdleJump([5, 5, 3, 4, 5], 3); // ➞ false
echo hurdleJump([5, 4, 5, 6], 10); // ➞ true
echo hurdleJump([1, 2, 1], 1); // ➞ false
echo hurdleJump([], 0); // ➞ true