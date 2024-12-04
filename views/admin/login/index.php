<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FPT Software | Log in</title>

	<link href="public/assets/img/favicon.png" rel="icon">

	<!-- Google Font: Source Sans Pro-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
	<!-- Font Awesome-->
	<link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap-->
	<link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style-->
	<link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<h1 class="login-logo"><b style="color: #ff590f;">FPT</b> - Admin Login</h1>
		<!-- /.login-logo-->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg"> Login </p>
				<?php
					if (isset($err))
					{
						echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
						unset($err);
					}
				?>
				<form action="index.php?page=admin&controller=login&action=check" method="post">
					<div class="input-group mb-3">
						<input class="form-control" type="text" placeholder="Username" name="username">
						<div class="input-group-append">
							<div class="input-group-text"><span class="fas fa-user"></span></div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input class="form-control" type="password" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text"><span class="fas fa-lock"></span></div>
						</div>
					</div>
					<div class="row">
						<div class="col-7"></div>
						<!-- /.col-->
						<div class="col-5">
							<button class="btn btn-block" style="background-color: #e65a26; color: white" type="submit">Log in</button>
						</div>
						<!-- /.col-->
					</div>
				</form>
			</div>
			<!-- /.login-card-body-->
			<!-- /.login-box-->
			<!-- jQuery-->
			<script src="public/plugins/jquery/jquery.min.js"></script>
			<!-- Bootstrap 4-->
			<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- AdminLTE App-->
			<script src="public/dist/js/adminlte.min.js"></script>
		</div>
	</div>
</body>
</html>