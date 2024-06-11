<?php 
require('database.php');

$sel = "SELECT * from `payment`";
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
    <title>View Payment</title>
</head>
<body>
<?php include('adminnav.php') ?>

<table border="1px"> 
        <tr>
            <th>Payment ID</th>
            <th>Transaction ID</th>
            <th>Card Number</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Expire Date</th>
            <th>CVV</th>
            <th>User ID</th>
            <th>Subscription Type</th>
            <th>Subscription ID</th>
        </tr>
    <?php 
        foreach($doss as $msg){ ?>
        <tr>
            <td><?php echo $msg['pay_id'] ?></td>
            <td><?php echo $msg['transaction_id'] ?></td>
            <td><?php echo $msg['cardno'] ?></td>
            <td><?php echo $msg['date'] ?></td>
            <td><?php echo $msg['amount'] ?></td>
            <td><?php echo $msg['expdate'] ?></td>
            <td><?php echo $msg['cvv'] ?></td>
            <td><?php echo $msg['user_id'] ?></td>
            <td><?php echo $msg['sub_type'] ?></td>
            <td><?php echo $msg['sub_id'] ?></td>
        </tr>
    <?php } ?>

</body>
</html>