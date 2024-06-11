<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/discover.css"> 
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title> Discover </title>
</head>

<body>

<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>


    <section class="cat-sec">

        <div class="cats">

                    <?php
            require('database.php');

            $quer = "SELECT `m_id`,`m_name`,`m_img` FROM `museums`";
            $doo = mysqli_query($mysqli,$quer);

            // $mus = mysqli_fetch_assoc($doo);

            foreach($doo as $mu){
                ?>'
                <a href="category.php?museum=<?php echo $mu['m_id']?>" class="cat"> 
                <div class="mueseum"><img class="muimg" src="<?php echo$mu['m_img']?>"> </div> <p class="museum-name"><?php echo$mu['m_name']?></p></a>'  
        <?php
            }



         ?>
        
        </div>

        <div class="layer"></div>

    </section>


<?php include('footer.php'); ?>
    

    
</body>
</html>