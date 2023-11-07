<?php
function automorphic($int) : bool{
    return str_ends_with(strval($int*$int), $int);
}

echo automorphic(1). " - 1\n";
echo automorphic(3) . " - 3\n";
// 3^2 = 9
echo automorphic(6). " - 6\n";
// 6^2 = 36 (ends with 6)
echo automorphic(95). " - 95\n";
// 95^2 = 9025 (does not end with 95)
