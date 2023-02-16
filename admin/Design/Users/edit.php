<?php
  include "Function/connect.php";
  $id = $_GET["id"];
  $select = "SELECT* FROM users WHERE id = $id";
  $query = $conn -> query($select);
  $user = $query -> fetch_assoc();
?>
<form method="POST" action="Function/Users/update.php">
  <input type="hidden" name="id" value = <?= $user["id"] ?>>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Username</label>
    <input type="text" name="username" value="<?= $user["username"] ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" name="password" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
    <input type="text" name="email" value="<?= $user["email"] ?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
		<label for="exampleInputEmail1">Phone Number</label>
		<input type="text" name="phone" value="<?= $user["phone"] ?>" class="form-control" id="exampleInputEmail1" >
	</div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="0" <?= $user["gender"] == 0 ? "checked" : "" ?>>
    <label class="form-check-label" for="flexRadioDefault1">
      Male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="1" <?= $user["gender"] == 1 ? "checked" : "" ?>>
    <label class="form-check-label" for="flexRadioDefault2">
      Female
    </label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Address</label>
    <input type="text" name="address" value="<?= $user["address"]?>" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Privliges</label>
    <select class="form-control" name="privliges" id="exampleFormControlInput1">
      <option value="0" <?= $user["privliges"] == 0 ? "selected" : "" ?>>Admin</option>
      <option value="1" <?= $user["privliges"] == 1 ? "selected" : "" ?>>User</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
</form>