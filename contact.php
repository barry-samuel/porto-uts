<?php
include "conn.php";
include "conn.php";
$strSQL = "SELECT * FROM data_pribadi, sosial_media";
$execStrSQL = mysqli_query($conn, $strSQL);
$dataSQL = mysqli_fetch_array($execStrSQL);
// echo '<pre>'; print_r($dataSQL); echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.6.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Emily Jones</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a> -->
      <!-- <a href="index.php" class="mr-auto"><img src="assets/img/logo.svg" alt="" class="img-fluid" style="width:128px; margin-bottom:20px"></a> -->
      <h1><a href="#">Barry Samuel</a></h1>
      <h2>I'm a passionate <span>Web Developer</span> from Indonesia</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="about.php#about">About</a></li>
          <li><a class="nav-link" href="resume.php#resume">Resume</a></li>
          <li><a class="nav-link" href="portofolio.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link active" href="contact.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Address</h3>
            <p><?= $dataSQL["address"] ?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Media</h3>
            <div class="social-links">
              <a href="<?= $dataSQL["twitter"] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="<?= $dataSQL["instagram"] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?= $dataSQL["github"] ?>" class="github"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p><?= $dataSQL["email"] ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Phone</h3>
            <p><?= $dataSQL["phone"] ?></p>
          </div>
        </div>
      </div>

      <div class="row mt-4 align-items-stretch">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126904.29821184621!2d106.63827181257064!3d-6.2953277507586085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fab10419c095%3A0x8706481c2c4aafe4!2sKota%20Tgr.%20Sel.%2C%20Kota%20Tangerang%20Selatan%2C%20Banten!5e0!3m2!1sid!2sid!4v1634886511205!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>