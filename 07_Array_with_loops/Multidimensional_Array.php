<?php
$student = array(
    array("Name" => "Satyajay", "Class" => "BCA"),
    array("Name" => "Jay", "Class" => "MSC CS")
);

foreach ($student as $key => $value) {
    // echo "<pre>";
    // print_r($value);

    foreach ($value as $k => $v) {
        echo "<b>$k</b>: " . $v . "<br>";
    };
}

?>



