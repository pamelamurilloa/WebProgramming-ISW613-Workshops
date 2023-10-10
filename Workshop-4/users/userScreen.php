<?php
    include('../utils/functions.php');

    $userID = $_GET['id'];
    $user = getUserByID($userID);
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
        echo '<td><a class="btn" href="/WebProgramming-Workshops/Workshop-3/index.php">Return to Login</a> </td>';
    ?>

</body>
</html>