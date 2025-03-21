</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar-->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links-->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a class="nav-link" href="index.php?page=admin&controller=layouts&action=index">Home</a>
				</li>
			</ul>
			<!-- Right navbar links-->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search-->
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a class="nav-link" href="index.php?page=admin&controller=login&action=logout">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar-->
		<!-- Main Sidebar Container-->
		<aside class="main-sidebar elevation-4">
			<!-- Brand Logo-->
			<!-- <a class="brand-link" href="index.php?page=admin&controller=layouts&action=index" style="margin-left:20px;">
				<h3>KMS<span style="color: #00BFFF;"> TECHNOLOGY</span>
			</a></h3> -->

			<a href="index.php?page=admin&controller=layouts&action=index" class="brand-link">
				<img src="public/assets/img/logo.png" style="width: 100%" alt="logo">
			</a>
			<!-- Sidebar-->
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<?php
					echo ('
							<div class="info" style="margin:auto;">
								<a href="#" class="d-block style="color:#000000;">
									Welcome, 
						'
						. $_SESSION["user"] .
						' </a>
							</div>
						');

					?>

				</div>

				<!-- Sidebar Menu-->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!--Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
						<?php
						if ($_SESSION['role'] == 1) {
							echo '
									<li class="nav-item">
										<a class="nav-link" href="index.php?page=admin&controller=admin&action=index">
											<i class="nav-icon fas fa-user-graduate"> </i>
											<p>Admin list</p>
										</a>
									</li>
								';
						}

						?>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=comments&action=index">
								<i class="nav-icon fas fa-comments"></i>
								<p>Comments - Reviews</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=user&action=index">
								<i class="nav-icon fas fa-users-cog"></i>
								<p>Customer Info</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=products&action=index">
								<i class="nav-icon fas fa-cube"></i>
								<p>Products management</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=news&action=index">
								<i class="nav-icon fa fa-file" aria-hidden="true"></i>
								<p>News management</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=admin&controller=company&action=index">
								<i class="nav-icon fa fa-newspaper" aria-hidden="true"></i>
								<p>Branch list</p>
							</a>
						</li>
					</ul>
					<!-- Content Wrapper. Contains page content-->
				</nav>
			</div>
		</aside>