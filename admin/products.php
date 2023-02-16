<?php 
  include "Includes/header.php";
  include "Includes/sidebar.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Products</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Products</h1>
		</div>
	</div><!--/.row-->

  <div class="row">
		<div class="col-lg-12">
			<?php
        if(!isset($_GET['action'])) {
					include "Design/Products/veiw.php";
				} elseif($_GET['action'] == 'add') {
					include "Design/Products/add.php";
				} elseif($_GET['action'] == 'edit') {
					include "Design/Products/edit.php";
				} elseif($_GET['action'] == 'addCat') {
					include "Design/Categories/add.php";
				}
      ?>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
<?php
	include "Includes/footer.php";
?>