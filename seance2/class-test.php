<?php
class Person{

    private string $name;
    public string $address;
    public string $zipCode = "H1H1H1";
    public string $phone;
    public $email;

    public function __construct($name, $address = "", $phone = ""){
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setName(string $name, $email = null):void{
        $this->name = $name;
        $this->email = $email;
    }

    public function getName():string{
        return "Salut <strong>".$this->name."</strong>";
    }
}

$obj = new Person("Paul 2", "", "5144444");

//$obj->name = "Peter";
// $obj->address = "Pie IX";
$obj->zipCode = "H2H2H2";

echo "<pre>";
var_dump($obj);
echo "</pre>";
//echo $obj->name;


$obj2 = new Person("Lisa");
$obj2->setName('Lisa', 'lisa@gmail.com');

//$obj2->name = "Lisa";

echo $obj2->getName();
echo "<pre>";
var_dump($obj2);
echo "</pre>";
?>