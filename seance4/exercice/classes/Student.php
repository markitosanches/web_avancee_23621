<?php
require_once('classes/Person.php');

class Student extends Person{
    private int $studentId;

    public function getMessage(){
        return "This is the student class";
    }

    public function setMessage($id, $name, $phone){
        $this->studentId = 10;
    }
}