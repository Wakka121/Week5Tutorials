<?php
/**
 * Created by PhpStorm.
 * User: Wakka
 * Date: 01/03/2017
 * Time: 14:29
 */
function wanted($name,$specs,$mugs,$sausageRolls){
    print "Wanted: $name<br>";
    print "Known to be in the possession of the following items:<br>";
    print "Specs x $specs<br>";
    print "Mugs x $mugs<br>";
    print "Sausage Rolls x $sausageRolls<br>";
    $award = 10 * (($specs*$mugs*$sausageRolls)*($specs*$mugs*$sausageRolls))/2;
    print "Award for capture: £$award<br>";
}

wanted("James Cusiter",7,8,4);
wanted("Ali White",3,3,3);
wanted("CJ Mclean",6,3,8);