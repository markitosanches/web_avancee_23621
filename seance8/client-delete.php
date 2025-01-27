<?php
//print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
$delete = $crud->delete('client', $_POST['id']);

if($delete){
    header('location:client-index.php');
}else{
    echo "error";
}

?>