<?php

require_once("student.php");
require_once("studentManager.php");

// Establishes the conexion with the database

function getConexion() {
  $conexion = new mysqli("localhost:3306", "root", "rootmySQL", "school");
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  return $conexion;
}

/**
 *  Gets all the students from the database
 */
function getStudents() {

  // establishes the conexion
  $conexion = getConexion();

  //select * from students
  $sql = "SELECT id, name, lastname, idcard, age FROM students;";
  $result = $conexion->query($sql);

  $studentList = [];

  // Fetch rows and creates a new students for each row
  while ($row = $result->fetch_assoc()) {
      $studentList[$row['id']] = new Student ($row['id'], $row['name'], $row['lastname'], $row['idcard'], $row['age']);
  }

  return $studentList;

}