<?php 
require('database.php');
$unerror = $passerror = $noacc = '';

if(isset($_POST['submit'])){
    $usname = htmlspecialchars($_POST['uname']);
    $passw = htmlspecialchars($_POST['pass']);
    $sel = "SELECT `userName`,`password` from `register` WHERE `userName` = '$usname'";
    $do = mysqli_query($mysqli,$sel);
    $logg = mysqli_fetch_assoc($do);

    if(empty($logg)){
        $noacc = "Username Not Found";
    }
    elseif(!empty($logg)){
        $logname = $logg['userName'];
        $logpass = $logg['password'];
        if($usname !== $logname){
            $unerror = "Wrong Username";
        }
        elseif($passw !== $logpass){
            $passerror = "Wrong Password";
        }
        elseif($usname == $logname && $passw == $logpass){
            header('location: logged.php?username='.$usname);
        }}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">
    
    <title>Login</title>
</head>
<body>

<?php 
    $navp = 'navscroll';
    include('nav.php') ;?>

    <section class="login">
        <div class="dark"></div>
            <form action="login.php" method="post">
                <h2>Log In</h2>
                <?php  if($noacc == "Username Not Found"){echo '<p class="error">'.$noacc.'</p>';}else{}; ?>
                <div class="inputbox">
                    <label for="uname">Username</label>
                    <input type="text" name="uname" id="unsme" required="required" placeholder="Username" value="<?php if(empty($usname)){}else{echo $usname;}; ?>">
                    <?php  if($unerror == "Wrong Username"){echo '<p class="error">'.$unerror.'</p>';}else{}; ?>
                </div>
                <div class="inputbox">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required="required" placeholder="Password" value="<?php if(empty($passw)){}else{echo $passw;}; ?>">
                    <?php  if($passerror == "Wrong Password"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
                </div>
                <p class="forgot">Forgot Password? <a href="forgotpass.php">Click Here</a></p>
                <div class="inputbox3">
                    <input type="submit" name="submit" value="Log In">
                </div>
                <p>Don't have an account Yet?.. <a href="register.php" class="logg">Register Now</a></p>
            </form>
    </section>

    <?php include('footer.php') ?>

</body>
</html>