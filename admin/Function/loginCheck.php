<?php
  session_start();
  include "connect.php";
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $select = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $query = $conn -> query($select);
  
  if($query -> num_rows > 0) {
    $user = $query -> fetch_assoc();
    $_SESSION["login_name"] = $user["username"];
    $_SESSION["login_id"] = $user["id"];
    header("location: ../$_SESSION[pagename]");
  } else {
    $_SESSION["error"] = "<div class='alert alert-danger'>Wrong Credentials</div>";
    header("location: ../login.php");
  }