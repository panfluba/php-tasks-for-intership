<?php
function getAbsSum($arr){
    foreach ($arr as $key => $value) {
        if($value < 0){
            $arr[$key] = $value * (-1);
        }
    }
    var_dump(array_sum($arr));
}

getAbsSum([2, -1, 4, 8, 10]); // ➞ 25
getAbsSum([-3, -4, -10, -2, -3]); // ➞ 22
getAbsSum([2, 4, 6, 8, 10]); // ➞ 30
getAbsSum([-1]); // ➞ 1