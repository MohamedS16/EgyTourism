<?php 
require('database.php');

$ktaa = "SELECT `id`,`name` From `parts`";
$partsi = mysqli_query($mysqli,$ktaa);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tablepremium.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Premium Table Content</title>
</head>
<body>
<table border="1px"> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Images</th>
            <th>Video</th>
            <th>Secondary Video</th>
            <th>Third Video</th>
            <th>Audio</th>
            <th>Secondary Audio</th>
            <th>Panorama Image</th>
            <th>Edit</th>
        </tr>

        <?php foreach($partsi as $part){
            $rkm = $part['id'];
            $swr = "SELECT images From swr WHERE part_id = '$rkm'";
            $swri = mysqli_query($mysqli,$swr);


            $prem = "SELECT * From `premium` WHERE part_id = '$rkm'";
            $pconn = mysqli_query($mysqli,$prem);
            $premii = mysqli_fetch_array($pconn);
            ?>

            <tr>
                <td><?php echo $part['id'] ?></td>
                <td><?php echo $part['name'] ?></td>
                <td> <?php foreach($swri as $sora){
                    echo '<img src="morei/'.$sora['images'].'">';
                } ?></td>
                <td><?php echo '<video src="'. $premii['video'].'" muted ></video>' ?></td>
                <td><?php echo '<video src="'. $premii['f_video'].'" muted ></video>' ?></td>
                <td><?php echo '<video src="'. $premii['s_video'].'" muted ></video>' ?></td>
                <td><?php echo '<audio src="'. $premii['audio'].'" controls ></audio>' ?></td>
                <td><?php echo '<audio src="'. $premii['s_audio'].'" controls ></audio>' ?></td>
                <td><?php echo '<img src="'.$premii['pano_img'].'">' ?></td>
                <td class="edd"><a href="addpremium.php?edit=<?php echo$part['id']; ?>">Edit</a>  </td>
            </tr>
        <?php } ?>
</body>
</html>