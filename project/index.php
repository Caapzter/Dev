<?php
  include_once "php/includes/dbh.inc.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
  </head>
  <body>
    <header class="main-header">
      <img src="Pictures/Ingress_Logo.png" alt="Can't load Logotype">
      <h1>Login</h1>
    </header>

    <div class="login-container">
    <form action="index.php" method="post">
      <label class="username"></label>
      <input type="text" placeholder="Username.." name="uname">

      <label class="password"></label>
      <input type="password" placeholder="Password.."name="pword">

      <input type="submit" name="" value="Login">
    </form>

<div class="register-link">
  <p> Don't have an account? Register <a href="register.php" class="not-active">HERE!</a>
</div>

    </div>
  </body>
</html>
