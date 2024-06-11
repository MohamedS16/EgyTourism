<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>EgyTourism</title>

</head>
<body>
    <?php
    $navp = 'navdefault';
    include('nav.php');
    ?>

    <section class="page-content">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="layer"></div>
                <img src="ancient-images/pexels-rachel-claire-4577718.webp">
                <div class="text">
                    <h1>Get attached to History</h1>
                    <p>Our goal is to encourage more people around the world to visit Egypt by showing them the ancient parts in the form of photos and videos which will make them more curious to see them on reality and visit Egypt.</p>
                    <div class="cover-btn ">
                        <a class="kmore" href="#2"> Discover </a>
                    </div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="layer"></div>
                <img src="ancient-images/pexels-kalvin-sainz-1334897.webp">
                <div class="text">
                    <h1> EgyTourism</h1>
                    <p>That will make the tourists pleased and think of repeating the visit again. All these will lead to increasing and stimulating the tourism in Egypt. </p>
                    <div class="cover-btn ">
                        <a class="kmore" href="#2"> Discover </a>

                    </div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="layer"></div>
                <img src="ancient-images/pexels-antonio-filigno-10287305.webp">
                <div class="text">
                    <h1>EgyTourism</h1>
                    <p>we will also aim to make their trip to Egypt easier by letting them know the details of every piece in an easier and simpler way and by also recommending them transportations, restaurants, shops ...etc. </p>
                    <div class="cover-btn ">
                        <a class="kmore" href="#2"> Discover </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="egy" id="2">
            <div class="ads">
                <p>ADS</p>
            </div>
            <div class="egycont">
                <div class="imgcont wow fadeInUpBig">
                    <img src="ancient-images/pexels-roxanne-shewchuk-2183927.webp" alt="">
                </div>
                <div class="text wow fadeInDownBig">
                    <h2> Discover Egypt</h2>
                    <p>EgyTourism is a website that provides information and historical details about monuments and Artifacts via panoramic and 3D picture, videos... every piece contains (picture, name, year, era, museum, type) so that you can know all the information about this piece easily.
                        <br><br>you can scan the QR code of this piece that will redirect you to that part page in our website that you will find all the part details, images, videos, panoramic 360 images and audio explaining the part details.
                    </p>
                </div>
            </div>
            <div class="ads">
                <p>ADS</p>
            </div>
        </section>

        <section class="services">
            <h2 class="sec-title">Our Services</h2>

            <div class="service-container">
                <div class="service wow fadeInLeftBig">
                    <img src="images/hieroglyph.png" alt="">
                    <p>Discover Ancient Egypt</p>
                </div>
                <div class="service wow fadeInUpBig">
                    <img src="images/virtual-tour.png" alt="">
                    <p>Listen To Voice Records</p>
                </div>
                <div class="service wow fadeInDownBig">
                    <img src="images/multimedia-player.png" alt="">
                    <p>Buy Account and pay money</p>
                </div>
                <div class="service wow fadeInRightBig">
                    <img src="images/airplane-ticket.png" alt="">
                    <p>Reserve Flights and come </p>
                </div>
            </div>

        </section>

        <section class="video-sec" id="3">
            <div class="video-bg">
                <video src="Egytourism-Vid.mp4" autoplay muted loop class="video-bg"></video>
            </div>
            <div class="video-layer">
                <div class="vid-connt">
                    <div class="video-text">
                        <h2 class="sec-title">Discover Egypt</h2>
                        <p>Egyptian civilization developed along the Nile River in large part because the river’s annual flooding ensured reliable, rich soil for growing crops.
                            Repeated struggles for political control of Egypt showed the importance of the region's agricultural production and economic resources.
                        </p>
                    </div>
                    <div class="vid-btn">
                        <a href="#3" class="kmore watch"><img src="images/play-button.png" alt=""> Watch Video </a>
                    </div>
                </div>
            </div>

            <div class="modal hide">
                <img src="images/cancel.png" alt="" class="closev">
                <video src="Egytourism-Vid.mp4" controls></video>
            </div>
        </section>

        <section class="gallery ">
            <h2 class="sec-title"> Gallery </h2>
            <div class="images">
                <img src="ancient-images/pexels-alex-azabache-3214970.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-alex-azabache-3214972.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-antonio-filigno-10287305.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-antonio-filigno-10287306.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-yasmine-qasem-2034684.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-spencer-davis-4353815.webp" alt="" class="gsora" loading="lazy">
                <img src="ancient-images/pexels-roxanne-shewchuk-2184580.webp" class="gsora" loading="lazy">
                <img src="images/homebg.jpg" alt="" class="gsora" loading="lazy">
            </div>
        </section>
    </section>

    <?php include('footer.php'); ?>

    <script>
        var navbar = document.querySelector('.navbar')
        window.addEventListener('scroll', function() {
            navbar.classList.toggle('navdefault', window.scrollY <= 100)
            navbar.classList.toggle('navscroll', window.scrollY > 100)
        })

        // POP UP VIDEO 

var watch = document.querySelector('.watch');
var modal = document.querySelector('.modal');
var closev = document.querySelector('.closev');

watch.addEventListener('click', function(){
    modal.classList.remove('hide')
});

closev.addEventListener('click', function(){
    modal.classList.add('hide');
    var iframes = modal.getElementsByTagName('video');
    if (iframes != null){
        for(let i = 0; i < iframes.length; i++){
            const iframe = iframes[i];
            iframe.src = iframe.src;
        }
    }
});

    </script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        var slides = document.getElementsByClassName("mySlides");
        function showSlides(n) {
            var i;
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3500);
        }
    </script>
</body>
</html>