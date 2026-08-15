<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="prac.php" method="post">

<label>grades:</label>
<input type="text" name="grade"><br>
<input type="submit" value="enter">



</form>

</body>
</html>

<?php

$grade = "A";
$grade = $_POST ["grade"] ;

switch($grade) {
     case "A":
        echo "You did great";
        break;
}
switch($grade) {
     case "B":
        echo "You did well";
        break;
}


?>