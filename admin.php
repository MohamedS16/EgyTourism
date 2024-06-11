<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">

    <title>Admin Panel</title>
</head>

<body>

<?php include('adminnav.php') ?>


    <div class="title">
        <h1>Admin Panel</h1>
    </div>
    <div class="content">
        <div class="cont">
            <h2>Add</h2>
            <div class="add">
                <a href="add.php"> Add Part </a>
                <a href="addmuseum.php"> Add Museum </a>
            </div>
        </div>
        <div class="cont">
            <h2>Edit</h2>
            <div class="edit">
                <a href="viewmuseums.php">Edit Museums</a>
                <a href="table.php">Edit Parts</a>
                <a href="tablepremium.php">Edit Premium Content</a>
            </div>
        </div>
        <div class="cont">
            <h2>View</h2>
            <div class="view">
                <a href="viewmsgs.php"> View Messages </a>
                <a href="viewpayment.php"> View Payments </a>
            </div>
        </div>
    </div>
</body>
</html>