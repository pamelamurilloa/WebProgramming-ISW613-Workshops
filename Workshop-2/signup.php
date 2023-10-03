<?php
// require('utils/functions.php');

// if($_POST && $_REQUEST['firstName']) {
//   //get each field and insert to the database
//   $user['firstName'] = $_REQUEST['firstName'];
//   $user['lastName'] = $_REQUEST['lastName'];
//   $user['email'] = $_REQUEST['email'];
//   $user['province_id'] = $_REQUEST['province'];
//   $user['password'] = $_REQUEST['password'];
//   if (saveUser($user)) {
//     echo "helo";
//     header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/");
//   }
//   echo "hale";
//   header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/?error=true");
//   // header("Location: http://localhost/WebProgramming-Workshops/Workshop-2/?error=true");

// }


include('utils/functions.php'); // Incluye el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
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