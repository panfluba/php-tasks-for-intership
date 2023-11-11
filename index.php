<?php
function automorphic($int) : bool{
    return str_ends_with($int*$int, $int);
}

function automorphic2($int) : bool{
    return $int * $int % 10 * strlen($int) == $int;
}

echo automorphic(1). " - 1\n";
echo automorphic(3) . " - 3\n";
// 3^2 = 9
echo automorphic(6). " - 6\n";
// 6^2 = 36 (ends with 6)
echo automorphic(95). " - 95\n";
// 95^2 = 9025 (does not end with 95)

echo automorphic2(1). " - 1\n";
echo automorphic2(3) . " - 3\n";
echo automorphic2(6). " - 6\n";
echo automorphic2(95). " - 95\n";