<?php 
  include "../connect.php";
  $id = $_GET['id'];
  $delete = "DELETE FROM products WHERE id = $id";
  $query = $conn -> query($delete);
  if($query) {
    header("location: ../../products.php");
  } else {
    echo $conn -> error;
  }
