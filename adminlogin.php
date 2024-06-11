<?php 
require('database.php');
$unerror = $passerror = $noacc = '';

if(isset($_POST['logn'])){
    $nnam = htmlspecialchars($_POST['adname']);
    $pass = htmlspecialchars($_POST['pass']);
    $sel = mysqli_query($mysqli,"SELECT * from `admin` where `adminname` = '$nnam'");
    $admn = mysqli_fetch_array($sel);

    if(empty($admn)){
        $noacc = "Username Not Found";
    }
    elseif(!empty($admn)){
        $logname = $admn['adminname'];
        $logpass = $admn['password'];
        if($nnam !== $logname){
            $unerror = "Wrong Username";
        }
        elseif($pass !== $logpass){
            $passerror = "Wrong Password";
        }
        elseif($nnam == $logname && $pass == $logpass){
            header('location: admin.php'); }}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminlogin.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">

    <title>Admin Login</title>
</head>
<body>

    <form method="POST">
    <?php  if($noacc == "Username Not Found"){echo '<p class="error">'.$noacc.'</p>';}else{}; ?>
        <div class="form-group">
            <label for="name"> Admin Name</label>
            <input type="text" id="name" name="adname" required>
            <?php  if($unerror == "Wrong Username"){echo '<p class="error">'.$unerror.'</p>';}else{}; ?>
        </div>

        <div class="form-group">
            <label for="pass"> Password</label>
            <input type="password" id="pass" name="pass" required>
            <?php  if($passerror == "Wrong Password"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
        </div>

        <input type="submit" name="logn" value="Log In">


    </form>
    
</body>
</html>