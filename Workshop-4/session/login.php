<?php
  require('../utils/functions.php');


  if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = authenticate($username, $password);

    if($user) {

      //introduces the user with username and password into the active session
      session_start();
      $_SESSION['user'] = $user;

      updateLoginTime($user['id']);

      if ($user['role'] === 'admin') {
        header('Location: ../admin/showUsers.php');
      } else {
        header('Location: ../users/userScreen.php?id=' . $user['id'] . '');
      }
      
    } else {
      //if there is no user in the database with those credentials, an error message appears
      header('Location: ../index.php?error=El usuario o la clave son incorrectos');
    }
  }




