<?php
  include "Function/connect.php";
  $id = $_GET["id"];
  $select = "SELECT * FROM products WHERE id = $id";
  $query = $conn -> query($select);
  $product = $query -> fetch_assoc();
?>
<form method="POST" action="Function/Products/update.php" enctype="multipart/form-data">
<input type="hidden" name="id" value = "<?= $product["id"] ?>">
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Sale</label>
    <input type="text" name="sale" value="<?= $product['sale'] ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
		<label for="exampleInputEmail1">Image</label>
		<input type="file" name="image" value="<?= $product['image'] ?>" class="form-control" id="exampleInputEmail1" >
	</div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categories</label>
    <select class="form-control" name="category" id="exampleFormControlSelect1">
      <?php
        include "Function/connect.php";
        $select = "SELECT * From categories";
        $categories = $conn -> query($select);
        foreach($categories as $category) {
      ?>
      <option value="<?=$category['id']?>" <?= $product['cat_id'] == $category['id'] ? "selected" : "" ?>><?=$category['name']?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Description</label>
    <textarea type="text" name="description" value="" class="form-control" id="exampleFormControlInput1"><?= $product['description'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
</form>