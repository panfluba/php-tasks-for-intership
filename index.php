<?php
function solutions($a, $b, $c){
    if(($b**2 - (4 * $a * $c)) > 0){
        return 2;
    }
    elseif(($b**2 - (4 * $a * $c)) == 0){
        return 1;
    }
    else return 0;
}

function solutions1($a, $b, $c){
// через тернарку (для большей читабельности кода вынесла уравнение в отдельную переменную)
    $exp = $b**2 - (4 * $a * $c);
    return $exp > 0 ? 2 : ($exp == 0 ? 1 : 0);
}

echo solutions(1, 0, -1);
echo solutions(1, 0, 0);
echo solutions(1, 0, 1);

echo solutions1(1, 0, -1);
echo solutions1(1, 0, 0);
echo solutions1(1, 0, 1);