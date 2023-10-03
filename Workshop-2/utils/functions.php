<?php




/**
 *  Gets the provinces from the database
 */
function getProvinces() {
  //select * from provinces
  return [1 => 'Alajuela', 2 => 'San Jose', 3 => 'Cartago', 80 => 'Heredia', 90 => 'Limon', 100 => 'Puntarenas', 200 => 'Guanacaste'];

}

function getConnection() {
  $conexion = new mysqli("localhost:3306", "root", "rootmySQL", "php_crud");
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  return $conexion;
}

/**
 * Saves an specific user into the database
 */
function saveUser($user){

  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $username = $user['email'];

  $sql = "INSERT INTO users (firstname, lastname, password, email, province_id) VALUES('$firstName', '$lastName', 'password', '$email', '$provinceID')";

  $conexion = getConnection();

  return $conexion->query($sql);
}