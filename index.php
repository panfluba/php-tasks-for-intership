<?php
function hasSpaces($str){
    if(str_contains($str, " ")){
        return true;
    }
    return false;
}

echo hasSpaces("hello");// ➞ false
echo hasSpaces("hello, world");// ➞ true
echo hasSpaces(" ");// ➞ true
echo hasSpaces("");// ➞ false
echo hasSpaces(",./!@#");// ➞ false
