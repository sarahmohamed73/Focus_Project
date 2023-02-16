<a class="btn btn-primary" href="?action=add">Add Product</a>
<a class="btn btn-primary" href="?action=addCat">Add Category</a>
<br><br>
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Sale</th>
    <th>Image</th>
    <th>Categories</th>
    <th>Controls</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include "Function/connect.php";
      $select = "SELECT * From products pro LEFT JOIN (SELECT name AS cat_name , id AS cat_id FROM categories) AS cat ON pro.cat_id = cat.cat_id ;";
      $products = $conn -> query($select);
      foreach($products as $product) {
    ?>
    <tr>
      <td><?= $product['id'] ?></td>
      <td><?= $product['name'] ?></td>
      <td><?= $product['price']."$" ?></td>
      <td><?= $product['sale'] ?></td>
      <td><img style="width: 100px;" src="Images/<?=$product["image"]?>" alt=""></td>
      <td><?= $product['cat_name'] ?></td>
      <td>
        <a class="btn btn-primary" href="?action=edit&id=<?=$product["id"]?>">Edit</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $product["id"] ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?= $product["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are You Sure You Want To Delete Product : <?= $product["name"] ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="Function/Products/delete.php?id=<?=$product["id"]?>">Confirm</a>
              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>