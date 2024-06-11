<?php
require("database.php");
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $partId = $_GET['edit'];
    $selectPart = "SELECT * FROM `premium`
    WHERE `part_id`='$partId'";
    $runPart = mysqli_query($mysqli, $selectPart);
    $fetchPart = mysqli_fetch_array($runPart);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addpremium.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">

    <title><?php if ($update) {
                echo "Update";
            } else {
                echo "Add";
            } ?> Premium Content</title>
</head>

<body>
<?php include('adminnav.php') ?>
<div class="bod">
    <form method="post" enctype="multipart/form-data" class="fromm">
        <div class="datacont">
            <div class="videoo">
                <h2>Videos</h2>
                <div class="par">
                    <?php if ($update) { ?>
                        <video src="<?php echo $fetchPart['video']; ?>"></video>
                    <?php } ?>
                    <label for="mvid"> Add Main Video </label>
                    <input type="file" name="file" id="mvid" <?php if (!$update) { ?>required<?php } ?> accept="video/*">
                </div>
                <div class="par">
                    <?php if ($update) { ?>
                        <video src="<?php echo $fetchPart['f_video']; ?>"></video>
                    <?php } ?>
                    <label for="svid">Add Secondary Video (Optional) </label>
                    <input type="file" name="file1" id="svid" accept="video/*">
                </div>
                <div class="par">
                    <?php if ($update) { ?>
                        <video src="<?php echo $fetchPart['s_video']; ?>"></video>
                    <?php } ?>
                    <label for="tvid">Add Third Video (Optional) </label>
                    <input type="file" name="file2" id="tvid" accept="video/*">
                </div>
            </div>
            <div class="audioo">
            <h2>Audios</h2>
                <div class="par">
                    <?php if ($update) { ?>
                        <audio src="<?php echo $fetchPart['audio']; ?>" controls></audio>
                    <?php } ?>

                    <label for="maud">Add Main Audio</label>
                    <input type="file" name="aud" id="maud" accept="audio/*" <?php if (!$update) { ?>required<?php } ?>>
                </div>
                <div class="par">

                    <?php if ($update) { ?>
                        <audio src="<?php echo $fetchPart['s_audio']; ?>" controls></audio>
                    <?php } ?>
                    <label for="saud">Add Secondary Audio (Optional) </label>
                    <input type="file" name="aud2" id="saud" accept="audio/*">
                </div>
            </div>
            <div class="panoo">
            <h2>Panoramic Image</h2>

                <div class="par">
                    <?php if ($update) { ?>
                        <img src="<?php echo $fetchPart['pano_img']; ?>" alt="">
                    <?php } ?>
                    <label for="pano">Add A Panoramic Image</label>
                    <input type="file" name="pano" id="pano" accept="image/*">
                </div>
            </div>
        </div>
        <div class="subb">
            <?php if ($update) { ?>
                <input type="submit" name="update" value="Update">
            <?php  } else { ?>
                <input type="submit" name="submit" value="UPLOAD">
            <?php } ?>
        </div>
    </form>
</div>
</body>

</html>

<?php

// $gid = "SELECT id FROM parts";

// $res = mysqli_query($mysqli, $gid);

// $pid = mysqli_fetch_all($res, MYSQLI_NUM);

// $hi = count($pid);

// $hh = $hi--;

// $jj = $pid[$hi][0];




