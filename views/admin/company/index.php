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
					<h1 style="color: #e65a26">Branch list</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index" style="color: #e65a26">Home</a></li>
						<li class="breadcrumb-item active">Branch list</li>
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
							<button class="btn" style="background-color: #e65a26; color: white" type="button" data-toggle="modal" data-target="#addCompanyModal">New</button>
							<!-- Modal-->
							<div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">New</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=add" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label>Branch name</label>
													<input class="form-control" type="text" placeholder="Branch name" name="name" />
												</div>
												<div class="form-group">
													<label>Branch address</label>
													<input class="form-control" type="text" placeholder="Branch address" name="address" />
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

							<table class="table table-bordered table-striped" id="tab-company">
								<thead>
									<tr class="text-center" style="color: #e65a26">
										<th>No.</th>
										<th>Branch name</th>
										<th>Branch address</th>
										<th>Last updated</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($company as $company) {
										echo "<tr class='text-center'>";
										echo "<td>" . $company->id . "</td>";
										echo "<td>" . $company->name . "</td>";
										echo "<td>" . $company->address . "</td>";
										echo "<td>" . $company->updateAt . "</td>";
										echo "<td>
											<btn class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-id=$company->id data-name='$company->name' data-address='$company->address'> <i class='fas fa-edit'></i></btn>
											<btn class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-id=$company->id> <i class='fas fa-trash'></i></btn>
											</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>

							<div class="modal fade" id="EditCompanyModal" tabindex="-1" role="dialog" aria-labelledby="EditCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Edit</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=edit" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<div class="form-group">
													<input class="form-control" type="hidden" placeholder="Id" name="id" readonly />
												</div>
												<div class="form-group">
													<label>Branch name</label>
													<input class="form-control" type="text" placeholder="Please enter your company" name="name" />
												</div>
												<div class="form-group">
													<label>Địa chỉ</label>
													<input class="form-control" type="text" placeholder="Please enter your address" name="address" />
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

							<div class="modal fade" id="DeleteCompanyModal" tabindex="-1" role="dialog" aria-labelledby="DeleteCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Delete</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=delete" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
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
<script src="public/js/company/index.js"></script>
</body>

</html>