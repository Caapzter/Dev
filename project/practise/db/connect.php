<?php
//local server info
$server = "localhost";
$username = 'root';
$password = "";
$db = "test1";

//check if connection was successful

try {
  $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected";
} catch(PDOException $e) {
  die("Ops. Something went wrong with the database");

}

 ?>
