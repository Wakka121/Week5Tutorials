<?php
/**
 * Created by PhpStorm.
 * User: 1615091
 * Date: 28/02/2017
 * Time: 16:16
 */
$provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");

foreach($provisionedActivities as $x) {
    echo $x;
    echo " ";
}

$provisionedActivities[1] = "Hugs";
unset($provisionedActivities[2]);

foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}