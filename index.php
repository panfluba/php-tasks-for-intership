<?php
function hasSpaces($str){
    return (str_contains($str, " "));
}

echo hasSpaces("hello");// ➞ false
echo hasSpaces("hello, world");// ➞ true
echo hasSpaces(" ");// ➞ true
echo hasSpaces("");// ➞ false
echo hasSpaces(",./!@#");// ➞ false
