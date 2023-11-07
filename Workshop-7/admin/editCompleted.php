<?php

include_once('../utils/functions.php');
include_once('../utils/databaseConexion.php');
$dbManager = new DataBaseConexion();

confirmLogin();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['id'] = $_POST["id"];
    $user['firstname'] = $_POST["firstName"];
    $user['lastname'] = $_POST['lastName'];
    $user['password'] = $_POST['password'];
    $user['username'] = $_POST['userName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['role'] = $_POST['role'];

  if ($dbManager->updateUser($user)) {
    header("Location: showUsers.php");
  } else {
    header("Location: showUsers.php?error=No se ha podido editar al usuario");
  }


}
?>