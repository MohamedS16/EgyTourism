<?php 
require('database.php');
if(isset($_POST['submit'])){
    $msgName = htmlspecialchars($_POST['msgName']);
    $msgEmail = htmlspecialchars($_POST['msgEmail']);
    $msg = htmlspecialchars($_POST['msg']);
    $insert = "INSERT INTO `contact`(`name`,`email`,`message`) VALUES ('$msgName','$msgEmail','$msg')";
    $excut = mysqli_query($mysqli,$insert);

    if($excut){
        echo '<div class="success"><div class="contt"> <p> Message Sent Successfully </p> <a href="contact.php"> Done </a></div> </div>';
    }
    else{
        echo '<div class="success"><div class="contt"> <p> Sorry Message Not Sent, Try Again Later </p> <a href="contact.php"> Done </a></div> </div>';
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Contact Us</title>
</head>
<body>
<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>


    <section class="contact">
        <div class="contactdark">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Feel Free To Contact Us with any message you have to us and we will reply to you as soon as possible</p>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icon">
                            <img src="images/location.png" alt="">
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Talaat Harb Square, Tahrir, Cairo, Egypt.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <img src="images/telephone-call.png" alt="">
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+201122342293</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <img src="images/email.png" alt="">
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>EgyTouris@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form action="contact.php" method="post">
                        <h2>Send a Message</h2>
                        <div class="inputbox">
                            <input type="text" name="msgName" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="msgEmail" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <textarea name="msg" required="required"></textarea>
                            <span>Type Your Message .....</span>
                        </div>
                        <div class="inputbox">
                            <input type="submit" name="submit" value="Send">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

</body>

</html>