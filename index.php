<?php
/* Что первое пришло на ум, что для решения можно использовать линейный поиск(работает с отсортированным и неотсортированным списком),
бинарный поиск(для нашего случая неэффективно, т.к малое количество элементов в массиве), хеш-таблицы, а также встроенные функции
по типу array_search */

function findBob(array $findBobArray){
    //через линейный поиск
    foreach($findBobArray as $key => $value){
        if ($value == "Bob"){
            return $key;
        }
    }
    return -1;
}

function findBob2(array $findBobArray){
    //вариант через встроеннные функции
    if (in_array("Bob", $findBobArray)) {
        return array_search("Bob", $findBobArray);
    }
    else return -1;
}

echo "\nРешение через линейный поиск: ";
echo findBob(["Jimmy", "Layla", "Bob"]);
echo findBob(["Bob", "Layla", "Kaitlyn", "Patricia"]);
echo findBob(["Jimmy", "Layla", "James"]);

echo "\nРешение через встроенные функции: ";
echo findBob2(["Jimmy", "Layla", "Bob"]);
echo findBob2(["Bob", "Layla", "Kaitlyn", "Patricia"]);
echo findBob2(["Jimmy", "Layla", "James"]);