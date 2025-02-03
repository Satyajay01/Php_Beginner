<?php

// MySQLi Extension for database conections



$servername = "localhost";
$username = "root";
$password = "";
$dbName = "mydba";

/*
// Database Connection Method 1 (object-oriented approach) ----------

            // Create connections
$conn = new mysqli($servername, $username, $password, $dbName);
            // check connections
if ($conn->connect_error) {
    echo  "Connection failed: ".$conn->connect_error;
}
else{
    echo "Connection Success!";
}

*/



// ---------- Database Connection Method 2 (Procedural approach) ----------
mysqli_report(MYSQLI_REPORT_OFF); // it is importent to not show Errors
$conn = @mysqli_connect($servername, $username, $password, $dbName);

if( $conn){
    echo "Connection Successful...!";
}
else{
    echo "connection failed! ".mysqli_connect_error();
}
