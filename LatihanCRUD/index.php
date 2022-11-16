<?php

include_once("config.php");

$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <a href="add.php">Add New customers</a><br/><br/>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Last Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($result->num_rows > 0): ?>
            <?php
            while($customers_data = mysqli_fetch_array($result)):?>
            <tr>
                <td> <?php echo $customers_data['name']?> </td>
                <td> <?php echo $customers_data['phone']?> </td>
                <td> <?php echo $customers_data['email']?> </td>
                <td> <?=$customers_data['created']?></td>
                <td> <?=$customers_data['updated']?></td>
                <td>
                    <a href='edit.php?id=<?=$customers_data['id']?>'>Edit</a> |
                    <a href='delete.php?id=<?=$customers_data['id']?>'>Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6" rowspan="1" headers="" align="center">Data Customer Tidak Ditemukan!</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result);?>
        </tbody>
    </table>
            
            <?php
            if (isset($_GET["message"])){
                $message = $_GET["message"];
                echo "<script type='text/javascript'>alert('$message');";
                echo "window.location = 'index.php'</script>";
            }
            ?>

</body>
</html>