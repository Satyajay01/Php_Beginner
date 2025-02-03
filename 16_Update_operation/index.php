<?php

include("config/database.php");

// Update Query 

// $sql = "update users set username='Saty'"; // for all users update
$sql = "update users set username='Satyatyajay' where id=1";
$result = $conn->query($sql);

if($result){
    echo "Data Updated Successfully";
}
else{
    echo "Data not Update! ";
}