<a class="btn btn-primary" href="?action=add">Add User</a>
<br><br>
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>E-mail</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Privliges</th>
    <th>Controls</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include "Function/connect.php";
      $select = "SELECT * FROM users";
      $users = $conn -> query($select);
      foreach($users as $user) {
    ?>
    <tr>
      <td><?= $user['id'] ?></td>
      <td><?= $user['username'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['phone'] ?></td>
      <td><?= $user['address'] ?></td>
      <td><?= $user['gender'] == 0 ? "Male" : "Female" ?></td>
      <td><?= $user['privliges'] == 0 ? "Admin" : "User" ?></td>
      <td>
        <a class="btn btn-primary" href="?action=edit&id=<?=$user["id"]?>">Edit</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $user["id"] ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?= $user["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are You Sure You Want To Delete User : <?= $user["username"] ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="Function/Users/delete.php?id=<?=$user["id"]?>">Confirm</a>
              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>