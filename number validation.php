<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="number validation.php" method="post">
<label></label>
<input type="text" name="input"><br>
<input type="submit" value="enter">
</body>
</html>
</form>

<?php

$input = $S_POST = ['input'];

if (!is_numeric($input)) {
    echo "Invalid Input";
}
if ($input >= 18) {
    echo "Allowed";
}
else {
    echo "Not allowed";
}
?>  