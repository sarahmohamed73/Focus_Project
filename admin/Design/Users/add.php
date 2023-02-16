<form method="POST" action="Function/Users/insert.php">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Username</label>
    <input type="text" name="username" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" name="password" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
    <input type="text" name="email" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
		<label for="exampleInputEmail1">Phone Number</label>
		<input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" >
	</div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="0">
    <label class="form-check-label" for="flexRadioDefault1">
      Male
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="1">
    <label class="form-label" for="flexRadioDefault2">
      Female
    </label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select class="form-control" name="privliges" id="exampleFormControlSelect1">
      <option value="0">Admin</option>
      <option value="1">User</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
</form>