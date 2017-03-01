<?php
/**
 * Created by PhpStorm.
 * User: Wakka
 * Date: 01/03/2017
 * Time: 15:05
 */
$forename = $_POST["forename"];
$surname = $_POST["surname"];
$gender = $_POST["gender"];
$power = $_POST["power"];

echo "Name: " . $forename . " " . $surname . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Power: " . $power . "<br>";