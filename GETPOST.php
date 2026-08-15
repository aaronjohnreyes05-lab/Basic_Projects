<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="GET&POST.php" method="post">
<label>Username Or Gmail:</label>
<input type="text" name="username"><br>

<label>Password:</label>
<input type="password" name="password">
<input type="submit" value="Login"><br>
</form>


</body>
</html>






<?php
/*$_GET, $_POST = -special variables use to collect data from an HTML form
                  -data is sent to the file in the action atttribute of <form>
                  -<form action="some_file.php" method="get">*/

$Regular = ("Aaron");
$admin = ("admin");
$regularPassword = ("1234");
$adminPassword = ("admin");
$username = $_POST['username']?? '';
$password = $_POST['password']?? '';
$gmail = "aaronjohnreyes@gmail.com";

if (($username === $Regular || $username ===  $gmail)  && $password === $regularPassword) 
    {
   echo "Login Successful";
}

else if(($username === $admin) && $password === $adminPassword) {
    echo "Welcome Admin";
}


else {
    echo "Invalid login";
}

?>