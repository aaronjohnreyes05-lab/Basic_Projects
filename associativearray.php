<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="associativearray.php" method="post">

<label>Country:</label>
<input type="text" name="country">
<input type="submit" value="go">

</form>

</body>
</html>

<?php

$capitals = array("Usa" => "Washington",
                 "India" => "Dehli",
                 "Japan" => "Kyoto",
                 "Korea" => "Seoul");

        $capital = $capitals[$_POST["country"]];

        echo $capital;
                 

?>