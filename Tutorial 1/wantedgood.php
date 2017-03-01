<?php
/**
 * Created by PhpStorm.
 * User: 1615091
 * Date: 28/02/2017
 * Time: 16:09
 */
$wantedgood = "specs";

switch($wantedgood){
    case "mugs":
        echo "You have to be 18 to buy mugs";
        break;
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "sausage rolls":
        echo "You have to be 21 to buy sausage rolls";
        break;
    default:
        echo "Input your wanted good to see the age restriction";
}
?>