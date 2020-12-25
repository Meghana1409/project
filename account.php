<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,800&display=swap"
     rel="stylesheet">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     
    <link rel="stylesheet" href="home.css">
    <!-- The core Firebase JS SDK is always required and must be listed first -->

    <title>Let's Shop</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <nav class="navbar">
                <div class="brand-title"><img src="assets/logo.png" alt="" width="125px"></div>
                <a href="#" class="toggle-button">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </a>
                <div class="navbar-links">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="">Myaccount</a></li>
                    <li><button type="button" class="btn" data-toggle="modal" data-target="#cart"><h1><i class="fas fa-shopping-cart"></i>
                    </h1><span class="total-count"></span></button></li>
                    <!-- <li><h1><i class="fas fa-shopping-cart"></i></h1></li> -->
                    
                  </ul>
                  
                </div>
              </nav>
            
            
        </div>
    </div>
    <!-- account -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="assets/banner_img.png" >
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="ind">
                        </div>
                        <form action="" id="loginform" method="post">
                            <input type="text" placeholder="Username" id="user" name="user"  required><br>
                            <input type="password" placeholder="Password" id="pass" name="pass"  required><br>
                            <button type="submit" class="btn1" name="login" id="login">Login</button><br>
                            <a href="">Forgot Password</a>
                        </form>
                        <form action="registration.php" id="rgnform" method="POST">
                            <input type="text" placeholder="Username" name="user" id="user" required><br>
                            <input type="email" placeholder="Email" name="mail" id="mail" required><br>
                            <input type="password" placeholder="Password" name="pass" id="pass" required><br>
                            <button type="submit" class="btn1">Register</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our app</h3>
                    <p>Download Our app for android and ios</p>
                    <div class="aoo-logo">
                        <img src="assets/play-store.png" alt="">
                        <img src="assets/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="assets/logo.png">
                    <p>kjkkhuyngb</p>
                </div>
                <div class="footer-col-3">
                    <h3>Quick links</h3>
                    <ul>
                        <li>About</li>
                        <li>Blog post</li>
                        <li>Contact</li>
                        <li>Wishlist</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Linkedin</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright &copy; 2020-meghana</p>
        </div>
    </div>
    <script>
        var loginform = document.getElementById("loginform");
        var rgnform = document.getElementById("rgnform");
        var indicator = document.getElementById("ind");
        function register(){
            

            rgnform.style.transform = "translateX(0px)";
            loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
         }
        function login(){
            rgnform.style.transform = "translateX(300px)";
            loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }
    </script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
    
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    
         <?php
include "config.php";

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from registeredusers where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
</body>
</html>