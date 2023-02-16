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
			<li class="active">Users</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Users</h1>
		</div>
	</div><!--/.row-->

  <div class="row">
		<div class="col-lg-12">
			<?php
        if(!isset($_GET['action'])) {
					include "Design/Users/veiw.php";
				} elseif($_GET['action'] == 'add') {
					include "Design/Users/add.php";
				} elseif($_GET['action'] == 'edit') {
					include "Design/Users/edit.php";
				}
      ?>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
<?php
	include "Includes/footer.php";
?>