<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "mydba";


// Create connections
mysqli_report(MYSQLI_REPORT_OFF); // it is importent to not show Errors
$conn = @new mysqli($servername, $username, $password, $dbName);
// check connections
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
