<?php

require_once('classes/Calculator.php');

$c = new Calculator;
echo  $c->add(10, 15);

echo "<br>";
echo Calculator::add(10, 15);
echo "<br>";
echo Calculator::multi(10, 2);
echo "<br>";
echo Calculator::$message;
?>