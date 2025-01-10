<?php
class Person{

    private string $name;
    public string $address;
    public string $zipCode = "H1H1H1";
    public string $phone;
    public $email;

    public function __construct($name, $address = "", $phone = ""){
        //$this->name = $name;
        $this->setName($name);
        $this->address = $address;
        $this->phone = $phone;
    }

    // public function setName(string $name, $email = null):void{
    //     $this->name = $name;
    //     $this->email = $email;
    // }

       private function setName(string $name):void{
        $this->name = $name;
    }

    public function getName():string{
        return "Salut <strong>".$this->name."</strong>";
    }

    // public function __destruct() {
    //     echo "Hi, my name is {$this->name} and my phone number is {$this->phone}.";
    // }

    
}

?>
