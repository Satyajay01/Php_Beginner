<?php
// Associative_Array-----------

$employees = [
    "Satyajay" => "Software Engineer",
    "Jay" => "Web Developer",
    "Satya" => "It Engineer",
    "Joy" => "Full-Stack Engineer",
];

// echo "<pre>";
// print_r($employees);


// Associative Array Pre defined functions-----------------
$key = array_keys($employees);
$values = array_values($employees);
$employees_flip = array_flip($employees);
$employees_reverse = array_reverse($employees);


echo "<pre>";
print_r($key);
print_r($values);
print_r($employees_flip);
print_r($employees_reverse);
?>

<!-- ----------Array print with foreach loops -------------->
<?php
foreach ($employees as $key => $value) {
?>

    <p><b><?php echo $key . ":" ?> </b> <?php echo $value ?> </p>
<?php
}


?>