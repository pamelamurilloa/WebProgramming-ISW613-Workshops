<?php
    include_once('../utils/functions.php');
    include_once('../utils/databaseConexion.php');
    $dbManager = new DataBaseConexion();

    $userID = $_GET['id'];

    confirmLogin();

    if ($dbManager->deleteUser($userID)) {
        header("Location: showUsers.php");
    } else {
        header("Location: showUsers.php?error=El usuario no ha podido ser eliminado");
    };
    
?>