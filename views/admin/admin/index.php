<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: index.php?page=admin&controller=login&action=index");
	}
	if ($_SESSION["role"]!=1) {
		header("Location: index.php?page=admin&controller=layouts&action=index");
	}
?>
<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>


<!-- Code -->
<div class="content-wrapper">
	<!-- Add Content -->
	<!-- Content Header (Page header)-->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 style="color: #e65a26">Admin management</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index" style="color: #e65a26">Home</a></li>
						<li class="breadcrumb-item active">Admin management</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid-->
	</section>
	<!-- Main content-->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<!-- Button trigger modal-->
							<button class="btn" style="background-color: #e65a26; color: white" type="button" data-toggle="modal" data-target="#addAdminModal">New</button>
							<!-- Modal-->
							<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">New</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=admin&action=add" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label>Username</label>
													<input class="form-control" type="text" placeholder="Username" name="username" />
												</div>
												<div class="form-group">
													<label>Password</label>
													<input class="form-control" type="password" placeholder="Password" name="password" />
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
												<button class="btn btn-info" type="submit">New</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<table class="table table-bordered table-striped" id="tab-admin">
								<thead>
									<tr class="text-center" style="color: #e65a26">
										<th>No.</th>
										<th>Username</th>
										<th>Last updated</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$index = 1;
									foreach ($admin as $admin) {
										echo "<tr class='text-center'>";
										echo "<td>" . $index++ . "</td>";
										echo "<td>" . $admin->username . "</td>";
										echo "<td> " . date("h:i:sa-d/m/Y", strtotime($admin->updateAt)) . "</td>";
										echo "<td>
											<btn data-toggle='tooltip' data-placement='top' title='Edit' class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-username='$admin->username' data-password='$admin->password'> <i class='fas fa-edit'></i></btn>
											<btn data-toggle='tooltip' data-placement='top' title='Delete' class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-username='$admin->username'> <i class='fas fa-trash'></i></btn>
											</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>

							<div class="modal fade" id="EditAdminModal" tabindex="-1" role="dialog" aria-labelledby="EditAdminModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Edit</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=admin&action=edit" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<div class="form-group">
													<label>Username</label>
													<input class="form-control" type="text" placeholder="Username" name="username" readonly />
												</div>
												<div class="form-group">
													<label>New password</label>
													<input class="form-control" type="password" placeholder="Please enter your new password" name="new-password" />
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
												<button class="btn btn-info" type="submit">Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<div class="modal fade" id="DeleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="DeleteAdminModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Delete</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=admin&action=delete" method="post">
											<div class="modal-body">
												<input type="hidden" name="username" />
												<p>Bạn chắc chưa ?</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-secondary btn-outline-light" type="button" data-dismiss="modal">Close</button>
												<button class="btn btn-danger btn-outline-light" type="submit">Xác nhận</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
</div>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<script src="public/js/admin/index.js"></script>
</body>

</html>