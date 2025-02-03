<?php

include("config/database.php");

// Select Query 

// $sql = "select * from users"; // for all tables data
// $sql = "select id, username, created_at from users"; // for selected table data 
$sql = "select id, username, created_at from users where id = 1"; // for only one user data

$result = $conn->query($sql);
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($row);
    }
}

