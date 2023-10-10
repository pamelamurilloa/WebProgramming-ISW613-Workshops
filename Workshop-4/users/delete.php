<?php
    include('../utils/functions.php');
    $userID = $_GET['id'];
    if (deleteUser($userID)) {
        header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/showUsers.php");
    } else {
        header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/showUsers.php?error=true");
    };
    
?>