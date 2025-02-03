<!DOCTYPE html>

<head>
    <title>Radio button handle</title>
</head>

<body>
    <form action="./index.php" method="post">

        <label for="">Select any class</label> <br>

        <input type="radio" value="BCA" name="course"> BCA</input><br>
        <input type="radio" value="MCA" name="course"> MCS</input><br>
        <input type="radio" value="MSC" name="course"> MSC</input><br>

        <button type="submit" value="confirm" name="confirm">Confirm</button>

    </form> <br><br>
    <?php

if (isset($_POST['confirm'])) {
    if (isset($_POST['course'])) {
        $course = $_POST['course'];
        echo "You Selected: ".$course;
    } else {
        echo "Please select a course!";
    }
}

?><br>

<a href="./index.php">Home</a> 
</body>

</html>