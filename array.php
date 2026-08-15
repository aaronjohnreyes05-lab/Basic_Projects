<?php
//array = "variable" which can hold more than one value at a time

$foods = array("apple", "banana", "coconut", "grapes");

//changing value
//$foods[0] = "pineapple";  
//adding value on last value
//array_push($foods, "kiwi");

$array_pop($foods);

//to display all the value
foreach($foods as $food){
    echo $food . "<br>";
}

?>