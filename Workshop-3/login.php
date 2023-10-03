<?php
  require('utils/functions.php');


  if($_POST) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $user = authenticate($username, $password);

    if($user) {
      session_start();
      $_SESSION['user'] = $user;

      //sendScheduleEmail($user['email-address'], "Bievenido");

      header('Location: dashboard.php');
    } else {
      header('Location: index.php?status=login');
    }
  }




