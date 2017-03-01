<!DOCTYPE html>
<html>
<head>
    <title>New Superhero</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]==="GET"){
    echo "<form action="superheroDisplay.php" method="post">"
    echo "<label>Forename</label><input type="text" name="forename"><br>"
    echo "<label>Surname</label><input type="text" name="surname"><br>"
    echo "<label>Gender</label><input type="text" name="gender"><br>"
    echo "<label>Power</label><input type="text" name="power">"
    echo "<input type="submit" value="Submit">"
    echo "</form>"
}
?>
</body>
</html>