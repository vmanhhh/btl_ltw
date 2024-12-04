<?php
include_once('views/main/navbar.php');
?>
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active" id="homepage-carousel-1">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">We Are A Comprehensive Technology Enabler</h2>
        <p class="animate__animated fanimate__adeInUp">For complex business challanges and opportunities</p>
        <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Discover the FPT story</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item" id="homepage-carousel-2">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Proven product quality</h2>
        <p class="animate__animated animate__fadeInUp">With experience in providing software products to over a million customers and building a series of its own services, these things create FPT's unique difference.</p>
        <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Discover the FPT story</a>
      </div>
    </div>
    
    <!-- Slide 3 -->
    <div class="carousel-item" id="homepage-carousel-3">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Continuous creativity and innovation</h2>
        <p class="animate__animated animate__fadeInUp">FPT always proactively changes and applies new technologies to ensure that every product sent to customers is always the most vibrant version.</p>
        <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Discover the FPT story</a>
      </div>
    </div>


    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->


<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">
    <div class="tab-content" data-aos="fade-up">
      <div class="tab-pane active show" id="tab-1">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" id="short-about">
            <h3 style="color: rgb(230, 91, 40); font-size: 35px;">FPT Software missions</h3>
            <p class="fst-italic"> To create next possibilities for people by embracing technologies and cultivating future-ready talents to progress a sustainable future for all. Together, we Accompany the Future</p>
            <ul>
              <li><i class="ri-check-double-line"></i> A new source of energy</li>
              <li><i class="ri-check-double-line"></i> A destination of boundless opportunities</li>
              <li><i class="ri-check-double-line"></i> A true companion in software-defined reinvention</li>
              <li><i class="ri-check-double-line"></i> Progressing towards a sustainable future for all</li>
            </ul>
            <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Discover the FPT story</a>
          </div>
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 text-center">
            <img style="width: 90%; height: auto" src="https://seeklogo.com/images/V/vng-Software-logo-621FAE2031-seeklogo.com.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Features Section -->

<section id="features" class="features">
  <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <p>Các nhãn hàng thân thiết</p>
    </div>

    <ul class="nav nav-tabs row d-flex">
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/leasequery.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/elemica-1.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C7.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <br>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
          <i><img src="https://kms-technology.com/wp-content/uploads/2021/05/conexiom-1.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/avetta.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/clearwave.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
      <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300" style="width: 25%; height: auto;">
        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
          <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/editshare.png" style="width: 100%; height: auto;"></i>
        </a>
      </li>
    </ul>
  </div>
</section>

<?php
include_once('views/main/footer.php');
?>