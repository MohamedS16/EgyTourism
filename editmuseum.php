<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editmuseum.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">
    <title>Edit Museum</title>
</head>
<body>
<?php include('adminnav.php') ?>

<div class="dod">
<?php 
    require('database.php');
    $mueseumid = $_GET['museumid'];

    $hat = "SELECT * from `museums` where `m_id` = '$mueseumid' ";
    $dos = mysqli_query($mysqli,$hat);
    $mues = mysqli_fetch_array($dos);
    
?>

    <form action="editmuseum.php?museumid=<?php echo $mueseumid ?>" method="post">

    <div class="inp">
        <label for="name">Musem Name</label>
        <input type="text" id="name" name="m_name" value="<?php echo $mues['m_name'] ?>">
    </div>

    <div class="inp">
        <label for="about"> About Museum</label>
        <input type="text" id="about" name="about" value="<?php echo $mues['about'] ?>">
    </div>

    <div class="inp">
        <label for="work">Working Hours</label>
        <input type="text" id="work" name="work" value="<?php echo $mues['work'] ?>">
    </div>

    <div class="inp">
        <label for="location"> Location </label>
        <input type="text" id="location" name="location" value="<?php echo $mues['location'] ?>">
    </div>



    <input type="submit" value="Update Museum" name="submit">
    </form>

    <form action="editmuseum.php?museumid=<?php echo $mueseumid ?>" method="post" enctype="multipart/form-data">
        <div   div class="fpart fimage">
            <label for="image"> Part Image :</label>
            <input type="file" name="image" id="image"  accept="image/*" >
        </div>

        <input type="submit" name="subimage" value="Update Image">
    </form>

    <?php  ?>
    </div>
</body>
</html>


<?php 
    if(isset($_POST['submit'])){
    $mname = htmlspecialchars($_POST["m_name"]);
    $about = htmlspecialchars($_POST["about"]);
    $workk = htmlspecialchars($_POST["work"]);
    $loc = htmlspecialchars($_POST["location"]);

    $edd = "UPDATE `museums` SET `m_name` = '$mname', `about` = '$about', `work` = '$workk', `location` = '$loc' where `m_id` = '$mueseumid'";

    $ress = mysqli_query($mysqli,$edd);

    

    echo '<div class="does"> <div class="cont"><p> Successfully Updated </p> <a href="viewmuseums.php"> Ok </a></div> </div>';


    }
?>

<?php 
    if(isset($_POST['subimage'])){

        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = 'museum-imgs/'.$filename;
    
       $mans=  move_uploaded_file($tempname,$folder);




    $eddd = "UPDATE `museums` SET `m_img` = '$folder' where `m_id` = '$mueseumid' ";

    $resss = mysqli_query($mysqli,$eddd);

    

    echo '<div class="does"> <div class="cont"><p> Image Successfully Updated </p> <a href="viewmuseums.php"> Ok </a></div> </div>';
    }
?>


