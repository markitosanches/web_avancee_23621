<?php

require_once('Classes/Employe.php');
require_once('Classes/Client.php');

// $p = new Person("Paul");
// //$p->setName("Paul");
// echo "<pre>";
// var_dump($p);
// echo "</pre>";

$e = new Employe("Lisa", 5454);
//$e->setName("Lisa");
echo "<pre>";
var_dump($e);
echo "</pre>";

$c = new Client("Peter");
$c->setPhone('54545454');
//$c->setName("45465", "Peter");
echo "<pre>";
var_dump($c);
echo "</pre>";