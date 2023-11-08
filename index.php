<?php
function calculateScores($str){
    $countA = 0;
    $countB = 0;
    $countC = 0;
    $arr = str_split($str);
    foreach($arr as $value){
        if($value == "A"){
            $countA++;
        }
        elseif($value == "B"){
            $countB++;
        }
        elseif($value == "C"){
            $countC++;
        }
    }
    var_dump($countA . $countB . $countC);
}
calculateScores("A");
//[1, 0, 0]
calculateScores("ABC");
//➞ [1, 1, 1]
calculateScores("ABCBACC");
//➞ [2, 2, 3]
