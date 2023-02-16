<?php
  if (empty($_POST["name"])) {
    header("location: ../../products.php");
    exit();
  }

  extract($_POST);

  include "../connect.php";
  $insert = "INSERT INTO categories 
  (name) 
  VALUES 
  ('$name')";

  $query = $conn -> query($insert);
  if($query) {
    header('location: ../../products.php');
  } else {
    echo $conn -> error;
  }