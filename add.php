<?php
require("database.php");
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $partId = $_GET['edit'];
    $selectPart = "SELECT * FROM `parts`
    WHERE `id`='$partId'";
    $runPart = mysqli_query($mysqli, $selectPart);
    $fetchPart = mysqli_fetch_array($runPart);
    $updatedImg=$fetchPart['image'];
}

if (isset($_POST["update"])) {
    $name = htmlspecialchars($_POST["name"]);
    $about = htmlspecialchars($_POST["about"]);
    $year = htmlspecialchars($_POST["year"]);
    $era = htmlspecialchars($_POST["era"]);
    $museum = htmlspecialchars($_POST["museum"]);
    $type = htmlspecialchars($_POST["type"]);
    $other = htmlspecialchars($_POST["other"]);
if(!empty($_FILES["image"]["name"])){
    if ($_FILES["image"]["error"] === 4) {
        echo "<script> alert('Image Doesn't Exist')</script>";
    } else {
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpname = $_FILES["image"]["tmp_name"];
        $validimageextension = ['jpg', 'jpeg', 'png'];
        $imageextension = explode('.', $filename);
        $imageextension = strtolower(end($imageextension));
    }

    if (!in_array($imageextension, $validimageextension)) {
        echo "<script> alert('Invalid Extension')</script>";
    } else if ($filesize > 10000000) {
        echo "<script> alert('Image is large')</script>";
    } else {
        $newimagename = uniqid();
        $newimagename .= '.' . $imageextension;
        $upload=move_uploaded_file($tmpname, 'uimg/' . $newimagename);
    }
}else{
        $newimagename=$fetchPart['image'];
}

        $insert = "UPDATE `parts` SET `name`='$name' , `about`='$about' , `year`='$year' , `era`='$era' , `museum`='$museum', `type`='$type', `other`='$other', `image`='$newimagename' WHERE`id`='$partId'";
        $result = mysqli_query($mysqli, $insert);

        header("location: addmore.php?edit=$partId");
    }

if (isset($_POST["submit"])) {
    $update = false;
    $name = htmlspecialchars($_POST["name"]);
    $about = htmlspecialchars($_POST["about"]);
    $year = htmlspecialchars($_POST["year"]);
    $era = htmlspecialchars($_POST["era"]);
    $museum = htmlspecialchars($_POST["museum"]);
    $type = htmlspecialchars($_POST["type"]);
    $other = htmlspecialchars($_POST["other"]);

    if ($_FILES["image"]["error"] === 4) {

        echo "<script> alert('Image Doesn't Exist')</script>";
    } else {
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpname = $_FILES["image"]["tmp_name"];

        $validimageextension = ['jpg', 'jpeg', 'png'];
        $imageextension = explode('.', $filename);
        $imageextension = strtolower(end($imageextension));
    }

    if (!in_array($imageextension, $validimageextension)) {
        echo "<script> alert('Invalid Extension')</script>";
    } else if ($filesize > 10000000) {
        echo "<script> alert('Image is large')</script>";
    } else {
        $newimagename = uniqid();
        $newimagename .= '.' . $imageextension;

        move_uploaded_file($tmpname, 'uimg/' . $newimagename);

        $insert = "INSERT INTO `parts`(`name`,`about`, `year`, `era`, `museum`, `type`, `other`, `image`) VALUES ('$name','$about','$year','$era','$museum','$type','$other','$newimagename')";
        $result = mysqli_query($mysqli, $insert);

        $hatid = mysqli_query($mysqli,"select id from parts order by id desc limit 1");
        $alid = mysqli_fetch_array($hatid);
        $realid= $alid['id'];
        
        header('location: addmore.php?id='.$realid);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">

    <title><?php if($update){echo"Update";}else{echo"Add";} ?> Part</title>
</head>
<body>
    <?php include('adminnav.php') ?>
    
    <div class="allcon">

    <form method="post" id="2" enctype="multipart/form-data">

        <div class="fpart fname">
            <label for="name"> Part Name :</label>
            <input type="text" name="name" id="name" placeholder="Enter Part Name" value="<?php if($update){echo $fetchPart['name'];} ?>"required>
        </div>

        <div class="fpart fabout">
            <label for="about"> About Part :</label>
            <input type="text" name="about" id="about" placeholder="Enter info about the part" value="<?php if($update){echo $fetchPart['about'];} ?>" required>
        </div>
<?php 
if($update){
    ?>
    <img style="width:100px; height:100px; margin:0 auto;" src="uimg/<?php echo$fetchPart['image']; ?>" alt="">
    <?php
}
?>
        <div class="fpart fimage">
            <label for="image"> Part Image :</label>
            <input type="file" name="image" id="image" <?php if(!$update){ ?> required <?php } ?> accept="image/*">
        </div>

        <div class="fpart fyear">
            <label for="year"> Part year :</label>
            <input type="text" name="year" id="year" value="<?php if($update){echo $fetchPart['year'];} ?>" placeholder="Enter Part year">
        </div>

        <div class="fpart fera">
            <label for="era"> Part era :</label>
            <input type="text" name="era" id="era" placeholder="Enter Part era" value="<?php if($update){echo $fetchPart['era'];} ?>">
        </div>

        <div class="fpart fmuseum">
            <label for="museum"> Part museum :</label>
            <!-- <input type="text" name="museum" id="museum" placeholder="Enter Part museum"> -->
            <select name="museum" required form="2" id="museum">
            <?php  if($update){ ?><option value="<?php echo $fetchPart['museum']; ?>"><?php echo $fetchPart['museum']; ?></option> <?php } ?>
                <?php $que = "SELECT `m_name` FROM `museums`";
                $museumss = mysqli_query($mysqli, $que);

                

                foreach ($museumss as $mues) {

                    echo ('<option>' . $mues['m_name'] . '</option>');
                }

                ?>

            </select>
        </div>

        <div class="fpart ftype">
            <label for="type"> Part type :</label>
            <!-- <input type="text" name="type" id="type" placeholder="Enter Part type" required> -->
            <select name="type" required form="2" id="type">
               <?php  if($update){ ?> <option value="<?php echo $fetchPart['type']; ?>"><?php echo $fetchPart['type']; ?></option><?php } ?>
                <option>Islamic</option>
                <option>Coptic</option>
                <option>Pharonic</option>


            </select>
        </div>

        <div class="fpart fother">
            <label for="other"> other details :</label>
            <input type="text" name="other" id="other" placeholder="Enter Any Other Details" value="<?php if($update){echo $fetchPart['other'];} ?>" required>
        </div>

        <div class="submit">
       <?php if($update){ ?>     
            <input type="submit" name="update" value="Update">
        <?php  }else{ ?><input type="submit" name="submit">
        <?php } 
        
        ?>
        </div>

    </form>


</div>

</body>

</html>