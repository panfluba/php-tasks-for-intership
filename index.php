<!--Данную таску можно выполнить либо посимвольным сравнением через двойной цикл + счетчик совпадений символов, либо же встроенной функцией array_diff-->
<?php
function letterCheck($arr){
    //создаю 2 массива символов каждой строки
    $str = str_split(strtolower($arr[0]));
    $check = str_split(strtolower($arr[1]));

    // проверка на то, что массив расхождений пустой
    if (count(array_diff($str, $check)) == 0){
        return 'false';
    }
    else return 'true';
}
//    var_dump(array_diff($str, $check));

echo letterCheck(["trances", "nectar"]);
echo letterCheck(["compadres", "DRAPES"]);
echo letterCheck(["parses", "parsecs"]);
