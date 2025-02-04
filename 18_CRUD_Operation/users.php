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
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        <a href="" class="button edit">Edit</a>
                        <a href="" class="button delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td colspan='3'>No record found!</td>
                </tr>";

            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>

            <a href="logout.php" class="footerbtn">Logout</a>
        </div>
    </section>

</body>

</html>