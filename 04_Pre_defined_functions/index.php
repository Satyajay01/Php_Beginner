<?php
/*
    ##Pre Defined Functions
    #Strint function
    #Array Functions
    #Math function
    #Date & Time Functions
*/

// String function
echo "String function-----------------<br><br>";

$name = "Satyajay dibya";

echo "Length: " . strlen($name) . "<br>"; // Output: Length: 13
echo "Uppercase: ".strtoupper($name)."<br>"; // SATYAJAY
echo "Lowercase: ".strtolower($name)."<br>"; // satyajay
echo "Substring: ".substr($name, 0,5)."<br>"; // Satya
echo "Reverse: ".strrev($name)."<br>"; // yajyats
echo "Replace: ".str_replace("Satyajay", "Satya", $name)."<br>"; //Satya dibya
echo "Trimmed: " . trim($name) . "<br><br>"; // Output: Hello PHP!

// Array Functions
echo "Array Functions-----------------<br><br>";

$fruits = ["Apple", "Banana", "Cherry"];
echo "Total Elements: ".count($fruits); // Output: 3

array_push($fruits, "Mango");
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry

$Removedfruits = array_pop($fruits);
echo "<br>".($Removedfruits);
echo "<br> <br>";
// -----------------------------------------

$moreFruits = ["Orange", "Grapes"];
$allFruits = array_merge($fruits, $moreFruits);
print_r($allFruits); // Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange [4] => Grapes )
echo "<br> <br>";


// Mathematical Functions
echo "Mathematical Functions---------------------<br>";
echo "Random: ".rand(10,100)."<br>"; // Output: Random number between 10 and 100
echo "Absolute: ".abs(-5)."<br>"; // Output: 5
echo "Ceiling: ".ceil(4.3)."<br>"; // Output: 5
echo "Floor: ".floor(4.9)."<br><br>"; // Output: 4


// Date & Time Functions
echo "Date & Time Functions----------------<br>";
echo "Current Date: ".date("Y-m-d")."<br>"; // Output: Current Date
echo "Timestamp: " . time() . "<br>";


$timestamp = time();
echo "Current Date & Time: " . date("Y-m-d H:i:s", $timestamp); // for date and times





?>