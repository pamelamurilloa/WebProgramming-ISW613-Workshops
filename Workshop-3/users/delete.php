<?php
    // Retrieve the URL variables (using PHP).
    $userID = $_GET['id'];
    echo "The user with the id $userID is going to be deleted";
?>

<!--et the id, identify it in the database, if it exists, make a confirm message if it is deleted correctly, uf not, show a message -->