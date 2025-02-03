<?php

include("config/database.php");

// Delete Query

$sql = "delete from users where id=2";

$result = $conn->query($sql);

if ($result) {
    echo "Record deleted successfully";
}
else{
    echo "NO Record deleted successfully";
}

