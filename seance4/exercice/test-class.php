<?php

require_once('classes/Student.php');
require_once('classes/Teacher.php');

// $p = new Person;

// $p->setName("peter");

// echo $p->getName();
// echo "<pre>";
// var_dump($p);
// echo "</pre>";

$s = new Student;
$s->setName("Lisa");
//$s->name = 'Paul';
echo $s->getName();
echo "<pre>";
var_dump($s);
echo "</pre>";

$t = new Teacher;
$t->setName("Paul");
echo $t->getNameT();
echo "<pre>";
var_dump($t);
echo "</pre>";