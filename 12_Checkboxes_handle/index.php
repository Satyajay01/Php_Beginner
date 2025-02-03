<!DOCTYPE html>

<head>
    <title>Radio button handle</title>
</head>

<body>
    <form action="./index.php" method="post">

        <label for="">Your Favourite Food</label> <br>

        <input type="checkbox" value="Fastfood" name="foods[]"> Fastfood</input><br>
        <input type="checkbox" value="Sweets" name="foods[]"> Sweets</input><br>
        <input type="checkbox" value="Namkeen" name="foods[]"> Namkeen</input><br>
        <input type="checkbox" value="Street Food" name="foods[]"> Street Food</input><br>

        <button type="submit" value="confirm" name="confirm">Confirm</button>

    </form> <br><br>
    <a href="./index.php">Home</a> <br>
    <?php
        if(isset($_POST['confirm'])){
            if(isset($_POST['foods'])){ // this line for only error handle

                $food = $_POST['foods'];
                foreach( $food as $food){
                    echo "You Selected ".$food."<br>";
                }
            }
        }    

    ?><br>

</body>

</html>