<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Register</title>
</head>

<body>

<?php 
require('database.php');
echo"no";


?>

<?php 
    $navp = 'navscroll';
    include('nav.php') ;?> 


    <section class="register">
        <div class="dark"></div>
            <form action="register.php" method="post">
                <h2>Register</h2>
                <div class="inputbox">
                    <label for="fname">Full Name</label>
                    <input type="text" name="fname" id="fname" required placeholder="Full Name" value="<?php if(empty($fname)){}else{echo $fname;}; ?>" required="true">
                </div>
                <div class="inputbox">
                    <label for="uname">Username</label>
                    <input type="text" name="uname" id="uname" required placeholder="Username" value="<?php if(empty($uname)){}else{echo $uname;}; ?>" >
                    <?php  if($nerror == "Username Already Taken"){echo '<p class="error">'.$nerror.'</p>';}else{}; ?>
                </div>
                <div class="inputbox">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required placeholder="E-mail" value="<?php if(empty($email)){}else{echo $email;}; ?>">
                    <?php  if($emerror == "Email Already in Use"){echo '<p class="error">'.$emerror.'</p>';}else{}; ?>
                </div>
                <div class="inputbox">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required minlength="5" placeholder="Password" value="<?php if(empty($pass)){}else{echo $pass;}; ?>">
                    <?php  if($passerror == "Passwords not matching"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
                </div>
                <div class="inputbox">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="cpass" id="cpass" required minlength="5" placeholder="Confirm Password" value="<?php if(empty($confpass)){}else{echo $confpass;}; ?>">

                <div class="inputbox">
                    <label>Gender</label>
                    <div class="gend">
                        <div class="male">
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="male" required <?php if(empty($gender)){}else if($gender == 'male'){echo 'checked';}; ?>> 
                        </div>
                        <div class="male">
                            <label for="gender">Female</label>
                            <input type="radio" name="gender" value="female" required <?php if(empty($gender)){}else if($gender == 'female'){echo 'checked';}; ?>> 
                        </div>
                    </div>
                </div>

                </div>
                <div class="inputbox">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" required placeholder="Country" value="<?php if(empty($country)){}else{echo $country;}; ?>">
                </div>
                <div class="inputbox">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="mobile" id="mobile" required placeholder="Mobile Number" value="<?php if(empty($mobile)){}else{echo $mobile;}; ?>">
                    <?php   if($moberror == "Mobile Number Already in Use"){echo '<p class="error">'.$moberror.'</p>';}else{};?>
                </div>
                <div class="inputbox">
                    <label for="card">Card Number</label>
                    <input type="tel" name="card" id="card" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" min="100000000000000" title="Enter 16 digits" placeholder="Enter 16-digit Card Number" value="<?php if(empty($card)){}else{echo $card;}; ?>">
                <div class="inputbox">
                    <label for="exp">Exp. Date</label>
                    <input type="month" name="exp" id="exp" required="required" min="2022-07" max="2050-07" value="<?php if(empty($exp)){}else{echo $exp;}; ?>">
                </div>

                <div class="inputbox">
                    <label for="cvv">CVV</label>
                    <input type="tel"  name="cvv" id="cvv" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" size="3" min="100" max="999" minlength="3" maxlength="3" placeholder="Enter 3-digit Cvv Number" value="<?php if(empty($cvv)){}else{echo $cvv;}; ?>">
                </div>

                <div class="inputbox">
                    <label for="sub">Subsciption</label>
                    <select name="sub" id="sub" required>
                        <option value="1 Month" <?php if(empty($sub)){}else if($sub == '1 Month'){echo 'selected';}; ?>> 1 Month (9.99$) </option>
                        <option value="1 Year" <?php if(empty($sub)){}else if($sub == '1 Year'){echo 'selected';}; ?>> 1 Year (99.99$) </option>
                    </select>
                </div>

            </div>
            <div class="inputbox3">
                <input type="submit" name="submit" value="Register">
            </div>
            <p>Already have an account? <a href="login.php" class="logg">Log in</a></p>
            </form>
        
    </section>

    <?php
    include('footer.php');
    $nerror = $emerror = $moberror = $passerror = "";

$sel = "SELECT `userName`,`email`,`mobile` from `register`";
$do = mysqli_query($mysqli,$sel);

$userd = mysqli_fetch_assoc($do);


if(isset($_POST['submit'])){

    $fname = htmlspecialchars($_POST['fname']);
    $uname = htmlspecialchars($_POST['uname']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $confpass = htmlspecialchars($_POST['cpass']);
    $country = htmlspecialchars($_POST['country']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $card = htmlspecialchars($_POST['card']);
    $exp = htmlspecialchars($_POST['exp']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $gender = htmlspecialchars($_POST['gender']);
    $sub = htmlspecialchars($_POST['sub']);

    foreach($userd as $use){
        if($uname == $use['userName']){
            $nerror = "Username Already Taken";
            
        };

        if($email == $use['email']){
            $emerror = "Email Already in Use";
            
        };

        if($mobile == $use['mobile']){
            $moberror = "Mobile Number Already in Use";
            
        };

    }
// validd

if($pass !== $confpass){
    $passerror = "Passwords not matching";

}
else{};

    $trans_id = rand();
    $dat = (new \DateTime())->format('Y-m-d H:i:s');
    $amount = '';
    if($sub == ' 1 Year'){
        $amount = '9.99$';

    }
    else if($sub == '1 Month'){
        $amount = '99.99$';
    }

   $present = new DateTime('now');
   $future = new DateTime('last day of January 2024');
   $interval = $present->diff($future);

  $endate = $interval->format('%M-%d');

    if( $nerror == "" && $emerror == "" && $moberror == "" && $passerror == ""){
        $quer = "INSERT INTO `register` (`fullName`, `userName`, `email`, `password`, `country`, `mobile`, `cardno`, `exp`, `cvv`,`gender`,`subscription`) VALUES ('$fname','$uname','$email','$pass','$country','$mobile','$card','$exp','$cvv','$gender', '$sub')";
        $does = mysqli_query($mysqli,$quer);
        $selectLastUser=mysqli_fetch_array(mysqli_query($mysqli,"SELECT MAX(`userid`) AS `last` FROM `register`"));
        $lastUser=$selectLastUser['last'];
        $subsc = "INSERT INTO `subscription` (`duration`,`user_id`, `start_date`,`end_date`) VALUES ('$sub','$lastUser','$dat','$endate')";
        $dosub = mysqli_query($mysqli,$subsc);
        $selectLastSub=mysqli_fetch_array(mysqli_query($mysqli,"SELECT MAX(`id`) AS `lastSub` FROM `subscription`"));
        $lastSub=$selectLastSub['lastSub'];
        $pay = "INSERT INTO `payment` (`transaction_id`,`cardno`,`date`,`amount`,`expdate`,`cvv`,`user_id`,`sub_type`,`sub_id`) 
                                VALUES ('$trans_id' , '$card','$dat','$amount','$exp','$cvv','$lastUser','$sub','$lastSub')";
        $payss = mysqli_query($mysqli,$pay);
        header('location:login.php');
    }
    else{
    }

    if($does){
        echo '<div class="success"><div class="contt"> <p> Account Created Successfully </p> <a href="login.php"> Login </a></div> </div>';
    }
    else{
        // echo '<div class="success"><div class="contt"> <p> Sorry, Erorr Creating Your Account, Please Try Again Later </p> <a href="register.php"> Done </a></div> </div>';
    }
}
    ?>

</body>
</html> 

