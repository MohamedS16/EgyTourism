<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/offers.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Offers</title>
</head>
<body>
<?php 
    $navp = 'navscroll';
    include('nav.php') ;?> 

<div class="heading"><h1>Our offers</h1></div>
    <section class="offers">
        <div class="big-offers">
            <div class="card">
                <div class="image">
                    <img src="images/price-tag.png" alt="">
                </div>
                <div class="data">
                    <h3>Basic Subscription</h3>
                    <hr>
                    <h4>Benefits</h4>
                    <p>Subscription for only 1 Month</p>
                    <p>Subscription for 9.99$ (180 EGP)</p>
                    <p>3D Photos</p>
                    <p>Videos</p>
                    <a href="register.php">Subscribe</a>
                </div>
            </div>
                <div class="card">
                    <div class="image">
                        <img src="images/offer.png" alt="">
                    </div>
                    <div class="data">
                        <h3>Premium Subscription</h3>
                        <hr>
                        <h4>Benefits</h4>
                        <p>Subscription for only 1 Year</p>
                        <p>Subscription for 99.99$ (1850 EGP)</p>
                        <p>3D Photos</p>
                        <p>Videos</p>
                        <a href="register.php">Subscribe</a>
                    </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

</body>
</html>