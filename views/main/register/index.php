<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Sign up</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="public/assets/img/favicon.png" rel="icon">
	<link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link href="public/assets/css/style.css" rel="stylesheet">
	<link href="public/assets/css/main.css" rel="stylesheet">
	<link href="public/assets/css/util.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<?php
	include_once('views/main/navbar.php');
	?>
	<div class="limiter" style="margin-top: 0px!important;">
		<div class="container-login100">
			<div class="content__left">
				<div class="login100-more" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/FPT_Software_logo.svg/2560px-FPT_Software_logo.svg.png')">
				</div>
			</div>
			<div class="content__right">
				<form action="index.php?page=main&controller=register&action=submit" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-20">
						<strong>Sign up</strong>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Fname is required">
						<input class="input100" type="text" name="fname" placeholder="First name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Lname is required">
						<input class="input100" type="text" name="lname" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Birthday is required">
						<input class="input100" type="text" name="birthday" placeholder="Birth Year">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="phone" placeholder="Phone number">
						<span class="focus-input100"></span>
					</div>

					<div class="form-check" style="padding-left: 0;">
						<div class="row">
							<label class="col-md-3 col-form-label">Gender:</label>
						</div>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="1">
						<label class="form-check-label">Male</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" value="0">
						<label class="form-check-label">Female</label>
					</div>

					<?php
					if (isset($error)) {
						echo '<p class="login-box-msg" style="color: red">' . $error . '</p>';
						unset($error);
					}
					?>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							Do you have an account?
							<a href="index.php?page=main&controller=login&action=index" class="txt1" style="font-size: 18px!important; color: #e65a26;">
								Log in now
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn"
							name="submit-btn-resgister"
							type="submit" style="background-color: #e65a26; font-size: 20px; font-weight: bold;" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
	include_once('views/main/footer.php');
	?>
</body>

</html>