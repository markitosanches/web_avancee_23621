<?php
if($_SERVER['REQUEST_METHOD']!= 'POST'){
    header('location:client-index.php');
    exit;
}

//print_r($_POST);

// foreach($_POST as $key=>$value){
//     $$key=$value;
// }

extract($_POST);
//echo $name;
require_once('db/connex.php');
$sql = "INSERT INTO client(name, address, phone, zip_code, email) VALUES (?, ?, ?, ?, ?)";
$stmt= $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $zip_code, $email))){
    $id = $pdo->lastInsertId();
    header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}

?>