<!DOCTYPE html>
<html>
<head>
    <title>New Superhero</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]==="GET"){
    <form action="superheroDisplay.php" method="post">
        <label>Forename</label><input type="text" name="forename"><br>
        <label>Surname</label><input type="text" name="surname"><br>
        <label>Gender</label><input type="text" name="gender"><br>
        <label>Power</label><input type="text" name="power">
        <input type="submit" value="Submit">
    </form>
}
?>
</body>
</html>