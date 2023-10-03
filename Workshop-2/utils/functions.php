<?php

// Establishes the conexion with the database

function getConexion() {
  $conexion = new mysqli("localhost:3306", "root", "rootmySQL", "php_crud");
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  return $conexion;
}

/**
 *  Gets the provinces from the database
 */
function getProvinces() {
  //select * from provinces
  $conexion = getConexion();

  $sql = "SELECT id, name FROM provinces";
  $result = $conexion->query($sql);

  $provinces = [];

  // Fetch rows and format the data into the desired array structure
  while ($row = $result->fetch_assoc()) {
      $provinces[$row['id']] = $row['name'];
  }

  return $provinces;

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

  $conexion = getConexion();

  return $conexion->query($sql);
}

function getUsers() {
  $conexion = getConexion();

  // Perform a SQL query to fetch user data
  $sql = "SELECT u.id, u.firstname, u.lastname, u.email, p.name as province FROM users as u join provinces as p on p.id = u.province_id";
  $result = $conexion->query($sql);

  // Check if the query was successful
  if ($result === false) {
      die("Error in SQL query: " . $conexion->error);
  }

  $users = [];

  // Fetch rows and store user data
  while ($row = $result->fetch_assoc()) {
      $users[] = $row;
  }

  return $users;
}