<?php
abstract class Person{
    protected string $name;
    private  string $address;
    private  string $zipCode;
    private  string $email;
    private  string $phone;

    public function setName(string $name):void{
        $this->name = $name;
    }

    final public function getName(){
        return "Class Person: ".$this->name;
    }

    public function setPhone(string $phone):void{
        $this->phone = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }

   abstract public function getMessage();
   abstract public function setMessage($a, $b, $c);
}