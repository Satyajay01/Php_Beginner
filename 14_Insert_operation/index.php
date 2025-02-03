<?php

    // Insert Operation

    // require("config/database.php");
    include("config/database.php");

    // Insert Query
    $date = date("Y-m-d H:i:s"); 
    $sql = "insert into users (username, password, created_at) values ('Satyajay', 'Saty@123', '$date')";


        // Query calling
    $result = $conn->query($sql);
    if ($result) {
        echo "Data Inserted Successfully";
    }
    else{
        echo "Data Not Inserted: ".$conn->error;
    }






