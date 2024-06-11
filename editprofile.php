<?php
require('database.php');
$update=false;
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

    <title>Edit Profile</title>
</head>

<body>
    <?php
    $navp = 'navscroll';
    include('nav.php');
    
$unname = $_GET['username'];
$logg = $_SESSION['login'] = "True";
$uname = $_SESSION['username'] = $unname;
$proquery = "SELECT * FROM `register` WHERE `userName` = '$unname' ";
$dopro = mysqli_query($mysqli, $proquery);
$profd = mysqli_fetch_array($dopro);

    ?>

    <section class="main-profile">
        <h1 class="sec-title">Profile</h1>

        <div class="profile">

            <?php

            $passmatch = "";
            if (isset($_POST['change'])) {

                $_SESSION['pass']=$pass = htmlspecialchars($_POST['pass']);
                $_SESSION['cpass']=$cpass = htmlspecialchars($_POST['cpass']);
                $_SESSION['name']=$name = htmlspecialchars($_POST['name']);
                $_SESSION['mobile']=$mobile = htmlspecialchars($_POST['mobile']);
                $_SESSION['email']=$email = htmlspecialchars($_POST['email']);

                // echo$uname;
                
                
                if ($pass == $cpass) {
              
                ?>
                        <div class="modal">
                            <div class="modalc">
                                <form action="" method="post">
                                    <div class="from-part"><label for="pss"> Old Password</label>
                                        <input type="password" name="pss" id="pss">
                                    </div>
                                    <div class="from-part"><label for="cpass"> Confirm Password</label>
                                    <input type="password" name="cpss" id="cpss">
                                    </div>
                                    <input type="submit" name="update" value="Update">
                                    <!-- <button type="submit"name="update">Do</button> -->
                                </form>
                    
                            </div>
                        </div>
                <?php
                    } else {   //confirm
                        $passmatch = "Passwords Doesn't Match";
                    } 
                }

            if (isset($_POST["update"])) {
                $pss = htmlspecialchars($_POST['pss']);
                $cpss = htmlspecialchars($_POST['cpss']);
                $pass=$_SESSION['pass'];
                $name=$_SESSION['name'];
                $mobile=$_SESSION['mobile'];
                $email=$_SESSION['email'];
                if ($pss == $profd['password'] and $cpss == $pss) {
                    $quer = "UPDATE `register` SET `fullName` = '$name' , `email` = '$email' , `password` = '$pass' , `mobile` = '$mobile' WHERE `userName` = '$unname' ";
                    $doo = mysqli_query($mysqli, $quer);
if($doo){
                    echo 'Successfully Updated  ';
header("location:profile.php?username=$uname");
                }
                } else if($pss == $cpss and $pss != $profd['password']) {
                    echo 'Wrong Password ';
                }
                else{
                    echo "Password Doesn't Match";
                }
            }
            ?>


            <div class="profile-data">
                <form action="editprofile.php?username=<?php echo $unname ?>" method="POST">

                    <div class="from-part">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $profd['fullName'] ?>">
                    </div>
                    <div class="from-part">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="name" value="<?php echo $profd['email'] ?>">
                    </div>
                    <div class="from-part">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" value="<?php echo $profd['password'] ?>">
                        <?php echo $passmatch ?>
                    </div>
                    <div class="from-part">
                        <label for="cpass"> Confirm Password</label>
                        <input type="password" name="cpass" id="cpass" value="<?php echo $profd['password'] ?>">
                    </div>
                    <div class="from-part">
                        <label for="mobile">Mobile Number</label>
                        <input type="number" name="mobile" id="mobile" value="<?php echo $profd['mobile'] ?>">
                    </div>

                    <input type="submit" name="change" value="Edit Profile" class="edd">
                </form>
            </div>
        </div>


    </section>


    <?php include('footer.php') ?>

</body>

</html>