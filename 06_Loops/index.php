<?php

// Loops-----
// 1. For Loop
// 2. While Loop
// 3. Do-While Loop
// 4. Foreach Loop
// 5. ForEach Loop with Keys
// 6. ForEach Loop with Keys and Values


// 1. For Loop
for ($i = 1; $i <= 10; $i++) {
    echo $i."\n";
}
echo "<br>";

// // 2. While Loop
$j = 1;
while ($j <= 10) {
    echo $j . "\n";
    $j++;
}
echo "<br>";

// // 3. Do-While Loop
$k = 1;
do {
    echo $k . "\n";
    $k++;
} while ($k <= 10);
echo "<br>";

// 4. Foreach Loop (Array)
$arr = [10, 20, 30, 40];
foreach ($arr as $num) {
    echo $num . "\n";
}
echo "<br>";

// // 5. ForEach Loop with Keys (Index)
foreach ($arr as $index => $num) {
    echo $index." index" . "\n";
}

echo "<br>";
// // 6. ForEach Loop with Keys and Values
foreach ($arr as $index => $num) {
    echo $index . " => " . $num . "\n";
}


?>