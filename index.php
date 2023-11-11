<?php
function removeSmallest($arr){
    if(empty($arr)){
        return "Array is empty";
    }
    $smallest = min($arr);
    foreach ($arr as $key => $value){
        if($value == $smallest){
            unset($arr[$key]);
            break;
        }
    }
    return "[". implode(',', $arr) . "]" . "\n";
}

echo removeSmallest([1, 2, 3, 4, 5]);
echo removeSmallest([5, 3, 2, 1, 4]);
echo removeSmallest([2, 2, 1, 2, 1]);
echo removeSmallest([]);
