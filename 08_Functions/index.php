<?php
##User Defined Functions-------------



function myfun(){
    echo "hello world!";
}
myfun();
// --------------------
echo "<br>";

// Function with Multiple Parameters-------
function multiply($a, $b) {
    return $a * $b;
}
echo multiply(4, 5)."<br>";



// Arrow function--------
$add = fn($a, $b) => $a + $b;
echo $add(5, 10);



