<?php 
  include "../connect.php";
  $id = $_POST["id"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];
  $privliges = $_POST["privliges"];

  if(!empty($_POST["password"])) {
    $password = md5($_POST["password"]);
    $updataPass = "UPDATE users SET password = '$password' WHERE id = $id";
    $queryPass = $conn -> query($updataPass);
  }

  $update = "UPDATE users SET 
            username = '$username',
            email = '$email',
            phone = '$phone',
            address = '$address',
            gender = '$gender',
            privliges = '$privliges' 
            WHERE id = $id";
  $query = $conn -> query($update);
  if ($query) {
    header("location: ../../users.php");
  } else {
    echo $conn -> error;
  }