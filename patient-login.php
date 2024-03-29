<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    
    <title>Login</title>
    
 </head>
<body> 
<form method="POST" action="func.php" class="register-form" id="login-form">
    <section class="sign-in">
      <div class="container" style="background-image: url('bodybg/blob-scene-login1.svg');">
        <div class="row doktalk col-md-6">
         <a href="index.php"> <img src="assets/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"> </a> 
        </div>
        <div class="signin-content">
          
          <div class="signin-image">
            <figure><img src="assets/img/patient-login.svg" alt="singin-image"></figure>
          </div>
  
          <div class="signin-form">
            <h2 class="form-title">Login</h2>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Your Email" required="" />
              </div>
              <div class="form-group">
                <label for="your_pass">Password</label>
                <input type="password" name="password2" placeholder="Password" required="" />
              </div>
              <div class="form-group">
                <a href='reset-request.php' class="signup-link">Forgot password?</a>              </div>
              <div class="form-group form-button">
                <button type="submit" name="patsub" class="btn-submit btn-primary btn-sm btn-block" value="Login">Login</button>
              </div>
            </form>
            <a href='patient-signup.php' class="signup-link">Don't have an account?</a>
            <!-- <div class="social-login">
              <span class="social-label">Or login with</span>
              <ul class="socials">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
  
    <!-- code for firebase backend

  
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script> -->

  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

  <!-- ########################## footer start ########################### -->

  <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: #0d6efd;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
    </div>
  <!-- Copyright -->

 <!-- ########################## footer end ########################### -->

  </body>
</html> 