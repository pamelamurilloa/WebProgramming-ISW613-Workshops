<?php
    include_once('../utils/functions.php');
    include_once('../utils/databaseConexion.php');

    $dbManager = new DataBaseConexion();

    $userID = $_GET['id'];
    $user = $dbManager->getUserByID($userID);

    session_start();

    if (empty($_SESSION['user']) || $_SESSION['user']['username'] != $user['username']) {
    header("Location: ../logout.php");
    exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>User Page</title>
</head>
<body>
    <h1>Congratulations, you have logged in.</h1>
    <h2>What do you want to do?</h2>
    <?php
        echo '<td><a class="btn" href="../session/logout.php">Return to Login</a> </td>';
    ?>

</body>
</html>