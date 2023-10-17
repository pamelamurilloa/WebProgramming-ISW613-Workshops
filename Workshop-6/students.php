<?php

require_once("functions.php");

class Student {

  private $id;
  private $name;
  private $lastname;
  private $idcard;
  private $age;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

function getStudentsFromDatabase () {

}