if (isset($_POST['update'])) {
    if (!empty($_FILES['file']['name'])) {
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = 'videos/' . $filename;
        move_uploaded_file($tempname, $folder);
    } else {
        $folder = $fetchPart['video'];
    }
    if (!empty($_FILES['file1']['name'])) {
        $filenameone = $_FILES['file1']['name'];
        $tempnameone = $_FILES['file1']['tmp_name'];
        $folderone = 'videos/' . $filenameone;
        move_uploaded_file($tempnameone, $folderone);
    } else {
        $folderone = $fetchPart['f_video'];
    }
    if (!empty($_FILES['file2']['name'])) {
        $filenametwo = $_FILES['file2']['name'];
        $tempnametwo = $_FILES['file2']['tmp_name'];
        $foldertwo = 'videos/' . $filenametwo;
        move_uploaded_file($tempnametwo, $foldertwo);
    } else {
        $foldertwo = $fetchPart['s_video'];
    }
    if (!empty($_FILES['aud']['name'])) {
        $aud = $_FILES['aud']['name'];
        $tempnameaud = $_FILES['aud']['tmp_name'];
        $folderaud = 'audio/' . $aud;
        move_uploaded_file($tempnameaud, $folderaud);
    } else {
        $folderaud = $fetchPart['audio'];
    }

    if (!empty($_FILES['aud2']['name'])) {
        $filenameaudt = $_FILES['aud2']['name'];
        $tempnameaudt = $_FILES['aud2']['tmp_name'];
        $folderaudt = 'audio/' . $filenameaudt;
        move_uploaded_file($tempnameaudt, $folderaudt);
    } else {
        $folderaudt = $fetchPart['s_audio'];
    }
    if (!empty($_FILES['pano']['name'])) {
        $filenamepano = $_FILES['pano']['name'];
        $tempnamepano = $_FILES['pano']['tmp_name'];
        $folderpano = 'morei/' . $filenamepano;
        move_uploaded_file($tempnamepano, $folderpano);
    } else {
        $folderpano = $fetchPart['pano_img'];
    }
    $sql = "UPDATE `premium` SET`video`='$folder',`f_video`='$folderone',`s_video`='$foldertwo',`audio`='$folderaud',`s_audio`='$folderaudt',`pano_img`='$folderpano'WHERE`part_id`='$partId'";
    if (!mysqli_query($mysqli, $sql)) {
        echo "<script> window.alert('Fail')</script>";
    } else {
        echo '<div class="ssu"><div class="sucont"><p>Part Successfully Updated</p><a href="table.php">Done</a></div></div>';

    };
}

if (isset($_POST['submit'])) {
    $jj = $_GET['id'] ;
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    $folder = 'videos/' . $filename;

    move_uploaded_file($tempname, $folder);


    $filenameone = $_FILES['file1']['name'];
    $tempnameone = $_FILES['file1']['tmp_name'];
    $folderone = 'videos/' . $filenameone;

    move_uploaded_file($tempnameone, $folderone);

    $filenametwo = $_FILES['file2']['name'];
    $tempnametwo = $_FILES['file2']['tmp_name'];
    $foldertwo = 'videos/' . $filenametwo;

    move_uploaded_file($tempnametwo, $foldertwo);


    $aud = $_FILES['aud']['name'];
    $tempnameaud = $_FILES['aud']['tmp_name'];
    $folderaud = 'audio/' . $aud;

    move_uploaded_file($tempnameaud, $folderaud);


    $filenameaudt = $_FILES['aud2']['name'];
    $tempnameaudt = $_FILES['aud2']['tmp_name'];
    $folderaudt = 'audio/' . $filenameaudt;

    move_uploaded_file($tempnameaudt, $folderaudt);

    $filenamepano = $_FILES['pano']['name'];
    $tempnamepano = $_FILES['pano']['tmp_name'];
    $folderpano = 'morei/' . $filenamepano;

    move_uploaded_file($tempnamepano, $folderpano);

    $sqll = "INSERT INTO `premium` (`part_id`,`video`,`f_video`,`s_video`,`audio`,`s_audio`,`pano_img`) VALUES ('$jj','$folder','$folderone','$foldertwo','$folderaud','$folderaudt','$folderpano') ";
    if (!mysqli_query($mysqli, $sqll)) {
        echo "<script> window.alert('Fail')</script>";
    } else {
        echo '<div class="ssu"><div class="sucont"><p>Part Successfully Added</p><a href="table.php">Done</a></div></div>';
    };
}


?>