<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('client', $_POST);
header('location:client-index.php');

?>
