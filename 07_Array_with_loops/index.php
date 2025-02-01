<?php
// $myarr = array("apple", "orange", "banan", "mango");
$myarr = ["apple", "orange", "banan", "mango"];
echo $myarr[1]."<br><br>";



//loops------------
echo "with for loops----------<br>";
for($i=0; $i<count($myarr); $i++){
    echo "Index number $i: ".$myarr[$i]."<br>";
}
echo "<br><br>";

// $myarr[0]= "coconut"; //replace value


// foreach-------------
echo "foreach loop---------<br>";
foreach($myarr as $index => $value){
    echo $index." $value <br>";
}
?>