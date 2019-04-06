<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>

    <?php
    $conn = new mysqli("localhost", "root", "", "proj");

    $result = $conn->query("SELECT * FROM `department`");

    //var_dump($result);
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Detail</td>
        </tr>
        <?php while($row = $result->fetch_assoc()):?>
        <tr>
            <td><?=$row['dept_id']?></td>
            <td><?=$row['dept_name']?></td>
            <td><?=$row['dept_detail']?></td>
        </tr>
        <?php endwhile; $conn->close();?>
    </table>
</body>
</html>