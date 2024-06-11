<?php 
require('database.php');

$sel = "SELECT * from `museums`";
$doss = mysqli_query($mysqli,$sel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <title>View Museums</title>
</head>
<body>
    <?php include('adminnav.php') ?>

<div class="coco">
<table border="1px"> 
        <tr>
            <th>Museum ID</th>
            <th>Museum Name</th>
            <th>About Museum</th>
            <th>Working Hours</th>
            <th>Location</th>
            <th>Museum Image</th>
            <th>Edit</th>
        </tr>
    <?php 
        foreach($doss as $msg){ ?>
        <tr>
            <td><?php echo $msg['m_id'] ?></td>
            <td><?php echo $msg['m_name'] ?></td>
            <td class="abb"><?php echo $msg['about'] ?></td>
            <td><?php echo $msg['work'] ?></td>
            <td><iframe src="<?php echo $msg['location'] ?>" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
            <td><img src="<?php echo $msg['m_img'] ?>"/></td>
            <td class="edd"><a href="editmuseum.php?museumid=<?php echo $msg['m_id'] ?>">Edit</a></td>
        </tr>
    <?php } ?>
    
    </div>
</body>
</html>