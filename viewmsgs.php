<?php 
require('database.php');

$sel = "SELECT * from `contact`";
$doss = mysqli_query($mysqli,$sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">
    <title>View Messages</title>
</head>
<body>
    <?php include('adminnav.php') ?>


<table border="1px"> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    <?php 
        foreach($doss as $msg){ ?>
        <tr>
            <td><?php echo $msg['msg_id'] ?></td>
            <td><?php echo $msg['name'] ?></td>
            <td><?php echo $msg['email'] ?></td>
            <td><?php echo $msg['message'] ?></td>
        </tr>
    <?php } ?>

</body>
</html>