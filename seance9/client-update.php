<?php
print_r($_POST);

require_once('classes/CRUD.php');
$crud = new CRUD;
if($crud->update('client', $_POST)){
    header('location:client-index.php');
}else{
    echo "error";
}


?>