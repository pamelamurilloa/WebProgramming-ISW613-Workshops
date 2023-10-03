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
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $provinceID = $_POST["province"];
    $password = $_POST["password"];


    $sql = "INSERT INTO users (firstname, lastname, password, email, province_id) VALUES('$firstName', '$lastName', 'password', '$email', '$provinceID')";

    $conexion = getConnection();
    
    if ($conexion->query($sql) === TRUE) {
      echo "Registro exitoso";
    } else {
      echo "Error al registrar: " . $conexion->error;
    }

    $conexion->close();

}
?>