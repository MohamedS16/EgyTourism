<?php 
require('database.php');

$unname = $_GET['username'];

// session_start();
// $logg = $_SESSION['login'] = "True";
$uname = $_SESSION['username'] = $unname ;

$proquery = "SELECT * FROM `register` WHERE `userName` = '$unname' ";
$dopro = mysqli_query($mysqli,$proquery);

$profd = mysqli_fetch_array($dopro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>My Profile</title>
</head>
<style>
    form input{
        pointer-events: none;

    }
</style>
<body>
<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>
    

    <section class="main-profile">
        <h1 class="sec-title">Profile</h1>
        
        <div class="profile">

            <div class="profile-data">
                <form action="">

                    <div class="from-part">    
                        <label for="">Username</label>
                        <input type="text" name="" id="" readonly value="<?php echo $profd['userName'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Name</label>
                        <input type="text" name="" id="" readonly value="<?php echo $profd['fullName'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Email</label>
                        <input type="email" name="" id="" readonly value="<?php echo $profd['email'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Country</label>
                        <input type="text" name="" id="" readonly value="<?php echo $profd['country'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Mobile Number</label>
                        <input type="number" name="" id="" readonly value="<?php echo $profd['mobile'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Card Number</label>
                        <input type="number" name="" id="" readonly value="<?php echo $profd['cardno'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">Expire Date</label>
                        <input type="month" name="" id="" readonly value="<?php echo $profd['exp'] ?>">
                    </div>

                    <div class="from-part">    
                        <label for="">CVV</label>
                        <input type="tel"  maxlength="3" name="cvv" id="cvv" min="0" max="999" readonly value="<?php echo $profd['cvv'] ?>" >
                    </div>

                        
                        <a href="editprofile.php?username=<?php echo $unname ?>"> Edit Profile</a>
                </form>
            </div>
        </div>
    </section>



    <?php include('footer.php') ?>

</body>
</html>