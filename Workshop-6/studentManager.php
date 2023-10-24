<?php

class StudentManager {

    private $studentList;

    public function __construct($studentList) {
        $this->studentList = $studentList;
    }

    // Methods
    public function showStudents ($length = null) {

        // length will always be null unless specified otherwise

        // Gets the student list from itself and sets the count to 0
        $studentList = $this -> studentList;
        $count = 0;

        foreach ($studentList as $student) {

            // If a number was specified in length, make sure it has not been passed
            if ($length !== null && $count >= $length) {
                break;
            }

            echo $student->getId() . ", " . $student->getName() . ", " . $student->getLastname() . ", " . $student->getIdcard() . ", " . $student->getAge() . "\n";
            $count++;
        }

    }

    // Getters and setters 
    public function getStudentList() {
        return $this->studentList;
    }

    public function setStudentList($studentList) {
        $this->studentList = $studentList;
    }

}