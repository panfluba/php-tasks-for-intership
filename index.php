<?php
function hurdleJump($arr, $height){
    if(empty($arr)){
        return true;
    }
    if(max($arr) > $height){
        return false;
    }
    return true;
}

hurdleJump([1, 2, 3, 4, 5], 5); // ➞ true
hurdleJump([5, 5, 3, 4, 5], 3); // ➞ false
hurdleJump([5, 4, 5, 6], 10); // ➞ true
hurdleJump([1, 2, 1], 1); // ➞ false
hurdleJump([], 0); // ➞ true
