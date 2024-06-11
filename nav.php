<?php 
session_start();
    ?>
<section class="navbar <?php echo $navp ?>">
        <nav >
            <div class="logo">
                <a class="nav-title" href="index.php" ><img src="images/logo.png" alt=""  class="hello"></a>
            </div>
            <div class="sidebar">
                <div class="ham">
                    <img src="images/mbars.png" alt="Menu" title="Menu">
                </div>
                <div class="links">
                    <img src="images/cancel.png" alt="Hide Menu" title="Hide Menu" class="cancel">
                    <ul>
                    <?php   
                    if(!empty($_SESSION['login'])){
                    if($_SESSION['login'] == "True"){
                        echo '<p class="user-name">'.$_SESSION['username'].'</p>';
                    } }
                    else{
                        echo ' ';
                    }
                    ?>
                        <a href="index.php" class="active"><li class="navli"> Home </li></a>
                        <a href="discover.php"><li class="navli"> Discover </li></a>
                        <a href="partners.php"><li class="navli"> Partners </li></a>
                        <?php   
                        if(!empty($_SESSION['login'])){
                        if($_SESSION['login'] == "True"){
                            
                        } }
                        else{
                            echo '<a href="offers.php"><li class="navli"> Offers </li></a>';
                        }
                    ?>
                        <a href="about.php"><li class="navli"> About </li></a>
                        <a href="contact.php"><li class="navli"> Contact Us </li></a>
                    <?php   
                    if(!empty($_SESSION['login'])){
                    if($_SESSION['login'] == "True"){
                        echo '<a href="profile.php?username='.$_SESSION['username'].'" class="logout"><li class="navli"> Profile </li></a>';
                        echo '<a href="logout.php" class="logout"><li class="navli"> Logout </li></a>';
                    } }
                    else{
                        echo '<a href="login.php"><li class="navli"> Login </li></a>
                            <a href="register.php"><li class="navli"> Register </li></a>';
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

