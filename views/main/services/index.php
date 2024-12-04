<?php
include_once('views/main/navbar.php');
?>
<main id="main">
  <!-- Modal -->
  <?php
  foreach ($products as $product) {
    echo
    '<div class="modal fade" id="exampleModal' . $product->id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel" style="font-size: 30px; color: rgb(230, 91, 40); font-weight: 600">' . $product->name . '</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <img src="' . $product->img . '" class="card-img-top" alt="..." style="width: 70%; height=70%; margin-left: 15%;">
                  <br></br>
                  <h6 class="card-text text-center"><strong style="color: rgb(230, 91, 40);">' . $product->description . '</strong></h6>
                  <p class="text-center">' . $product->content . '</p>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>';
  }
  ?>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>Services</h2>
        <p>Why FPT?</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box" data-aos="zoom-in-left">
            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="">Client Values</a></h4>
            <p class="description">We are obsessed and driven by the values to our customers' success.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
            <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href="">Learn & Grow</a></h4>
            <p class="description">We continuously invest in technologies and people to serve our customers.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="">Challenging Mission</a></h4>
            <p class="description">We thrive on challenging missions and are passionate about the innovations to solve them.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Happy Workforce</a></h4>
            <p class="description">We evolve and relentlessly build an inclusive, future-ready and happy workforce.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
            <h4 class="title"><a href="">System & Integrity</a></h4>
            <p class="description">We take pride in a systematic and integrity-driven approach to all stakeholders.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="zoom-out">
        <h2>Products</h2>
        <p>Our highlight products</p>
      </div>
      <div class="row g-4">

        <?php
        foreach ($products as $product) {
          echo
          '<!-- Card 1 -->
              <div class="col-lg-4 d-flex col-md-6 col-sm-12" style="cursor: pointer;" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#exampleModal' . $product->id . '">
                <div class="card justify-content-center" style="margin: 0 auto; width: 26rem; height: 100%; border: 2px solid rgb(230, 91, 40); border-radius: 10%; overflow: hidden;">
                  <div class="h-100 w-100 card-top" style="display: flex; justify-content: center; overflow: hidden; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <img src="' . $product->img . '" alt="..." style="width: 100%; height: 350px; padding: 40px";">
                  </div>
                  <div class="card-body" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <h4 class="card-title" style="color: rgb(230, 91, 40); font-weight: 600!important"; >' . $product->name . '</h4>
                    <p class="card-text text-center">' . $product->description . '</p>
                  </div>
                </div>
              </div>';
        }
        ?>

      </div>
    </div>

</main><!-- End #main -->

<?php
include_once('views/main/footer.php');
?>