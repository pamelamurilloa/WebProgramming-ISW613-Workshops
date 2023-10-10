<?php

include('../utils/functions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['id'] = $_POST["id"];
    $user['firstname'] = $_POST["firstName"];
    $user['lastname'] = $_POST['lastName'];
    $user['password'] = $_POST['password'];
    $user['username'] = $_POST['userName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['role'] = $_POST['role'];

  if (updateUser($user)) {
    header("Location: http://localhost/WebProgramming-Workshops/Workshop-4/showUsers.php");
  } else {
    header("Location: http://localhost/WebProgramming-Workshops/Workshop-4/?error=true");
  }


}
?>