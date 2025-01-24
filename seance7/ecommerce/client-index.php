<?php
require_once('db/connex.php');
$sql = "SELECT * FROM client ORDER BY name";
$stmt = $pdo->query($sql);
// $result = $stmt->fetchAll();
// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Index</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Clients</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($stmt as $row){
            ?>
            <tr>
                <td><?= $row['name'];?></td>
                <td><?= $row['address'];?></td>
                <td><?= $row['phone'];?></td>
                <td><?= $row['email'];?></td>
                <td> <a href="client-show.php?id=<?= $row['id'];?>" class="btn">View</a></td>
                <td>
                    <form action="client-delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'];?>">
                        <input type="submit" class="btn red" value="delete">
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <a href="client-create.php" class="btn">New Client</a>
</body>
</html>