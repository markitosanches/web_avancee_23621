<?php

abstract class Person{
    protected string $name;
    public string $address;
    public string $phone;
    public string $country;
    public string $language;

    final public function __construct($name) {
        $this->name = $name;
    }

    public function setPhone(string $phone):void{
        $this->phone = $phone;
    }

    final public function setName($name){
        $this->name = $name;
    }
}

?>