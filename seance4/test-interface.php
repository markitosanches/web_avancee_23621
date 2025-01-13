<?php
require_once('classes/Circle.php');
require_once('classes/Rectangle.php');

echo "<h2>Circle</h2>";
$c = new Circle(2);
//var_dump($c);
echo $c->calcArea();


echo "<h2>Rectangle</h2>";
$r = new Rectangle(10, 15.5);
//var_dump($c);
echo $r->calcArea();