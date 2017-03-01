<!DOCTYPE html>
<html>
<head>
    <title>New Superhero</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]==="GET"){
    include "superheroCreator.html";
}
elseif ($_SERVER["REQUEST_METHOD"]==="POST"){
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $power = $_POST["power"];

    echo "Name: " . $forename . " " . $surname . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Power: " . $power . "<br>";
}

?>
</body>
</html>