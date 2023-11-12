<?php
function toArray($str){
    return (explode(", ", $str));
}

toArray("арбуз, малина, апельсин");//➞ ["арбуз", "малина", "апельсин"]
toArray("x1, x2, x3, x4, x5");//➞ ["x1", "x2", "x3", "x4", "x5"]
toArray("a, b, c, d");//➞ ["a", "b", "c", "d"]
toArray("");//➞ []