<?php
  require('../utils/functions.php');


  if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = authenticate($username, $password);

    if($user) {
      session_start();
      $_SESSION['user'] = $user;
      updateLoginTime($user['id']);
      if ($user['role'] === 'admin') {
        header('Location: ../admin/showUsers.php');
      } else {
        header('Location: ../users/userScreen.php?id=' . $user['id'] . '');
      }
      
    } else {
      header('Location: ../index.php?error=El usuario o la clave son incorrectos');
    }
  }




