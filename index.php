<?php
function removeSmallest($arr){
    if(empty($arr)){
        return $arr;
    }
    $smallest = min($arr);
    foreach ($arr as $key => $value){
        if($value == $smallest){
            unset($arr[$key]);
            break;
        }
    }
    return $arr;
}

removeSmallest([1, 2, 3, 4, 5]);
removeSmallest([5, 3, 2, 1, 4]);
removeSmallest([2, 2, 1, 2, 1]);
removeSmallest([]);
