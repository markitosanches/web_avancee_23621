<?php
require_once("Classes/Magique.php");

$magique = new Magique;

echo $magique->getClassName();
echo "<br>";
echo $magique->getLine();
echo "<br>";
echo $magique->getFile();
echo "<br>";
echo $magique->getMethod();
echo "<br>";
?>