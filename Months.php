<?php
/**
 * Created by PhpStorm.
 * User: 1615091
 * Date: 28/02/2017
 * Time: 16:37
 */
$array = array();
$goods = "no products";

for ($day = 1; $day < 31; $day ++){
    if (($day % 2) == 0){
        $array[] = "specs";
    }

    if (($day % 3) == 0){
        $array[] = "mugs";
    }

    if (($day % 4) == 0){
        $array[] = "sausage rolls";
    }

    switch(sizeof($array)){
        case 0:
            $goods = "no products";
            break;
        case 1:
            $goods = "$array[0]";
            break;
        case 2:
            $goods = "$array[0] and $array[1]";
            break;
        case 3:
            $goods = "$array[0], $array[1] and $array[2]";
            break;
    }

    print "<p>On day $day of the month $goods are available</p>";
    $array = array();
}