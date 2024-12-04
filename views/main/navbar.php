<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION['guest'])) {
  require_once('models/user.php');
  $data = User::get($_SESSION['guest']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FPT Software</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/favicon.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/css/index.css" rel="stylesheet">
  <link href="public/css/style.css" rel="stylesheet">
  <link href="public/css/style1.css" rel="stylesheet">
  <link href="public/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <?php
  if (isset($_SESSION['guest'])) {
    echo '
    <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="index.php?page=main&controller=register&action=editInfo" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="hidden" name="email">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>Last Name</label>
                  <input class="form-control" type="text" placeholder="Last Name" name="fname" value="' . $data->fname . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>First Name</label>
                  <input class="form-control" type="text" placeholder="First Name" name="lname" value="' . $data->lname . '"/>
                </div>
              </div>
            </div>

            <div class="row" style="margin-top: 5%;">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Birth Year</label>
                  <input class="form-control" type="number" placeholder="Birth Year" name="birthday" value="' . $data->birthday . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Gender:</label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '1') ? 'checked' : "") . ' value="1" />
                        <label>Male</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '0') ? 'checked' : "") . ' value="0" />
                        <label>Female</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group" style="margin-top: 5%;">
              <label>Phone number</label>
              <input class="form-control" type="number" placeholder="Phone number" name="phone" value="' . $data->phone . '"/>
            </div>
            <div class="form-group" style="margin-top: 5%;">
              <label>Current image</label>
              <img style="width: 90%; height: auto; margin: 5%" alt="Not uploaded" src="' . $data->profile_photo . '">
              
            </div>
            <div class="form-group" style="margin-top: 5%;">
              <label>New image</label>&nbsp
              <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-info" type="submit">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>';
  }
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1 class="logo me-auto">
          <a href="index.php?page=main&controller=layouts&action=index" style="display: flex; flex-direction: row; align-items: center;">
            <img src="public/assets/img/logo.png" alt="logo">
          </a>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=layouts&action=index">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=about&action=index">About us</a></li>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=services&action=index">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=blog&action=index">News</a></li>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=archive&action=index">Achievement</a></li>
          <li><a class="nav-link scrollto" href="index.php?page=main&controller=contact&action=index">Contact us</a></li>
          <li><i class="nav-link scrollto"></i></li>
          <?php
          if (!isset($_SESSION["guest"])) {
            echo '
              <li><a href="index.php?page=main&controller=login&action=index" class="box-arrow-in-right">Log in</a></li> <!-- Login -->
              <li><a href="index.php?page=main&controller=register&action=index" class="box-arrow-in-right">Sign up</a></li> <!-- Logout -->
            ';
          } else {
            echo '
            <li><a href="" data-toggle="modal" data-target="#EditUserModal"><i class="bi bi-person-circle" style="font-size: 30px;"></i></a></li>
            <li><a href="index.php?page=main&controller=login&action=logout" class="box-arrow-in-right"><i class="bu bi-box-arrow-right" style="font-size: 30px;"></i></a></li> <!-- Đăng xuất -->
            ';
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

</html>