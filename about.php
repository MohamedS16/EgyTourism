<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">
    <title>About-Us</title>
</head>

<body>

<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>

    <section class="main">
        <div class="main-content">
            <h1>About Us</h1>
            <div class="buttons">
                <p class="no-1">Who We Are</p>
                <p class="no-2">Our Goal</p>
                <p class="no-3">how to contact us</p>
            </div>
            <div class="about-us">
                <div class="content-img">
                    <img src="images/homebg.jpg" alt="">
                </div>
                <div class="discprition">
                    <h3 class="sectitle">WHO WE ARE?</h3>
                    <p class="sec-paragraph">
                    EgyTourism is web application that display information and historical details about monuments and Artifacts via panoramic photos, 3D Picture, videos ... every piece contain (picture, name, year, era, museum, type) so anyone visit our website know all the information from his place easily and also there a QR code in the museum that transfer to the website and listening all the information about the piece … in another meaning, make a free guide without tour guide
                    </p>
                </div>
            </div>
            <div class="vision remove">
                <div class="discprition">
                    <h3 class="sectitle">Our Goal</h3>
                    <p class="sec-paragraph">
                    Our goal is to encourage more people around the world to visit Egypt by showing them the ancient parts in the form of photos and videos which will make them more curious to see them on reality and visit Egypt, we will also aim to make their trip to Egypt easier by letting them know the details of every piece in an easier and simpler way and by also recommending them transportations, restaurants, shops ...etc. which will make the tourists pleased and think of repeating the visit again. All these will lead to increasing and stimulating the tourism in Egypt.
                </div>
                <div class="content-img">
                    <img src="images/homebg.jpg" alt="">
                </div>
            </div>
            <div class="mission remove">
                <div class="content-img">
                    <img src="images/homebg.jpg" alt="">
                </div>
                <div class="discprition">
                    <h3 class="sectitle">HOW CAN I CONTACT YOU?</h3>
                    <p class="sec-paragraph"> You can freely contact us through our social media accounts or our number
                        that is written on
                        this website.
                        .</p>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <h1>Vision & Mission</h1>
        <div class="big-vision-mission">
            <div class="vision-part">
                <img src="images/icons/Icons/exhibition (1).png" alt="">
            <h3 class="sectitle">Our Vision</h3>
                <p class="sec-paragraph">-	Gathering some data of monuments pieces which needed to put on the website (name, picture, year, era, museum, type). <br>
-	Make agreement with museums in Cairo to put QR code of our website under every piece 
<br> -	We want to make all the tourists around the world see the Egyptian monuments from there place like being in the museum.
</p>
            </div>
            <div class="mission-part">
            <img src="images/icons/Icons/frame.png" alt="">
            <h3 class="sectitle">Our Mission</h3>
                <p class="sec-paragraph">Gathering videos and photo of all monuments pieces in Egypt and get all historical details about it to display on the website and make tourists see all this pieces easy.
introduce a new technology to the Egyptian Museums for fulfill desires and satisfy the visitor needs.
</p>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

    <script src="js/about.js"></script>
</body>

</html>