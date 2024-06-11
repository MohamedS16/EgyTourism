<?php
require('database.php');
$typee = $_GET['museum'];
    $ress = "SELECT * FROM `museums` WHERE `m_id` = '$typee'";
        $connn = mysqli_query($mysqli,$ress);
        $muse = mysqli_fetch_assoc($connn);
        $museName=$muse['m_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title> <?php echo $museName ?> </title>
</head>
<body>
<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>
    <section class="museum-data">
    <?php
        
    
        ?>

        <img src="<?php echo $muse['m_img'] ?>" alt="" class="museum-bg">
        <div class="museum-layer"></div>

        <div class="museum-text">
            <div class="text-right">
                <h1><?php echo $muse['m_name'] ?></h1>
                <p><?php echo $muse['about'] ?></p>
                <p>Working Hours : <?php echo $muse['work'] ?> </p>
            </div>
            <div class="text-left">
                
                <!-- <p> Location : <?php echo $muse['location'] ?> </p> -->
                <iframe src="<?php echo $muse['location'] ?>" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        
    </section>

    <section class="page">

        <div class="container">
        <?php 

        
            $res = "SELECT * FROM parts WHERE `museum` = '$museName'";
            $conn = mysqli_query($mysqli,$res);
            // $partsi = mysqli_fetch_assoc($conn);


        foreach($conn as $part){ ?>
            <a href="<?php echo 'part.php?id=' . $part['id'] ?>">
                <div class="parts" id="<?php echo htmlspecialchars($part['id']); ?>">
                    <div class="data">
                        <p class="name"><?php echo htmlspecialchars($part['name']); ?></p>
                        <a href="<?php echo 'part.php?id=' . $part['id'] ?>" class="bttn"> Show More</a>
                    </div>
                    <img src="uimg/<?php echo $part['image'] ?>" class="bgg">


                </div>
            </a>
                <?php } ?>
        </div>
    </section>


    <?php include('footer.php') ?>
    
    <script src="js/nav.js"></script>
</body>
</html>