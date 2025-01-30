<?php

/*
    ##Variable
    a reusable container that hold thre data.
    
    ##Data Types
    string, integer, float, boolean
*/

$name = "Satyajay"; // string
$age = 23; // integer
$height = 5.9; // float
$isMarried = true; // boolean

echo "My name is $name Age $age height $height Married status $isMarried <br>";

echo "Name ".$name;
echo " <br> age ",$age;
echo " <br> Height {$height}";

// type checking
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($isMarried);



?>
