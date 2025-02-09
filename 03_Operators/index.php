<?php 
## ----------------Operators-----------------
// Arithmetic Operators
echo "Arithmetic Operators---------- <br>";

$x = 10;
$y = 5;
$sum = $x + $y;
$subtraction = $x - $y;
$multiply = $x * $y;
$quotient = $x / $y;
$remainder = $x % $y;
$power = $x ** $y;


echo "Sum: ",$sum, "<br>";
echo "subtraction: ",$subtraction,"<br>";
echo "multiply: ",$multiply,"<br>";
echo "Quotient: ",$quotient,"<br>";
echo "Remainder: ",$remainder,"<br>";
echo "Power: ",$power,"<br> <br>";

// Assignment Operators
echo "Assignment Operators---------- <br>";

$x = 10;
echo "Value of x: ",$x,"<br>";

$x += 5;
echo "Value of x after addition: ",$x, "<br>";

$x -= 3;
echo "Value of x after subtraction: ",$x,"<br>";

$x *= 2;
echo "Value of x after multiplication: ",$x,"<br>";

$x /= 4;
echo "Value of x after division: ",$x,"<br>";

$x %= 5;
echo "Remainder of x after modulus: ",$x,"<br> <br>";


//Comparison Operators
echo "Comparison Operators---------- <br>";

// Equal to (==)
$a = 5;
$b = "5";
echo $a == $b ? "true" : "false", "<br>"; // Output: true

// Identical (===)
$a = 5;
$b = "5";
echo $a === $b ? "true" : "false","<br>"; // Output: false

// Not equal to (!= or <>)
$a = 5;
$b = 10;
echo $a != $b ? "true" : "false","<br>"; // Output: true

// Not identical (!==)
$a = 5;
$b = "5";

echo $a !== $b ? "true" : "false","<br>"; // Output: true

// Greater than (>)
$a = 10;
$b = 5;
echo $a > $b ? "true" : "false","<br>"; // Output: true

// Less than (<)
$a = 5;
$b = 10;
echo $a < $b ? "true" : "false","<br>"; // Output: true

// Greater than or equal to (>=)
$a = 10;
$b = 10;
echo $a >= $b ? "true" : "false","<br>"; // Output: true

// Less than or equal to (<=)
$a = 5;
$b = 10;
echo $a <= $b ? "true" : "false","<br> <br>"; // Output: true



//Increment/Decrement operators
echo "Increment/Decrement operators-------------- <br>";

$x = 5;
$y = 10;
// Prefix increment
echo "Prefix increment: ", ++$x, "<br>"; // Output: 6
// Prefix decrement
echo "Prefix decrement: ", --$y, "<br>"; // Output: 9

// Postfix increment
echo "Postfix increment: ", $x++, "<br>"; // Output: 6
echo "Value of x after postfix increment: ", $x, "<br>"; // Output: 7

// Postfix decrement
echo "Postfix decrement: ", $y--, "<br>"; // Output: 9
echo "Value of y after postfix decrement: ", $y, "<br> <br>"; // Output: 8


echo "Logical operators--------------- <br>";
//Logical operators

$age = 25;
$isStudent = true;

// AND (&& or and) - Both conditions must be true for the overall condition to be true.


if ($age >= 18 && $isStudent) {
    echo "You are an adult student.<br>";
} else {
    echo "You are not an adult student.<br>";
}

// OR (|| or or) - At least one condition must be true for the overall condition to be true.

$isEmployee = false;
if ($isStudent || $isEmployee) {
    echo "You are either a student or an employee.<br>";
} else {
    echo "You are neither a student nor an employee.<br>";
}



// NOT (!) - Negates the condition
$isMember = true;
if (!$isMember) {
    echo "You are not a member.<br>";
} else {
    echo "You are a member.<br> <br>";
}

//String operators
echo "String operators--------------- <br>";

$greeting = "Hello ";
$name = "Satyajay";

// Concatenation (.)

echo "Hiii ".$greeting." Hiii "."$name <br>";
$myMessage = "Hiii ".$greeting." Hiii "."$name";
echo $myMessage."<br> <br>";

echo "Array operators--------------- <br>";
//Array operators
//example 1 ---

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];

$result = $array1 + $array2;
print_r($result);
echo"<br><br>"; 

// Example 2 ---------------

$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 2, 'a' => 1];

// (1) condition
if ($array1 == $array2) {
    echo "Arrays are equal.<br>"; // Output: Arrays are equal.
} else {
    echo "Arrays are not equal.<br>";
}

// (2) condition
if ($array1 === $array2) {
    echo "Arrays are identical.<br>";
} else {
    echo "Arrays are not identical.<br> <br>"; // Output: Arrays are not identical.
}



echo "Conditional assignment operators--------------- <br>";
// Conditional assignment operators

$age = 23;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status; // Output: Adult






?>