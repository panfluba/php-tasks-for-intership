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

echo solutions(1, 0, -1);
echo solutions(1, 0, 0);
echo solutions(1, 0, 1);
