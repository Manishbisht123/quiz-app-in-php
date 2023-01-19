
<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: home.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="shortcut icon" href="./bg/svg.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/register.css">
  </head>
  <body>

  <div class="container">
    <div class="title">Sign up</div>
    <div class="content">
      <form action="" method="post" class="" autocomplete="off">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name*</span>
            <input type="text" name="name" placeholder="Enter your name" required value="">
          </div>
          <div class="input-box">
            <span class="details">Username*</span>
            <input type="text" name="username" placeholder="Enter your username" required value="">
          </div>
          <div class="input-box">
            <span class="details">Email*</span>
            <input type="text"  name="email" placeholder="Enter your email" required value="">
          </div>
          <div class="input-box">
            <span class="details">Password*</span>
            <input type="text" name="password" placeholder="Enter your password" required value="">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password*</span>
            <input type="text" name="confirmpassword" placeholder="Confirm your password" required value="">
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <p>Create account and login ? <a href="login.php" id="setup-login" style="text-align: center;">Login</p>
      </form>
    </div>
  </div>

  </body>
</html>