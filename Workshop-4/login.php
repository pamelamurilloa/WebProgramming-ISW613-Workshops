<?php
  require('utils/functions.php');


  if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = authenticate($username, $password);

    if($user) {
      session_start();
      $_SESSION['user'] = $user;

      if ($user['role'] === 'admin') {
        header('Location: showUsers.php');
      } else {
        header('Location: users/userScreen.php?id=' . $user['id'] . '');
      }
      
    } else {
      header('Location: index.php?status=login');
    }
  }




