<?php
//Get and Post HTTP methods------

// ************Get method**********
// Data is visible in the URL bar (Data visible).
// Character limits.
// not secure

// print_r($_GET);
// --------------------------------------
// if(isset($_GET['submit'])){
    //     echo $_GET["username"]."<br>";
    //     echo $_GET["password"]."<br>";
    // }
    // --------------------------------------
    
    /*  if(isset($_GET['submit'])){
        
        if (empty($_GET['username'])) {
            echo "User name is empty";
        }
        else if (empty($_GET['password'])) {
            echo "<br> Password is empty";
        }
        else{
            echo "All Good!";
        }
        
    }
        */
    


        
    // ************POST method**********
    // Data does not show in the URL bar (Data hidden).
    // no Character limits.
    // Data secured.

    if(isset($_POST['submit'])){
        
        if (empty($_POST['username'])) {
            echo "User name is empty";
        }
        else if (empty($_POST['password'])) {
            echo "<br> Password is empty";
        }
        else{
            echo "All Good!";
        }
        
    }
    
    
    
echo "<br><br><br>";
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <br>
        <button type="submit" name="submit">Log in</button>
    </form>
    <br><br><br>

    <a href="./index.php">Home</a>
</body>
</html>