

  


  </br>
  </br>
  </br>
  </br>
  </br>



<main id="main">
  <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">
        <div class="col-md-12">

        <div class="section-title">
          <h2>Check Your Complete Blood Count Report</h2>
          
        </div>

        <div class="col-md-6 offset-3">
        <?=$this->session->flashdata('success')?>
      </div>
        <form action="" method="post">
          
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">hb</label>
              <input type="text" class="form-control py-4" placeholder="Enter hb" value="<?=set_value('hb')?>" name="hb">
              <div class="error"><?=form_error('hb')?></div>
              
            </div>
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">mcv</label>
              <input type="text" class="form-control py-4" placeholder="Enter mcv" value="<?=set_value('mcv')?>" name="mcv">
              <div class="error"><?=form_error('mcv')?></div>
            </div>
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">rbc</label>
              <input type="text" class="form-control py-4" placeholder="Enter gravity" value="<?=set_value('gravity')?>" name="rbc">
              <div class="error"><?=form_error('rbc')?></div>
            </div>
          
          
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">wbc</label>
              <input type="text" class="form-control py-4" placeholder="Enter wbc" value="<?=set_value('wbc')?>" name="wbc">
              <div class="error"><?=form_error('wbc')?></div>
            </div>
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">neutro</label>
              <input type="text" class="form-control py-4" placeholder="Enter neutro" value="<?=set_value('neutro')?>" name="neutro">
              <div class="error"><?=form_error('neutro')?></div>
            </div>
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">lympho</label>
              <input type="text" class="form-control py-4" placeholder="Enter lympho" value="<?=set_value('lympho')?>" name="lympho">
              <div class="error"><?=form_error('lympho')?></div>
            </div>
            <div class="col-md-6 offset-3 form-group">
              <label for="inputEmailAddress">mono</label>
              <input type="text" class="form-control py-4" placeholder="Enter mono" value="<?=set_value('mono')?>" name="mono">
              <div class="error"><?=form_error('mono')?></div>
            </div>
          
          
          <div class="text-center "><button type="submit" class="appointment-btn scrollto">Click to check</button></div>
        </form>

      </div>

      </div>
    </section>

  </main>






  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medical Report Explorer</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Asraful Jannat Ayesha</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>asset/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>asset/assets/js/main.js"></script>

</body>

</html>