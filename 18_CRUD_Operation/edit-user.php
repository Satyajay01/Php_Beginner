<?php
include("config/database.php");
// step 1 Get users data. by user id.

if(isset($_GET['id'])){

    $sql = 'select * from users where id = '.$_GET['id'];
    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);

}else{
    echo "<h1> Invalid Request! </h1>";
    exit;
}





// step 2 - Update user by form submit.
if(isset($_POST['submit']))
{
    extract($_POST);

    $sql = "UPDATE users SET username = '$username', password = '$password' where id = " . $_GET['id'];

    $result =  $conn->query($sql);
    if ($result) {
        echo "Users has ben Updated! ";
    }
    else{
        echo "Something wrong! ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Edit User</h2>

        <form action="edit-user.php?id=<?php echo $user['id'] ?>" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $user['username'] ?>">
                <label for="psw">Password</label>
                <input type="text" placeholder="Enter Password" name="password" required value="<?php echo $user['password'] ?>">

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>
        </div>
    </section>

</body>

</html>