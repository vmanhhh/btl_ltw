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


<!-- Code -->
<div class="content-wrapper">
	<!-- Add Content -->
	<!-- Content Header (Page header)-->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 style="color: #e65a26">Customer Info Management</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index" style="color: #e65a26">Home</a></li>
						<li class="breadcrumb-item active">Customer Info Management</li>
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
							<button class="btn" style="background-color: #e65a26; color: white" type="button" data-toggle="modal" data-target="#addUserModal">New</button>
							<!-- Modal-->
							<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">New</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=user&action=add" enctype="multipart/form-data" method="post">
											<div class="modal-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="row"> </div>
															<label>Last Name</label>
															<input class="form-control" type="text" placeholder="Last Name" name="fname" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<div class="row"> </div>
															<label>First Name</label>
															<input class="form-control" type="text" placeholder="First Name" name="lname" />
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Birth Year</label>
															<input class="form-control" type="number" placeholder="Birth Year" name="birthday" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Gender:</label>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gender" value="1" />
																		<label>Male</label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gender" value="0" />
																		<label>Female</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="form-group">
													<label>Phone number</label>
													<input class="form-control" type="number" placeholder="Phone number" name="phone" />
												</div>

												<div class="form-group">
													<label>Email</label>
													<input class="form-control" type="text" placeholder="Email" name="email" />
												</div>

												<div class="form-group">
													<label>Password</label>
													<input class="form-control" type="password" placeholder="Password" name="password" />
												</div>
												<div class="form-group">
													<label>Image</label>&nbsp
													<input type="file" name="fileToUpload" id="fileToUpload" />
												</div>

											</div>
											<div class="modal-footer">
												<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
												<button class="btn btn-success" type="submit">New</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<table class="table table-bordered table-striped" id="tab-user">
								<thead>
									<tr class="text-center" style="color: #e65a26">
										<th>No.</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Gender</th>
										<th>Birth Year</th>
										<th>Phone number</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$index = 1;
									foreach ($user as $user) {
										echo "<tr class='text-center' style='white-space: nowrap;'>";
										echo "<td>" . $index++ . "</td>";
										echo "<td>" . $user->fname . "</td>";
										echo "<td>" . $user->lname . "</td>";
										echo "<td>" . (($user->gender == 1) ? "Male" : "Female") . "</td>";
										echo "<td>" . $user->birthday . "</td>";
										echo "<td>" . $user->phone . "</td>";
										echo "<td>" . $user->email . "</td>";
										echo "<td>
											<btn data-toggle='tooltip' data-placement='top' title='Edit' class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-email='$user->email' data-fname='$user->fname' data-lname='$user->lname' data-gender='$user->gender' data-birthday='$user->birthday' data-phone='$user->phone' data-img='$user->profile_photo'> <i class='fas fa-edit'></i></btn>
											<btn data-toggle='tooltip' data-placement='top' title='Change password' class='btn-changepass btn btn-warning btn-xs' style='margin-right: 5px' data-email='$user->email'> <i class='fas fa-lock'></i></btn>
											<btn data-toggle='tooltip' data-placement='top' title='Delete user' class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-email='$user->email' data-img='$user->profile_photo'> <i class='fas fa-trash'></i></btn>
											</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>

							<div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Edit</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=user&action=editInfo" enctype="multipart/form-data" method="post">
											<div class="modal-body">
												<input type="hidden" name="email">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="row"> </div>
															<label>Last Name</label>
															<input class="form-control" type="text" placeholder="Last Name" name="fname" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<div class="row"> </div>
															<label>First Name</label>
															<input class="form-control" type="text" placeholder="First Name" name="lname" />
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Birth Year</label>
															<input class="form-control" type="number" placeholder="Birth Year" name="birthday" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Gender:</label>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gender" value="1" id="Nam" />
																		<label>Male</label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="gender" value="0" id="Nu" />
																		<label>Female</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="form-group">
													<label>Phone number</label>
													<input class="form-control" type="number" placeholder="Phone number" name="phone" />
												</div>
												<div class="form-group">
													<label>Current image</label>
													<input class="form-control" type="text" name="img" readonly />
												</div>
												<div class="form-group">
													<label>New image</label>&nbsp
													<input type="file" name="fileToUpload" id="fileToUpload" />
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

							<div class="modal fade" id="EditPassModal" tabindex="-1" role="dialog" aria-labelledby="EditPassModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Edit</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=user&action=editPass" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<div class="form-group">
													<label>Email</label>
													<input class="form-control" type="text" placeholder="Email" name="email" readonly />
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

							<div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Delete</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=user&action=delete" method="post">
											<div class="modal-body">
												<input type="hidden" name="email" />
												<input type="hidden" name="img" />
												<p>Are you sure?</p>
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
<script src="public/js/user/index.js"></script>
</body>

</html>