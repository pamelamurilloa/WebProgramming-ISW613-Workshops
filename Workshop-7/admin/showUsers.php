<?php
include_once('../utils/functions.php');
include_once('../utils/databaseConexion.php');
$dbManager = new DataBaseConexion();

confirmLogin();

//Fetches the user list from fuctions
$users = $dbManager->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style/users.css">
  <title>UserInformation</title>
</head>
<body>
    <header>
        <h1> Bienvenido <?php echo $user['name']; echo $user['lastname'] ?> </h1>
        <img src="<?php echo $user['imageurl']; ?>" alt="User profile picture"/>
        <a href="/logout.php">Logout</a>
    </header>
    
    <div class="user-info-container">
        <div class="user-info-container__top-info">
            <h1 class="title">User Information</h1>
            <p class="subtitle">List of users</p>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Province</th>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['firstname']; ?></td>
                        <td><?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['province']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <?php
                        echo '<td><a href="edit.php?id=' . $user['id'] . '">Edit</a> </td>';
                        echo '<td><a href="delete.php?id=' . $user['id'] . '">Delete</a> </td>';
                        ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="btn btn-secondary" href="../index.php">Return to Main</a>
        <a class="btn btn-secondary" href="../users/addUser.php?id=1">Add new User</a>
        </div>
</body>
</html>

