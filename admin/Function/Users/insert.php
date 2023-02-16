<?php
  if (empty($_POST["username"]) && empty($_POST["password"])) {
    header("location: ../../users.php");
    exit();
  }

  $username = $_POST["username"];
  $password = md5($_POST["password"]);
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];
  $privliges = $_POST["privliges"];

  include "../connect.php";
  $insert = "INSERT INTO users 
  (username, password, email, phone, address, gender, privliges) 
  VALUES 
  ('$username', '$password', '$email', '$phone', '$address', '$gender', '$privliges')";

  $query = $conn -> query($insert);
  if($query) {
    header('location: ../../users.php');
  } else {
    echo $conn -> error;
  }