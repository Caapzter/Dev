<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['realname']);
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $password = mysqli_real_escape_string($conn, $_POST['pword']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  //Error handlers
  //Check for empty fields
  if (empty($first) || (empty($uname) || (empty($password) || (empty($email)) {
      header("Location: ../register.php?register=empty");
      exit();
  } else {
    //Check if unput characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first)) {
      header("Location: ../register.php?signup=empty");
      exit();
    } else {
      //check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../register.php?signup=email");
          exit();
      } else {
          $sql = "SELECT * FROM users WHERE user_uname='$uname'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
              header("Location: ../register.php?signup=usertaken");
              exit();
          } else {
            // hashing the passwordsss
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            //Insert the user into the database
              $sql = "INSERT INTO users (user_first, user_uname, user_password, user_email) VALUES ('$first', '$uname', '$password', '$email', '$hashedPwd');";
              mysqli_query($conn, $sql);
              header("Location: ../register.php?signup=success");
              exit();
          }
      }
    }
  }

} else {
  header("Location: ../register.php");
  exit();
}
