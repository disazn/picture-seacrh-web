<?php
/* $fruits = array("apple","banana","orange");
//echo $fruits [0];
echo $fruits [2];
*/

$colors = array( 'red', 'green', 'blue', 'yellow', 7);
//              sort($colors);        // sort($..); - сортирует информацию с 'А' до 'Я'.   rsort($..); - сортирует с 'Я' до 'А'
//              var_dump($colors);    //var_dump - выводит информацию о переменной.
//            rsort($colors);
//            var_dump($colors);
        uksort($colors);
        var_export($colors);