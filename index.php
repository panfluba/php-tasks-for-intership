<?php
function alphabetSoup($str){
    $arr = str_split($str);
    sort($arr);
    return implode(($arr));
}

alphabetSoup("hello");// ➞ "ehllo"
alphabetSoup("edabit");// ➞ "abdeit"
alphabetSoup("hacker");// ➞ "acehkr"
alphabetSoup("geek");// ➞ "eegk"
alphabetSoup("javascript");// ➞ "aacijprstv"
