<?php

include('utils/functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['firstName'] = $_POST["firstName"];
    $user['lastName'] = $_POST['lastName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['password'] = $_POST['password'];

  if (saveUser($user)) {
    header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/users.php");
  } else {
  header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/?error=true");
  }


}
?>