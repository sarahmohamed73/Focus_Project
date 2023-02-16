<?php 
  include "../connect.php";
  extract($_POST);
  $imgName = $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];
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
          $updateImg = "UPDATE products SET image = '$imgName' WHERE id = '$id'";
          $queryImg = $conn -> query($updateImg);
      } else {
        echo "Thw File Too Big";
        exit();
      }
    } else {
      echo "Wrong Extension";
      exit();
    }
  }

  $update = "UPDATE products SET 
            name = '$name',
            price = '$price',
            sale = '$sale',
            cat_id = '$category',
            description = '$description'
            WHERE id = '$id'";
  $query = $conn -> query($update);
  if ($query) {
    header("location: ../../products.php");
  } else {
    echo $conn -> error;
  }