<?php
require "mysql.php";

$data = Query("SELECT * FROM user");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Database</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No . </th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>image</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach( $data as $row) : ?>
            <tr>

                <td><?= $no ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["password"] ?></td>
                <td><?= $row["image"] ?></td>
                <?php $no++; ?>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>