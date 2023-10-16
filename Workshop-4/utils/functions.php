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


function getUsers() {
  $conexion = getConexion();

  // Perform a SQL query to fetch user data
  $sql = "SELECT u.id, u.firstname, u.lastname, u.username, u.email, p.name as province, u.role FROM users as u join provinces as p on p.id = u.province_id";
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

function getUserByID($userID) {
  $conexion = getConexion();

  // Perform a SQL query to fetch user data
  $sql = "SELECT u.id, u.firstname, u.lastname, u.password, u.username, u.email, u.province_id, u.role FROM users as u WHERE u.id = '$userID'";
  $result = $conexion->query($sql);

  // Check if the query was successful
  if ($result === false) {
    die("Error in SQL query: " . $conexion->error);
  }

  $results = $result->fetch_array();
  $conexion->close();
  return $results;
}

function authenticate($username, $password){
  $conexion = getConexion();
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND active_status = 1;";
  $result = $conexion->query($sql);

  if ($conexion->connect_errno) {
    $conexion->close();
    return false;
  }
  $results = $result->fetch_array();
  $conexion->close();
  return $results;
}

/**
 * Saves an specific user into the database
 */

function saveUser($user){

  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $password = $user['password'];
  $username = $user['userName'];
  $email = $user['email'];
  $provinceID = $user['provinceID'];
  $role = $user['role'];
  
  $sql = "INSERT INTO users (firstname, lastname, password, username, email, province_id, role) VALUES('$firstName', '$lastName', '$password', '$username', '$email', '$provinceID', '$role');";

  $conexion = getConexion();

  return $conexion->query($sql);
}

/**
 * Edits
 */

 function updateUser($user){

  $userID = $user['id'];
  $firstName = $user['firstname'];
  $lastName = $user['lastname'];
  $password = $user['password'];
  $username = $user['username'];
  $email = $user['email'];
  $provinceID = $user['provinceID'];
  $role = $user['role'];
  

  $sql = "UPDATE users SET firstname = '$firstName', lastname = '$lastName', password = '$password', username = '$username', email = '$email', province_id = '$provinceID', role = '$role' WHERE id = $userID";


  $conexion = getConexion();

  $result = $conexion->query($sql);

  // Check if the query was successful
  if ($result === false) {
    die("Error in SQL query: " . $conexion->error);
  }

  $conexion->close();
  return $result;
}

/**
 * Deletes a student from the database
 */
function deleteUser($id){
  $conexion = getConexion();
  $sql = "DELETE FROM users WHERE id = $id";
  $result = $conexion->query($sql);

  if ($conexion->connect_errno) {
    $conexion->close();
    return false;
  }
  $conexion->close();
  return true;
}

// Determines if one o more users have been active within a certain timeframe

function setInactiveUsers ($hoursSinceLastLogin){
  $conexion = getConexion();
  $sql = "UPDATE users SET active_status = 0 WHERE id IN (SELECT id FROM users WHERE TIMESTAMPDIFF(HOUR, last_login_datetime, CURRENT_TIMESTAMP) > $hoursSinceLastLogin AND active_status = 1);";
  $result = $conexion->query($sql);

  // Check if the query was successful
  if ($result === false) {
    die("Error in SQL query: " . $conexion->error);
  }

  return $result;
}

function updateLoginTime($userID) {
  $conexion = getConexion();
  $sql = "UPDATE users SET last_login_datetime = CURRENT_TIMESTAMP WHERE id = $userID;";
  $result = $conexion->query($sql);

  // Check if the query was successful
  if ($result === false) {
    die("Error in SQL query: " . $conexion->error);
  }

  return $result;
}

function confirmLogin (){
  session_start();
  if ( empty($_SESSION['user']) ) {
    header("Location: ../session/logout.php");
    exit();
  }
}