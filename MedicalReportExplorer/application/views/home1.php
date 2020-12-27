

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(asset/assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Fitness matters, <span>Wellness works.</span></h2>
            <p>Self determined people want to be in charge of their own health and enjoy the life enhancing benefits modern medicine has to offer. It is our mission to provide you the right directions analyzing your medical health and showing you how fit your life will be.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(asset/assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Fitness matters, <span>Wellness works.</span></h2>
            <p>Self determined people want to be in charge of their own health and enjoy the life enhancing benefits modern medicine has to offer. It is our mission to provide you the right directions analyzing your medical health and showing you how fit your life will be.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(asset/assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Fitness matters, <span>Wellness works.</span></h2>
            <p>Self determined people want to be in charge of their own health and enjoy the life enhancing benefits modern medicine has to offer. It is our mission to provide you the right directions analyzing your medical health and showing you how fit your life will be.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    

    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>In the era of evidence-based practice, we need practice-based evidence. The basis of this evidence is the detailed information from the case reports of individual people which informs both our clinical research and our daily clinical care.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="<?=base_url()?>asset/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>What kind of services are being provided in our online based medical care.</h3>
            <ul>
              <li><i class="icofont-check-circled"></i> laboratory testing, such as blood tests and urine tests, high cholesterol, high blood pressure, or diabetes and many others.</li>
              <li><i class="icofont-check-circled"></i> We also provide vaccination camp in various place.</li>
              <li><i class="icofont-check-circled"></i> care for minor symptoms, such as sore throat, cough, or nasal congestion.</li>
              <li><i class="icofont-check-circled"></i> treatment for common illnesses like colds, the flu, or urinary tract infections (UTIs).</li>
              <li><i class="icofont-check-circled"></i> offer healthcare services within an area or community that’s classified as medically underserved.</li>
              <li><i class="icofont-check-circled"></i> provide comprehensive primary care in conjunction with supportive services like health education and translation.</li>
              <li><i class="icofont-check-circled"></i> adjust the costs of services based on an individual’s ability to pay.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

   

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          
        </div>

        <?=$this->session->flashdata('success')?>
        <form action="" method="post" role="form"  data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Your Name" id="firstname">
              <div class="error"><?=form_error('name')?></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Your Email" id="email">
              <div class="error"><?=form_error('email')?></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Your Mobile" id="mobile">
              <div class="error"><?=form_error('mobile')?></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="date"  name="date" class="form-control" value="<?=set_value('date')?>" placeholder="Appointment Date" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div class="error"><?=form_error('date')?></div>
            </div>
            
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                <option value="Dr Md Jalal Hossain" <?php if(set_value('doctor')=='Dr Md Jalal Hossain') { echo 'selected'; } ?> >Dr Md Jalal Hossain</option>
                <option value="Professor Dr Uttam Kumar Saha" <?php if(set_value('doctor')=='Professor Dr Uttam Kumar Saha') { echo 'selected'; } ?> >Professor Dr Uttam Kumar Saha</option>
                <option value="Dr Khan Asaduzzaman" <?php if(set_value('doctor')=='Dr Khan Asaduzzaman') { echo 'selected'; } ?> >Dr Khan Asaduzzaman</option>
                <option value="Professor Dr. Md Manjir Ali" <?php if(set_value('doctor')=='Professor Dr. Md Manjir Ali') { echo 'selected'; } ?> >Professor Dr. Md Manjir Ali</option>
                <option value="Dr Md Shamsur Rahman" <?php if(set_value('doctor')=='Dr Md Shamsur Rahman') { echo 'selected'; } ?> >Dr Md Shamsur Rahman</option>
                <option value="Dr Khan" <?php if(set_value('doctor')=='Dr Khan') { echo 'selected'; } ?> >Dr Khan</option>
                <option value="Dr. M. A. Alim" <?php if(set_value('doctor')=='Dr. M. A. Alim') { echo 'selected'; } ?> >Dr. M. A. Alim</option>
                <option value="Dr Md Faruque Uddin" <?php if(set_value('doctor')=='Dr Md Faruque Uddin') { echo 'selected'; } ?> >Dr Md Faruque Uddin</option>
                <option value="Dr. Md Shah Alam" <?php if(set_value('doctor')=='Dr. Md Shah Alam') { echo 'selected'; } ?> >Dr. Md Shah Alam</option>
                <option value="Professor Dr Anwara Begum" <?php if(set_value('doctor')=='Professor Dr Anwara Begum') { echo 'selected'; } ?> >Professor Dr Anwara Begum</option>
              </select>
              <div class="error"><?=form_error('doctor')?></div>
            </div>
          </div>

          <div class="form-group">
            <textarea id="message" name="message" rows="5" class="form-control" placeholder="Message (Optional)"><?=set_value('message')?></textarea>
          </div>
          
          <div class="col-sm-12 text-center">
            <button type="submit" class="color btn btn-default"> Make an Appointment </button>
          </div>

          <style type="text/css"> 
           .color{
                  background: #3fbbc0;
                  border: 0;
                  padding: 10px 35px;
                  color: #fff;
                  transition: 0.4s;
                  border-radius: 50px;
                 }

            .color:hover{
                  background: #52c2c6;
                  color:white;
                 }
                            
           </style>
        </form>


      </div>
    </section><!-- End Appointment Section -->

    

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?=base_url()?>asset/assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="<?=base_url()?>asset/assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="<?=base_url()?>asset/assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="<?=base_url()?>asset/assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
              </div>
            </div>
          </div>

          <div class="col-sm-12 text-center">
            <a href="<?=base_url()?>Doctors/info"><button type="submit" class="color btn btn-default"> Doctor's More Information </button></a>
          </div>

          <style type="text/css"> 
           .color{
                  background: #3fbbc0;
                  border: 0;
                  padding: 10px 35px;
                  color: #fff;
                  transition: 0.4s;
                  border-radius: 50px;
                 }

            .color:hover{
                  background: #52c2c6;
                  color:white;
                 }
                            
           </style>                 
          

        </div>

      </div>

    </section><!-- End Doctors Section -->

    

    

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