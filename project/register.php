<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
    <title>Register</title>
  </head>
  <body>
    <div class="main-header">

     <img src="Pictures/Ingress_Logo.png" alt="Can't load Logotype">
     <h1>Registration</h1>

    </div>

    <div class="register-container">
      <form method="POST" action="includes/register.inc.php">

            <label class="name"></label>
            <input type="name" placeholder="Enter your name" name="realname">

            <label class="username"></label>
            <input type="username" placeholder="Enter a username "name="uname">

            <label class="password"></label>
            <input type="password" placeholder="Enter a password "name="pword">

            <label class="Email"></label>
            <input type="email"placeholder="Enter a email "name="email">

          <input type="submit" name="submit" value="register">

</form

    </div>

  </body>
</html>
