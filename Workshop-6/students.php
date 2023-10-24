<?php

require_once("functions.php");

// Makes a new studentManager filled with the database information
$studentManager = new StudentManager(getStudents());

// Prints all the students separated by commas

$argv[1] = isset($argv[1]) ? $argv[1]  : null;

$studentManager->showStudents($argv[1]);

?>