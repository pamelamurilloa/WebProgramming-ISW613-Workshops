<?php

include('utils/functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['firstName'] = $_POST["firstName"];
    $user['lastName'] = $_POST['lastName'];
    $user['password'] = $_POST['password'];
    $user['userName'] = $_POST['userName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['role'] = $_POST['role'];

  if (saveUser($user)) {
    header("Location: index.php?message=Usuario registrado correctamente");
  } else {
    header("Location: index.php?error=No se ha podido guardar el usuario");
  }

}
?>