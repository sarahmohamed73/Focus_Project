<?php
  if (empty($_POST["name"]) && empty($_POST["category"])) {
    header("location: ../../products.php");
    exit();
  }

  extract($_POST);
  $imgName = $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];
  /**
   * 1 - If there is an image upload
   * 2 - Specify extension -- images 
   * 3 - Check file size < 2mb
   * 4 - Rename the image with unique random name
   * 5 - Move uploaded image to the server -- with new name
   * 6 - Insert image name into the datase  -- new name
  */

  // If there is an image upload
  if($_FILES['image']['error'] == 0) {
    // Specify extension -- images 
    $extensions = ['jpg','png','jpeg','gif','webp'];
    $extension = pathinfo($imgName, PATHINFO_EXTENSION);
    if(in_array($extension, $extensions)) {
      // Check file size < 2mb 
      if($_FILES['image']['size'] < 2000000) {
        // Rename the image with unique random name
        $imgName = md5(uniqid()).".$extension";
        // Move uploaded image to the server -- with new name
        move_uploaded_file($temp, "../../Images/$imgName");
      } else {
        echo "The File Too Big";
        exit();
      }
    } else {
      echo "Wrong Extension";
      exit();
    }
  } else {
    echo "You Must Upload An Image";
    exit();
  }

  include "../connect.php";
  $insert = "INSERT INTO products 
  -- Insert image name into the datase  -- new name
  (name, price, sale, image, cat_id, description) 
  VALUES 
  ('$name', '$price', '$sale', '$imgName', '$category', '$description')";

  $query = $conn -> query($insert);
  if($query) {
    header('location: ../../products.php');
  } else {
    echo $conn -> error;
  }