<?php
function giveMeSomething($a){
    return "something {$a}\n" ; // or concat - return "something " . $a;
}

echo giveMeSomething("is better than nothing");// ➞ "something is better than nothing"
echo giveMeSomething("Bob Jane");// ➞ "something Bob Jane"
echo giveMeSomething("something");// ➞ "something something"