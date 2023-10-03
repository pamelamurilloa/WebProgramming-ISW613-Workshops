<?php


/**
 *  Gets the provinces from the database
 */
function getProvinces() {
  //select * from provinces
  $conexion = getConnection();

  $sql = "SELECT id, name FROM provinces";
  $result = $conexion->query($sql);

  $provinces = [];

  // Fetch rows and format the data into the desired array structure
  while ($row = $result->fetch_assoc()) {
      $provinces[$row['id']] = $row['name'];
  }

  return $provinces;

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
  $password = $user['password'];
  $email = $user['email'];
  $provinceID = $user['provinceID'];
  
  $sql = "INSERT INTO users (firstname, lastname, password, email, province_id) VALUES('$firstName', '$lastName', '$password', '$email', '$provinceID')";

  $conexion = getConnection();

  return $conexion->query($sql);
}