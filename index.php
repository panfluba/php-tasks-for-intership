<?php
function hasSpaces($str) : string{
    if(str_contains($str, " ")){
        return "true\n";
    }
    else return "false\n";
}

echo hasSpaces("hello");// ➞ false
echo hasSpaces("hello, world");// ➞ true
echo hasSpaces(" ");// ➞ true
echo hasSpaces("");// ➞ false
echo hasSpaces(",./!@#");// ➞ false
