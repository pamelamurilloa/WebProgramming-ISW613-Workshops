<?php
    include('../utils/functions.php');
    $userID = $_GET['id'];

    confirmLogin();

    if (deleteUser($userID)) {
        header("Location: showUsers.php");
    } else {
        header("Location: showUsers.php?error=El usuario no ha podido ser eliminado");
    };
    
?>