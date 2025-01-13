<?php
require_once('classes/Person.php');

class Teacher extends Person{
    private int $teacherId;
    private float $salary;


    public function getNameT(){
        return "Class Teacher: ".$this->name;
    }

    public function getMessage(){
        return "This is the Teacher class";
    }

    public function setMessage($id, $name, $phone){
        $this->salary = 10;
    }
}