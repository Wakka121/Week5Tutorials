<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>This is always displayed</p>
<?php
    $myage = 17;
    if($myage>=21){
        echo "<p>You can buy sausage rolls, mugs and specs</p>";
    }
    elseif($myage<21 and $myage>=18){
        echo "<p>You can buy mugs and specs</p>";
    }
    elseif($myage<18 and $myage>=16){
        echo "<p>You can buy specs</p>";
    }
    else {
        echo "<p>You cannot buy anything</p>";
    }
?>
</body>
</html>