<?php

class Student {

    private $id;
    private $name;
    private $lastname;
    private $idcard;
    private $age;

    public function __construct($id, $name, $lastname, $idcard, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->idcard = $idcard;
        $this->age = $age;
    }

    // Getters and setters 
    public function getId() {
    return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getIdcard() {
        return $this->idcard;
    }

    public function setIdcard($idcard) {
        $this->idcard = $idcard;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}

