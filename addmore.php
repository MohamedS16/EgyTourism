<?php
require("database.php");
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $partId = $_GET['edit'];
    $selectPart = "SELECT * FROM `swr`
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
    <link rel="stylesheet" href="css/addmore.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/adminnav.css">
    <link rel="icon" href="images/cat.png">

    <title><?php if ($update) {
                echo "Update";
            } else {
                echo "Add";
            } ?> More Images</title>
</head>

<body>
    <?php include('adminnav.php') ?>

    <p class="succ">Part Successfully<?php if ($update) {
                            echo " Updated";
                        } else {
                            echo " Added";
                        } ?></p>
                        <div class="coll">
   
    <div>
        <?php
        if ($update) {
            foreach ($runPart as $sora) {
                echo '<img src="morei/' . $sora['images'] . '">';
            }

        ?>
    </div>
<?php } ?>
<form method="post" enctype="multipart/form-data">
<p >Let's <?php if ($update) {
                            echo " Updated";
                        } else {
                            echo " Add More";
                        } ?> Images For The Part</p>
    <?php
    if ($update) {
    ?>
        <div>
            <input type="radio" name="option" value="add" id="add" required>
            <label for="add">Add</label>
            <input type="radio" name="option" value="update" id="update" required>
            <label for="update">Update</label>
        </div>
    <?php } ?>
    <div class="formin">
    <label>Select Image Files to Upload:</label>
    <input type="file" name="files[]" multiple required accept="image/*"></div>
    <?php if ($update) { ?>
        <input type="submit" name="update" value="Update">
    <?php } else { ?>
        <input type="submit" name="submit" value="UPLOAD">
    <?php } ?>
    </div>
</form>

</body>

</html>

<?php
// Include the database configuration file 
// $gid = "SELECT id FROM parts";

// $res = mysqli_query($mysqli, $gid);

// $pid = mysqli_fetch_all($res, MYSQLI_NUM);

// $hi = count($pid);

// $hh = $hi--;

// $jj = $pid[$hi][0];



if (isset($_POST['update'])) {
    // File upload configuration 
    $targetDir = "morei/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);
    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server 
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql 
                    $insertValuesSQL .= "('" . $fileName . "', $relid),";
                } else {
                    $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                }
            } else {
                $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
            }
        }

        // Error message 
        $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
        $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
        $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database 
            foreach ($fileNames as $data) {
                if ($_POST['option'] == "add") {
                    $insert = $mysqli->query("INSERT INTO swr (images,part_id) VALUES ('$data','$partId')");
                    if ($insert) {
                        $statusMsg = "Files are uploaded successfully." . $errorMsg;
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }
            }
            if ($_POST['option'] == "update") {
                $delete = $mysqli->query("DELETE FROM `swr` WHERE `part_id`='$partId'");
                foreach ($fileNames as $data) {
                    $insert = $mysqli->query("INSERT INTO swr (images,part_id) VALUES ('$data','$partId')");
                    if ($insert) {
                        $statusMsg = "Files are uploaded successfully." . $errorMsg;
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }
            }
        } else {
            $statusMsg = "Upload failed! " . $errorMsg;
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

    header("location: addpremium.php?edit=$partId");
}

if (isset($_POST['submit'])) {
    $relid = $_GET['id'] ;

    // File upload configuration 
    $targetDir = "morei/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);
    if (!empty($fileNames)) {
        foreach ($_FILES['files']['name'] as $key => $val) {
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server 
                if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql 
                    $insertValuesSQL .= "('" . $fileName . "', $relid),";
                } else {
                    $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                }
            } else {
                $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
            }
        }

        // Error message 
        $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
        $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
        $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database 
            $insert = $mysqli->query("INSERT INTO swr (images,part_id) VALUES $insertValuesSQL");
            if ($insert) {
                $statusMsg = "Files are uploaded successfully." . $errorMsg;
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = "Upload failed! " . $errorMsg;
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

    header('location: addpremium.php?id='.$relid);
}

?>