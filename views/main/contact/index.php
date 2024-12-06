<?php
include_once('views/main/navbar.php');
?>
<!-- ======= Contact Section ======= -->
<div class="map-section" style="margin-top: 71px">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62704.45992924292!2d106.72474249662342!3d10.809110221355356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175272fb77e7199%3A0x98cb51d4483e1172!2sFPT%20Software%20F-Town%203!5e0!3m2!1sen!2s!4v1733104545357!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<section id="contact" class="contact">
  <div class="container">
    <div class="section-title aos-init aos-animate" data-aos="zoom-out">
      <h2>Liên hệ</h2>
      <p>Liên hệ với chúng tôi</p>
    </div>


    <div class="row content" data-aos="fade-up">
      <?php
      foreach ($companies as $company) {
        echo '
            <div class="col-lg-6">
              <div class="info">
                <div class="address"> 
                  <i class="bi bi-geo-alt"></i>
                  <h4>Chi nhánh: ' . $company->name . '</h4>
                  <p>' . $company->address . '</p>
                </div>

                <div class="username"> 
                  <i class="bi bi-envelope"></i>
                  <h4>Username:</h4>
                  <p>Recruitment@fpt.com</p>
                </div>

                <div class="phone"> 
                  <i class="bi bi-phone"></i>
                  <h4>Điện thoại:</h4>
                  <p>+84 - 123456789</p>
                </div>
              </div>  
              <hr>
              <br>
            </div>

            ';
      }
      ?>
    </div>

  </div>
</section>


</main><!-- End #main -->
<?php
include_once('views/main/footer.php');
?>