<?php
function alphabetSoup($str){
    $arr = str_split($str);
    sort($arr);
    foreach ($arr as $value){
        echo $value;
    }
}

alphabetSoup("hello");// ➞ "ehllo"
alphabetSoup("edabit");// ➞ "abdeit"
alphabetSoup("hacker");// ➞ "acehkr"
alphabetSoup("geek");// ➞ "eegk"
alphabetSoup("javascript");// ➞ "aacijprstv"
