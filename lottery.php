<?php
/**
 * Created by PhpStorm.
 * User: Wakka
 * Date: 01/03/2017
 * Time: 14:17
 */
$entrants = array("Alistair White","James Cusiter","Emma Regulski","Kat Regulski","Stuart Cameron","Conor Mclean","Katie Bell","Josh Boa","Blair Cameron","Grant Fraser");
sort($entrants);
$number = rand(0,9);
$winner = strtoupper($entrants[$number]);
print "<p>The winner of the specs is $winner</p>";

unset($entrants[$number]);
sort($entrants);
$number = rand(0,8);
$winner = strtoupper($entrants[$number]);
print "<p>The winner of the mugs is $winner</p>";

unset($entrants[$number]);
sort($entrants);
$number = rand(0,7);
$winner = strtoupper($entrants[$number]);
print "<p>The winner of the sausage rolls is $winner</p>";