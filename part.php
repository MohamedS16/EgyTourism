<?php
require('database.php');
$idd = $_GET['id'];
$res = "SELECT * FROM parts Where id = $idd";
$conn = mysqli_query($mysqli, $res);
$partsi = mysqli_fetch_assoc($conn);

$gal = "SELECT images from `swr` where part_id = $idd";
$galresult = mysqli_query($mysqli, $gal);
$gali = mysqli_fetch_assoc($galresult);
$galnum = mysqli_num_rows($galresult);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/part.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pannellum.css" />
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title><?php echo $partsi['name'] ?></title>
</head>
<style>
    #panorama {
        height: 500px;
        width: 90%;
        min-width: 400px;
    }

    .panorama {
        width: 50%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 0;
    }
</style>
<body>
    <?php
    $navp = 'navscroll';
    include('nav.php'); ?>

    <div class="main">
        <div class="sora">
            <div class="ss">
                <img src="<?php echo 'uimg/' . $partsi['image'] ?>" alt="" class="">
            </div>
            <div class="bord"></div>
        </div>
        <div class="data">
            <h2 class="pname"><?php echo $partsi['name'] ?></h2>
            <p class="txt"><?php echo $partsi['about'] ?></p>
            <br>
            <p class="txt"><?php echo $partsi['other'] ?></p>

            <div class="extra">

                <P class="txt">Museum : <?php echo $partsi['museum'] ?></p>
                <p class="txt">Year : <?php echo $partsi['year'] ?></p>
                <p class="txt">Era : <?php echo $partsi['era'] ?></p>
                <p class="txt">Type : <?php echo $partsi['type'] ?></p>

            </div>
        </div>
    </div>

    <!-- Gallery Section -->

    <div class="gallery">
        <div class="gal-imgs">
            <?php if ($galnum > 4) {
                echo '<div class="nxt"><i>&#10095;</i></div>';
            } else {
            } ?>
            <div class="gal-swr">
                <?php foreach ($galresult as $gal) {
                    echo '<a href="morei/' . $gal['images'] . '" data-lightbox="gall"><img src="morei/' . $gal['images'] . '" class="imgal"></a> ';
                } ?>
            </div>
            <?php if ($galnum > 4) {
                echo '<div class="prev"><i>&#10094;</i></div>';
            } else {
            } ?>
        </div>
    </div>

    <!-- Get the premium table -->

    <?php

    $vid = "SELECT * from `premium` where part_id = $idd";

    $vidresult = mysqli_query($mysqli, $vid);
    $vidi = mysqli_fetch_assoc($vidresult);

    if (isset($_SESSION['login'])) {



        echo '<section class="premium-one">

            <!-- Panorama 360 deg Section -->
            <div class="panorama">
            <div id="panorama" class="pano-img"></div>
            </div>

            <div class="audio-container">
                <h3>It\'s Getting Easy and More Easier, Don\'t Like Reading ? Listen to the following Audios That Will Let You Know More About That Part.</h3>
                <p>English</p><audio src="' . $vidi['audio'] . '" controls></audio>';

        if ($vidi[0]['s_audio'] != "audio/") {
            echo '<p>Arabic</p><audio src="' . $vidi['s_audio'] . '" controls></audio>';
        }

        echo '</div></section>
                
                <section class="video-gallery">
                    <div class="container">
                    <div class="main-video">
                        <div class="video">
                            <video src="' . $vidi['video'] . '" controls></video>
                            <h3 class="titl"> 1. ' . $partsi['name'] . '</h3>
                        </div>
                    </div>
                    <div class="video-list">
                        <div class="vid active">
                            <video src="' . $vidi['video'] . '" muted ></video>
                            <h3 class="titl"> 1. ' . $partsi['name'] . ' </h3>
                    </div>
                
                ';

        if ($vidi['f_video'] != "videos/") {
            echo '<div class="vid"> <video src="' . $vidi['f_video'] . '" muted></video> <h3 class="titl"> 2. More About' . $partsi['name'] . '</h3> </div>';
        } else {
        }

        if ($vidi['s_video'] != "videos/") {
            echo '<div class="vid"> <video src="' . $vidi['s_video'] . '" muted></video> <h3 class="titl"> 3. More About' . $partsi['name'] . '</h3> </div>';
        } else {
        }

        echo '</div></div></section>';
    } else {
        echo '<div class="knowp"><p>You Can Know More About This Part By Watching vidoes, Panoramic images and audios <a href="offers.php">Know More</a></p></div>';
    }

    ?>

    <?php include('footer.php'); ?>

    <script src="js/lightbox-plus-jquery.min.js">

    </script>
    <script>
        lightbox.option({
            'alwaysShowNavOnTouchDevices': true,
            'disableScrolling': true,
            'wrapAround': true
        })
    </script>
    <script src="gallery.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script type="text/javascript" src="js/pannellum.js"></script>
    <script>
        pannellum.viewer('panorama', {
            "type": "equirectangular",
            "panorama": "<?php echo $vidi['pano_img'] ?>",
            "autoLoad": true
        });
    </script>

    <script>
        var nxt = document.querySelector('.nxt')
        var prev = document.querySelector('.prev')
        var gal = document.querySelector('.gal-swr')

        nxt.addEventListener('click', function() {
            gal.style.justifyContent = "flex-end"
        })

        prev.addEventListener('click', function() {
            gal.style.justifyContent = "flex-start"
        })
    </script>

    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let titl = document.querySelector('.main-video .titl');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let srcc = video.children[0].getAttribute('src');
                    mainVideo.src = srcc;
                    let text = video.children[1].innerHTML;
                    titl.innerHTML = text;
                }
            }
        })
    </script>
</body>
</html>