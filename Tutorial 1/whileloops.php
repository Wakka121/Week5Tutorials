<?php
/**
 * Created by PhpStorm.
 * User: Wakka
 * Date: 01/03/2017
 * Time: 13:32
 */
$day = 1;
$inv = array(7,7,7);
$goods = array("specs","mugs","sausage rolls");

while($inv[0]>0 and $inv[1]>0 and $inv[2]>0){
    $todaysGood = rand(0,2);

    print "On day $day of the month $goods[$todaysGood] are available<br>";
    $inv[$todaysGood] = $inv[$todaysGood]-1;
    $day++;
}

print "No more goods are available this month";