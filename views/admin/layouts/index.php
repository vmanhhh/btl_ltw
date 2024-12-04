<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1 style="color: #e65a26">Dashboard</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="invoice p-3 mb-3">
				<div class="row invoice-info">
					<div class="col-sm-6 invoice-col">
						<ul style="list-style: none;" >
							<?php
								if($_SESSION['role'] == 1){
									echo '
									<li class="mt-2">
										<a href="index.php?page=admin&controller=admin&action=index" style="color: #e65a26">
											<i class="fas fa-user-graduate" style="color: #e65a26"></i>
											Admin list
										</a>
									</li>
									
									';
								}
							?>
							
							<li class="mt-2">
								<a href="index.php?page=admin&controller=comments&action=index" style="color: #e65a26">
									<i class="fas fa-comments" style="color: #e65a26"></i>
									Comments - Reviews
								</a>
							</li>
							<li class="mt-2">
								<a href="index.php?page=admin&controller=user&action=index" style="color: #e65a26"> 
									<i class="fas fa-users-cog" style="color: #e65a26"></i>
									Customer Info
								</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->
					<div class="col-sm-6 invoice-col">
						<ul style="list-style: none;">
							<li class="mt-2">
								<a href="index.php?page=admin&controller=products&action=index" style="color: #e65a26">
									<i class="fas fa-cube" style="color: #e65a26"></i>
									Products management
								</a>
							</li>
							
							<li class="mt-2">
								<a href="index.php?page=admin&controller=news&action=index" style="color: #e65a26">
									<i class="fas fa-file" style="color: #e65a26"></i>
									News management
								</a>
							</li>
							<li class="mt-2">
								<a href="index.php?page=admin&controller=company&action=index" style="color: #e65a26"> 
									<i class="fas fa-newspaper" style="color: #e65a26"></i>
									Branch list
								</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->


</body>

</html>