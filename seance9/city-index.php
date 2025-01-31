<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('city');
//print_r($select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Index</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>City</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($select as $row){

            ?>
            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['city'];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</body>
</html>