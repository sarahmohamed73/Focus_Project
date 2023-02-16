<form method="POST" action="Function/Products/insert.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" name="price" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Sale</label>
    <input type="text" name="sale" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
		<label for="exampleInputEmail1">Image</label>
		<input type="file" name="image" value="" class="form-control" id="exampleInputEmail1" >
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
      <option value="<?=$category['id']?>"><?=$category['name']?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Description</label>
    <textarea type="text" name="description" value="" class="form-control" id="exampleFormControlInput1"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
</form>