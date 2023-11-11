<?php

include_once('../utils/functions.php');
include_once('../utils/databaseConexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user['firstName'] = $_POST["firstName"];
    $user['lastName'] = $_POST['lastName'];
    $user['password'] = $_POST['password'];
    $user['userName'] = $_POST['userName'];
    $user['email'] = $_POST['email'];
    $user['provinceID'] = $_POST['province'];
    $user['role'] = $_POST['role'];
    $user['imageurl'] = $_POST['imageurl'];

    $file_tmp = $_FILES["selectedFile"]["tmp_name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["selectedFile"]["name"]);
    move_uploaded_file($file_tmp,$target_file);

    $dbManager = new DataBaseConexion();

  if ($dbManager->saveUser($user)) {
    header("Location: index.php?message=Usuario registrado correctamente");
  } else {
    header("Location: index.php?error=No se ha podido guardar el usuario");
  }

}
?>