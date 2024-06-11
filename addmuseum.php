<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addmuseum.css">
    <link rel="stylesheet" href="css/fonts.css">    
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">

    <title>Add Museum</title>
</head>

<body>
    <?php include('adminnav.php') ?>
    <div class="bodyy">

    <form action="addmuseum.php" method="post" enctype="multipart/form-data">

        <div class="inp">
            <label for="name">Musem Name</label>
            <input type="text" id="name" name="m_name" required placeholder="Enter Museum Name">
        </div>

        <div class="inp">
            <label for="about"> About Museum</label>
            <input type="text" id="about" name="about" required placeholder="Enter Museum Details">
        </div>

        <div class="inp">
            <label for="work">Working Hours</label>
            <input type="text" id="work" name="work" required placeholder="Enter Working Hours">
        </div>

        <div class="inp">
            <label for="location"> Location </label>
            <input type="text" id="location" name="location" required placeholder="Enter Museum Location">
        </div>

        <div class="inp fimage">
            <label for="image"> Part Image :</label>
            <input type="file" name="image" id="image" accept="image/*" required>
        </div>

        <input type="submit" value="Add Museum" name="submit">
    </form>
</div>
</body>

</html>


<?php
require('database.php');


if (isset($_POST['submit'])) {

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'museum-imgs/' . $filename;

    move_uploaded_file($tempname, $folder);


    $m_name = htmlspecialchars($_POST["m_name"]);
    $about = htmlspecialchars($_POST['about']);
    $work = htmlspecialchars($_POST['work']);
    $location = htmlspecialchars($_POST['location']);



    $quer = "INSERT INTO `museums` (`m_name`,`about`,`work`,`location`,`m_img`) VALUES ('$m_name','$about','$work','$location','$folder')";
    $nfz = mysqli_query($mysqli, $quer);
}
?>