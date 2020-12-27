

  </br>
  </br>
  </br>
  </br>
  </br>

  <main id="main">

    

    <!-- ======= Login Section ======= -->
    <section id="login" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Sign Up</h2>
          

      </div>


      <div class="container">


          <div class="col-md-7 col-xs-7 offset-3">


            <?=$this->session->flashdata('success')?>
            <form action="" method="post" class="card-body" >
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class=" form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="error"><?=form_error('name')?></div>
                                    </div>
                                
                                    <div class="col-sm-12">
                                        <div class=" form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="error"><?=form_error('email')?></div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class=" form-group">
                                            <label for="exampleInputEmail1">Mobile</label>
                                            <input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Enter Mobile"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="error"><?=form_error('mobile')?></div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class=" form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password"  id="exampleInputPassword1">
                                        </div>
                                        <div class="error"><?=form_error('password')?></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class=" form-group">
                                            <label for="exampleInputPassword1">Verify Password</label>
                                            <input type="password" name="verify_password"  class="form-control" value="<?=set_value('verify_password')?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
                                        </div>
                                        <div class="error"><?=form_error('verify_password')?></div>
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="color btn btn-default">Sign Up</button>
                                    </div>

                                  </div>
                                
                                <!-- /.row -->
                            </form>
                            
                            <style type="text/css"> 
                            .color{
                              background: #3fbbc0;
                              color:white;
                            }

                            .color:hover{
                              background: #52c2c6;
                              color:white;
                             }
                            
                            </style>


          </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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

        