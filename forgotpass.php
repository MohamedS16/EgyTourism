<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forgotpass.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Forgot Password</title>
</head>
<body>
<?php 
require('database.php');

$notfound = '';
if(isset($_POST['submit'])){
    $inpp = htmlspecialchars($_POST['forg']);
    $hat = "SELECT `userName`,`email` FROM `register` Where `userName` = '$inpp' OR `email` = '$inpp'";
    $nafz = mysqli_query($mysqli,$hat);
    $arr = mysqli_fetch_all($nafz,MYSQLI_ASSOC);

    if(!empty($arr)){
        echo '<div class="modal"><div class="text"><p>Email Sent Successfully</p><p>Check Your Mail for Password Reset.</p><a href="index.php" class="doess"> Done </a></div></div>';
    }
    else if(empty($arr)){
        $notfound = "User Not Found";
    }};
?>

<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>

    <section class="allpage">
        <form action="forgotpass.php" method="POST">
            <div class="formin">
            <label for="forg"> Enter Your Email or Username</label>
            <input type="text" name="forg" id="forg" >
            <?php echo '<p class="error">'.$notfound.'</p>' ?>

            </div>

            <input type="submit" value="Submit" name="submit">
        </form>
    </section>
    <?php include('footer.php') ?>

</body>
</html>