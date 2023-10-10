<?php

include('utils/functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['firstName'] = $_POST["firstName"];
    $user['lastName'] = $_POST['lastName'];
    $user['password'] = $_POST['password'];
    $user['userName'] = $_POST['userName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['role'] = 'normal_user';

  if (saveUser($user)) {
    header("Location: http://localhost/WebProgramming-Workshops/Workshop-3/index.php");
  } else {
    header("Location: http://localhost/WebProgramming-Workshops/Workshop-3/?error=true");
  }

}
?>