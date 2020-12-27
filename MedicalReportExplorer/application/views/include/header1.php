<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medical Report Explorer</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url()?>asset/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>asset/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>asset/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.0.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="home.php" class="logo mr-auto"><img src="<?=base_url()?>asset/assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="home.php">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class="active"><a href="<?=base_url()?>Report">Home</a></li>

          

        <li><a href="<?=base_url()?>Report/#about">About</a></li>
        <li><a href="<?=base_url()?>Report/#doctors">Doctors</a></li>
        <li><a href="<?=base_url()?>Contact/contacts">Contact</a></li>

        <li class="drop-down"><a href="<?=base_url()?>Report/reports">Check Report</a>
          <ul>
            <li><a href="<?=base_url()?>Report/urine">Urine R/ME</a></li>
            <li><a href="<?=base_url()?>Report/blood">Complete Blood Count</a></li>
            <li><a href="<?=base_url()?>Report/haematology">Haematology</a></li>
            <li><a href="<?=base_url()?>Report/usg">USG</a></li>
            <li><a href="<?=base_url()?>Report/coagulation">Coagulation</a></li>
            <li><a href="<?=base_url()?>Report/immunology">Immunology</a></li>
            <li><a href="<?=base_url()?>Report/serology">Serology</a></li>
            <li><a href="<?=base_url()?>Report/biochemistry">Biochemistry</a></li>
          </ul>
        </li>

          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?=base_url()?>Logout/logouts" class="appointment-btn scrollto"><span class="d-none d-md-inline">Log Out</span></a>

    </div>
  </header><!-- End Header -->