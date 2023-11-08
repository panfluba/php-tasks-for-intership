<?php
function bbqSkewers($arr): void{
    $vegan = 0;
    $nonVegan = 0;
    foreach ($arr as $value){
        if(str_contains($value, "x")){
            $nonVegan++;
        }
        else $vegan++;
    }
    echo "[{$vegan}, {$nonVegan}]\n";
}

bbqSkewers([
        "--oooo-ooo--",
        "--xx--x--xx--",
        "--o---o--oo--",
        "--xx--x--ox--",
        "--xx--x--ox--"
    ]); // ➞ [2, 3]

bbqSkewers([
    "--oooo-ooo--",
    "--xxxxxxxx--",
    "--o---",
    "-o-----o---x--",
    "--o---o-----"
]); // ➞ [3, 2]
