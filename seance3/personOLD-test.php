<?php
require_once("Classes/PersonOLD.php");

$lisa = new Person('Lisa');

//$lisa->setName("Paul");
echo "<pre>";
var_dump($lisa);
echo "</pre>";

$lisa->phone = "514-777-8888";

?>